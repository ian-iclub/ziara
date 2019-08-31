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
    //         "location" => "Athens, Greece",
    //         "price" => "450"
    //     ],
    //     [
    //         "image" => "images/tour-2.jpg",
    //         "stars" => 4,
    //         "reviews" => 45,
    //         "title" => "PARIS, FRANCE",
    //         "location" => "Paris, Germany",
    //         "price" => "350"
    //     ],
    //     [
    //         "image" => "images/tour-3.jpg",
    //         "stars" => 3,
    //         "reviews" => 545,
    //         "title" => "ATHENS, GREECE",
    //         "location" => "Athens, Greece",
    //         "price" => "450"
    //     ],
    //     [
    //         "image" => "images/tour-4.jpg",
    //         "stars" => 4,
    //         "reviews" => 45,
    //         "title" => "PARIS, FRANCE",
    //         "location" => "Paris, Germany",
    //         "price" => "350"
    //     ],
    //     [
    //         "image" => "images/tour-5.jpg",
    //         "stars" => 3,
    //         "reviews" => 545,
    //         "title" => "ATHENS, GREECE",
    //         "location" => "Athens, Greece",
    //         "price" => "450"
    //     ],
    //     [
    //         "image" => "images/tour-6.jpg",
    //         "stars" => 4,
    //         "reviews" => 45,
    //         "title" => "PARIS, FRANCE",
    //         "location" => "Paris, Germany",
    //         "price" => "350"
    //     ],
    //     [
    //         "image" => "images/tour-7.jpg",
    //         "stars" => 3,
    //         "reviews" => 545,
    //         "title" => "ATHENS, GREECE",
    //         "location" => "Athens, Greece",
    //         "price" => "450"
    //     ],
    //     [
    //         "image" => "images/tour-8.jpg",
    //         "stars" => 4,
    //         "reviews" => 45,
    //         "title" => "PARIS, FRANCE",
    //         "location" => "Paris, Germany",
    //         "price" => "350"
    //     ]
    // ];

    public $offers = [
            [
                "image" => "images/sopa-lodge.jpg",
                "period" => "August/November",
                "title" => "SOPA LODGE MARA",
                "location" => "Masai Mara Game Reserve",
                "desc" => [
                    [
                        "price" => 25100,
                        "currency" => "KES",
                        "content" => "Two people sharing per night during the peak season of August. (Full Board)",
                    ],
                    [
                        "price" => 22000,
                        "currency" => "KES",
                        "content" => "Two people sharing per night during the high season of November. (Full Board)",
                    ]
                ]
            ],
            [
                "image" => "images/ashnil.jpg",
                "period" => "August/November",
                "title" => "ASHNIL",
                "location" => "Masai Mara Game Reserve",
                "desc" => [
                    [
                        "price" => 17500,
                        "currency" => "KES",
                        "content" => "Two people sharing per night during the peak season of August. (Full Board)",
                    ],
                    [
                        "price" => 10500,
                        "currency" => "KES",
                        "content" => "Two people sharing per night during the high season of November. (Full Board)",
                    ]
                ]
            ],
            [
                "image" => "images/sarova-mara.jpg",
                "period" => "August/November",
                "title" => "SAROVA MARA",
                "location" => "Masai Mara Game Reserve",
                "desc" => [
                    [
                        "price" => 33000,
                        "currency" => "KES",
                        "content" => "Two people sharing per night during the peak season of August. (Full Board)",
                    ],
                    [
                        "price" => 20600,
                        "currency" => "KES",
                        "content" => "Two people sharing per night during the high season of November. (Full Board)",
                    ]
                ]
            ],
            [
                "image" => "images/mawe-resort.jpg",
                "period" => "August/November",
                "title" => "MAWE RESORT",
                "location" => "Watamu",
                "desc" => [
                    [
                        "price" => 10000,
                        "currency" => "KES",
                        "content" => "Per person sharing a room per night during the peak season of August. (All inclusive rate)",
                    ],
                    [
                        "price" => 20600,
                        "currency" => "KES",
                        "content" => "Per person sharing a room per night during the high season of November. (All inclusive rate)",
                    ]
                ]
            ],
            [
                "image" => "images/turtle-bay.jpg",
                "period" => "August/November",
                "title" => "TURTLE BAY",
                "location" => "Watamu",
                "desc" => [
                    [
                        "price" => 7900,
                        "currency" => "KES",
                        "content" => "Per person sharing a room per night during the peak season of August. (All inclusive rate)",
                    ],
                    [
                        "price" => 7900,
                        "currency" => "KES",
                        "content" => "Per person sharing a room per night during the high season of November. (All inclusive rate)",
                    ]
                ]
            ],
            [
                "image" => "images/lily-palm.jpg",
                "period" => "August - December",
                "title" => "LILY PALM RESORT ",
                "location" => "Watamu",
                "desc" => [
                    [
                        "price" => 5600,
                        "currency" => "KES",
                        "content" => "Per person sharing a room per night from 1st August to 29th August. (All inclusive rate)",
                    ],
                    [
                        "price" => 4800,
                        "currency" => "KES",
                        "content" => "Per person sharing a room per night from 30th August to 22nd December. (All inclusive rate)",
                    ]
                ]
            ],
            [
                "image" => "images/drift-wood.jpg",
                "period" => "August/November",
                "title" => "DRIFT WOOD",
                "location" => "Malindi",
                "desc" => [
                    [
                        "price" => 17000,
                        "currency" => "KES",
                        "content" => "Two people sharing per night during the peak season of August. (Half Board)",
                    ],
                    [
                        "price" => 17000,
                        "currency" => "KES",
                        "content" => "Two people sharing per night during the high season of November. (Half Board)",
                    ]
                ]
            ]
        ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'place_id', 'period', 'details', 'price', 'currency', 'active',
    ];

    public function place()
    {
        return $this->belongsTo('App\Place');
    }

}
