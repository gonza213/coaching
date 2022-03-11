<?php

session_start();


$reservas = ControllerReservas::ctrMostrarReservas();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - New vision of life</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="views/assets/css/fullcalendar.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="views/assets/css/bootstrap.css">

    <link rel="stylesheet" href="views/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="views/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="views/assets/css/app.css">

    <link rel="stylesheet" href="views/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="views/assets/images/logo2.png" type="image/x-icon">


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://kit.fontawesome.com/76e0757c77.js" crossorigin="anonymous"></script>
    <style>
        .sidebar-link i {
            color: #68d80c !important;
        }
    </style>
</head>

<body>
    <?php if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") : ?>

        <div id="app">
            <?php

            if (isset($_GET['pagina'])) {

                if ($_GET['pagina'] == 'home') {
                    include 'pages/home.php';
                } else if ($_GET['pagina'] == 'formulario') {
                    include 'pages/formulario.php';
                } else if ($_GET['pagina'] == 'mis-sesiones') {
                    include 'pages/mis-sesiones.php';
                } else if ($_GET['pagina'] == 'salir') {
                    include 'pages/salir.php';
                } else {
                    include 'pages/error-404.php';
                }
            } else {
                include 'pages/home.php';
            }

            ?>
        </div>
    <?php else : ?>

        <?php include "pages/login.php"; ?>

    <?php endif; ?>



    <script src="views/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="views/assets/js/mazer.js"></script>
    <script src="views/assets/js/main.js"></script>

    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>


    <script src="views/assets/js/moment.js"></script>
    <script src="views/assets/js/fullcalendar.min.js"></script>
    <script src="views/assets/js/es.js"></script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script src="views/assets/js/mercado-pago.js"></script>

    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                dayClick: function(date, allDay, jsEvent, view) {

                    var myDate = new Date();

                    myDate.setDate(myDate.getDate());

                    if (date < myDate) {

                        Swal.fire(
                            '¡No se puede reservar en esta fecha!',
                            'Haga click en OK para continuar',
                            'warning'
                        )
                    } else {

                        var fecha = date.format();

                        var datos = new FormData();

                        datos.append("fecha", fecha);

                        $.ajax({
                            url: "ajax/ajax.php",
                            method: "POST",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: "json",
                            success: function(respuesta) {

                                var fecha = respuesta.fecha;

                                if (fecha == date.format()) {
                                    return false
                                } else {

                                    $('#exampleModal').modal('show')

                                    $('#fecha').val(moment(date.format()).format('DD/MM/YYYY'))
                                    $('#fecha2').val(date.format())

                                }

                            },
                        });


                    }

                },
                eventSources: [{
                    events: [
                        <?php foreach ($reservas as $key => $value) {


                            echo "
                            
                                    {
                                        title: '" . $value['nombre'] . "',
                                        description: '" . $value['horario'] . "',
                                        fecha: '" . $value['fecha'] . "',
                                        user: '" . $value['cliente'] . "',
                                        start: '" . $value['fecha'] . "'
                                    },

                             ";
                        }

                        ?>

                    ]
                }],
                eventLimit: true,
                eventClick: function(calEvent, jsEvent, view) {

                    $('#title').html(calEvent.title);
                    $('#start').html(moment(calEvent.fecha).format('DD/MM/YYYY'));
                    $('#description').html(calEvent.description);
                    $('#user').html(calEvent.user);

                    $('#exampleModal2').modal('show')
                }

            });
        })
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                },
                responsive: true
            });
        });
    </script>
</body>

</html>