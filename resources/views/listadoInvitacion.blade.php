@extends('base/base')


@section('titulo')
Listado de invitaciones
@endsection

@section('cardBotones')
<button class="button is-info mt-1 mr-4" onclick="mostrarRegistro();"><i class="fas fa-plus"></i>&nbsp;Registrar</button>
@endsection

@section('cardContenido')
<div class="container mb-4">
    @if ($message = Session::get('success'))
    <div class="notification is-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div class="notification is-danger">
        <p>{{ $message }}</p>
    </div>
    @endif
</div>


<div class="container" id="div-registro" style="display:none;">
    <h4>Registro de invitado</h4>
    <form action="invitaciones/registrar" method="post">
        @csrf
        <div class="columns">
            <div class="column">
                <input type="text" id="nombre" name="nombre" class="input is-rounded" placeholder="Nombre del invitado" required>
            </div>
            <div class="column">
                <input type="text" id="telefono" name="telefono" class="input is-rounded" placeholder="Teléfono" required maxlength="10">
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <input type="number" id="invitados" name="invitados" class="input is-rounded" placeholder="No. de invitados" value="1" required>
            </div>
            <div class="column">
                <button type="submit" class="button is-success"><i class="fas fa-save"></i>&nbsp;Guardar</button>
                <a class="button is-danger" onclick="cerrar('div-registro')"><i class="fas fa-times"></i>&nbsp;Cerrar</a>
            </div>
        </div>

    </form>
    <hr>
</div>

<div class="container" id="div-modificacion" style="display:none;">
    <h4>Registro de invitado</h4>
    <form action="invitaciones/actualizar" method="post">
        @csrf
        <input type="hidden" name="idmod" id="idmod">
        <div class="columns">
            <div class="column">
                <input type="text" id="nombremod" name="nombremod" class="input is-rounded" placeholder="Nombre del invitado" required>
            </div>
            <div class="column">
                <input type="text" id="telefonomod" name="telefonomod" class="input is-rounded" placeholder="Teléfono" required maxlength="10">
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <input type="number" id="invitadosmod" name="invitadosmod" class="input is-rounded" placeholder="No. de invitados" required>
            </div>
            <div class="column">
                <button type="submit" class="button is-success"><i class="fas fa-save"></i>&nbsp;Guardar</button>
                <a class="button is-danger" onclick="cerrar('div-modificacion')"><i class="fas fa-times"></i>&nbsp;Cerrar</a>
            </div>
        </div>

    </form>
    <hr>
</div>

<div class="container">
    <div class="columns">
        <div class="column has-text-centered">
            <h3>Invitaciones:</h3>
            <h3>{{ $invitados }}</h3>
        </div>
        <div class="column has-text-centered">
            <h3>Confirmados:</h3>
            <h3>{{ $confirmados }}</h3>
        </div>
        <div class="column has-text-centered">
            <h3>Total invitados:</h3>
            <h3>{{ $total }}</h3>
        </div>
    </div>
</div>
<hr>
<div class="table-container">
    <table class="table is-striped is-hoverable is-fullwidth">
        <thead>
            <tr>
                <td>#</td>
                <td>Nombre</td>
                <td>Telefono</td>
                <td>Invitados</td>
                <td>Confirmado</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $d)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $d->nombre }}</td>
                    <td>{{ $d->telefono }}</td>
                    <td>{{ $d->invitados }}</td>
                    <td>
                        @if ($d->confirmacion)
                            <i class="fas fa-circle-check has-text-success"></i>
                        @else
                            <i class="fas fa-clock has-text-info"></i>
                        @endif
                    </td>
                    <td>
                        @if (!$d->confirmacion)
                        <form action="/invitaciones/confirmar" method="post" id="formcon" style="display: inline-block" class="mt-1">
                            @csrf
                            <input type="hidden" name="id" value="{{ $d->id }}">
                            <button class="button is-success is-small" type="submit" data-tooltip="Confirmar asistencia">
                                <i class="fas fa-check"></i>
                            </button>
                        </form>
                        @endif
                        <button onclick="modificarRegistro({{ $d->id }}, '{{ $d->nombre }}', '{{ $d->telefono }}', {{ $d->invitados }})" class="mt-1 button is-secondary is-small" data-tooltip="Editar">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button onclick="enviarinvitacion('{{ $d->nombre }}', '{{ $d->telefono }}', '{{ $d->codigo }}')" class="mt-1 button is-info is-small" data-tooltip="Enviar invitacion por WA">
                            <i class="fas fa-envelope"></i>
                        </button>
                        <button onclick="eliminar({{ $d->id }})" class="mt-1 button is-danger is-small" data-tooltip="Eliminar">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('extra')
<form action="/invitaciones/eliminar" method="post" id="formdel">
    @csrf
    <input type="hidden" id="iddel" name="iddel">
</form>
@endsection

@section('extraJS')
<script>
    function cerrar(div){
        $('#'+div).hide(200);
    }

    function mostrarRegistro() {
        $('#div-registro').show(200);
    }

    function modificarRegistro(id, nombre, telefono, invitados) {
        $('#idmod').val(id);
        $('#nombremod').val(nombre);
        $('#telefonomod').val(telefono);
        $('#invitadosmod').val(invitados);
        $('#div-modificacion').show(200);
    }

    function enviarinvitacion(nombre, telefono, codigo) {
        let invitacion = 'https://api.whatsapp.com/send?phone=';
        invitacion += telefono;
        invitacion += '&text=Hola%20';
        invitacion += nombre.replace(' ', '%20');
        invitacion += '%20nos%20es%20grato%20invitarte%20al%20bautizo%20de%20valentina,%20confirma%20tu%20invitaci%C3%B3n%20en%20el%20siguiente%20enlace%20https://bautizovalentina.com'
        invitacion += '/'+codigo;
        window.open(invitacion, '_blank');
    }

    function eliminar(id) {
        Swal.fire({
            title: '¿Estas seguro?',
            text: "Este cambio no se puede revertir!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, borrar!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
                $('#iddel').val(id);
                $('#formdel').submit();
            })
    }
</script>
@endsection
