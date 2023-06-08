<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Registro.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <title>Modulo Registro</title>
</head>
<body>
    <div class="signupFrm">
        <form action="" class="form" method="post">
            <h1 class="title">Registro de Usuario</h1>
            <div class="inputContainer">
                <input type="text" class="input" placeholder="Name" name="txtNombre" id="txtNombre">
                <label for="txtNombre" class="label" name="txtNombre" id="txtNombre">Nombre</label>
            </div>
            <div class="inputContainer">
                <input type="text" class="input" placeholder="Apellidos" name="txtApellidosUsuario" id="txtApellidosUsuario">
                <label for="txtApellidosUsuario" class="label" name="txtApellidosUsuario" id="txtApellidosUsuario">Apellidos</label>
            </div>
            <div class="inputContainer">
                <input type="text" class="input" placeholder="Name" name="txtNombreUsuario" id="txtNombreUsuario">
                <label for="txtNombreUsuario" class="label" name="txtNombreUsuario" id="txtNombreUsuario">Nombre Usuario</label>
            </div>
            <div class="inputContainer">
                <input type="password" class="input" placeholder="Contraseña" name="txtPassword" id="txtPassword">
                <label for="txtPassword" class="label" name="txtNombreUsuario" id="txtPassword">Contraseña</label>
            </div>
            <div class="inputContainer">
                <input type="email" class="input" placeholder="Email" name="txtEmail" id="txtEmail">
                <label for="txtEmail" class="label" name="txtEmail" id="txtEmail">Email</label>
            </div>
            <div class="inputContainer">
                <input type="text" class="input" placeholder="Edad" name="txtEdad" id="txtEdad">
                <label for="txtEdad" class="label" name="txtEdad" id="txtEdad">Edad</label>
            </div>
            <div class="inputContainer">
                <input type="text" class="input" placeholder="Departamento" name="txtDepartamento" id="txtDepartamento">
                <label for="txtDepartamento" class="label" name="txtDepartamento" id="txtDepartamento">Departamento</label>
            </div>
            <input type="submit" name="btnGuardar" class="submitBtn" value="Guardar">
            <input type="reset" name="btnReset" class="submitBtn2" value="Reseat">
        </form>
    </div>
</body>
</html>