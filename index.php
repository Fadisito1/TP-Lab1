<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Medallas - Juegos Olímpicos</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Registro de Medallas</h1>

        <!-- Formulario de Registro -->
        <form action="insertar_medalla.php" method="POST" class="mb-4">
            <div class="mb-3">
                <label for="pais" class="form-label">País</label>
                <input type="text" class="form-control" id="pais" name="pais" required>
            </div>
            <div class="mb-3">
                <label for="oro" class="form-label">Oro</label>
                <input type="number" class="form-control" id="oro" name="oro" required>
            </div>
            <div class="mb-3">
                <label for="plata" class="form-label">Plata</label>
                <input type="number" class="form-control" id="plata" name="plata" required>
            </div>
            <div class="mb-3">
                <label for="bronce" class="form-label">Bronce</label>
                <input type="number" class="form-control" id="bronce" name="bronce" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Medalla</button>
        </form>

        <!-- Mostrar Medallas Registradas -->
        <h2>Medallas Registradas</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>País</th>
                    <th>Oro</th>
                    <th>Plata</th>
                    <th>Bronce</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Conexión a la base de datos
                $conn = new mysqli('localhost', 'root', '', 'olimpicos');

                // Verificar conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                // Consulta a la base de datos
                $sql = "SELECT * FROM medallas";
                $result = $conn->query($sql);

                // Mostrar los resultados
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>{$row['pais']}</td><td>{$row['oro']}</td><td>{$row['plata']}</td><td>{$row['bronce']}</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No se han registrado medallas aún.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>