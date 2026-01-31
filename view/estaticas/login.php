<!--autor: Samuel Vera -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <form method="POST" action="index.php?c=login&f=validar">
        <label>Usuario:</label>
        <input type="text" name="usuario" required>

        <label>Contraseña:</label>
        <input type="password" name="clave" required>

        <button type="submit">Ingresar</button>

    </form>
    <div>
        <?php
        if (isset($_SESSION['mensaje'])) {
            echo "<p class='error'>" . htmlspecialchars($_SESSION['mensaje']) . "</p>";
            unset($_SESSION['mensaje']);
        }
        ?>
    </div>

</body>

</html>