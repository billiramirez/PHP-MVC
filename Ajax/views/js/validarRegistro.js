// VALIDAR USUARIO EXISTENTE AJAX ---------------------------------------------

$("#usuarioRegistro").change(function(){

    var usuario = $("#usuarioRegistro").val();
    var datos = new FormData();
    datos.append("validarUsuario", usuario);

    $.AJAX({
            url:"views/modules/ajax.php",     //Accedemos al archivo que queremos ocupar
            method:"POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            success:function(respuesta){   //Al igual que en POO podemos acceder a la funcion

                    console.log(respuesta);
            }

    });


});


// FIN VALIDAR USUARIO EXISTENTE AJAX------------------------------------------



//Validar registrio

function validarRegistro(){

  var usuario = document.querySelector("#usuarioRegistro").value; //Seleccionamos el valor utilizando el ID
  var password = document.querySelector("#passwordRegistro").value;
  var email = document.querySelector("#emailRegistro").value;
  var terminos = document.querySelector("#terminos").checked;


    //***Validar usuario*********/
    if (usuario !="") { //Si la variable viene llena

          var caracteres =usuario.legth; //Sacar la longitud
          var expresion =  /^[a-zA-Z0-9]*$/
          if (caracteres > 6) { //Si la longitud es mayor a 6

                document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br> Escriba por favor menos de 6 caracteres.";
                //   <--- selectionamos el label y agregamos codigo html con el innerHTML
                return false;
          }
          if (!expresion.test(usuario)) {
            document.querySelector("label[for='usuarioRegistro']").innerHTML += "<br> No escriba caracteres especiales.";
            return false;
          }


    }

    //***Validar password*********/
    if (password !="") { //Si la variable viene llena

          var caracteres =password.legth; //Sacar la longitud
          var expresion =  /^[a-zA-Z0-9]*$/
          if (caracteres < 6) { //Si la longitud es mayor a 6

                document.querySelector("label[for='passwordRegistro']").innerHTML += "<br> Escriba por favor mas de 6 caracteres.";
                //   <--- selectionamos el label y agregamos codigo html con el innerHTML
                return false;
          }
          if (!expresion.test(password)) {
            document.querySelector("label[for='passwordRegistro']").innerHTML += "<br> No escriba caracteres especiales.";
            return false;
          }


    }

    //***Validar email*********/
    if (email !="") { //Si la variable viene llena

          var expresion =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
          if (!expresion.test(email)) {
            document.querySelector("label[for='emailRegistro']").innerHTML += "<br> Escriba correctamente el email.";
            return false;
          }


    }

      //***Validar terminos*********/
    if (!terminos) {

      document.querySelector("form").innerHTML += "<br> Acepte terminos y condiciones para continuar.";
      document.querySelector("#usuarioRegistro").value = usuario; // Para no borrar los datos que tenian los inputs
      document.querySelector("#passwordRegistro").value = password;
      document.querySelector("#emailRegistro").value = email;
      return false;

    }
    return true;
}
//******************************************************fin ***********************
