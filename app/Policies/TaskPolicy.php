<?php

namespace Elyan\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Elyan\Models\User;
use Elyan\Models\Task;

class TaskPolicy
{
    use HandlesAuthorization;

    /*Validar que solo el usuario propietario de la tarea pueda manejar los datos */
    public function owner(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }

}
