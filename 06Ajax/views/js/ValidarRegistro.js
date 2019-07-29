/*
============================================
        Validar usuario ajax
============================================
*/

$("#usuarioRegistro").change(function() {

    var usuario = $("#usuarioRegistro").val();


    var datos = new FormData();

    datos.append("validarUsuario", usuario);


    $.ajax({

        url: "views/modules/ajax.php",
        method: "POST",
        data: datos,
        cahce: false,
        contentType: false,
        processData: false,
        success: function(respuesta) {

            console.log(respuesta);
        }

    });




});
/*
============================================
      Fin  Validar usuario ajax
============================================
*/

/*
============================================
        Validar Registro
============================================
*/

function ValidarRegistro() {

    var usuario = document.querySelector("#usuarioRegistro").value;

    var password = document.querySelector("#passwordRegistro").value;

    var email = document.querySelector("#emailRegistro").value;

    var terminos = document.querySelector("#terminos").checked;
    /*
        ============================================
                Validar Usuario
        ============================================
    */

    if (usuario != "") {

        var caracteres = usuario.length;
        var expresion = /^[a-zA-Z0-9]*$/;
        if (caracteres > 6) {

            document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br/> Escriba por favor  menos de 6 caracteres";
            return false;
        }
        if (!expresion.test(usuario)) {

            document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br/> No ingrese Caracteres especiales";
            return false;

        }

    }

    /*
        ============================================
                Validar Password
        ============================================
    */

    if (password != "") {

        var caracteres = password.length;
        var expresion = /^[a-zA-Z0-9]*$/;
        if (caracteres < 6) {

            document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br/> Escriba por favor  menos de 6 caracteres";
            return false;
        }
        if (!expresion.test(password)) {

            document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br/> No ingrese Caracteres especiales";
            return false;

        }

    }

    /*
          ============================================
                  Validar Email
          ============================================
      */

    if (email != "") {


        var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

        if (!expresion.test(email)) {

            document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br/> Escriba correctamente el email ";
            return false;

        }

    }
    /*
        ============================================
                Validar Email
        ============================================
    */

    if (!terminos) {

        document.querySelector("form").innerHTML += "<br/> No se logro el reguistro, acepte terminos y condiciones";

        document.querySelector("#usuarioRegistro").value = usuario;

        document.querySelector("#passwordRegistro").value = password;

        document.querySelector("#emailRegistro").value = email;


        return false;
    }

    return true;

}

/*============================================
        Fin Validar Registro
============================================*/