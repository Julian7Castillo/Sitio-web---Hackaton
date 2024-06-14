<!DOCTYPE html>
<html>
    <body class="contenedor">
    <main class="contenedor contenido-centrado formulario">

        <h2 class="text-center fw-300">Llene el Formulario de Registro</h2>

        <form action="Controlador/RegistroControler.php" class="contacto" method="post">

            <!--Contenedor de formulario-->
            <fieldset>
                <!--nombre en el cuadro del fielset-->
                <legend>Información Personal</legend>

                <label class="camposformulario" for="cc">CÉDULA:</label>
                <input class="camposformulario" type="number" id="cc" name="cc" placeholder="CC"  required> <br>

                <label class="camposformulario" for="nombre">NOMBRE:</label>
                <input class="camposformulario" type="text" id="nombre" name="nombre" placeholder="Nombre" required> <br>

                <label class="camposformulario" for="apellido">APELLIDO:</label>
                <input class="camposformulario" type="text" id="apellido" name="apellido" placeholder="Apellido" required><br>
                
                <label class="camposformulario" for="pss">CONTRASEÑA:</label>
                <input class="camposformulario" type="password" id="pss" name="pss" placeholder="Password" required>

            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <label class="camposformulario" for="email">E-MAIL</label>
                <input class="camposformulario" type="email" id="email" name="email" placeholder="Correo electronico" required></input><br>

                <label class="camposformulario" for="telefono">TELÉFONO: </label>
                <input class="camposformulario" type="tel" id="telefono" name="telefono" placeholder="Telefono" pattern="[0-9]{10}" title="el formato de número debe ser de 10 números" required></input>

            </fieldset>

            <input type="submit" value="Guardar" class="boton boton-negro seccion">
        </form>

    </main>
    </body>
<html>