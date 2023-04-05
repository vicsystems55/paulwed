<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insertOrIgnore([

            [

                'name' => 'Paul Tnushi',
                'email' => 'tnushipaul@gmail.com',
                'password' => Hash::make('cynthiaandpaul2023'),
            ],


        ]);
    }
}
