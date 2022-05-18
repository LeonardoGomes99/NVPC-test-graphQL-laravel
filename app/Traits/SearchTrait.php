<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


trait SearchTrait {

    protected $baseURL;

    public function __construct()
    {
        $this->baseURL = 'https://api.github.com/';
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
        if(isset($searchSubject->searchByName))
        {
            return $response = Http::get(
                $this->baseURL .
                'users/' .
                $searchSubject->name
            );
        }

        if(isset($searchSubject->searchByAllRepos))
        {
            return $response = Http::get(
                $this->baseURL .
                'users/' .
                $searchSubject->name . '/' .
                'repos'
            );
        }

        if(isset($searchSubject->searchByRepos))
        {
            return $response = Http::get(
                $this->baseURL .
                'repos/' .
                $searchSubject->name . '/' .
                $searchSubject->repos
            );
        }

        if(isset($searchSubject->searchByReposLanguages))
        {
            return $response = Http::get(
                $this->baseURL .
                'repos/' .
                $searchSubject->name . '/' .
                $searchSubject->repos . '/' .
                'languages'
            );
        }
    }

}