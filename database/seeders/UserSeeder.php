<?php

namespace Database\Seeders;

use App\Models\Contato;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $contato = Contato::inRandomOrder()->get()->first();
        
        User::create([
            'name' => 'Alexandre',
            'email' => 'teste@gmail.com',
            'password' => '123456',
            'contato_id' => $contato->id
        ]);
    }
}
