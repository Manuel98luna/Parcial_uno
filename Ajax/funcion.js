//GUARDAMOS LA INSCRIPCION
$("#enviar").off("click");
$("#enviar").on("click", function(e) {
    $('enviar').attr("disabled", true);
    var codigo = $("#codigo").val();
    var nombre = $("#nombre").val();
    var apellidos = $("#apellidos").val();
    var dui = $("#dui").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var email = $("#email").val();
   
    parametros = {
        'codigo': codigo,
        'nombre': nombre,
        'apellidos': apellidos,
        'dui': dui,
        'direccion': direccion,
        'telefono': telefono,
        'email': email
    };
    $.ajax({
        type: "POST",
        url: "recibe_datos2.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg").html(datos);
            $('#enviar').attr("disabled", false);
            $('#codigo').val(''),
            $('#nombre').val(''),
            $('#apellidos').val(''),
            $('#dui').val(''),
            $('#direccion').val(''),
            $('#telefono').val(''),
            $('#email').val('')
        }
    });
    event.preventDefault();
});
