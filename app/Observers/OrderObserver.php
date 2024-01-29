<?php

namespace App\Observers;

use App\Models\Order;
use Illuminate\Support\Facades\Notification;

class OrderObserver
{
    public function created(Order $order): void
    {
        //
    }

    public function updated(Order $order): void
    {
        $notification = ucfirst($order->status->code);
        $class = "\App\Notifications\Order\\". $notification;

        if(class_exists($class))
        {
            Notification::send(['niyazbekk001@gmail.com'], new $class($order));
        }
    }

    public function deleted(Order $order): void
    {
        //
    }

    public function restored(Order $order): void
    {
        //
    }

    public function forceDeleted(Order $order): void
    {
        //
    }
}
