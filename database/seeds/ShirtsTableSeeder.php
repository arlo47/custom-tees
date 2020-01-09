<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Shirt;

class ShirtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Shirts Array
        $shirts = [
            ['id' => 1, 'name' => 'GREAT RAMEN WAVE',               'price' => 14, 'color' => 'black',  'gender' => 'M', 'size' => 'L',    'image' => 'greatramenwave.jpg'              ],
            ['id' => 2, 'name' => 'LET\'S SUMMON DEMONS',           'price' => 22, 'color' => 'white',  'gender' => 'M', 'size' => 'XL',   'image' => 'letssummondemons.jpg'            ],
            ['id' => 3, 'name' => 'WORSHIP COFFEE',                 'price' => 14, 'color' => 'black',  'gender' => 'M', 'size' => 'M',    'image' => 'worshipcoffee.jpg'               ],
            ['id' => 4, 'name' => 'STRANGE PLANET',                 'price' => 24, 'color' => 'black',  'gender' => 'M', 'size' => 'M',    'image' => 'strangeplanet.jpg'               ],
            ['id' => 5, 'name' => 'ROBOT PROBLEMS',                 'price' => 12, 'color' => 'grey',   'gender' => 'M', 'size' => 'M',    'image' => 'robotproblems.jpg'               ],
            ['id' => 6, 'name' => 'THE VINYL SYSTEM',               'price' => 14, 'color' => 'black',  'gender' => 'M', 'size' => 'L',    'image' => 'thevinylsystem.jpg'              ],
            ['id' => 7, 'name' => 'CTHULHU\'S CHURCH',              'price' => 20, 'color' => 'black',  'gender' => 'M', 'size' => 'L',    'image' => 'cthulhuschurch.jpg'              ],
            ['id' => 8, 'name' => 'AND RAMEN',                      'price' => 18, 'color' => 'grey',   'gender' => 'M', 'size' => 'M',    'image' => 'andramen.jpg'                    ],
            ['id' => 9, 'name' => 'NOT TODAY',                      'price' => 14, 'color' => 'black',  'gender' => 'M', 'size' => 'XL',   'image' => 'nottoday.jpg'                    ],
            ['id' => 10, 'name' => 'NEVER TRUST AN ATOM',           'price' => 16, 'color' => 'grey',   'gender' => 'M', 'size' => 'L',    'image' => 'nevertrustanatom.jpg'            ],
            ['id' => 11, 'name' => 'IT GROWS ON TREES',             'price' => 16, 'color' => 'black',  'gender' => 'F', 'size' => 'S',    'image' => 'itgrowsontrees.jpg'              ],
            ['id' => 12, 'name' => 'A PIXEL OF MY CHILDHOOD',       'price' => 18, 'color' => 'blue',   'gender' => 'F', 'size' => 'M',    'image' => 'apixelofmychildhood.jpg'         ],
            ['id' => 13, 'name' => 'SOUND OF SUMMER',               'price' => 20, 'color' => 'black',  'gender' => 'F', 'size' => 'S',    'image' => 'soundofsummer.jpg'               ],
            ['id' => 14, 'name' => 'SOUND OF SUMMER',               'price' => 20, 'color' => 'black',  'gender' => 'F', 'size' => 'S',    'image' => 'soundofsummer.jpg'               ],
            ['id' => 15, 'name' => 'JAM SESSION',                   'price' => 20, 'color' => 'blue',   'gender' => 'F', 'size' => 'M',    'image' => 'jamsession.jpg'                  ],
            ['id' => 16, 'name' => 'FRANKIE GOES TO HOLLYWOOD',     'price' => 18, 'color' => 'white',  'gender' => 'F', 'size' => 'S',    'image' => 'frankiegoestohollywood.jpg'      ],
            ['id' => 17, 'name' => 'HAPPINESS IS FLEETING',         'price' => 18, 'color' => 'white',  'gender' => 'F', 'size' => 'S',    'image' => 'happinessisfleeting.jpg'         ],
            ['id' => 18, 'name' => 'THE BEAUTY OF IMPERFECTION',    'price' => 20, 'color' => 'black',  'gender' => 'F', 'size' => 'L',    'image' => 'thebeautyofimperfection.jpg'     ],
            ['id' => 19, 'name' => 'NOT FAST, NOT FURIOUS',         'price' => 14, 'color' => 'blue',   'gender' => 'F', 'size' => 'M',    'image' => 'notfastnotfurious.jpg'           ],
            ['id' => 20, 'name' => 'KAME, USAGI AND RATTO NINJAS',  'price' => 16, 'color' => 'blue',   'gender' => 'F', 'size' => 'S',    'image' => 'kameusagiandrattoninjas.jpg'     ]
        ];

        //Create a row for each shirt
        foreach ($shirts as $shirt) {
            Shirt::create($shirt);
        }
    }
}
