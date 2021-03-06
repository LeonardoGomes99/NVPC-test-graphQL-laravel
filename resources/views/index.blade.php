@extends('layouts.base')
@section('title', 'Homepage')
@section('content')
<main>
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <div class="navbar-form navbar-left">
                    <div class="input-group">
                        <input id="search_username" type="text" class="form-control" placeholder="Nome do Usuário">
                        <input id="search_project" type="text" class="form-control" placeholder="Nome do Projeto">
                        <div class="input-group-btn">
                            <button id="search_" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>
                    </div>
                    <div class="input-group p-2">
                        <div class="input-group-btn">
                            <h5>Buscar Por</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="user" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Usuário
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="sgl_rep">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Repositório Especifico
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="all_rep">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Todos os Repositórios
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="filter-container" class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-3 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <div class="navbar-form navbar-left" action="/action_page.php">
                    <div class="input-group">
                        <select id="filter_select" class="form-select" aria-label="Default select example" disabled>
                            <option selected value="N">Ordem Alfabética</option>
                            <option value="C">Commit</option>
                        </select>
                        <input id="search_bar_input" type="text" class="form-control" placeholder=" Procurar por Nome " disabled>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="body_results">

    </div>
</main>
@stop
