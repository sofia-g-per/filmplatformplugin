<?php namespace SofyaPer\FilmPlatform\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateGenresToFilmsTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
class CreateGenresToFilmsTable extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('sofyaper_film_platform_genres_to_films', function(Blueprint $table) {
            $table->integer('film_id')->unsigned();
            $table->integer('genre_id')->unsigned();

            $table->primary(['film_id', 'genre_id']);

            $table->foreign('genre_id')->references('id')->on('sofyaper_film_platform_genres')->onDelete('CASCADE');
            $table->foreign('film_id')->references('id')->on('sofyaper_film_platform_films')->onDelete('CASCADE');
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::table('sofyaper_film_platform_genres_to_films', function (Blueprint $table) {
            $table->dropForeign(['genre_id']);
            $table->dropForeign(['film_id']);
        });
        Schema::dropIfExists('sofyaper_film_platform_genres_to_films');
    }
};
