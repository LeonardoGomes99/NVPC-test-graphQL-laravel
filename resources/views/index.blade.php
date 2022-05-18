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
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-3 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <div class="navbar-form navbar-left" action="/action_page.php">
                    <div class="input-group">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Escolha Opção de Filtro</option>
                            <option value="1">Ordem Alfabética</option>
                            <option value="2">Linguagem</option>
                            <option value="3">Descrição</option>
                        </select>
                        <input type="text" class="form-control" placeholder="...">
                        <div class="input-group-btn">
                            <button class="btn btn-primary">
                                Filtrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-6 fw-bold lh-1">TITULO DO PROJETO GITHUB</h1>
                <p class="lead">Descrição GITHUB TESTE</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <p>Linguagens</p>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <p>Ultimos Commits</p>
                </div>
            </div>
        </div>
    </div>
</main>
@stop