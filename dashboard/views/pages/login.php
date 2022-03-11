<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="http://localhost/coaching/" class="text-uppercase"><img src="views/assets/images/logo2.png" alt="Logo"> New vision of life</a>
                </div>
                <h3 class="auth-subtitle mb-5">Ingrese a nuestra plataforma</h3>

                <form method="POST">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="email" name="email" class="form-control form-control-xl email" placeholder="Correo electrónico" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese tu correo electrónico'">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" name="password" class="form-control form-control-xl password" placeholder="Contraseña" required  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese tu contraseña'">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <!-- <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Keep me logged in
                        </label>
                    </div> -->
                    <button type="submit" onclick="login()" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Entrar</button>
                    <?php 
                      
                      $login = new ControllerUsuario();
                      $login -> ctrIngresarUsuario();
                    ?>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class="text-gray-600">¿No tienes una cuenta? <a href="http://localhost/coaching/#register" class="font-bold">Crear cuenta</a>.</p>
                    <!-- <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p> -->
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <img src="views/assets/images/coaching.jpg" class="h-100" style="width: 100%">
        </div>
    </div>

</div>