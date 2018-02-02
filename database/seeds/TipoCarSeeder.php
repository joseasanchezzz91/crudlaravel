<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	DB::table('tipo_carros')->insert([
      		'descripcion'=>'Familiar'

      	]);
      	DB::table('tipo_carros')->insert([
      		'descripcion'=>'Liftback'

      	]);

      	DB::table('tipo_carros')->insert([
      		'descripcion'=>'Carrera'

      	]);

      	DB::table('tipo_carros')->insert([
      		'descripcion'=>'Sedan'
      	]);

      	DB::table('tipo_carros')->insert([
      		'descripcion'=>'Hatchback'
      	]);
      	DB::table('tipo_carros')->insert([
      		'descripcion'=>'Turismo'
      	]);
      	DB::table('tipo_carros')->insert([
      		'descripcion'=>' Carga'
      	]);
      	DB::table('tipo_carros')->insert([
      		'descripcion'=>'Pasajeros'
      	]);

    }
}
