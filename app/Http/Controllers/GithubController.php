<?php

namespace App\Http\Controllers;

use App\Traits\SearchTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GithubController extends Controller
{
    use SearchTrait;

    public function searchByName($nome)
    {
        $search = $this->createSearchObject('searchByName', $nome, $repos = null);
        $searchResults = $this->searchGithub($search);
        return $this->return_view($searchResults, 'user');
    }

    public function searchByAllRepos($nome)
    {
        $search = $this->createSearchObject('searchByAllRepos', $nome, $repos = null);
        $searchResults = $this->searchGithub($search);
        return $this->return_view($searchResults, 'repos');
    }

    public function searchByRepos($nome, $repos)
    {
        $search = $this->createSearchObject('searchByRepos', $nome, $repos);
        $searchResults = $this->searchGithub($search);
        return $this->return_view($searchResults, 'repos-unique');
    }

    public function searchByReposLanguages($nome, $repos)
    {
        $search = $this->createSearchObject('searchByReposLanguages', $nome, $repos);
        $searchResults = $this->searchGithub($search);
        return $this->return_view($searchResults, 'repos');
    }

    public function return_view($searchResults, $type)
    {
        $data = json_decode($searchResults->getBody());

        if($searchResults->getStatusCode() == '403')
        {
            return response()->json([
                'message' => 'Número de Requisições da API do Github chegou ao Limite, Espere 3 Minutos para realizar outra pesquisa'
            ], 403);
        }

        if($searchResults->getStatusCode() == '404')
        {
            return response()->json([
                'message' => 'Não encontrado'
            ], 404);
        }
        
        
        if($type == 'repos')
        { 
            return view('project_results', ['data' => $data]);
        }
        elseif($type == 'repos-unique')
        {
            $data = [$data];
            return view('project_results', ['data' => $data]);
        }
        elseif( $type == 'user')
        {
            return view('user_results', ['data' => $data]);
        }
    }
}
