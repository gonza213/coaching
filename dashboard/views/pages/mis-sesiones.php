<?php

$reservas = ControllerReservas::ctrMostrarReservas();

?>

<?php include 'modules/sidebar.php' ?>

<?php if ($_SESSION['rol'] == 'usuario') : ?>
    <div id="main" class='layout-navbar'>
        <?php include 'modules/header.php' ?>

        <?php include 'modules/sesion.php' ?>

        <div id="main-content">

            <div class="page-heading">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col md-12">
                                    <h3>Mis Sesiones
                                    </h3>
                                    <br>
                                    <table id="example" class="table-striped display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Fecha de la sesión</th>
                                                <th>Horario</th>
                                                <th>Precio</th>
                                                <th>Sesión</th>
                                                <th>Fecha de la reserva</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($reservas as $key => $value) : ?>
                                                <tr>
                                                    <td><?php echo $key + 1 ?></td>
                                                    <td><?php

                                                        $timestamp = strtotime($value['fecha']);
                                                        $newDate = date("d/m/Y", $timestamp);

                                                        echo  $newDate;
                                                        
                                                        ?>

                                                    </td>
                                                    <td><?php echo $value['horario'] ?></td>
                                                    <td>$<?php echo $value['total'] ?></td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm">
                                                            PAGADA
                                                        </button>
                                                    </td>
                                                    <td><?php 
                                                    
                                                    $timestamp = strtotime($value['fecha_r']);
                                                    $newDate = date("d/m/Y", $timestamp);

                                                    echo  $newDate;
                                                    
                                                    ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <?php include 'modules/footer.php' ?>
        </div>
    </div>
<?php else : ?>
    <?php include 'error-404.php' ?>
<?php endif ?>