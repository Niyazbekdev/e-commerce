<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Value;
use Illuminate\Auth\Access\Response;

class ValuePolicy
{

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, Value $value): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, Value $value): bool
    {
        //
    }

    public function delete(User $user, Value $value): bool
    {
        //
    }

    public function restore(User $user, Value $value): bool
    {
        //
    }

    public function forceDelete(User $user, Value $value): bool
    {
        //
    }
}
