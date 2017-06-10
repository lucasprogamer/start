<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\profile;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProfileCreate
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        $user = $event->getUser();
        $profile =  profile::create(['user_id' => $user->id, 'name' => $user->nome ]);
        return $profile;
    }
}
