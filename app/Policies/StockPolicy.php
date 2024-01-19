<?php

namespace App\Policies;

use App\Models\Stock;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class StockPolicy
{

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, Stock $stock): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, Stock $stock): bool
    {
        //
    }

    public function delete(User $user, Stock $stock): bool
    {
        //
    }

    public function restore(User $user, Stock $stock): bool
    {
        //
    }

    public function forceDelete(User $user, Stock $stock): bool
    {
        //
    }
}
