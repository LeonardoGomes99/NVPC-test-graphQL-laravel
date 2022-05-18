@foreach($results as $key=>$value)
    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-6 fw-bold lh-1">{{ $value->name }}</h1>
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
@endforeach
