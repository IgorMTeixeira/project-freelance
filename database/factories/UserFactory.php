<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
   //metodo fake é uma função auxiliar que retorna uma instância do Faker
   // uma biblioteca PHP usada para gerar dados falsos 
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'rating' => fake()->randomElement([1,2,3,4,5]),
            'avatar' => 'https://avatar.iran.liara.run/public', //cria avatares diferentes toda vez
        ];
    }

}
