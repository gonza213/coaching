<?php include 'modules/sidebar.php' ?>

<div id="main" class='layout-navbar'>
    <?php include 'modules/header.php' ?>

    <?php include 'modules/sesion.php' ?>
   
          
    <div id="main-content">

        <div class="page-heading">
            <!-- <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Bienvenido/a <?php echo $_SESSION['nombre'] ?></h3>
                        <p class="text-subtitle text-muted">a tu plataforma de coaching</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div> -->
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="views/assets/images/logo2.png" width="100%">
                            </div>
                            <div class="col-md-8 mt-4 p-3">
                                <h4>Bienvenido/a <b class="ml-2"><?php echo $_SESSION['nombre'] ?></b></h4>
                                <p>A tu plataforma de coaching. Solicita tus sesiones y empieza a cambiar tu forma de ver la vida.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="col-md-7">
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <h3>Reserva una sesión</h3>
                            </div>
                            <div class="card-body border-top p-2">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-5">
                    <section class="section">
                        <div class="card" style="width: 18rem;">
                            <img src="views/assets/images/salud.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <?php include 'modules/footer.php' ?>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reservar una sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" name="cliente" id="cliente" class="form-control" value="<?php echo $_SESSION['cliente'] ?>">
                                    <input type="hidden" name="nombre" id="nombre" class="form-control" value="<?php echo $_SESSION['nombre'] ?>">
                                    <input type="hidden" name="cantidad" id="cantidad" class="form-control" value="1">
                                </div>
                                <div class="form-group">
                                    <label for="">Fecha</label>
                                    <input type="text" class="form-control" name="fecha" id="fecha" placeholder="Fecha" readonly>
                                    <input type="hidden" class="form-control" name="fecha" id="fecha2" >
                                </div>
                                <div class="form-group">
                                    <label for="">Horario</label>
                                    <select name="horario" class="form-control" id="horario">
                                        <option value="10:00 am">10:00 am</option>
                                        <option value="03:00 pm">03:00 pm</option>
                                        <option value="08:00 pm">08:00 pm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="reservar()">Reservar</button>
            </div>
            <?php 
            //   $reserva = new ControllerReservas();
            //   $reserva -> ctrCrearReserva();
            ?>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reservado por:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="modal-body">
                        <h4 id="title"></h4> <br>
                        <p>N° usuario: #<span id="user"></span> </p>
                        <p>Fecha: <span id="start"></span> </p>
                        <p>Horario: <span id="description"></span> </p>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <!-- <button type="button" class="btn btn-primary">Reservar</button> -->
            </div>
        </div>
    </div>
</div>