<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
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
        <?php
        include_once 'config.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $query = "SELECT * FROM personal WHERE id = $id";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $nombre = $row['nombre'];
                $telefono = $row['telefono'];
                $fecha = $row['fecha'];
                $plataforma = $row['telefono'];
                $direccion = $row['direccion'];

                echo "<form action='editar.php?id=$id' method='POST'  class='form'>";
                echo "<h1 class='title'>Editar Usuario</h1>";
                echo "<div class='inputContainer'>";
                echo "<label class='label' for='nombre'>Nombre:</label>";
                echo "<input type='text' class='input' id='nombre' value = $nombre name='nombre'>";
                echo "</div>";
                echo "<div class='inputContainer'>";
                echo "<label class='label' for='telefono'>Telefono:</label>";
                echo "<input class='input' type='text' id='telefono' value = $telefono name='telefono'>";
                echo "</div>";
                echo "<div class='inputContainer'>";
                echo "<label class='label' for='fecha'>Fecha Compra:</label>";
                echo "<input class='input' type='date' id='fecha' value = $fecha name='fecha'>";
                echo "</div>";
                echo "<div class='inputContainer'>";
                echo "<label class='label' for='platafomra'>Plataforma de Pedido:</label>";
                echo "<input class='input' type='text' id='plataforma' value = $plataforma name='plataforma'>";
                echo "</div>";
                echo "<div class='inputContainer'>";
                echo "<label class='label' for='direccion'>Direccion:</label>";
                echo "<input class='input' type='text' id='direccion' value = $direccion name='direccion'>";
                echo "</div>";
                echo "<input type='submit' class='submitBtn' value='Agregar'>";
                echo "<input type='reset' class='submitBtn' value='Borrar Datos'>";
                echo "<button href='index.php' class= 'submitBtn'>Volver a Inicio</button>";
                echo "</form>";

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nombre = $_POST['nombre'];
                    $telefono = $_POST['telefono'];
                    $fecha = $_POST['fecha'];
                    $plataforma = $_POST['plataforma'];
                    $direccion = $_POST['direccion'];

                    $query = "UPDATE personal SET nombre = '$nombre', telefono = '$telefono', fecha = '$fecha', plataforma = '$plataforma', direccion = '$direccion' WHERE id = $id";
                    mysqli_query($conn, $query);

                    header("Location: index.php");
                    exit();
                }
            } else {
                echo "<p>Cliente no encontrado.</p>";
            }
        } else {
            echo "<p>ID no especificado.</p>";
        }
        ?>
    </div>
    <footer>
            <p>&copy; 2023 Mario Cordero Ulate | Proyecto Lista Clientes</p>
    </footer>
</body>
</html>
