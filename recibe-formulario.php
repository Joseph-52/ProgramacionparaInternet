<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RECIBIR-FORUMULARIO</title>
  </head>
  <body>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"){ $USER = $_POST['USER'];
    $email = $_POST['email']; $Birthday = $_POST['Birthday']; //Imprimir los datos recibidos
    echo"<h2>DATOS RECIBIDOS:</h2>";  
    echo "
    <ul>
      "; echo "<l1>USER: " . $USER;"</l1>";
      echo "<l1>E-MAIL: " . $email;"</l1>";
      echo "<l1>DATE: " . $Birthday;"</l1>";
    echo "</ul>";
    }else{ echo "No fue peticion tipo POST, fue GET"; } ?>
  </body>
</html>
