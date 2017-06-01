<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateprofileAPIRequest;
use App\Http\Requests\API\UpdateprofileAPIRequest;
use App\Models\profile;
use App\Repositories\profileRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class profileController
 * @package App\Http\Controllers\API
 */

class profileAPIController extends AppBaseController
{
    /** @var  profileRepository */
    private $profileRepository;

    public function __construct(profileRepository $profileRepo)
    {
        $this->profileRepository = $profileRepo;
    }

    /**
     * Display a listing of the profile.
     * GET|HEAD /profiles
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->profileRepository->pushCriteria(new RequestCriteria($request));
        $this->profileRepository->pushCriteria(new LimitOffsetCriteria($request));
        $profiles = $this->profileRepository->all();

        return $this->sendResponse($profiles->toArray(), 'Profiles retrieved successfully');
    }

    /**
     * Store a newly created profile in storage.
     * POST /profiles
     *
     * @param CreateprofileAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateprofileAPIRequest $request)
    {
        $input = $request->all();

        $profiles = $this->profileRepository->create($input);

        return $this->sendResponse($profiles->toArray(), 'Profile saved successfully');
    }

    /**
     * Display the specified profile.
     * GET|HEAD /profiles/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var profile $profile */
        $profile = $this->profileRepository->findWithoutFail($id);

        if (empty($profile)) {
            return $this->sendError('Profile not found');
        }

        return $this->sendResponse($profile->toArray(), 'Profile retrieved successfully');
    }

    /**
     * Update the specified profile in storage.
     * PUT/PATCH /profiles/{id}
     *
     * @param  int $id
     * @param UpdateprofileAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprofileAPIRequest $request)
    {
        $input = $request->all();

        /** @var profile $profile */
        $profile = $this->profileRepository->findWithoutFail($id);

        if (empty($profile)) {
            return $this->sendError('Profile not found');
        }

        $profile = $this->profileRepository->update($input, $id);

        return $this->sendResponse($profile->toArray(), 'profile updated successfully');
    }

    /**
     * Remove the specified profile from storage.
     * DELETE /profiles/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var profile $profile */
        $profile = $this->profileRepository->findWithoutFail($id);

        if (empty($profile)) {
            return $this->sendError('Profile not found');
        }

        $profile->delete();

        return $this->sendResponse($id, 'Profile deleted successfully');
    }
}
