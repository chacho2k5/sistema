<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'razonsocial' => $this->faker->company(),
            'cuil' => $this->faker->numerify('###########'),
            'telefono1' => $this->faker->phoneNumber(),
            'telefono2' => $this->faker->phoneNumber(),
            'correo' => $this->faker->email(),
            'calle_nombre' => $this->faker->streetName(),
            'calle_numero' => $this->faker->buildingNumber(),
            'codigo_postal' => $this->faker->postcode(),
            'barrio_id' => $this->faker->numberBetween(1,200),
            'localidad_id' => $this->faker->numberBetween(1,200),
            'provincia_id' => $this->faker->numberBetween(1,25),
            'contacto_nombre' => $this->faker->lastName(),
            'conctacto_correo' => $this->faker->email(),
            'conctacto_cargo' => $this->faker->lastName(),
            'fecha_alta' => $this->faker->date(),
            ];
        }
}
