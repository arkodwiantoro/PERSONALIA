<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'email'=> 'Jet@gmail.com',
            'password'=> 'hopla123',
            'nama'=> 'Jet',
            'role_user'=> 'Support',
            'jadwal_kerja'=> 'Full Time',
            'gaji'=> '10.000.000',

        ]);
    }
}
