<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class profileApiTest extends TestCase
{
    use MakeprofileTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateprofile()
    {
        $profile = $this->fakeprofileData();
        $this->json('POST', '/api/v1/profiles', $profile);

        $this->assertApiResponse($profile);
    }

    /**
     * @test
     */
    public function testReadprofile()
    {
        $profile = $this->makeprofile();
        $this->json('GET', '/api/v1/profiles/'.$profile->id);

        $this->assertApiResponse($profile->toArray());
    }

    /**
     * @test
     */
    public function testUpdateprofile()
    {
        $profile = $this->makeprofile();
        $editedprofile = $this->fakeprofileData();

        $this->json('PUT', '/api/v1/profiles/'.$profile->id, $editedprofile);

        $this->assertApiResponse($editedprofile);
    }

    /**
     * @test
     */
    public function testDeleteprofile()
    {
        $profile = $this->makeprofile();
        $this->json('DELETE', '/api/v1/profiles/'.$profile->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/profiles/'.$profile->id);

        $this->assertResponseStatus(404);
    }
}
