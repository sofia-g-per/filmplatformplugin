<?php namespace SofyaPer\FilmPlatform\Models;

use Model;
use \SofyaPer\FilmPlatform\Models\FilmCrewToFilm;

/**
 * FilmCrew Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class FilmCrew extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'sofyaper_film_platform_film_crew';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    protected $slugs = ['slug' => 'name'];

    public $timestamps = false;


    public $belongsToMany = [
        
        'roles' => [
            \SofyaPer\FilmPlatform\Models\FilmCrewRole::class, 
            'table' => 'sofyaper_film_platform_film_crew_to_films',
            'pivotModel' => FilmCrewToFilm::class,
            'key' => 'film_crew_id',
            'otherKey' => 'film_crew_role_id'
        ],
        'films' => [
            \SofyaPer\FilmPlatform\Models\Film::class, 
            'table' => 'sofyaper_film_platform_film_crew_to_films',
            'pivotModel' => FilmCrewToFilm::class,
            'key' => 'film_crew_id',
            'otherKey' => 'film_id'
        ]
    ];
}
