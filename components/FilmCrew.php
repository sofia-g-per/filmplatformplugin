<?php namespace SofyaPer\FilmPlatform\Components;

use Cms\Classes\ComponentBase;
use SofyaPer\FilmPlatform\Models\FilmCrew as FilmCrewModel;
use SofyaPer\FilmPlatform\Models\FilmCrewRole;

/**
 * FilmCrew Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class FilmCrew extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'FilmCrew Component',
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

    private function getByRoleCode($code)
    {
        return FilmCrewModel::whereRelation('roles', 'code', $code)->get();
    }

    public function actors()
    {
        return $this->getByRoleCode('actor');
    }

    public function directors()
    {
        return $this->getByRoleCode('director');
    }
}
