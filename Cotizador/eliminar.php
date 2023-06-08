<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Cliente</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Eliminar Cliente</h2>
        <?php
        include_once 'config.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $query = "SELECT * FROM personal WHERE id = $id";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $nombre = $row['nombre'];
                $email = $row['email'];

                echo "<p>¿Estás seguro de eliminar al cliente: $nombre?</p>";
                echo "<form action='eliminar.php?id=$id' method='POST'>";
                echo "<input type='submit' value='Eliminar' class='btn'>";
                echo "</form>";

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $query = "DELETE FROM personal WHERE id = $id";
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
</body>
</html>
