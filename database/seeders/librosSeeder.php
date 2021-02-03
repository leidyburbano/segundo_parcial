<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class librosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $libro=[
            ['ISBN'=>'101',
             'titulo'=>'Caperucita Roja',
             'precio'=>'20000',   
             'stock'=>'20',
             'editorial_fk'=>'1'
            ],
            ['ISBN'=>'202',
             'titulo'=>'El Gato con botas',
             'precio'=>'23000',   
             'stock'=>'30',
             'editorial_fk'=>'2'
            ],
            ['ISBN'=>'303',
             'titulo'=>'Patito Feo',
             'precio'=>'25000',   
             'stock'=>'40',
             'editorial_fk'=>'3'
            ],
            ['ISBN'=>'404',
             'titulo'=>'El lobo feros',
             'precio'=>'18000',   
             'stock'=>'50',
             'editorial_fk'=>'4'
            ],
            ['ISBN'=>'505',
             'titulo'=>'Soldadito de plomo',
             'precio'=>'13000',   
             'stock'=>'10',
             'editorial_fk'=>'5'
            ]
        ];
        DB::table('libros')->insert($libro); 


    }
}
