<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'usuario' => fake()->userName(),
            'documento' => fake()->unique()->randomElement(["23233233445", "12124334455", "12223335", "22211455", "21112224", "4456664", "23434452", "211123434", "45563113", "445566577", "245566888", "334556665", "233345456", "11233436", "23343123", "2344356692", "123233343", "2312213333", "122323343", "121123343", "12232334378221"]),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'cargo_id' => fake()->randomElement([1,2,3,4])
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
