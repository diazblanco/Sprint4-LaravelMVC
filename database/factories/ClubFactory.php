<?php

namespace Database\Factories;

use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Club>
 */
class ClubFactory extends Factory
{
    protected $model = Club::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'name' => $this -> faker -> name(),
            'location' => $this -> faker -> unique()-> randomElement(['La Garriga', 'Les Franqueses', 'Granollers', 'El Figaró']),
            'color' => $this -> faker -> randomElement(['red', 'green', 'blue', 'black', 'yellow']),
        ];
    }
}


// php artisan make:factory ClubFactory --model=Club