<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function super_user (User $user){
        $super_usuarios = array(4); 

        return in_array($user->id, $super_usuarios)? 
        Response::allow():
        Response::deny("Permissão negada!");
    }
}
