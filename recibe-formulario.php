<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RECIBIR-FORUMULARIO</title>
  </head>
  <body>
    <?php 
    require('conexion.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
      $USER = $_POST['USER'] ?? '';
    $email = $_POST['email'] ?? ''; 
    $Birthday = $_POST['Birthday'] ?? ''; //Imprimir los datos recibidos
    echo"<h2>DATOS RECIBIDOS:</h2>";  
    $sql = "INSERT INTO personas (user, Birthday, email)
      VALUES ('$USER', '$Birthday', '$email')";
    $conn->exec($sql);
    // Mostrar información de tabla personas 

    $stmt = $conn->query("SELECT * FROM personas");
    $personas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($personas as $persona) {
                echo "<p>Nombre: " . $persona['user'] . ", Correo: " . $persona['email'] . ", Fecha de nacimiento: " . $persona['Birthday'] . "</p>";
            }
        } else {
            echo "<p>No es una petición tipo POST.</p>";
        }
    ?>
  </body>
</html>
