<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="home" style="font-size: 16px !important"><img src="views/assets/images/logo2.png" alt="Logo" srcset=""> New vision of life</a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item  ">
                    <a href="home" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Principal</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="mis-sesiones" class='sidebar-link'>
                        <i class="bi bi-heart"></i>
                        <span>Mis Sesiones</span>
                    </a>
                </li>

                <?php if($_SESSION['rol'] == 'admin'): ?>

                <hr>

                <li class="sidebar-title">Extra</li>

                <li class="sidebar-item  ">
                    <a href="usuarios" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>Usuarios</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="contactos" class='sidebar-link'>
                        <i class="bi bi-envelope"></i>
                        <span>Contactos</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="suscriptores" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span>Suscriptores</span>
                    </a>
                </li>

                <?php endif; ?>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>