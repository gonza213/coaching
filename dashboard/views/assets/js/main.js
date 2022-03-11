function crearCookie(nombre, valor, diasExpedicion) {
    var hoy = new Date();
  
    hoy.setTime(hoy.getTime() + diasExpedicion * 24 * 60 * 60 * 1000);
  
    var fechaExpedicion = "expires=" + hoy.toUTCString();
  
    document.cookie = nombre + "=" + valor + "; " + fechaExpedicion;
  }



function login(){

    var email = $('.email').val();
    var password = $('.password').val();

    if(!email){
        $('.email').css('border', '2px solid #F46868')
        $('.email').css('background', '#F79494')
    }else if(!password){
        $('.password').css('border', '2px solid #F46868')
        $('.password').css('background', '#F79494')
    }else{

        console.log('login...');
    }


}

function reservar(){

    var cliente = $('#cliente').val();
    var nombre = $('#nombre').val();
    var cantidad = $('#cantidad').val();
    var fecha = $('#fecha').val();
    var fecha2 = $('#fecha2').val();
    var horario = $('#horario').val();

    const datos = {
        cliente,
        nombre,
        cantidad,
        fecha2,
        fecha,
        horario
    }

    if(!cliente || !nombre || !cantidad || !fecha || !horario) {
        
        Swal.fire({
            icon: 'error',
            title: '¡Hubo un error al realizar la reserva! Intentelo de nuevo',
            showConfirmButton: true,
            confirmButtonText: 'Cerrar',
            closeOnConfirm: false
            }).then((result)=>{
    
            if(result.value){
    
                window.location = 'home';
            }
        })
    }else{

        localStorage.setItem('Datos', JSON.stringify(datos))

        crearCookie('Datos', JSON.stringify(datos), 1)

        window.location = 'formulario'

    }
}


(function($) {
    'use strict';
    $(function() {

        const datos = JSON.parse(localStorage.getItem('Datos'))

        $('#reserva-cliente').html(datos.cliente)
        $('#reserva-nombre').html(datos.nombre)
        $('#reserva-fecha').html(datos.fecha)
        $('#reserva-horario').html(datos.horario)

    });
})(jQuery);