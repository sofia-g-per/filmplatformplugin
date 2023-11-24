<?php namespace SofyaPer\FilmPlatform\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Films Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class Films extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\RelationController::class
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'film_crew.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['sofyaper.filmplatform.films'];

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('SofyaPer.FilmPlatform', 'filmplatform', 'films');
    }
}
