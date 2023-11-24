<?php namespace SofyaPer\FilmPlatform\Components;

use Cms\Classes\ComponentBase;

/**
 * Reviews Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Reviews extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'UsersFavouriteFilms Component',
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

    public function addToFavourites()
    {
        
        return [];
    }
}
