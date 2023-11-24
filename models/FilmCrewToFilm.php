<?php namespace SofyaPer\FilmPlatform\Models;

use October\Rain\Database\Pivot as DatabasePivot;

/**
 * FilmCrewToFilms Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class FilmCrewToFilm extends DatabasePivot 
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'sofyaper_film_platform_film_crew_to_films';

    /**
     * @var array rules for validation
     */

    public $rules = [];

    public $belongsTo = [
        'film_crew_role' => [
            \SofyaPer\FilmPlatform\Models\FilmCrewRole::class, 
            'key' => 'film_crew_role_id',
            'otherKey' => 'id'
        ],
        'film' => [
            \SofyaPer\FilmPlatform\Models\Film::class, 
            'key' => 'film_id',
            'otherKey' => 'id'
        ],        
        'film_crew' => [
            \SofyaPer\FilmPlatform\Models\FilmCrew::class, 
            'key' => 'film_crew_id',
            'otherKey' => 'id'
        ]
    ];
}
