<?php

namespace App\Http\Controllers;

use App\Traits\SearchTrait;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    use SearchTrait;

    public function searchByName($nome)
    {
        $search = $this->createSearchObject('searchByName', $nome, $repos = null);
        $searchResults = $this->searchGithub($search);
        return $this->return_view($searchResults);
    }

    public function searchByAllRepos($nome)
    {
        $search = $this->createSearchObject('searchByAllRepos', $nome, $repos = null);
        $searchResults = $this->searchGithub($search);
        return $this->return_view($searchResults);
    }

    public function searchByRepos($nome, $repos)
    {
        $search = $this->createSearchObject('searchByRepos', $nome, $repos);
        $searchResults = $this->searchGithub($search);
        return $this->return_view($searchResults);
    }

    public function searchByReposLanguages($nome, $repos)
    {
        $search = $this->createSearchObject('searchByReposLanguages', $nome, $repos);
        $searchResults = $this->searchGithub($search);
        return $this->return_view($searchResults);
    }

    public function return_view($searchResults)
    {
        $data = json_decode($searchResults->getBody());
        dd($data);
        return view('results', ['resultsData' => $searchResults]);
    }
}
