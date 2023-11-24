<?php namespace SofyaPer\FilmPlatform\Models;

use Model;

/**
 * Genre Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Genre extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'sofyaper_film_platform_genres';

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public $timestamps = false;

    public $belongsToMany = [
        'films' => [
            \SofyaPer\FilmPlatform\Models\Film::class, 
            'table' => 'sofyaper_film_platform_genres_to_films',
            'key' => 'genre_id',
            'otherKey' => 'film_id'
        ]
    ];
}
