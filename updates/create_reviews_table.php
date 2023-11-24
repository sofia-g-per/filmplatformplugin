<?php namespace SofyaPer\FilmPlatform\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateUsersToFilmsTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
class CreateUsersToFilmsTable extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('sofyaper_film_platform_reviews', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('film_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('rating')->unsigned();
            $table->string('comment')->nullable()->default(null);

           
            $table->foreign('film_id')->references('id')->on('sofyaper_film_platform_films')->onDelete('CASCADE');
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::table('sofyaper_film_platform_reviews', function (Blueprint $table) {
            $table->dropForeign(['film_id']);
        });
        Schema::dropIfExists('sofyaper_film_platform_reviews');
    }
};
