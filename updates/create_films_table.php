<?php namespace SofyaPer\FilmPlatform\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateFilmsTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
class CreateFilmsTable extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('sofyaper_film_platform_films', function(Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('description')->nullable()->default(null);
            $table->date('release_date');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('sofyaper_film_platform_films');
    }
};
