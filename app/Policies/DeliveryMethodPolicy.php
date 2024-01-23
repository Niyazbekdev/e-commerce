<?php

namespace App\Policies;

use App\Models\DeliveryMethod;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DeliveryMethodPolicy
{

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, DeliveryMethod $deliveryMethod): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, DeliveryMethod $deliveryMethod): bool
    {
        //
    }

    public function delete(User $user, DeliveryMethod $deliveryMethod): bool
    {
        //
    }

    public function restore(User $user, DeliveryMethod $deliveryMethod): bool
    {
        //
    }

    public function forceDelete(User $user, DeliveryMethod $deliveryMethod): bool
    {
        //
    }
}
