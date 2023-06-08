<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Clientes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <img src="Imagenes/Logo.jpg" class="Logo">
            <a title="Facebook" href="https://www.facebook.com/lazodeamorcr" target="_blank"><img class= "icons-redes" src="Imagenes/facebook.png"></a>
            <a title="Facebook" href="https://www.instagram.com/lazodeamorcr/" target="_blank"><img class= "icons-redes"src="Imagenes/instagram.png"></a>
            <a title="Gmail" href="https://mail.google.com/mail/u/2/#inbox" target="_blank"><img class= "icons-redes"src="Imagenes/gmail.png"></a>
            <a title="Gmail" href="https://web.whatsapp.com/" target="_blank"><img class= "icons-redes"src="Imagenes/whatsapp.png"></a>
            <a title="Gmail" href="https://www.shein.com/" target="_blank"><img class= "icons-redes"src="Imagenes/orden.png"></a>
    </header>
    <div class="container">
        <div class="Title">
        <h2>Lista de clientes de Lazo de Amor</h2>
        </div>
        <a href="agregar.php" class="btn">Agregar Cliente</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Fecha Compra</th>
                    <th>Plataforma</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'config.php';

                $query = "SELECT * FROM personal";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nombre']."</td>";
                    echo "<td>".$row['telefono']."</td>";
                    echo "<td>".$row['fecha']."</td>";
                    echo "<td>".$row['plataforma']."</td>";
                    echo "<td>".$row['direccion']."</td>";

                    echo "<td>
                            <a href='editar.php?id=".$row['id']."' class='btn'>Editar</a>
                            <a href='eliminar.php?id=".$row['id']."' class='btn'>Eliminar</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <footer>
        <p>&copy; 2023 Mario Cordero Ulate | Proyecto Lista Clientes</p>
    </footer>
</body>
</html>
