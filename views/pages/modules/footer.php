<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Sobre nosotros</h6>
                    <p>
                        Somos un grupos de coaches ontologicos, con la fuerte convicción y pasion en ayudar o guiar a las personas a encontrar sus propias respuestas.
                    </p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p class="footer-text">&copy;<script>
                            document.write(new Date().getFullYear());
                        </script> New version of life. Todos los Derechos Reservados
                        | Desarrollado por <a href="#" target="_blank">Wolves Developers</a></p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
            <div class="col-lg-5  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Boletin informativor</h6>
                    <p>Manténgase actualizado con nuestra última</p>
                    <div class="" id="mc_embed_signup">

                        <form class="form-inline" method="POST">

                            <div class="d-flex flex-row">

                                <input class="form-control susc" name="emailS" placeholder="Correo electrónico" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese tu correo electrónico'" required type="email">


                                <button type="submit" onclick="suscripcion()" class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </div>
                            <?php 
                              $crearS = new ControllerSuscripcion();
                              $crearS -> ctrCrearSuscripcion();
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h6>Seguinos</h6>
                    <p>A nuestras redes sosciales</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>