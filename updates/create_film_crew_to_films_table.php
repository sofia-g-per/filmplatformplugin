<?php namespace SofyaPer\FilmPlatform\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateFilmCrewToFilmsTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
class CreateFilmCrewToFilmsTable extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('sofyaper_film_platform_film_crew_to_films', function(Blueprint $table) {
            $table->integer('film_id')->unsigned();
            $table->integer('film_crew_id')->unsigned();
            $table->integer('film_crew_role_id')->unsigned();

            $table->primary(['film_id', 'film_crew_id', 'film_crew_role_id']);

            $table->foreign('film_crew_id')->references('id')->on('sofyaper_film_platform_film_crew')->onDelete('CASCADE');
            $table->foreign('film_crew_role_id')->references('id')->on('sofyaper_film_platform_film_crew_roles')->onDelete('CASCADE');
            $table->foreign('film_id')->references('id')->on('sofyaper_film_platform_films')->onDelete('CASCADE');
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::table('sofyaper_film_platform_film_crew_to_films', function (Blueprint $table) {
            $table->dropForeign(['film_crew_id']);
            $table->dropForeign(['film_id']);
            $table->dropForeign(['film_crew_role_id']);
        });
        Schema::dropIfExists('sofyaper_film_platform_film_crew_to_films');
    }
};
