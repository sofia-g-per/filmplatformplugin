<?php namespace SofyaPer\FilmPlatform\Updates;

use Seeder;
use SofyaPer\FilmPlatform\Models\FilmCrew;

class SeedFilmCrewTable extends Seeder
{
    public function run()
    {
        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Андрей';
        $filmCrew->last_name = 'Тарковский';
        $filmCrew->slug = 'andrey-tarkovskiy';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Марлен';
        $filmCrew->last_name = 'Хутсиев';
        $filmCrew->slug = 'marlen-hutsiev';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Валентин';
        $filmCrew->last_name = 'Попов';
        $filmCrew->slug = 'valentin-popov';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Лариса';
        $filmCrew->last_name = 'Тарковская';
        $filmCrew->slug = 'larisa-tarkovskaya';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Игнат';
        $filmCrew->last_name = 'Данильцев';
        $filmCrew->slug = 'ignat-daniltsev';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Александр';
        $filmCrew->last_name = 'Кайдановский';
        $filmCrew->slug = 'alexander-kaydanockiy';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Алиса';
        $filmCrew->last_name = 'Фрейндлих';
        $filmCrew->slug = 'alisa-freindlih';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Майвенн';
        $filmCrew->last_name = 'Ле Беско';
        $filmCrew->slug = 'maiwenn-le-besco';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Сэм';
        $filmCrew->last_name = 'Рейми';
        $filmCrew->slug = 'sam-raymy';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Тоби';
        $filmCrew->last_name = 'Магуайар';
        $filmCrew->slug = 'toby-maguire';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Марин';
        $filmCrew->last_name = 'Вахт';
        $filmCrew->slug = 'marin-vaht';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Уиллем';
        $filmCrew->last_name = 'Дефо';
        $filmCrew->slug = 'willem-defo';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Франк';
        $filmCrew->last_name = 'Миллер';
        $filmCrew->slug = 'frank-miller';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Роберт';
        $filmCrew->last_name = 'Родригез';
        $filmCrew->slug = 'robert-rodrigez';
        $filmCrew->save();

        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Микки';
        $filmCrew->last_name = 'Рурк';
        $filmCrew->slug = 'mikkie-rurg';
        $filmCrew->save();
        
        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Брюс';
        $filmCrew->last_name = 'Уиллис';
        $filmCrew->slug = 'bruce-willis';
        $filmCrew->save();
        
        $filmCrew = new FilmCrew;
        $filmCrew->first_name = 'Джессика';
        $filmCrew->last_name = 'Альба';
        $filmCrew->slug = 'jessica-alba';
        $filmCrew->save();
    }
}
