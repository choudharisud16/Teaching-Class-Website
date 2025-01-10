<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admission')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'contactnumber' => Str::random(10),
            'emailid' => Str::random(10).'@gmail.com',
            'comment' => Str::random(20),
            'meeting'  => random_int(0,1),
        ]);
    }
}
