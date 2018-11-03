<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        $limit = 300;
      
        for ($i = 0; $i < $limit; $i++) {
            DB::table('tasks')->insert([
                //'nm_ruang' => $faker->randomElement(['D1.01', 'D1.02', 'D1.03', 'D1.04', 'D1.05', 'D1.06', 'D2.01', 'D2.02', 'D2.03', 'D2.04', 'D2.05', 'D2.06', 'D2.07', 'D2.08', 'D2.09', 'D3.01', 'D3.02', 'D3.03', 'D3.04', 'D3.05', 'D3.06', 'D3.07', 'D3.08']),
                'title' => $faker->name(),
                'description' => $faker->address(),
            ]);
        }


    }
}
