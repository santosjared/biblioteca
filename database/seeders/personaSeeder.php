<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class personaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persona')->insert([
            'nombre'   => 'Santos',
            'apellidos'   => 'Machaca Lopez',
            'ci'        => '1234567891',
            'telefono'   => '72412345',
            'direccion' => 'Av. Las Banderas 120',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('persona')->insert([
            'nombre'   => 'Bernardino',
            'apellidos'   => 'Machaca Lopez',
            'ci'        => '1234567891',
            'telefono'   => '72412345',
            'direccion' => 'Av. Las Banderas 120',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
