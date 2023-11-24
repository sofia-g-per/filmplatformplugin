<?php namespace SofyaPer\FilmPlatform\Models;

use Model;

/**
 * FilmCrewRole Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class FilmCrewRole extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'sofyaper_film_platform_film_crew_roles';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $timestamps = false;

    protected $slugs = ['code' => 'name'];

    public $belongsToMany = [
        'filmCrew' => [
            \SofyaPer\FilmPlatform\Models\FilmCrew::class, 
            'table' => 'sofyaper_film_platform_film_crew_to_films',
            'pivotModel' => FilmCrewToFilms::class,
            'key' => 'film_crew_id',
            'otherKey' => 'film_crew_role_id'
        ]
    ];
}
