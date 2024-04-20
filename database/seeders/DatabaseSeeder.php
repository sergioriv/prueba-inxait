<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // creación del administrador
        $user = new \App\Models\User;
        $user->forceFill([
            'name' => 'Administrador',
            'email' => 'administrador@example.com',
            'password' => \Hash::make('administrador'),
            'email_verified_at' => now()
        ])->save();

        // cración de departamentos y sus ciudades o municipios
        $this->call(DepCitiesSeeder::class);
    }
}
