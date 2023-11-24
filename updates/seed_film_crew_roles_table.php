<?php namespace SofyaPer\FilmPlatform\Updates;

use Seeder;
use SofyaPer\FilmPlatform\Models\FilmCrewRole;

class SeedFilmCrewRolesTable extends Seeder
{
    public function run()
    {
        $filmCrewRole = new FilmCrewRole;
        $filmCrewRole->name = 'актер';
        $filmCrewRole->code = 'actor';
        $filmCrewRole->save();

        $filmCrewRole = new FilmCrewRole;
        $filmCrewRole->name = 'режиссер';
        $filmCrewRole->code = 'director';
        $filmCrewRole->save();

    }
}
