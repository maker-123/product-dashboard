<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'alvin',
            'email' => 'tesadoalvin8@gmail.com',
            'password'=> 'admin'
        ]);
        \App\Models\item::factory(10)->create();
        \App\Models\Branch::factory(3)->create();
        
    }
}
