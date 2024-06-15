<!DOCTYPE html>
<html lang="en">
    <body>
        <header>
            <div class="flex">
                <div class="flex">
                <?php  
                    if($pag != 'login' && $pag != 'Registro'){
                ?>
                    <div class="m-menu">
                        <input id="abrir-cerrar" name="abrir-cerrar" type="checkbox" value="" />
                        <label for="abrir-cerrar">
                            &#9776; <span class="abrir sp"></span><span class="cerrar sp"></span>
                        </label>
                    <div id="sidebar" class="sidebar">
                    <ul class="menu">
                        <li><h2><b>Menu</b></h2></li><br>
                        <li><a href="index.php?pag=inicio">Inicio</a></li><br>
                        <li><a href="index.php?pag=Perfil">Perfil</a></li><br>
                        <li><a href="index.php?pag=lugaresturisticos">Lugares</a></li><br>
                        <li><a href="index.php?pag=analisisDatos">Estadisticas</a></li><br>
                        <li><a href="Controlador/Logout.php">Cerrar Sesión</a></li><br>
                    </ul>
                </div>
            </div>
            <?php
                }else{

                }
            ?>
                    <img src="Vista/img/logo.jpg"al="logo" style="width:170px;height170px;">
                    <h1 class="text-center"> 
                        Boyacá es Turismo    
                    </h1>
                </div>
                <?php  
                    if($pag != 'login' && $pag != 'Registro'){
                ?>

                <div class="flex botonPerfil">
                    <button type="button" class="botonPerfil flex" >
                        <a class="botonPerfil flex" href="index.php?pag=perfil">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        <div class="spaceMargin">
                            <h7><?php echo$_SESSION['user']; ?><br>
                            <?php 
                                }else if($pag == 'login') {
                                    ?>
                                        <button type="button" class="btn-custom">
                                            <a class="botonPerfil" href="./index.php?pag=Registro">
                                            Registrarme
                                        </button>
                                    <?php
                                }else{

                                }
                            ?></h7>
                        </div>
                    </a>
                </div>
            </div>
        </header>
    </body>
</html>