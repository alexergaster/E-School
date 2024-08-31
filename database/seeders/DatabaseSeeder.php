<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Gallery;
use App\Models\Group;
use App\Models\ParentUser;
use App\Models\Program;
use App\Models\RegistrationMC;
use App\Models\Sections;
use App\Models\Staff;
use Database\Factories\RegistrationMCFactory;
use Database\Factories\RegistrationMCFactory1;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Group::factory(20)->create();
//        ParentUser::factory(30)->create();
//        Gallery::factory(15)->create();
//        Staff::factory(10)->create();
//        Program::factory(5)->create()->each(function (Program $program) {
//            Sections::factory()->count(5)->create([
//                'program_id' => $program->id,
//            ]);
//        });
    }
}
