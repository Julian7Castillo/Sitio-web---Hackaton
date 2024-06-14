<!DOCTYPE html>
<html lang="en">
    <body>
        <header>
            <div class="flex">
                <div class="flex">
                    <img src="Vista/img/logo.jpg"al="logo" style="width:200px;height200px;">
                    <h1 class="text-center"> 
                        Publicidad Boyacá    
                    </h1>
                </div>
                <?php  
                    if($pag != 'login'){
                ?>

                <div class="flex botonPerfil">
                    <button type="button" class="botonPerfil flex" >
                    <a class="botonPerfil flex" href="index.php?pag=perfil">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        <div class="spaceMargin">
                            <h7>Usuario: <?php echo$_SESSION['user']; ?><br>
                            <?php 
                                }else{
                                    ?>
                                     <button class="btn-custom">Registrarme</button>
                                    <?php
                                }
                            ?></h7>
                        </div>
                    </a>
                </div>
            </div>
        </header>
    </body>
</html>