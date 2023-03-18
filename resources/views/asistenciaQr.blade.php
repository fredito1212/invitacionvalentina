@extends('base/base')

@section('titulo')
    Confirmar llegada al evento
@endsection

@section('cardBotones')

@endsection

@section('cardContenido')
    <div class="columns">
        <div class="column is-12 regular-section" data-aos="fade-up" data-aos-easing="linear">
            <h1 class="title has-text-centered section-title is-capitalized">Escanea el código QR del invitado.</h1>
        </div>
    </div>
    <div class="columns text-center">
        <div class="column is-full has-text-centered">
            <div id="reader" width="600px" height="600px"></div>
        </div>
    </div>
@endsection

@section('extra')

@endsection

@section('extraJS')
<script>
    var lastResult, countResults = 0;

    function onScanSuccess(decodedText, decodedResult) {
        if (decodedText !== lastResult) {
            lastResult = decodedText;
            $.ajax({
                type: "POST",
                url: '{{ route('asistencia.confirmar') }}',
                data: {'codigo': decodedText, '_token': "{{ csrf_token() }}"},
                success: function(data){
                    data = JSON.parse(data);
                    Swal.fire({
                        icon: data.icono,
                        title: data.message,
                        showConfirmButton: false,
                        timer: 2000
                    })
                    if(data.icono != 'success'){
                        lastResult = '';
                    }
                }
            });
            html5QrcodeScanner.clear();
            setTimeout(() => {
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
            }, 2000);
        }
    }

    function onScanFailure(error) {
    // handle scan failure, usually better to ignore and keep scanning.
    // for example:
    console.warn(`Code scan error = ${error}`);
    }

    let html5QrcodeScanner = new Html5QrcodeScanner(
    "reader",
    { fps: 10, qrbox: {width: 250, height: 250} },
    /* verbose= */ false);
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>
@endsection
