<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Carlos Roberto Barreto Júnior',
            'email' => 'carlosbarreto.eng@gmail.com'
        ]);

        \App\Models\Empresa::create([
            'nome' => 'Empresa de teste',
            'gestor' => 1
        ]);

        \App\Models\UsuariosPorEmpresa::create([
            'empresa_id' => 1,
            'user_id' => 1
        ]);
    }
}
