<?php

use Faker\Factory as Faker;
use App\Models\Media;
use App\Repositories\MediaRepository;

trait MakeMediaTrait
{
    /**
     * Create fake instance of Media and save it in database
     *
     * @param array $mediaFields
     * @return Media
     */
    public function makeMedia($mediaFields = [])
    {
        /** @var MediaRepository $mediaRepo */
        $mediaRepo = App::make(MediaRepository::class);
        $theme = $this->fakeMediaData($mediaFields);
        return $mediaRepo->create($theme);
    }

    /**
     * Get fake instance of Media
     *
     * @param array $mediaFields
     * @return Media
     */
    public function fakeMedia($mediaFields = [])
    {
        return new Media($this->fakeMediaData($mediaFields));
    }

    /**
     * Get fake data of Media
     *
     * @param array $postFields
     * @return array
     */
    public function fakeMediaData($mediaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->text,
            'url' => $fake->text,
            'thumbnail' => $fake->text,
            'thumbnail_id' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $mediaFields);
    }
}
