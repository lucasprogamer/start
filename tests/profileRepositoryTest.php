<?php

use App\Models\profile;
use App\Repositories\profileRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class profileRepositoryTest extends TestCase
{
    use MakeprofileTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var profileRepository
     */
    protected $profileRepo;

    public function setUp()
    {
        parent::setUp();
        $this->profileRepo = App::make(profileRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateprofile()
    {
        $profile = $this->fakeprofileData();
        $createdprofile = $this->profileRepo->create($profile);
        $createdprofile = $createdprofile->toArray();
        $this->assertArrayHasKey('id', $createdprofile);
        $this->assertNotNull($createdprofile['id'], 'Created profile must have id specified');
        $this->assertNotNull(profile::find($createdprofile['id']), 'profile with given id must be in DB');
        $this->assertModelData($profile, $createdprofile);
    }

    /**
     * @test read
     */
    public function testReadprofile()
    {
        $profile = $this->makeprofile();
        $dbprofile = $this->profileRepo->find($profile->id);
        $dbprofile = $dbprofile->toArray();
        $this->assertModelData($profile->toArray(), $dbprofile);
    }

    /**
     * @test update
     */
    public function testUpdateprofile()
    {
        $profile = $this->makeprofile();
        $fakeprofile = $this->fakeprofileData();
        $updatedprofile = $this->profileRepo->update($fakeprofile, $profile->id);
        $this->assertModelData($fakeprofile, $updatedprofile->toArray());
        $dbprofile = $this->profileRepo->find($profile->id);
        $this->assertModelData($fakeprofile, $dbprofile->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteprofile()
    {
        $profile = $this->makeprofile();
        $resp = $this->profileRepo->delete($profile->id);
        $this->assertTrue($resp);
        $this->assertNull(profile::find($profile->id), 'profile should not exist in DB');
    }
}
