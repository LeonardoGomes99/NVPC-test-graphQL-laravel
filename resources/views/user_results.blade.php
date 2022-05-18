<div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-6 fw-bold lh-1" ><b>Nome do Usuário :</b></h1>
            <p class="display-6 fw-bold lh-1" >{{ $data->name ? $data->name : 'Sem Nome' }}</p>
            <p class="lead"><img src="{{ $data->avatar_url }}" alt="Sem Avatar" class="img-thumbnail"></p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <p><b>Biografia :</b></p>
                <p>{{ $data->bio ? $data->bio : 'Sem Biografia' }}</p>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <p><b>Conta Criada em :</b></p>
                <p>{{ $data->created_at ? $data->created_at : 'Nenhum Dado Encontrado' }}</p>
            </div>
        </div>
    </div>
</div>
