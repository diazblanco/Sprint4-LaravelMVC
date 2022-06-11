<?php

namespace Database\Factories;

use App\Models\Matche;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matche>
 */
class MatcheFactory extends Factory
{
    protected $model = Matche::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'match_date' => $this->faker->dateTime()->format('Y-m-d H:i:s'),
            'team_id_local'=> $this -> faker ->randomElement([1,2,3]), //Team::inRandomOrder()->first()->id,
            'team_id_visiting'=> $this -> faker ->randomElement([1,2,3]), //Team::inRandomOrder()->first()->id,
            'category' => $this -> faker -> randomElement(['Benjamín', 'Alevín', 'Infantil', 'Cadete', 'Juvenil']),
        ];
    }
}
