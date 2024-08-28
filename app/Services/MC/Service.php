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

            $programs = $data['programs'];
            unset($data['programs']);

            $mc = RegistrationMC::firstOrCreate($data);

            foreach ($programs as $program) {
                DB::table('program_registration_m_c')->insert([
                    'registration_m_c_id' => $mc->id,
                    'program_id' => $program,
                ]);
            }

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $mc;
    }
}
