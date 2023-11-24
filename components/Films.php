<?php namespace SofyaPer\FilmPlatform\Components;

use Cms\Classes\ComponentBase;
use SofyaPer\FilmPlatform\Models\FilmCrewRole;
use SofyaPer\FilmPlatform\Models\Film;

/**
 * Films Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Films extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Films Component',
            'description' => 'Для получения списка фильмов'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'maxItems' => [
                'title' => 'min value',
                'description' => 'Максимальное количество ',
                'default' => 10,
                'type' => 'string',
                'validation' => [
                    'regex' => [
                        'message' => 'The Max Items property can contain only numeric symbols.',
                        'pattern' => '^[0-9]+$'
                    ]
                ]
            ]
        ];
    }

    public function films()
    {
        return Film::all();
    }

    private function filterByGenre($query, $genreSlug){
        $query = $query->whereRelation('genres', 'slug', $genreSlug);
        return $query;
    } 
    
    /**
     * Фильтрация по актерам и режиссерам
     * @param Illuminate\Database\Eloquent\Model::query $query запрос на выборку из таблицы с фильмами
     * @param array<int> $filmCrewIds список id актеров и режиссеров
     * @param string $roleCode код профессии (например актер или режиссер) из таблицы film_crew_roles
     * @return Illuminate\Database\Eloquent\Model::query запрос с добавленным фильтром по дате выпуска
     */
    private function filterByCrewRole($query, $filmCrewIds, $roleCode){
        $roleId = FilmCrewRole::where('code', $roleCode)->pluck('id')->first();

        $query = $query->whereHas('film_crew', function ($query) use($roleId, $filmCrewIds){
            $query->whereIn('film_crew_id', $filmCrewIds)
                ->where('film_crew_role_id', $roleId);
        });

        return $query;
    } 

    /**
     * Фильтрация по дате выпуска (от, до)
     * @param Illuminate\Database\Eloquent\Model::query $query запрос на выборку из таблицы с фильмами
     * @param Date $release_date_from дата начала диапозона (от)
     * @param Date $release_date_until дата окончания диапозона (до)
     * @return Illuminate\Database\Eloquent\Model::query запрос с добавленным фильтром по дате выпуска
     */
    private function filterByDate($query, $release_date_from, $release_date_until){
        $query = $query->whereBetween('release_date',[$release_date_from, $release_date_until]);

        return $query;
    } 

    /**
     * Получение фильмов по жанрам из параметров страницы
     * @return array <SofyaPer\FilmPlatform\Models\Film> список фильма указанного жанра
     */
    public function getFilmsByGenre(){
        $genreSlug = $this->param('genre');
        $query = Film::query();
        $query = $query->whereRelation('genres', 'slug', $genreSlug);
        return $query->get();
    }

    /**
     * AJAX handler для фильтрации фильмов
     */
    public function onFilter()
    {
        $release_date_from = input('release_date_from');
        $release_date_until = input('release_date_until');
        $directors = input('directors');
        $actors = input('actors');
        $genreSlug = $this->param('genre');
        $query = Film::query();

        if($genreSlug){
            $query = $this->filterByGenre($query, $genreSlug);
        }

        if($release_date_from && $release_date_until){
            $query = $this->filterByDate($query, $release_date_from, $release_date_until);
        }

        if($directors){
            $query = $this->filterByCrewRole($query, $directors, 'director');
        }

        if($actors){
            $query = $this->filterByCrewRole($query, $actors, 'actor');
        }

        $films = $query->get();
        $this->page['films'] = $films;
    }

    /**
     * Получение фильмов по slug
     * @return SofyaPer\FilmPlatform\Models\Film фильм с указанном в параметрах страницы значению slug
     */
    public function getFilmBySlug(){
        $filmSlug = $this->param('film');

        $actorId = FilmCrewRole::where('code', 'actor')->pluck('id')->first();
        $directorId = FilmCrewRole::where('code', 'director')->pluck('id')->first();

        $film = Film::query()->where('slug', $filmSlug)->with(['genres'])->first();
        $film->actors = $film->film_crew()->where('film_crew_role_id', $actorId)->get();
        $film->directors = $film->film_crew()->where('film_crew_role_id', $directorId)->get();
        return $film;
    }
}
