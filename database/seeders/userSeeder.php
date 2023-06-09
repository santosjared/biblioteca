<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'   => 'Bibliotecario',
            'email'   => 'santosjared221234@gmail.com',
            'password'        =>Hash::make('santitos22'),
            'persona_id'   => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name'   => 'Lector',
            'email'   => 'bernardino1234@gmail.com',
            'password'        =>Hash::make('santitos22'),
            'persona_id'   => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
