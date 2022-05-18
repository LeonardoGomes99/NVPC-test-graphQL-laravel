@foreach($data as $key=>$value)
    <div class="div_parent_data" id="{{ vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) ); }}" 
    data-infoListFilter="{{ json_encode(['L' => $value->language, 'D' => $value->description, 'N' => $value->name, 'C' => $value->pushed_at], JSON_UNESCAPED_UNICODE) }}">
        <div class="container my-5" id="{{ $value->id }}" data-infoList="{{ json_encode($value, JSON_UNESCAPED_UNICODE) }}" >
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-6 fw-bold lh-1" ><b>Nome do Repositorio :</b></h1>
                    <p class="display-6 fw-bold lh-1" ><b>{{ $value->name ? $value->name : 'Repositorio Sem Titulo' }}</b></p>
                    <p class="lead"> <b>Descrição :</b></p>
                    <p class="lead"> <b>{{ $value->description ? $value->description : 'Sem Descrição' }}</b></p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <p><b>Linguagem :</b>{{ $value->language ? $value->language : 'Linguagem não listada' }}</p>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <p><b>Ultimo Commit :</b>{{ $value->pushed_at ? $value->pushed_at : 'Repositorio vazio' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
