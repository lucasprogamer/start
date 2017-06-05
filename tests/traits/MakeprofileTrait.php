<?php

use Faker\Factory as Faker;
use App\Models\profile;
use App\Repositories\profileRepository;

trait MakeprofileTrait
{
    /**
     * Create fake instance of profile and save it in database
     *
     * @param array $profileFields
     * @return profile
     */
    public function makeprofile($profileFields = [])
    {
        /** @var profileRepository $profileRepo */
        $profileRepo = App::make(profileRepository::class);
        $theme = $this->fakeprofileData($profileFields);
        return $profileRepo->create($theme);
    }

    /**
     * Get fake instance of profile
     *
     * @param array $profileFields
     * @return profile
     */
    public function fakeprofile($profileFields = [])
    {
        return new profile($this->fakeprofileData($profileFields));
    }

    /**
     * Get fake data of profile
     *
     * @param array $postFields
     * @return array
     */
    public function fakeprofileData($profileFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'last_name' => $fake->word,
            'thumbnail' => $fake->word,
            'user_id' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $profileFields);
    }
}
