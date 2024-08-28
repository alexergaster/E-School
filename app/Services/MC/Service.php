<?php

namespace App\Services\MC;

use App\Models\RegistrationMC;
use Illuminate\Support\Facades\DB;

class Service
{
    public function store($data): RegistrationMC|string
    {
        try {
            DB::beginTransaction();

            $mc = RegistrationMC::firstOrCreate($data);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $mc;
    }
}
