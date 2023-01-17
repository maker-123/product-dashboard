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
        \App\Models\schedules::factory()->create([
            'type' => 'DELIVERY',
            'start' => '2:00 PM',
            'end' => '5:00 PM'
        ]);
        \App\Models\schedules::factory()->create([
            'type' => 'DELIVERY',
            'start' => '10:00 AM',
            'end' => '1:00 PM'
        ]);
        \App\Models\schedules::factory()->create([
            'type' => 'PICKUP',
            'start' => '1:00 PM',
            'end' => '8:00 PM'
        ]);
        
    }
}
