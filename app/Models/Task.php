<?php

namespace Elyan\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function user()
    {
       // return $this->belongsTo('Elyan\Models\User', 'user_id');
        return $this->belongsTo(User::class);
    }
}
