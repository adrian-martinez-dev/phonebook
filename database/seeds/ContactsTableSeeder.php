<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('contacts')->insert([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
            ]);

        } 
    }
}
