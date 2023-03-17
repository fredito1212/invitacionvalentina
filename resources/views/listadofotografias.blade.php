@extends('base/base')

@section('titulo')
    Fotografias de los invitados
@endsection

@section('cardBotones')

@endsection

@section('cardContenido')
    <div class="columns">
    @foreach ($listado as $l)
        @if ((($loop->index) % 3) == 0)
    </div>
    <div class="columns">
        @endif
            <div class="column is-one-third">
                <a href="{!! url('fotos', ['codigo' => $l['codigo']]) !!}">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="{{ $l['fotos'][0]->first()->archivo }}" height="auto" width="100%">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content has-text-centered">
                                    <p class="title is-4">{{ $l['nombre'] }}</p>
                                    <p class="subtitle is-6">
                                        {{ $l['fotos']->count() }} <i class="fas fa-camera mr-6 has-text-link"></i>
                                        {{ $l['pendientes'] }} <i class="fas fa-clock has-text-info"></i>&nbsp;/&nbsp;
                                        {{ $l['aceptadas'] }} <i class="fas fa-check has-text-primary"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    @endforeach
    </div>
@endsection

@section('extra')

@endsection

@section('extraJS')

@endsection
