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
        $search = $this->createSearchObject('searchByName', $nome, $repos = null);
        $searchResults = $this->searchGithub($search);
        return $searchResults;
    }

    public function searchByAllRepos($nome)
    {
        $search = $this->createSearchObject('searchByAllRepos', $nome, $repos = null);
        $searchResults = $this->searchGithub($search);
        return $searchResults;
    }

    public function searchByRepos($nome, $repos)
    {
        $search = $this->createSearchObject('searchByRepos', $nome, $repos);
        $searchResults = $this->searchGithub($search);
        return $searchResults;
    }

    public function searchByReposLanguages($nome, $repos)
    {
        $search = $this->createSearchObject('searchByReposLanguages', $nome, $repos);
        $searchResults = $this->searchGithub($search);
        return $searchResults;
    }
}
