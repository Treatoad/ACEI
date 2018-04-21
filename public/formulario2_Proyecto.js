function form_onload(){
  var butonOk = document.getElementById("btnConfirmar");
  butonOk.addEventListener('click',butonOk_onclick, false);
}

var isEmpty = /^\s*$/;
var isStandardWord = /^[A-Za-z0-9'ñÑáéíóúü]{1,50}$/;
var isStandardEmail = /^[a-z][a-z0-9._]*@[a-z][a-z0-9._]*.[a-z]{2,12}$/;

function butonOk_onclick(e){
  e.preventDefault();
  e.stopPropagation();
  var nombre = document.getElementById("txtNombre");
  var correo = document.getElementById("txtCorreo");

  var hayError = false;
  document.getElementById("errorCorreo").innerHTML = "";
  document.getElementById("errorNombre").innerHTML = "";
  //validar lo que nombre
  if(isEmpty.test(nombre.value)){
    hayError = true;
    document.getElementById("errorNombre").innerHTML = "El nombre no puede estar vacío";
    nombre.focus();
  }
  else if(!isStandardWord.test(nombre.value)){
    hayError = true;
    document.getElementById("errorNombre").innerHTML = "El nombre no tiene el formato adecuado solo letras";
    nombre.focus();
  }

  if(isEmpty.test(correo.value)){
    hayError = true;
    document.getElementById("errorCorreo").innerHTML = "El correo no puede estar vacío";
    correo.focus();
  }else if(!isStandardEmail.test(correo.value)){
    hayError = true;
    document.getElementById("errorCorreo").innerHTML = "El correo no tiene el formato adecuado";
    correo.focus();
  }


  if(!hayError){
    document.getElementById('form1').submit();
  }
}
document.addEventListener('DOMContentLoaded' , form_onload, false);
