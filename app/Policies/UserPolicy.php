<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        return Auth::user()->email === 'user6472@mailinator.com';
    }

    public function edit(User $user, User $model)
    {
        return (bool) mt_rand(0,1);
    }
}
