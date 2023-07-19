document.addEventListener("DOMContentLoaded", function() {
    var inputRut = document.getElementById("txt_usu_rut");
    var btnGrabar = document.getElementById("btn_grabar");
  
    inputRut.addEventListener("input", function() {
      var rut = inputRut.value;
      var cleanRut = limpiarRut(rut);
      var isValid = validarRut(cleanRut);
  
      if (isValid) {
        inputRut.classList.remove("invalid");
        inputRut.classList.add("valid");
        btnGrabar.disabled = false;
      } else {
        inputRut.classList.remove("valid");
        inputRut.classList.add("invalid");
        btnGrabar.disabled = true;
      }
  
      inputRut.value = formatearRut(cleanRut);
    });
  });
  
  function limpiarRut(rut) {
    rut = rut.replace(/[^0-9K-]/g, ''); // Eliminar caracteres no numéricos y no válidos
    return rut.toUpperCase();
  }
  
  function validarRut(rut) {
    rut = rut.replace(/[^0-9K]/g, ''); // Eliminar caracteres no numéricos
  
    if (rut.length < 2) {
      return false;
    }
  
    var cuerpo = rut.slice(0, -1);
    var digitoVerificador = rut.slice(-1).toUpperCase();
  
    var dvCalculado = calcularDigitoVerificador(cuerpo);
  
    return dvCalculado === digitoVerificador;
  }
  
  function calcularDigitoVerificador(cuerpo) {
    var suma = 0;
    var multiplicador = 2;
  
    // Calcular la suma ponderada del cuerpo del Rut
    for (var i = cuerpo.length - 1; i >= 0; i--) {
      suma += parseInt(cuerpo.charAt(i)) * multiplicador;
      multiplicador = multiplicador === 7 ? 2 : multiplicador + 1;
    }
  
    var resto = suma % 11;
    var dvCalculado = 11 - resto;
  
    if (dvCalculado === 10) {
      return 'K';
    } else if (dvCalculado === 11) {
      return '0';
    } else {
      return dvCalculado.toString();
    }
  }
  
  function formatearRut(rut) {
    var cuerpo = rut.slice(0, -1);
    var digitoVerificador = rut.slice(-1);
  
    cuerpo = cuerpo.replace(/\D/g, ''); // Eliminar caracteres no numéricos
  
    return cuerpo + '-' + digitoVerificador;
  }
  
  
  