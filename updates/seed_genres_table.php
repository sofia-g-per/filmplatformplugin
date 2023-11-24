<?php namespace SofyaPer\FilmPlatform\Updates;

use Seeder;
use SofyaPer\FilmPlatform\Models\Genre;

class SeedGenresTable extends Seeder
{
    public function run()
    {
        $genre = new Genre;
        $genre->name = 'драма';
        $genre->slug = 'drama';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'документальное кино';
        $genre->slug = 'documentary';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'автобиография';
        $genre->slug = 'autobiography';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'фентези';
        $genre->slug = 'fantasy';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'научная фантастика';
        $genre->slug = 'sci-fi';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'боевик';
        $genre->slug = 'action';
        $genre->save();
        
        $genre = new Genre;
        $genre->name = 'супергероика';
        $genre->slug = 'superhero';
        $genre->save();
        
        $genre = new Genre;
        $genre->name = 'триллер';
        $genre->slug = 'thriller';
        $genre->save();

        $genre = new Genre;
        $genre->name = 'комедия';
        $genre->slug = 'comedy';
        $genre->save();
    }
}
