<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    // public $offers = [
    //     [
    //         "image" => "images/tour-1.jpg",
    //         "stars" => 3,
    //         "reviews" => 545,
    //         "title" => "ATHENS, GREECE",
    //         "place" => "Athens, Greece",
    //         "price" => "450"
    //     ],
    //     [
    //         "image" => "images/tour-2.jpg",
    //         "stars" => 4,
    //         "reviews" => 45,
    //         "title" => "PARIS, FRANCE",
    //         "place" => "Paris, Germany",
    //         "price" => "350"
    //     ],
    //     [
    //         "image" => "images/tour-3.jpg",
    //         "stars" => 3,
    //         "reviews" => 545,
    //         "title" => "ATHENS, GREECE",
    //         "place" => "Athens, Greece",
    //         "price" => "450"
    //     ],
    //     [
    //         "image" => "images/tour-4.jpg",
    //         "stars" => 4,
    //         "reviews" => 45,
    //         "title" => "PARIS, FRANCE",
    //         "place" => "Paris, Germany",
    //         "price" => "350"
    //     ],
    //     [
    //         "image" => "images/tour-5.jpg",
    //         "stars" => 3,
    //         "reviews" => 545,
    //         "title" => "ATHENS, GREECE",
    //         "place" => "Athens, Greece",
    //         "price" => "450"
    //     ],
    //     [
    //         "image" => "images/tour-6.jpg",
    //         "stars" => 4,
    //         "reviews" => 45,
    //         "title" => "PARIS, FRANCE",
    //         "place" => "Paris, Germany",
    //         "price" => "350"
    //     ],
    //     [
    //         "image" => "images/tour-7.jpg",
    //         "stars" => 3,
    //         "reviews" => 545,
    //         "title" => "ATHENS, GREECE",
    //         "place" => "Athens, Greece",
    //         "price" => "450"
    //     ],
    //     [
    //         "image" => "images/tour-8.jpg",
    //         "stars" => 4,
    //         "reviews" => 45,
    //         "title" => "PARIS, FRANCE",
    //         "place" => "Paris, Germany",
    //         "price" => "350"
    //     ]
    // ];

    public $offers = [
            [
                "image" => "images/hotel-1.jpg",
                "price" => "450",
                "title" => "Hotel",
                "place" => "New York, USA",
                "desc" => "A small river named Duden flows by their place and supplies it with the
                necessary regelialia."
            ],
            [
                "image" => "images/hotel-2.jpg",
                "price" => "450",
                "title" => "Edison",
                "place" => "New York, USA",
                "desc" => "A small river named Duden flows by their place and supplies it with the
                necessary regelialia."
            ],
            [
                "image" => "images/hotel-3.jpg",
                "price" => "450",
                "title" => "Hotel Edison",
                "place" => "New York, USA",
                "desc" => "A small river named Duden flows by their place and supplies it with the
                necessary regelialia."
            ],
            // [
            //     "image" => "images/hotel-4.jpg",
            //     "price" => "450",
            //     "title" => "Hotel Edison",
            //     "place" => "New York, USA",
            //     "desc" => "A small river named Duden flows by their place and supplies it with the
            //     necessary regelialia."
            // ]
        ];

}
