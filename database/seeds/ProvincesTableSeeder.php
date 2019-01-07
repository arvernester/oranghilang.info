<?php

use Illuminate\Database\Seeder;
use Unirest\Request;
use App\Models\Province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Request::get('http://dev.farizdotid.com/api/daerahindonesia/provinsi');

        if ($response->code == 200) {
            foreach ($response->body->semuaprovinsi as $province) {
                Province::firstOrCreate(['name' => $province->nama]);
            }
        }
    }
}
