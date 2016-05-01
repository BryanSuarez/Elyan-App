<?php

namespace Elyan\Models;

use Elyan\Models\Status;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{

    use Authenticatable;

    protected $table = 'users';
    protected $fillable = [
        'nombreusuario',
        'email',
        'password',
        'nombres',
        'apellidos',
        'localizacion',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getName()
    {
        if ($this->nombres && $this->apellidos) {
            return "{$this->nombres} {$this->apellidos}";
        }

        if ($this->nombres) {
            return $this->nombres;
        }
        return null;
    }

    public function getNameOrUsername()
    {
        return $this->getName() ?: $this->nombreusuario;
    }

    public function getFirstNameOrUsername()
    {
        return $this->nombres ?: $this->nombreusuario;
    }

    public function getAvatarUrl()
    {
        return "http://www.gravatar.com/avatar/{{md5($this->email}} ?d=wavatar&s=40";
    }

    /* Relación con modelo estado */
    public function statuses()
    {
        return $this->hasMany('Elyan\Models\Status', 'user_id');
    }

    /*Relación de like a usuario*/
    public function likes()
    {
        return $this->hasMany('Elyan\Models\Like', 'user_id');
    }

    public function friendsOfMine()
    {
        return $this->belongsToMany('Elyan\Models\User', 'friends', 'user_id', 'friend_id');
    }

    public function friendsOf()
    {
        return $this->belongsToMany('Elyan\Models\User', 'friends', 'friend_id', 'user_id');
    }

    /* Aceptar amigos */

    public function friends()
    {
        return $this->friendsOfMine()->wherePivot('aceptado', true)->get()
            ->merge($this->friendsOf()->wherePivot('aceptado', true)->get());
    }

    /**
     * Mostrar solicitudes de amistad
     */
    public function friendRequests()
    {
        return $this->friendsOfMine()->wherePivot('aceptado', false)->get();
    }

    /* Solicitudes
     * de amistad pendientes
     */

    public function friendRequestsPending()
    {
        return $this->friendsOf()->wherePivot('aceptado', false)->get();
    }

    /* Verificar si tengo solicitudes pendientes de
     * otros usuarios
     */

    public function hasFriendRequestPending(User $user)
    {
        return (bool)$this->friendRequestsPending()->where('id', $user->id)
            ->count();
    }

    /**
     * Recibir una peticion de amistad de un
     * usuario específico
     */
    public function hasFriendRequestRecived(User $user)
    {
        return (bool)$this->friendRequests()->where('id', $user->id)->count();
    }

    /**
     * Agregar amigo tras una solicitud
     */
    public function addFriend(User $user)
    {
        $this->friendsOf()->attach($user->id);
    }

    /*Eliminar amigo*/
    public function deleteFriend(User $user)
    {
        $this->friendsOf()->detach($user->id);
        $this->friendsOfMine()->detach($user->id);
    }

    public function acceptFreiendRequest(User $user)
    {
        $this->friendRequests()->where('id', $user->id)
            ->first()->pivot->update([
                'aceptado' => true,
            ]);
    }

    public function isFriendsWith(User $user)
    {
        return (bool)$this->friends()->where('id', $user->id)->count();
    }

    /**
     * Modelado para likes
     */

    /*Compruebo si el comentario tien likes*/
    public function hasLikedStatus(Status $estado)
    {
        return (bool)$estado->likes->where('user_id', $this->id)->count();
    }

    /*Relación con TAREAS*/
    public function tasks()
    {
        //return $this->hasMany('Elyan\Models\Task', 'user_id');
        return $this->hasMany(Task::class);
    }


}
