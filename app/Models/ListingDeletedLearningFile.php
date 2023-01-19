<?php
    namespace App\Models;

    class ListingDeletedLearningFile {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'First listing',
                    'description' => 'Lorem ipsummmmmmmmmmmmmmm'
                ],
                [
                    'id' => 2,
                    'title' => 'Second listing',
                    'description' => 'Lorem ipsum'
                ]
                    
            ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing) {
                if($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }