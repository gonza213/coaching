<?php

class ControllerContacto
{


    // REGISTRAR ADMIN
    static public function ctrCrearContacto()
    {

        if (isset($_POST["nombre"])) {

            if (preg_match('/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/', $_POST["email"])) {


                    $tabla = "contactos";

                    $datos = array(
                        "nombre" => $_POST["nombre"],
                        "email" => $_POST["email"],
                        "asunto" => $_POST["asunto"],
                        "mensaje" => $_POST["mensaje"]
                    );

                    $respuesta = ModelContacto::mdlCrearContacto($tabla, $datos);

                    if ($respuesta == "ok") {

                        echo "<script>
                  
                            Swal.fire({
                              icon: 'success',
                              title: '¡Mensaje enviado! Estaremos en contacto con usted.',
                              showConfirmButton: true,
                              confirmButtonText: 'Cerrar',
                              closeOnConfirm: false
                              }).then((result)=>{
                      
                              if(result.value){
                      
                                  window.location = 'index';
                              }
                          })
                                    
                            
                                 </script>";
                    }
                
            } else {

                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡El mensaje no debe llevar caracteres especiales!',
                      showConfirmButton: true,
                      confirmButtonText: 'Cerrar',
                      closeOnConfirm: false
                      }).then((result)=>{
              
                      if(result.value){
              
                          window.location = 'index';
                      }
                  })
                            
                    
                         </script>";
            }
        }
    }


}
