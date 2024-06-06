<?php

namespace App\Listeners;

use App\Events\LoginEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginEventListener
{
    /**
     * Create the event listener.
     */

    // public $event;

    public function __construct()
    {
        // $this->event = $event;  
    }

    /**
     * Handle the event.
     */
    public function handle(LoginEvent $event): void
    {
        \Log::info("Foydalanuvchi profilga kirdi. Ism: {$event->user->name} : Vaqt: {time()}");
    }
}
