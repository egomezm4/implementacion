<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD en PHP</title>
</head>
<body>
    <h1>CRUD en PHP</h1>

    <!-- Formulario para crear usuario -->
    <h2>Crear usuario</h2>
    <form action="create.php" method="POST">
        <input type="text" name="name" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Guardar</button>
    </form>

    <!-- Lista de usuarios -->
    <h2>Usuarios</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?php echo $user['name']; ?> (<?php echo $user['email']; ?>)
                <form action="update.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                    <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
                    <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
                    <button type="submit">Actualizar</button>
                </form>
                <form action="delete.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
