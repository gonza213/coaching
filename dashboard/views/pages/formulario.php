<?php include 'modules/sidebar.php' ?>

<div id="main" class='layout-navbar'>
    <?php include 'modules/header.php' ?>
    <div id="main-content">

        <div class="page-heading">

            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="views/assets/images/logo2.png" width="100%">
                            </div>
                            <div class="col-md-8 mt-4 p-3">
                                <h4>¡Último paso para realizar tu reserva!</b></h4>
                                <br>
                                <p>N° DE CLIENTE: #<span class="text-primary ml-2" id="reserva-cliente"></span></p>
                                <p>NOMBRE: <span class="text-primary ml-2" id="reserva-nombre"></span></p>
                                <p>FECHA: <span class="text-primary ml-2" id="reserva-fecha"></span></p>
                                <p>HORARIO: <span class="text-primary ml-2" id="reserva-horario"></span></p>
                                <div class="row">
                                    <div class="col mx-auto" id="pago">
                                    </div>
                                </div>
                                <?php

                                $operacion = mt_rand(10000, 20000);


                                if (isset($_REQUEST['token'])) {



                                    $token = $_REQUEST["token"];
                                    $payment_method_id = $_REQUEST["payment_method_id"];
                                    $installments = $_REQUEST["installments"];
                                    $issuer_id = $_REQUEST["issuer_id"];

                                    MercadoPago\SDK::setAccessToken("TEST-4665705786102670-022318-b1da8c0cc239ee980d8e1da8508e55d9-1078889670");
                                    //...
                                    $payment = new MercadoPago\Payment();
                                    $payment->transaction_amount = 700;
                                    $payment->token = $token;
                                    $payment->description = 'Productos';
                                    $payment->installments = $installments;
                                    $payment->payment_method_id = $payment_method_id;
                                    $payment->issuer_id = $issuer_id;
                                    $payment->payer = array(
                                        "email" => "john@yourdomain.com"
                                    );
                                    // Guarda y postea el pago
                                    $payment->save();


                                    // Imprime el estado del pago
                                    if ($payment->status == "approved") {

                                        $form = json_decode($_COOKIE['Datos']);
                                        $cliente = $form->cliente;
                                        $nombre = $form->nombre;
                                        $fecha = $form->fecha2;
                                        $horario = $form->horario;
                                        $cantidad = $form->cantidad;
                                        $total = 700;
                                   

                                        $datos = array(
                                            'nombre' => $nombre,
                                            'cliente' => $cliente,
                                            'fecha' => $fecha,
                                            'horario' => $horario,
                                            'cantidad' => $cantidad,
                                            'total' => $total,
                                            'operacion' => $operacion,
                                            'numero_transaccion' => $payment->id,
                                            'ganancia' => $payment->transaction_details->net_received_amount,
                                            'comision' => $payment->fee_details[0]->amount
                                        );

                                        $respuesta = ControllerReservas::ctrCrearReserva($datos);


                             if ($respuesta == 'ok') {

                                echo "<script>
                            
                                        Swal.fire({
                                        icon: 'success',
                                        title: '¡Felicitaciones! Has realizado tu reserva exitosamente',
                                        showConfirmButton: true,
                                        confirmButtonText: 'Cerrar',
                                        closeOnConfirm: false
                                        }).then((result)=>{
                                
                                        if(result.value){
                                
                                            window.location = 'home';
                                        }
                                    })
                                                
                            
                            </script>";
                            } else {
                                echo "<script>
                            
                                            Swal.fire({
                                            icon: 'warning',
                                            title: '¡Algo salio Mal!',
                                            showConfirmButton: true,
                                            confirmButtonText: 'Cerrar',
                                            closeOnConfirm: false
                                            }).then((result)=>{
                                    
                                            if(result.value){
                                    
                                                window.location = 'formulario';
                                            }
                                        })
                                                    

                                    </script>";
                                                        }
                                                    }
                                                }





                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>

        <?php include 'modules/footer.php' ?>
    </div>
</div>