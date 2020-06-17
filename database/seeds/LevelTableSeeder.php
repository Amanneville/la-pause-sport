<?php

use App\Model\Level;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('levels')->insert([

            [   'name'          => 'debutant',
                'condition'     => 100,
                'description'   => 'débute dans la pratique du sport'
            ],
            [   'name'          => 'intermediaire',
                'condition'     => 200,
                'description'   => 'aisance dans la pratique du sport'
            ],
            [   'name'          => 'avancé',
                'condition'     => 300,
                'description'   => 'maitrise la pratique de ce sport'
            ],
        ]);
    }
}
