<?php

class ControllerUsuario
{


    // REGISTRAR ADMIN
    static public function ctrCrearUsuario()
    {

        if (isset($_POST["nombre"])) {

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["rol"])) {

                if ($_POST["password"] != $_POST["repeatPassword"]) {

                    echo "<script>
                  
                    Swal.fire(
                        '¡Las contraseñas no coinciden!',
                        'Haga click en OK para continuar',
                        'warning'
                      )
                            
                    
                         </script>";
                } else {

                    $tabla = "usuarios";

                    $encriptar = crypt($_POST["password"], '$2y$05$2ihDv8vVf7QZ9BsaRrKyqs2tkn55Yq');

                    $datos = array(
                        "cliente" => $_POST["cliente"],
                        "email" => $_POST["email"],
                        "password" => $encriptar,
                        "nombre" => $_POST["nombre"],
                        "rol" => $_POST["rol"],
                        "foto" => "views/assets/images/faces/1.jpg"
                    );

                    $respuesta = ModelUsuario::mdlCrearUsuario($tabla, $datos);

                    if ($respuesta == "ok") {

                        echo "<script>
                  
                            Swal.fire({
                              icon: 'success',
                              title: '¡Has se ha creado tu cuenta con exito!',
                              showConfirmButton: true,
                              confirmButtonText: 'Cerrar',
                              closeOnConfirm: false
                              }).then((result)=>{
                      
                              if(result.value){
                      
                                  window.location = 'http://localhost/coaching/dashboard/';
                              }
                          })
                                    
                            
                                 </script>";
                    }
                }
            } else {

                echo "<script>
              
                    Swal.fire({
                      icon: 'error',
                      title: '¡El usuario no debe llevar caracteres especiales!',
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
