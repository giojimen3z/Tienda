/*
============================================
        Validar Ingreso
============================================
*/

function ValidarIngreso(){

    var usuario =document.querySelector("#usuarioIngreso").value;
    
    var password =document.querySelector("#passwordIngreso").value;
    

    /*
        ============================================
                Validar Usuario
        ============================================
    */

    if (usuario != ""){

        var caracteres = usuario.length;
        var expresion =/^[a-zA-Z0-9]*$/;
        if (caracteres > 6){
            
            document.querySelector("label[for='usuarioIngreso']").innerHTML += "<br/> Por favor revise su  usuario" ;
            return false;
        }
        if (!expresion.test(usuario)){

            document.querySelector("label[for='usuarioIngreso']").innerHTML += "<br/> No ingrese Caracteres especiales" ;
            return false;

        }

    }
 
    /*
        ============================================
                Validar Password
        ============================================
    */

    if (password != ""){

        var caracteres = password.length;
        var expresion =/^[a-zA-Z0-9]*$/;
        /*if (caracteres < 6){
            
            document.querySelector("label[for='usuarioIngreso']").innerHTML += "<br/> Escriba por favor  menos de 6 caracteres" ;
            return false;
        }*/
        if (!expresion.test(password)){

            document.querySelector("label[for='usuarioIngreso']").innerHTML += "<br/> No ingrese Caracteres especiales" ;
            return false;

        }

    }

    return true;

}

/*============================================
        Fin Validar Ingreso
============================================*/