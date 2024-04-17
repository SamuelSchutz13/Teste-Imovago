<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    public function run(): void
    {
       Person::create(
            [
                'nome' => 'Samuel',
                'email' => 'samuel@gmail.com',
                'telefone' => '(49) 999314419',
                'descricao' => 'Aqui tem uma descrição'
            ]
       );  
    }
}
