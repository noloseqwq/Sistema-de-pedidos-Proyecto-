<section class="full-box nav-lateral">
    <div class="full-box nav-lateral-bg show-nav-lateral"></div>
    <div class="full-box nav-lateral-content">
        <figure class="full-box nav-lateral-avatar">
            <i class="far fa-times-circle show-nav-lateral"></i>
            <img src="<?php echo SERVER_URL; ?>vistas/assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
            <figcaption class="roboto-medium text-center">
                <?php echo $_SESSION['nombre_sdp'] . " " . $_SESSION['apellido_sdp'];  ?><br><small class="roboto-condensed-light"><?php echo $_SESSION['usuario_sdp'];  ?></small>
            </figcaption>
        </figure>
        <div class="full-box nav-lateral-bar"></div>
        <nav class="full-box nav-lateral-menu">
            <ul>
                <li>
                    <a href="<?php echo SERVER_URL; ?>home/"><i class="fas fa-home fa-fw"></i> &nbsp; Inicio </a>
                </li>

                <li>
                    <div class="list__button--click">
                        <a href="#" class="nav-btn-submenu "><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-right list__arrow"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a href="<?php echo SERVER_URL; ?>client-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVER_URL; ?>client-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVER_URL; ?>client-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar cliente</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="list__button--click">
                        <a href="#" class="nav-btn-submenu"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Pedidos <i class="fas fa-chevron-right list__arrow"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a href="<?php echo SERVER_URL; ?>order-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Pedido</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVER_URL; ?>pending-order-list/"><i class="fas fa-hourglass-half"></i> &nbsp; Pedidos Pedientes</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVER_URL; ?>placed-order-list/"><i class="fas fa-clipboard-check"></i> &nbsp; Pedidos Realizados</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVER_URL; ?>order-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Pedidos</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <div class="list__button--click">
                        <a href="#" class="nav-btn-submenu"><i class="fas fa-boxes fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-right list__arrow"></i></a>
                    </div>
                    <ul>
                        <li>
                            <a href="<?php echo SERVER_URL; ?>product-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo Producto</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVER_URL; ?>product-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVER_URL; ?>product-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Producto</a>
                        </li>

                    </ul>
                </li>
                <?php if ($_SESSION['privilegio_sdp'] == 1) {
                ?>
                    <li>
                        <div class="list__button--click">
                            <a href="#" class="nav-btn-submenu"><i class="fas  fa-user fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-right list__arrow"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a href="<?php echo SERVER_URL; ?>user-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
                            </li>
                            <li>
                                <a href="<?php echo SERVER_URL; ?>user-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
                            </li>
                            <li>
                                <a href="<?php echo SERVER_URL; ?>user-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

                <?php if ($_SESSION['privilegio_sdp'] == 1) {
                ?>
                    <li>
                        
                            <div class="list__button">
                                <a href="<?php echo SERVER_URL; ?>restore/" class=""><i class="fas fa-database"></i> &nbsp; Base de datos</a>
                            </div>


                    </li>
                <?php } ?>


            </ul>
        </nav>
    </div>
</section>