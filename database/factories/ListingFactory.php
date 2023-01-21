<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
   
    public static $developerTitles = array('Junior','Senior','Full-stack');
    public static $developerTags = [['PHP','SQL','Laravel'],['Javascript','Laravel','React'],['Javascript','Laravel','Vue']];
    
    /* finish later
    public static $developerTags = array('PHP','MySQL','Laravel','React','Vue');
    public static $developerTagCount = 3;

    public function generateRandomTag() {
        return $developerTags[array_rand($developerTags)];
    }

    public function generateTags() {
        $tagList = [];
        $developerTags = self::$developerTags;
        
        for($i=0;$i<=$developerTagCount;$i++) {
            
            generateRandomTag();
            
        }
        return implode(', ', $tagList);
    }*/

    
   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    

     public function definition()
    {
        return [
            'title' => self::$developerTitles[array_rand(self::$developerTitles)] . ' Laravel Developer',
            'tags' => implode(', ', self::$developerTags[array_rand(self::$developerTags)]),
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(6)
        ];
    }
}
