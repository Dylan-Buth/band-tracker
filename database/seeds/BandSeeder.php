<?php

use Illuminate\Database\Seeder;
use App\Band;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Band::create([
            'name' => 'Led Zeppelin',
            'start_date' => '1968-01-01',
            'website' => 'http://www.ledzeppelin.com/',
            'still_active' => false,
        ]);

        Band::create([
            'name' => 'Rolling Stones',
            'start_date' => '1962-01-01',
            'website' => 'http://www.rollingstones.com/',
            'still_active' => true,
        ]);

        Band::create([
            'name' => 'U2',
            'start_date' => '1976-01-01',
            'website' => 'http://www.u2.com/',
            'still_active' => true,
        ]);
    }
}
