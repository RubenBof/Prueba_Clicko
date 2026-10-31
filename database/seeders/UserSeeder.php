<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $users = [
            ['name' => 'Ana García', 'email' => 'ana@gmail.com'],
            ['name' => 'Carlos López', 'email' => 'carlos@gmail.com'],
            ['name' => 'María Pérez', 'email' => 'maria@gmail.com'],
            ['name' => 'David Sánchez', 'email' => 'david@gmail.com'],
            ['name' => 'Laura Martín', 'email' => 'laura@gmail.com'],
            ['name' => 'Pablo Ruiz', 'email' => 'pablo@gmail.com'],
            ['name' => 'Lucía Torres', 'email' => 'lucia@gmail.com'],
            ['name' => 'Javier Díaz', 'email' => 'javier@gmail.com'],

            ['name' => 'Elena Romero', 'email' => 'elena@outlook.com'],
            ['name' => 'Daniel Moreno', 'email' => 'daniel@outlook.com'],
            ['name' => 'Sara Jiménez', 'email' => 'sara@outlook.com'],
            ['name' => 'Adrián Alonso', 'email' => 'adrian@outlook.com'],
            ['name' => 'Marta Gutiérrez', 'email' => 'marta@outlook.com'],

            ['name' => 'Sergio Navarro', 'email' => 'sergio@hotmail.com'],
            ['name' => 'Paula Romero', 'email' => 'paula@hotmail.com'],
            ['name' => 'Álvaro Molina', 'email' => 'alvaro@hotmail.com'],
            ['name' => 'Claudia Ortega', 'email' => 'claudia@hotmail.com'],

            ['name' => 'Diego Castro', 'email' => 'diego@yahoo.com'],
            ['name' => 'Nuria Delgado', 'email' => 'nuria@yahoo.com'],

            ['name' => 'Hugo Serrano', 'email' => 'hugo@icloud.com'],
        ];
        foreach ($users as $user) {
            User::create([
                ...$user,
                'password' => 'password123',
            ]);
        }

    }
}
