<?php

  /*
  Código para registrar nuevo usuario y comprobar existencia
  */
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  require_once "../../../connect.php"; //Correr código de incio de sesión en MySQL



  $command = escapeshellcmd("python3 ../Python/user.py"); //Correr código en Python para crear ID único de usuario
  $user = shell_exec($command); //Obtener respuesta de código de Python
  $nombre=$_POST["nombre"]; //Obtener nombre de usuario, apellido, correo y contraseña por medio de POST
  $apellido=$_POST["apellido"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $cuenta = $_POST['cuenta'];
  $banco = $_POST['banco'];
  foreach($_POST as $post){
    echo $post;
    echo '<br>';
  }

  $key="yumyum"; //Llave para encriptar contraseñas



  if (mysqli_num_rows($check_user_query) == 0) { //Si el correo no existe en la base de datos se agregan todos los datos correspondientes a la tabla

    $sql = "INSERT INTO usuarios VALUES (NULL, NULL, 'Rogelio', 'Ventura', '234234', 'banco', 'banco@gmail.com', 'afasdfasf')";
    $query = $pdo->prepare($sql);
    $result = $query->execute([
      'nombre'=> $nombre,
      'apellido' => $apellido,
      'cuenta' => $cuenta,
      'banco' => $banco, 
      'email' => $email,
      'password' => $password
    ]);
    echo "hola";
    header("Location: ../dashboard.php"); //redirección a página de inicio
  } 

  else { //Si el correo ya existe en la tabla de datos se envía mensaje de error para ingresar otro correo
      
    while ($row = $check_user_query->fetch_assoc()) {
      $correo=$row["mail"];
    }
    header("Location: ../sign_up_error.html");  
  } 
?>