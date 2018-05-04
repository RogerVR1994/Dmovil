<?php

  /*
  Código para registrar nuevo usuario y comprobar existencia
  */
  include "../../../connect.php"; //Correr código de incio de sesión en MySQL

  $link=db_Connection(); //Crear conexión MySQL

  $command = escapeshellcmd("python3 ../Python/user.py"); //Correr código en Python para crear ID único de usuario
  $user = shell_exec($command); //Obtener respuesta de código de Python
  $nombre=$_POST["nombre"]; //Obtener nombre de usuario, apellido, correo y contraseña por medio de POST
  $apellido=$_POST["apellido"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $key="yumyum"; //Llave para encriptar contraseñas
  $num = 908.80;

  $check_user_query = $link->query("SELECT correo as mail FROM Usuarios WHERE correo ='".$email."' ");//Query para comprobar existencia de usuario


  if (mysqli_num_rows($check_user_query) == 0) { //Si el correo no existe en la base de datos se agregan todos los datos correspondientes a la tabla
    echo "vacio";
    $stmt = $link->prepare("INSERT INTO Usuarios VALUES (?, ?, ?, ?, AES_ENCRYPT(?, ?))");
    $stmt->bind_param("ssssss", $user, $nombre, $apellido, $email, $password, $key);
    $stmt->execute();
    $stmt->close();//Cerrar conexiones de MySQL
    $link->close();
    header("Location: ../dashboard.html"); //redirección a página de inicio
  } 

  else { //Si el correo ya existe en la tabla de datos se envía mensaje de error para ingresar otro correo
      
    while ($row = $check_user_query->fetch_assoc()) {
      $correo=$row["mail"];
    }
    header("Location: ../sign_up_error.html");  
  } 
?>