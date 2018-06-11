$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function consultaDatos(url, datos) {
    $.get(url, datos, function(resultado){
        $('#tabla').html(resultado)
    });
}

function cargaModal(url)    {
    $( "#modalCuerpo" ).load(url);
    $( "#modalAgregar" ).modal();
}

function guardaDatos()  {
    var datos;
    var url;

    datos = $('#modalCuerpo').find('form').serialize();
    url = $('#modalCuerpo').find('form').attr('action');
    $.post(url, datos, function(resultado) {
        $('#tabla').html(resultado);
    });
}

function borrar(url)
{
    // $('#modalBorrar').modal();
    if (!confirm("¿Está seguro de querer borrar este registro?"))   {
        return;
    }
    
    datos = '_method=DELETE';

    $.post(url, datos, function(resultado) {
        $('#tabla').html(resultado)
    }).fail(function(m){
        console.log(m);
    });
}