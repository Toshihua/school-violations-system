<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    public function definition(): array
    {
        // Id number
        $year = $this->faker->numberBetween(2015, 2026);
        $randomDigits = str_pad($this->faker->numberBetween(1, 99999), 5, '0', STR_PAD_LEFT);

        // Custom Domain
        $lastname = $this->faker->unique()->lastName;
        $domain = $this->faker->boolean(80)
            ? '@iskolarngbayan.pup.edu.ph'
            : '@pup.edu.ph';

        // Role Id per email domain
        $roleid = $domain === '@iskolarngbayan.pup.edu.ph' ?
            DB::table('roles')->where('role_name', 'Student')->value('id')
            :   DB::table('roles')->where('role_name', 'Faculty')->value('id');

        return [
            'first_name' => $this->faker->firstName,
            'last_name'  => $lastname,
            'school_id'  => "{$year}-{$randomDigits}-MN-0",
            'email'      => strtolower($lastname) . $domain,
            'password'   => Hash::make('secret'),
            'role_id'    => $roleid,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
