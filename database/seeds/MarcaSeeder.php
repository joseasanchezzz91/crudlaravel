<?php

use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'nombre'=>'BMW',
            'pais'=>'Alemania'
        ]);
        DB::table('marcas')->insert([
            'nombre'=>'Ferrari',
            'pais'=>'Italia'

        ]);
        DB::table('marcas')->insert([
            'nombre'=>'Audi',
            'pais'=>'Alemania'

        ]);
        DB::table('marcas')->insert([
            'nombre'=>'Toyota',
            'pais'=>'Japon'

        ]);   
        
    }
}
