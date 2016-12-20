<?php

use Illuminate\Database\Seeder;
use App\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::create([
            'band_id'          => '1',
            'name'             => 'Physical Graffiti',
            'recorded_date'    => '1970-07-01',
            'release_date'     => '1975-02-24',
            'number_of_tracks' => '15',
            'label'            => 'Swan Song Records',
            'producer'         => 'Jimmy Page',
            'genre'            => 'Heavy metal',
        ]);

        Album::create([
            'band_id'          => '1',
            'name'             => 'Houses of the Holy',
            'recorded_date'    => '1971-12-01',
            'release_date'     => '1973-03-28',
            'number_of_tracks' => '8',
            'label'            => 'Atlantic Records',
            'producer'         => 'Jimmy Page',
            'genre'            => 'Heavy metal',
        ]);

        Album::create([
            'band_id'          => '2',
            'name'             => 'Blue & Lonesome',
            'recorded_date'    => '2015-12-11',
            'release_date'     => '2016-12-02',
            'number_of_tracks' => '12',
            'label'            => 'Rolling Stones Records',
            'producer'         => 'Polydor',
            'genre'            => 'Rock',
        ]);

        Album::create([
            'band_id'          => '2',
            'name'             => 'Sticky Fingers',
            'recorded_date'    => '1969-12-02',
            'release_date'     => '1971-04-23',
            'number_of_tracks' => '10',
            'label'            => 'Rolling Stones',
            'producer'         => 'Jimmy Miller',
            'genre'            => 'Rock',
        ]);

        Album::create([
            'band_id'          => '3',
            'name'             => 'The Joshua Tree',
            'recorded_date'    => '1986-01-01',
            'release_date'     => '1987-03-09',
            'number_of_tracks' => '11',
            'label'            => 'Island',
            'producer'         => 'Daniel Lanois, Brian Eno',
            'genre'            => 'Rock',
        ]);

        Album::create([
            'band_id'          => '3',
            'name'             => 'How to Dismantle an Atomic Bomb',
            'recorded_date'    => '2003-11-01',
            'release_date'     => '2004-11-22',
            'number_of_tracks' => '11',
            'label'            => 'Island',
            'producer'         => 'Steve Lillywhite',
            'genre'            => 'Rock',
        ]);
    }
}
