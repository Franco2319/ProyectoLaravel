window.onload = function(){
  let formulario = document.forms[1];
  // let elementos = formulario.elements;
  let elementos = document.querySelectorAll('input');
  let inputNombre = elementos[3];
  // let inputApellido = elementos[2];
  let inputEmail = elementos[4];
  let inputContra = elementos[5];
  let inputConfirm = elementos[6];
  // Hace referencia a los p debajo de los imputs
  // console.log(elementos);
  let errorNombr = document.getElementById('errorNomb');
  // let errorAp = document.getElementById('errorAp');
  let errorEmail = document.getElementById('errorEm');
  let errorContra = document.getElementById('errorCon');
  let errorConfirm = document.getElementById('errorConCon');

  let emailRegex = (/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/);
  let contraRegex = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

  // formulario.onsubmit = function(evento){
  //   for (elemento of elementos) {
  //     if (elemento.getAttribute('class') != 'form-control is-valid') {
  //       evento.preventDefault();
  //     }
  //   }
  //   formulario.submit;
  // }

  inputNombre.onchange = function (){
    if (inputNombre.value.length <= 1) {
      inputNombre.setAttribute('class', 'form-control is-invalid');
      var mensajeNomb = document.createTextNode("Tu nombre es invalido");
      errorNombr.appendChild(mensajeNomb);
    } else {
      inputNombre.setAttribute('class', 'form-control is-valid');
      var mensajeNomb = document.createTextNode("");
      errorNombr.appendChild(mensajeNomb);
    }
  }

  // inputApellido.onchange = function (){
  //   if (inputApellido.value.length <= 1) {
  //     inputApellido.setAttribute('class', 'form-control is-invalid');
  //     var mensajeAp = document.createTextNode("Tu apellido es invalido");
  //     errorAp.appendChild(mensajeAp);
  //   } else {
  //     inputApellido.setAttribute('class', 'form-control is-valid');
  //     var mensajeAp = document.createTextNode("");
  //     errorAp.appendChild(mensajeAp);
  //   }
  // }

  inputEmail.onkeyup = function(){
    if (emailRegex.test(inputEmail.value) == false) {
      inputEmail.setAttribute('class', 'form-control is-invalid');
      var mensajeEm = document.createTextNode("Tu email es invalido");
      errorEm.appendChild(mensajeEm);
    } else {
      inputEmail.setAttribute('class', 'form-control is-valid');
      var mensajeEm = document.createTextNode("");
      errorEm.appendChild(mensajeEm);
    }
  }

  inputContra.onchange = function(){
    if (contraRegex.test(inputContra.value) == false) {
      inputContra.setAttribute('class', 'form-control is-invalid');
      var mensajeCon = document.createTextNode("Tu contraseña es invalida");
      errorContra.appendChild(mensajeCon);
    } else {
      inputContra.setAttribute('class', 'form-control is-valid');
      var mensajeCon = document.createTextNode("");
      errorContra.appendChild(mensajeCon);
    }
  }

  inputConfirm.onchange = function(){
    if (inputContra.value != inputConfirm.value) {
      inputConfirm.setAttribute('class', 'form-control is-invalid');
      var mensajeConf = document.createTextNode("Las contraseñas no coinciden");
      errorConfirm.appendChild(mensajeConf);
    } else {
      inputConfirm.setAttribute('class', 'form-control is-valid');
      var mensajeConf = document.createTextNode("");
      errorContra.appendChild(mensajeConf);
    }
  }


  // API

  // var divpais = document.getElementById('divpais');
  // fetch("https://apis.datos.gob.ar/georef/api/provincias")
  //  .then(function(datos){
  //   return datos.json();
  //  })
  //  .then(function(objetopais){
  //     var selectpais = document.createElement('select');
  //     selectpais.name = "Pais";
  //     selectpais.id = "selectpais";
  //     divpais.appendChild(selectpais);
  //     for (pais of objetopais.provincias) {
  //       var optionpais = document.createElement('option');
  //       var nompais = document.createTextNode(pais.nombre);
  //       optionpais.setAttribute('value',pais.id);
  //       optionpais.setAttribute('class','form-control');
  //       optionpais.appendChild(nompais);
  //       selectpais.appendChild(optionpais);
  //     }
  //  });


}
