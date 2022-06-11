<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    protected $model = Team::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this -> faker -> name(),
            'category' => $this -> faker ->randomElement(['Benjamín', 'Alevín', 'Infantil', 'Cadete', 'Juvenil']),
            'club_id' => $this -> faker -> unique()->randomElement([1,2,3,4]) //Club::inRandomOrder()->first()->id, //'club_id' => $factory->create(App\Club::class)->id 

        ];
    }
}
