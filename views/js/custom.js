function registrar() {
  var nombre = $(".nombre").val();
  var email = $(".email").val();
  var password = $(".password").val();
  var passwordR = $(".passwordR").val();

  if (!nombre) {
    $(".nombre").css("border", "2px solid #F05D5D");
    $(".nombre").css("background", "#F3AFAF");
  } else if (!email) {
    $(".email").css("border", "2px solid #F05D5D");
    $(".email").css("background", "#F3AFAF");
  } else if (!password) {
    $(".password").css("border", "2px solid #F05D5D");
    $(".password").css("background", "#F3AFAF");
  }else if (!passwordR) {
        $(".passwordR").css("border", "2px solid #F05D5D");
        $(".passwordR").css("background", "#F3AFAF");
  }else{
      console.log('register');
  }
}


function contacto() {
  var nombre = $(".nombreC").val();
  var email = $(".emailC").val();
  var asunto = $(".asunto").val();
  var mensaje = $(".mensaje").val();

  if (!nombre) {
    $(".nombreC").css("border", "2px solid #F05D5D");
    $(".nombreC").css("background", "#F3AFAF");
  } else if (!email) {
    $(".emailC").css("border", "2px solid #F05D5D");
    $(".emailC").css("background", "#F3AFAF");
  } else if (!asunto) {
    $(".asunto").css("border", "2px solid #F05D5D");
    $(".asunto").css("background", "#F3AFAF");
  }else if (!mensaje) {
        $(".mensaje").css("border", "2px solid #F05D5D");
        $(".mensaje").css("background", "#F3AFAF");
  }else{
      console.log('contacto');
  }
}

function suscripcion() {
  var email = $(".susc").val();
  if (!email) {
    $(".susc").css("border", "2px solid #F05D5D");
    $(".susc").css("background", "#F3AFAF");
  }else{
      console.log('suscripcion');
  }
}
