<?php

namespace App\Services\MC;

use App\Mail\MCMail;
use App\Models\Program;
use App\Models\RegistrationMC;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Service
{
    public function store($data): RegistrationMC|string
    {
        try {
            DB::beginTransaction();

            $programs = $data['programs'];
            unset($data['programs']);

            $mc = RegistrationMC::firstOrCreate($data);

            $newPrograms = array();

            foreach ($programs as $program) {
                DB::table('program_registration_m_c')->insert([
                    'registration_m_c_id' => $mc->id,
                    'program_id' => $program,
                ]);

                $newPrograms[$program] = Program::find($program)->name;
            }

            $data['programs'] = $newPrograms;

            Mail::to('ewoodplay@gmail.com')->send(new MCMail($data));

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

        return $mc;
    }
}
