<?php

namespace App\Providers;

use App\Models\Order;
use App\Observers\OrderObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    protected $observers = [
        Order::class => [OrderObserver::class],
    ];

    public function boot(): void
    {
        //
    }

    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
