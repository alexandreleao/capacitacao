<?php

namespace Database\Seeders;

use App\Models\Contato;
use Illuminate\Database\Seeder;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contato::create([
            'name'=> 'Felipe',
            'email' => 'felipe@gmail.com',
            'phone' => '78945612',
            'endereco' => 'Rua ACM 1520'
        ]);
    }
}
