<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ListaChequeoZigZag>
 */
class ListaChequeoZigZagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_id' => $this->faker->randomElement([1,4,5,6,7,8,9,10]),
            'hora_Inicio' => $this->faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'chequeo_Uno_ZigZag' => $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'chequeo_Dos_ZigZag' => $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'chequeo_Tres_ZigZag' =>  $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'chequeo_Cuatro_ZigZag' =>  $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'chequeo_Cinco_ZigZag' => $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'chequeo_Seis_ZigZag' =>  $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'chequeo_Siete_ZigZag' =>  $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'chequeo_Ocho_ZigZag' =>  $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'chequeo_Nueve_ZigZag' => $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'chequeo_Diez_ZigZag' =>  $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'chequeo_Once_ZigZag' =>  $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'chequeo_Doce_ZigZag' =>  $this->faker->randomElement(['R', 'M', 'B', 'NA']),
            'observaciones' =>  $this->faker->sentence(5),
            'hora_Fin' => $this->faker->time('h:i', 'now'),
        ];
    }
}
