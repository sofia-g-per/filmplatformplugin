<?php namespace SofyaPer\FilmPlatform\Updates;

use Seeder;
use SofyaPer\FilmPlatform\Models\Film;
use SofyaPer\FilmPlatform\Models\FilmCrewRole;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SeedFilmsTable extends Seeder
{
    public function run()
    {
        $actorRoleId = FilmCrewRole::where('code', 'actor')->first();
        $directorRoleId = FilmCrewRole::where('code', 'director')->first();
        $actorRoleId = $actorRoleId["id"];
        $directorRoleId = $directorRoleId["id"];

        $film = new Film;
        $film->name = 'Мне двадцать лет';
        $film->release_date = new Carbon('1965-01-08');
        $film->slug = 'i-am-20';
        $film->save();
        
        $directors = DB::table('sofyaper_film_platform_film_crew')->whereIn('last_name', ['Хутсиев'])->pluck('id')->all();
        $film->film_crew()->attach($directors, ['film_crew_role_id' => $directorRoleId]);
        $actors = DB::table('sofyaper_film_platform_film_crew')->whereIn('last_name', ['Попов', 'Тарковский'])->pluck('id')->all();
        $film->film_crew()->attach($actors, ['film_crew_role_id' => $actorRoleId]);
        $genres = DB::table('sofyaper_film_platform_genres')->whereIn('slug', ['drama', 'documentary'])->pluck('id')->all();
        $film->genres()->attach($genres);
        $film->save();

        $film = new Film;
        $film->name = 'Зеркало';
        $film->release_date = new Carbon('1975-03-07');
        $film->slug = 'mirror';
        $film->save();
        $directors = DB::table('sofyaper_film_platform_film_crew')->whereIn('last_name', ['Тарковский'])->pluck('id')->all();
        $film->film_crew()->attach($directors, ['film_crew_role_id' => $directorRoleId]);
        $actors = DB::table('sofyaper_film_platform_film_crew')->whereIn('last_name', ['Тарковская', 'Данильцев'])->pluck('id')->all();
        $film->film_crew()->attach($actors, ['film_crew_role_id' => $actorRoleId]);
        $genres = DB::table('sofyaper_film_platform_genres')->whereIn('slug', ['drama', 'autobiography'])->pluck('id')->all();
        $film->genres()->attach($genres);
        $film->save();

        $film = new Film;
        $film->name = 'Сталкер';
        $film->release_date = new Carbon('1980-05-19');
        $film->slug = 'stalker';
        $film->save();
        $film->film_crew()->attach($directors, ['film_crew_role_id' => $directorRoleId]);
        $actors = DB::table('sofyaper_film_platform_film_crew')->whereIn('last_name', ['Кайдановский', 'Фрейндлих'])->pluck('id')->all();
        $film->film_crew()->attach($actors, ['film_crew_role_id' => $actorRoleId]);
        $genres = DB::table('sofyaper_film_platform_genres')->whereIn('slug', ['sci-fi', 'fantasy'])->pluck('id')->all();
        $film->genres()->attach($genres);
        $film->save();

        $film = new Film;
        $film->name = 'ДНК';
        $film->release_date = new Carbon('2020-07-12');
        $film->slug = 'dna';
        $film->save();
        $directors = DB::table('sofyaper_film_platform_film_crew')->whereIn('last_name', ['Ле Беско'])->pluck('id')->all();
        $film->film_crew()->attach($directors, ['film_crew_role_id' => $directorRoleId]);
        $actors = DB::table('sofyaper_film_platform_film_crew')->whereIn('last_name', ['Вахт', 'Ле Беско'])->pluck('id')->all();
        $film->film_crew()->attach($actors, ['film_crew_role_id' => $actorRoleId]);
        $genres = DB::table('sofyaper_film_platform_genres')->whereIn('slug', ['drama'])->pluck('id')->all();
        $film->genres()->attach($genres);
        $film->save();

        $film = new Film;
        $film->name = 'Человек-паук';
        $film->release_date = new Carbon('2002-03-03');
        $film->slug = 'spider-man';
        $film->save();
        $directors = DB::table('sofyaper_film_platform_film_crew')->whereIn('last_name', ['Рейми'])->pluck('id')->all();
        $film->film_crew()->attach($directors, ['film_crew_role_id' => $directorRoleId]);
        $actors = DB::table('sofyaper_film_platform_film_crew')->whereIn('last_name', ['Магуайар', 'Дефо'])->pluck('id')->all();
        $film->film_crew()->attach($actors, ['film_crew_role_id' => $actorRoleId]);
        $genres = DB::table('sofyaper_film_platform_genres')->whereIn('slug', ['action', 'superhero'])->pluck('id')->all();
        $film->genres()->attach($genres);
        $film->save();

        $film = new Film;
        $film->name = 'Город грехов';
        $film->release_date = new Carbon('2005-04-01');
        $film->slug = 'sin-city';
        $film->save();
        $directors = DB::table('sofyaper_film_platform_film_crew')->whereIn('last_name', ['Миллер', 'Родригез'])->pluck('id')->all();
        $film->film_crew()->attach($directors, ['film_crew_role_id' => $directorRoleId]);
        $actors = DB::table('sofyaper_film_platform_film_crew')->whereIn('last_name', ['Рурк', 'Уиллис', 'Альба'])->pluck('id')->all();
        $film->film_crew()->attach($actors, ['film_crew_role_id' => $actorRoleId]);
        $genres = DB::table('sofyaper_film_platform_genres')->whereIn('slug', ['thriller', 'action'])->pluck('id')->all();
        $film->genres()->attach($genres);
        $film->save();
    }
}
