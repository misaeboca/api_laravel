<?php

use Illuminate\Database\Seeder;

class postTableSeeder extends Seeder
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
            DB::table('post')->insert([ //,
                'titulo' => 'Titulo de Prueba',
                'autor' => $faker->name,
                'contenido' => 'Contenido de Prueba',
                'created_at' => date('Y-m-d H:m:s'),
           		'updated_at' => date('Y-m-d H:m:s')
            ]);

            $id  = DB::getPdo()->lastInsertId();

            DB::table('post_categoria')->insert(array('id_posts' => $id, 'id_categoria'=>'1'));
        }
    }
}
