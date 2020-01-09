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
            ['id' => 1,  'name' => 'ANATOMICAT',               'price' => 20, 'color' => 'black',  'gender' => 'F', 'size' => 'S',    'image' => 'anatomicat.jpg'           ],
            ['id' => 2,  'name' => 'ARCHELON',                 'price' => 15, 'color' => 'pink',   'gender' => 'F', 'size' => 'M',    'image' => 'archelon.jpg'             ],
            ['id' => 3,  'name' => 'ASTRONOMICAL',             'price' => 18, 'color' => 'black',  'gender' => 'M', 'size' => 'L',    'image' => 'astronomical.jpg'         ],
            ['id' => 4,  'name' => 'BIRDS WITH ARMS',          'price' => 14, 'color' => 'white',  'gender' => 'M', 'size' => 'S',    'image' => 'birdswitharms.jpg'        ],
            ['id' => 5,  'name' => 'BLOOMING',                 'price' => 14, 'color' => 'white',  'gender' => 'F', 'size' => 'M',    'image' => 'blooming.jpg'             ],
            ['id' => 6,  'name' => 'BOWSERZILA',               'price' => 20, 'color' => 'white',  'gender' => 'M', 'size' => 'L',    'image' => 'bowserzila.jpg'           ],
            ['id' => 7,  'name' => 'BURRITOS',                 'price' => 22, 'color' => 'white',  'gender' => 'M', 'size' => 'S',    'image' => 'burritos.jpg'             ],
            ['id' => 8,  'name' => 'CAT',                      'price' => 15, 'color' => 'grey',   'gender' => 'F', 'size' => 'M',    'image' => 'cat.jpg'                  ],
            ['id' => 9,  'name' => 'CATHULHU',                 'price' => 16, 'color' => 'black',  'gender' => 'M', 'size' => 'XL',   'image' => 'cathulhu.jpg'             ],
            ['id' => 10, 'name' => 'CAT LOVER',                'price' => 20, 'color' => 'black',  'gender' => 'F', 'size' => 'S',    'image' => 'catlover.jpg'             ],
            ['id' => 11, 'name' => 'COMFY BED',                'price' => 15, 'color' => 'white',  'gender' => 'F', 'size' => 'M',    'image' => 'comfybed.jpg'             ],
            ['id' => 12, 'name' => 'CORGI-NAUT',               'price' => 18, 'color' => 'black',  'gender' => 'F', 'size' => 'L',    'image' => 'corginaut.jpg'            ],
            ['id' => 13, 'name' => 'CREEPY SANTA',             'price' => 14, 'color' => 'white',  'gender' => 'M', 'size' => 'S',    'image' => 'creepysanta.jpg'          ],
            ['id' => 14, 'name' => 'CUTE AS HELL',             'price' => 14, 'color' => 'black',  'gender' => 'F', 'size' => 'M',    'image' => 'cuteashell.jpg'           ],
            ['id' => 15, 'name' => 'DOGTOR',                   'price' => 20, 'color' => 'white',  'gender' => 'F', 'size' => 'L',    'image' => 'dogtor.jpg'               ],
            ['id' => 16, 'name' => 'FOXY',                     'price' => 22, 'color' => 'orange', 'gender' => 'F', 'size' => 'S',    'image' => 'foxy.jpg'                 ],
            ['id' => 17, 'name' => 'FULL MOON',                'price' => 15, 'color' => 'black',  'gender' => 'F', 'size' => 'M',    'image' => 'fullmoon.jpg'             ],
            ['id' => 18, 'name' => 'FUNKALICIOUS',             'price' => 16, 'color' => 'black',  'gender' => 'M', 'size' => 'XL',   'image' => 'funkalicious.jpg'         ],
            ['id' => 19, 'name' => 'GARDEN',                   'price' => 20, 'color' => 'black',  'gender' => 'F', 'size' => 'S',   'image' => 'garden.jpg'                ],
            ['id' => 20, 'name' => 'GHOST BUSTED',             'price' => 15, 'color' => 'black',  'gender' => 'M', 'size' => 'M',   'image' => 'ghostbusted.jpg'           ],
            ['id' => 21, 'name' => 'GREAT RAMEN WAVE',         'price' => 18, 'color' => 'black',  'gender' => 'M', 'size' => 'L',   'image' => 'greatramenwawe.jpg'        ],
            ['id' => 22, 'name' => 'HIGH SEAS',                'price' => 14, 'color' => 'black',  'gender' => 'M', 'size' => 'S',   'image' => 'highseas.jpg'              ],
            ['id' => 23, 'name' => 'JAM SESSION',              'price' => 14, 'color' => 'black',  'gender' => 'F', 'size' => 'M',   'image' => 'jamsession.jpg'            ],
            ['id' => 24, 'name' => 'KAIJU SENTAI',             'price' => 20, 'color' => 'black',  'gender' => 'M', 'size' => 'L',   'image' => 'kaijusentai.jpg'           ],
            ['id' => 25, 'name' => 'KIWI ANATOMY',             'price' => 22, 'color' => 'white',  'gender' => 'F', 'size' => 'S',   'image' => 'kiwianatomy.jpg'           ],
            ['id' => 26, 'name' => 'LETS MAKE BROWNIES',       'price' => 15, 'color' => 'black',  'gender' => 'M', 'size' => 'M',   'image' => 'letsmakebrownies.jpg'      ],
            ['id' => 27, 'name' => 'MAKE A SMILE',             'price' => 16, 'color' => 'black',  'gender' => 'M', 'size' => 'XL',  'image' => 'makeasmile.jpg'            ],
            ['id' => 28, 'name' => 'MEOW',                     'price' => 22, 'color' => 'black',  'gender' => 'F', 'size' => 'S',   'image' => 'meow.jpg'                  ],
            ['id' => 29, 'name' => 'MERRY EXTINCTION',         'price' => 15, 'color' => 'red',    'gender' => 'M', 'size' => 'M',   'image' => 'merryextinction.jpg'       ],
            ['id' => 30, 'name' => 'METAL FEST',               'price' => 16, 'color' => 'black',  'gender' => 'M', 'size' => 'XL',  'image' => 'metalfest.jpg'             ],
            ['id' => 31, 'name' => 'MOON CAT',                 'price' => 20, 'color' => 'black',  'gender' => 'F', 'size' => 'S',   'image' => 'mooncat.jpg'               ],
            ['id' => 32, 'name' => 'MOON HUG',                 'price' => 15, 'color' => 'black',   'gender' => 'F', 'size' => 'M',  'image' => 'moonhug.jpg'               ],
            ['id' => 33, 'name' => 'NEVER TOO LATE',           'price' => 18, 'color' => 'black',  'gender' => 'F', 'size' => 'L',   'image' => 'nevertoolate.jpg'          ],
            ['id' => 34, 'name' => 'NOT TODAY',                'price' => 14, 'color' => 'black',  'gender' => 'M', 'size' => 'S',   'image' => 'nottoday.jpg'              ],
            ['id' => 35, 'name' => 'NOT TODAY',                'price' => 14, 'color' => 'white',  'gender' => 'F', 'size' => 'M',   'image' => 'nottoday2.jpg'             ],
            ['id' => 36, 'name' => 'OCTOPUS BIKE',             'price' => 20, 'color' => 'black',  'gender' => 'M', 'size' => 'L',   'image' => 'octopusbike.jpg'           ],
            ['id' => 37, 'name' => 'OKAY',                     'price' => 22, 'color' => 'grey',   'gender' => 'F', 'size' => 'S',   'image' => 'okay.jpg'                  ],
            ['id' => 38, 'name' => 'ORIGINAL COPY CAT',        'price' => 15, 'color' => 'red',    'gender' => 'F', 'size' => 'M',   'image' => 'originalcopycat.jpg'       ],
            ['id' => 39, 'name' => 'PIZZA NIGHTMARE',          'price' => 16, 'color' => 'black',  'gender' => 'F', 'size' => 'XL',  'image' => 'pizzanightmare.jpg'        ],
            ['id' => 40, 'name' => 'PUGTATO',                  'price' => 20, 'color' => 'grey',   'gender' => 'M', 'size' => 'S',   'image' => 'pugtato.jpg'               ],
            ['id' => 41, 'name' => 'RABBIT RESTING',           'price' => 15, 'color' => 'black',  'gender' => 'F', 'size' => 'M',   'image' => 'rabbitresting.jpg'         ],
            ['id' => 42, 'name' => 'RACCOOL',                  'price' => 18, 'color' => 'black',  'gender' => 'F', 'size' => 'L',   'image' => 'raccool.jpg'               ],
            ['id' => 43, 'name' => 'RETRO RADIO',              'price' => 14, 'color' => 'black',  'gender' => 'F', 'size' => 'S',   'image' => 'retroradio.jpg'            ],
            ['id' => 44, 'name' => 'RHINOGAMI',                'price' => 14, 'color' => 'black',  'gender' => 'M', 'size' => 'M',   'image' => 'rhinogami.jpg'             ],
            ['id' => 45, 'name' => 'ROBOT PROBLEMS',           'price' => 20, 'color' => 'grey',   'gender' => 'M', 'size' => 'L',   'image' => 'robotproblems.jpg'         ],
            ['id' => 46, 'name' => 'SCIENCE',                  'price' => 22, 'color' => 'black',  'gender' => 'M', 'size' => 'S',   'image' => 'science.jpg'               ],
            ['id' => 47, 'name' => 'SELF PORTRAIT',            'price' => 15, 'color' => 'white',  'gender' => 'F', 'size' => 'M',   'image' => 'selfportrait.jpg'          ],
            ['id' => 48, 'name' => 'SHARK FOREST',             'price' => 16, 'color' => 'black',  'gender' => 'F', 'size' => 'XL',  'image' => 'sharkforest.jpg'           ],
            ['id' => 49, 'name' => 'SOUND OF SUMMER',          'price' => 20, 'color' => 'black',  'gender' => 'M', 'size' => 'S',   'image' => 'soundofsummer.jpg'         ],
            ['id' => 50, 'name' => 'SPACE GRIND',              'price' => 15, 'color' => 'black',  'gender' => 'M', 'size' => 'M',   'image' => 'spacegrind.jpg'            ],
            ['id' => 51, 'name' => 'SPEED IS RELATIVE',        'price' => 18, 'color' => 'black',  'gender' => 'F', 'size' => 'L',   'image' => 'speedisrelative.jpg'       ],
            ['id' => 52, 'name' => 'SPIRIT ANIMAL CAT',        'price' => 14, 'color' => 'white',  'gender' => 'M', 'size' => 'S',   'image' => 'spiritanimalcat.jpg'       ],
            ['id' => 53, 'name' => 'SUSHI',                    'price' => 14, 'color' => 'black',  'gender' => 'M', 'size' => 'M',   'image' => 'sushi.jpg'                 ],
            ['id' => 54, 'name' => 'THE GREAT RETRO WAVE',     'price' => 20, 'color' => 'black',  'gender' => 'M', 'size' => 'L',   'image' => 'thegreatretrowave.jpg'     ],
            ['id' => 55, 'name' => 'THE HANGING CITY',         'price' => 22, 'color' => 'black',  'gender' => 'M', 'size' => 'S',   'image' => 'thehangingcity.jpg'        ],
            ['id' => 56, 'name' => 'THE KISS OF DEATH',        'price' => 15, 'color' => 'black',  'gender' => 'F', 'size' => 'M',   'image' => 'thekissofdeath.jpg'        ],
            ['id' => 57, 'name' => 'THE MUSICAL FOX',          'price' => 16, 'color' => 'white',  'gender' => 'F', 'size' => 'XL',  'image' => 'themusicalfox.jpg'         ],
            ['id' => 58, 'name' => 'THE STUDY OF CHANGE',      'price' => 22, 'color' => 'black',  'gender' => 'M', 'size' => 'S',   'image' => 'thestudyofchange.jpg'      ],
            ['id' => 59, 'name' => 'TOKYO KAIJU',              'price' => 15, 'color' => 'black',  'gender' => 'M', 'size' => 'M',   'image' => 'tokyokaiju.jpg'            ],
            ['id' => 60, 'name' => 'WORSHIP COFFEE',           'price' => 16, 'color' => 'black',  'gender' => 'M', 'size' => 'XL',  'image' => 'worshipcoffee.jpg'         ]
        ];

        //Create a row for each shirt
        foreach ($shirts as $shirt) {
            Shirt::create($shirt);
        }
    }
}
