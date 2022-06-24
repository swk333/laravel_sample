<?php
  namespace App\Models;

  class Listing {
    public static function all() {
      return [
        [
          'id' => 1,
          'title' => 'First Listing',
          'body' => 'This is the first listing'
        ],
        [
          'id' => 2,
          'title' => 'Second Listing',
          'body' => 'This is the second listing'
        ],
        [
          'id' => 3,
          'title' => 'Third Listing',
          'body' => 'This is the third listing'
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