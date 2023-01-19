<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
   
    public static $developerTitles = array('Junior','Senior','Full-stack');
   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    

     public function definition()
    {
        return [
            'title' => self::$developerTitles[array_rand(self::$developerTitles)] . ' Laravel Developer',
            'tags' => 'php, mysql, laravel',
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(6)
        ];
    }
}
