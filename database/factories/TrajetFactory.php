<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trajet>
 */
class TrajetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'statut' => 'en cours'
            'depart' => Str::random(10),
            'arrive' =>  Str::random(10),
            'id_chauffeur'=> random(10),
        ];
    }
}
