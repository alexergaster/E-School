<?php

namespace App\Http\Controllers\MC;

use App\Http\Requests\MC\StoreRequest;
use App\Http\Resources\MC\MCResource;
use App\Models\RegistrationMC;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request): MCResource|string
    {
        $data = $request->validated();

        $mc = $this->service->store($data);

        return $mc instanceof RegistrationMC ? new MCResource($mc) : $mc;
    }
}
