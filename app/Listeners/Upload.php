<?php

namespace App\Listeners;

use App\Events\Uploadfile;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Media;


class Upload
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
     * @param  Uploadfile  $event
     * @return void
     */
    public function handle(Uploadfile $event)
    {
      $file = $event->getFile();
      $profile =  profile::create(['user_id' => $user->id, 'name' => $user->name ]);
      return $profile;
    }
}
