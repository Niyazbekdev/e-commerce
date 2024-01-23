<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Auth\Access\Response;

class UserAddressPolicy
{

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, UserAddress $userAddress): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, UserAddress $userAddress): bool
    {
        //
    }

    public function delete(User $user, UserAddress $userAddress): bool
    {
        //
    }

    public function restore(User $user, UserAddress $userAddress): bool
    {
        //
    }

    public function forceDelete(User $user, UserAddress $userAddress): bool
    {
        //
    }
}
