<?php

use App\Models\City;
use App\Models\Person;
use App\User;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!app()->environment('production')) {
            factory(Person::class, 10)->create([
                'city_id' => City::first()->id,
                'user_id' => data_get(User::first(), 'id'),
            ]);
        }
    }
}
