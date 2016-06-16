<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class AdventurePolicy
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

    public function destroy(\App\User $user, \App\Adventure $adventure)
    {
        return $user->id === $adventure->create_user_id;
    }
}
