@extends('base/base')


@section('titulo')
    Fotografias de {{ $datos->nombre }}
@endsection

@section('cardBotones')
    <a href="{{ route('fotos') }}" class="button is-link"><i class="fas fa-reply"></i>&nbsp; Regresar</a>
@endsection

@section('cardContenido')
    <div class="container has-text-centered">
        <h3><strong>{{ $fotos->count() }}</strong> fotografia(s)</h3>
        <hr>
    </div>
    <div class="container">
        <div class="columns">
            @foreach ($fotos as $f)
                @if ((($loop->index) % 3) == 0)
            </div>
            <div class="columns">
                @endif
                    <div class="column is-one-third">
                        <div class="card">
                            <a style="cursor:pointer;" onclick="actualizaImagen('{{ $f->archivo }}');" class="js-modal-trigger" data-target="modal-foto">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="{{ $f->archivo }}" height="auto" width="100%">
                                    </figure>
                                </div>
                            </a>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content has-text-centered">
                                        <p id="estado{{ $f->id }}">
                                            @if ($f->visible)
                                                <i class="fas fa-check has-text-primary is-size-5"></i> Visible
                                            @else
                                                <i class="fas fa-clock has-text-info is-size-5"></i> Pendiente
                                            @endif
                                        </p>
                                        <hr>
                                        <div>
                                            @if ($f->visible)
                                                <a id="boton{{ $f->id }}" onclick="actualizarFoto({{ $f->id }}, 0);" class="button is-warning mt-1">
                                                    <i class="fas fa-times"></i>&nbsp;Quitar
                                                </a>
                                            @else
                                                <a id="boton{{ $f->id }}" onclick="actualizarFoto({{ $f->id }}, 1);" class="button is-success mt-1">
                                                    <i class="fas fa-check"></i>&nbsp;Mostrar
                                                </a>
                                            @endif
                                            <a onclick="borrarFoto({{ $f->id }});"  class="button is-danger mt-1">
                                                <i class="fas fa-trash"></i>&nbsp;Borrar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection

@section('extra')
<div class="modal" id="modal-foto">
    <div class="modal-background"></div>
    <div class="modal-content">
        <img id="fotoGrande" src="https://bulma.io/images/placeholders/1280x960.png" alt="">
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>


<form action="{{ route('fotos.borrarFoto') }}" method="post" id="formEliminar">
    @csrf
    <input type="hidden" name="idborrar" id="idborrar" value="">
</form>
@endsection

@section('extraJS')
<script>
    @if (session()->has('success'))
        Swal.fire({
            icon: 'success',
            title: 'Foto borrada correctamente!'
        });
    @endif

    document.addEventListener('DOMContentLoaded', () => {
        // Functions to open and close a modal
        function openModal($el) {
            $el.classList.add('is-active');
        }

        function closeModal($el) {
            $el.classList.remove('is-active');
        }

        function closeAllModals() {
            (document.querySelectorAll('.modal') || []).forEach(($modal) => {
            closeModal($modal);
            });
        }

        // Add a click event on buttons to open a specific modal
        (document.querySelectorAll('.js-modal-trigger') || []).forEach(($trigger) => {
            const modal = $trigger.dataset.target;
            const $target = document.getElementById(modal);

            $trigger.addEventListener('click', () => {
            openModal($target);
            });
        });

        // Add a click event on various child elements to close the parent modal
        (document.querySelectorAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button') || []).forEach(($close) => {
            const $target = $close.closest('.modal');

            $close.addEventListener('click', () => {
            closeModal($target);
            });
        });

        // Add a keyboard event to close all modals
        document.addEventListener('keydown', (event) => {
            const e = event || window.event;

            if (e.keyCode === 27) { // Escape key
            closeAllModals();
            }
        });
    });

    function actualizaImagen(foto){
        $('#fotoGrande').attr('src', foto);
    }

    function actualizarFoto(id, estado){
        $.ajax({
            type: "POST",
            url: '{{ route('fotos.actualizarFoto') }}',
            data: {'id': id, 'estado': estado, '_token': "{{ csrf_token() }}"},
            success: function(data){
                if(data == true){
                    if(estado == 1){
                        $('#estado'+id).html('<i class="fas fa-check has-text-primary is-size-5"></i> Visible');
                        $('#boton'+id).removeClass('is-success').addClass('is-warning');
                        $('#boton'+id).html('<i class="fas fa-times"></i>&nbsp;Quitar');
                        $('#boton'+id).attr('onclick', 'actualizarFoto('+id+', 0);');
                        Swal.fire({
                            icon: 'success',
                            title: 'Foto aceptada correctamente!'
                        });
                    }else{
                        $('#estado'+id).html('<i class="fas fa-clock has-text-info is-size-5"></i> Pendiente');
                        $('#boton'+id).removeClass('is-warning').addClass('is-success');
                        $('#boton'+id).html('<i class="fas fa-check"></i>&nbsp;Mostrar');
                        $('#boton'+id).attr('onclick', 'actualizarFoto('+id+', 1);');
                        Swal.fire({
                            icon: 'success',
                            title: 'Foto ocultada correctamente!'
                        });
                    }
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Ocurrio un error!'
                    });
                }
            }
        });
    }

    function borrarFoto(id){
        Swal.fire({
            title: 'Estas seguro que desea borrar esta foto?',
            text: "Esta accion no se puede revertir",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, borrar esta foto'
        }).then((result) => {
            if(result.value === true){
                $('#idborrar').val(id);
                $('#formEliminar').submit();
            }
        });
    }
</script>
@endsection
