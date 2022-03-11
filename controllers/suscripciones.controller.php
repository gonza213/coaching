<?php

class ControllerSuscripcion
{


    // REGISTRAR ADMIN
    static public function ctrCrearSuscripcion()
    {

        if (isset($_POST["emailS"])) {

            if (preg_match('/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/', $_POST["emailS"])) {


                    $tabla = "suscripciones";

                    $datos = array(
                        "email" => $_POST["emailS"]
                    );

                    $respuesta = ModelSuscripcion::mdlCrearSuscripción($tabla, $datos);

                    if ($respuesta == "ok") {

                        echo "<script>
                  
                            Swal.fire({
                              icon: 'success',
                              title: '¡Te has suscripto con éxito!',
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
                      title: '¡La suscripción no debe llevar caracteres especiales!',
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
