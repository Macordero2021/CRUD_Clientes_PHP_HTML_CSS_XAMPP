<!DOCTYPE html>
<html>
<head>
    <title>Agregar Cliente</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img src="Imagenes/Logo.jpg" class="Logo">
    </header>
<div class="signupFrm">
        <form action="agregar.php" class="form" method="post">
            <h1 class="title">Registro de Clientes</h1>
            <div class="inputContainer">
                <input type="text" class="input" placeholder="Nombre" name="nombre" id="nombre" required>
                <label for="nombre" class="label" name="nombre" id="nombre">Nombre Cliente</label>
            </div>
            <div class="inputContainer">
                <input type="text" class="input" placeholder="Telefono" name="telefono" id="telefono" required>
                <label for="telefono" class="label" name="telefono" id="telefono">Telefono</label>
            </div>
            <div class="inputContainer">
                <input type="date" class="input" placeholder="Fecha" name="fecha" id="fecha" required>
                <label for="fecha" class="label" name="fecha" id="fecha">Fecha Compra</label>
            </div>
            <div class="inputContainer">
                <input type="text" class="input" placeholder="Plataforma" name="plataforma" id="plataforma" required>
                <label for="plataforma" class="label" name="plataforma" id="plataforma">Plataforma de Pedido</label>
            </div>
            <div class="inputContainer">
                <input type="text" class="input" placeholder="Dirección" name="direccion" id="direccion" required>
                <label for="direccion" class="label" name="direccion" id="direccion">Dirección</label>
            </div>
            <input type="submit" class="submitBtn" value="Agregar">
            <input type="reset" class="submitBtn" value="Borrar Datos">
            <button href="index.php" class= "submitBtn">Volver a Inicio</button>
        </form>>
        </div>
        <footer>
            <p>&copy; 2023 Mario Cordero Ulate | Proyecto Lista Clientes</p>
        </footer>
    <?php
    include_once 'config.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];
        $plataforma = $_POST['plataforma'];
        $direccion = $_POST['direccion'];

        $query = "INSERT INTO personal (nombre, telefono, fecha, plataforma, direccion) VALUES ('$nombre', '$telefono', '$fecha', '$plataforma', '$direccion')";
        mysqli_query($conn, $query);

        header("Location: index.php");
        exit();
    }
    ?>
</body>
</html>
