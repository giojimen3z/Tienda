/*
============================================
        Validar Registro
============================================
*/

function ValidarCambio(){

    var usuario =document.querySelector("#usuarioEditar").value;
    
    var password =document.querySelector("#passwordEditar").value;
    
    var email =document.querySelector("#emailEditar").value;
    
  
    /*
        ============================================
                Validar Usuario
        ============================================
    */

    if (usuario != ""){

        var caracteres = usuario.length;
        var expresion =/^[a-zA-Z0-9]*$/;
        if (caracteres > 6){
            
            document.querySelector("label[for='usuarioEditar']").innerHTML += "<br/> Escriba por favor  menos de 6 caracteres" ;
            return false;
        }
        if (!expresion.test(usuario)){

            document.querySelector("label[for='usuarioEditar']").innerHTML += "<br/> No ingrese Caracteres especiales" ;
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
        if (caracteres < 6){
            
            document.querySelector("label[for='usuarioEditar']").innerHTML += "<br/> Escriba por favor  menos de 6 caracteres" ;
            return false;
        }
        if (!expresion.test(password)){

            document.querySelector("label[for='usuarioEditar']").innerHTML += "<br/> No ingrese Caracteres especiales" ;
            return false;

        }

    }

  /*
        ============================================
                Validar Email
        ============================================
    */

   if (email != ""){

   
       var expresion =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

        if (!expresion.test(email)){

            document.querySelector("label[for='usuarioEditar']").innerHTML += "<br/> Escriba correctamente el email " ;
            return false;

        }

    }    
   

  

    return true;

}

/*============================================
        Fin Validar Registro
============================================*/