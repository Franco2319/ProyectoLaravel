window.onload = function(){
  let formulario = document.getElementById('formregistro');
  // let elementos = formulario.elements;
  let elementos = document.querySelectorAll('input');
  console.log(elementos);
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

  formulario.onsumbit = function(evento){
    if (inputNombre.getAttribute('class')!= 'form-control is-valid' && inputEmail.getAttribute('class')!= 'form-control is-valid' && inputContra.getAttribute('class')!= 'form-control is-valid' && inputConfirm.getAttribute('class')!= 'form-control is-valid') {
        evento.preventDefault();
    }
    formulario.submit;
  }


  inputNombre.onchange = function (){
    if (inputNombre.value.length <= 1) {
      if (errorNombr.textContent=="") {
        inputNombre.setAttribute('class', 'form-control is-invalid');
        var mensajeNomb = document.createTextNode("Tu nombre es invalido");
        errorNombr.appendChild(mensajeNomb);
      }
    } else {
      inputNombre.setAttribute('class', 'form-control is-valid');
      var mensajeNomb = document.createTextNode("");
      errorNombr.appendChild(mensajeNomb);
    }
  }

  inputEmail.onkeyup = function(){
    if (emailRegex.test(inputEmail.value) == false) {
      if (errorEm.textContent=="") {
        inputEmail.setAttribute('class', 'form-control is-invalid');
        var mensajeEm = document.createTextNode("Tu email es invalido");
        errorEm.appendChild(mensajeEm);
      }

    } else {
      inputEmail.setAttribute('class', 'form-control is-valid');
      var mensajeEm = document.createTextNode("");
      errorEm.appendChild(mensajeEm);
    }
  }

  inputContra.onchange = function(){
    if (contraRegex.test(inputContra.value) == false) {
      if (errorContra.textContent=="") {
        inputContra.setAttribute('class', 'form-control is-invalid');
        var mensajeCon = document.createTextNode("Tu contraseña es invalida");
        errorContra.appendChild(mensajeCon);
      }
    } else {
      inputContra.setAttribute('class', 'form-control is-valid');
      var mensajeCon = document.createTextNode("");
      errorContra.appendChild(mensajeCon);
    }
  }

  inputConfirm.onchange = function(){
    if (inputContra.value != inputConfirm.value) {
      if (errorConfirm.textContent=="") {
        inputConfirm.setAttribute('class', 'form-control is-invalid');
        var mensajeConf = document.createTextNode("Las contraseñas no coinciden");
        errorConfirm.appendChild(mensajeConf);
      }
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
