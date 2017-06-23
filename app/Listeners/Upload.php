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

      Cloudder::upload($file);
      $result = Cloudder::getResult();

      $media = Media::create($result);
      return $media;
    }
}
