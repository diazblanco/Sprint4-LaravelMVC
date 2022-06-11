<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Club;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $club = new Club();
        $club->name = "Olimpic La Garriga";
        $club->location = "La Garriga";
        $club->color = "red";
        $club->save();
        
        $club2 = new Club();
        $club2->name = "Olimpic La Garriga";
        $club2->location = "La Garriga";
        $club2->color = "red";
        $club2->save();
        
        $club3 = new Club();
        $club3->name = "Olimpic La Garriga";
        $club3->location = "La Garriga";
        $club3->color = "red";
        $club3->save();
    }
}

//php artisan migrate:fresh --seed