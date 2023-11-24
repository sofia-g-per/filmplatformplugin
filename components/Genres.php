<?php namespace SofyaPer\FilmPlatform\Components;

use Cms\Classes\ComponentBase;
use SofyaPer\FilmPlatform\Models\Genre;

/**
 * Genres Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Genres extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Genres Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function genres()
    {
        return Genre::all();
    }

}
