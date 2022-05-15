<?php

namespace App\Http\Controllers\Api;

use App\Traits\SearchTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class GithubController extends Controller
{

    
    use SearchTrait;

    public function searchByName($nome)
    {
        $search = $this->createSearchObject('SearchByName', $nome, $repos = null);
        return $searchResults = $this->searchGithub($search);
    }

    public function searchByAllRepos($nome)
    {
        $search = $this->createSearchObject('searchByAllRepos', $nome, $repos = null);
        return $searchResults = $this->searchGithub($search);
    }

    public function searchByRepos($nome, $repos)
    {
        $search = $this->createSearchObject('SearchByRepos', $nome, $repos);
        return $searchResults = $this->searchGithub($search);
    }
}
