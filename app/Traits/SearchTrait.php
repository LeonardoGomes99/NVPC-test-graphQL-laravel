<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


trait SearchTrait {

    protected $baseURL;

    public function __construct()
    {
        $this->baseURL = 'Https://api.github.com/';
    }

    public function createSearchObject($typeOfSearch, $name, $repos)
    {
        $searchObject[$typeOfSearch] = true;
        $searchObject['name'] = $name;
        $searchObject['repos'] = $repos;

        return $searchObject = (object) $searchObject;
    }

    public function searchGithub($searchSubject)
    {
        if(isset($searchSubject->SearchByName))
        {
            return $response = Http::get(
                $this->baseURL .
                'users/' .
                $searchSubject->name
            );
        }

        if(isset($searchSubject->SearchByRepos))
        {
            return $this->baseURL .
                'users/' .
                $searchSubject->name . '/' .
                $searchSubject->repos;
            return $response = Http::get(
                $this->baseURL .
                'users/' .
                $searchSubject->name . '/' .
                $searchSubject->repos
            );
        }
    }

}