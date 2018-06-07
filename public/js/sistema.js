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