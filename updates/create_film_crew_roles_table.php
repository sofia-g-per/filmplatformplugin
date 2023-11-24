<?php namespace SofyaPer\FilmPlatform\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateFilmCrewRolesTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
class CreateFilmCrewRolesTable extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('sofyaper_film_platform_film_crew_roles', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name')->unique();
            $table->string('code')->unique();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('sofyaper_film_platform_film_crew_roles');
    }
};
