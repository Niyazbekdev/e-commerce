<?php

namespace App\Policies;

use App\Models\PaymentType;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PaymentTypePolicy
{

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, PaymentType $paymentType): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, PaymentType $paymentType): bool
    {
        //
    }

    public function delete(User $user, PaymentType $paymentType): bool
    {
        //
    }

    public function restore(User $user, PaymentType $paymentType): bool
    {
        //
    }

    public function forceDelete(User $user, PaymentType $paymentType): bool
    {
        //
    }
}
