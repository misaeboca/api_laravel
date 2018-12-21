<?php

use Illuminate\Database\Seeder;

class paginaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('pagina')->insert([ //,
                'titulo' => 'Titulo de Prueba',
                'autor' => $faker->name,
                'contenido' => 'Contenido de Prueba',
                'created_at' => date('Y-m-d H:m:s'),
           		'updated_at' => date('Y-m-d H:m:s')
            ]);
        }
    }
}
