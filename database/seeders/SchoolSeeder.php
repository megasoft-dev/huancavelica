<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::create(['name' => 'Ingeniería de Sistemas', 'faculty_id' => 1]);
        School::create(['name' => 'Ingeniería de Minas', 'faculty_id' => 1]);
        School::create(['name' => 'Ingeniería Metalúrgica', 'faculty_id' => 1]);
        School::create(['name' => 'Medicina Humana', 'faculty_id' => 2]);
        School::create(['name' => 'Enfermería', 'faculty_id' => 2]);
        School::create(['name' => 'Obstetricia', 'faculty_id' => 2]);
        School::create(['name' => 'Educación Primaria', 'faculty_id' => 3]);
        School::create(['name' => 'Educación Inicial', 'faculty_id' => 3]);
        School::create(['name' => 'Educación Secundaria - Matemáticas', 'faculty_id' => 3]);
    }
}
