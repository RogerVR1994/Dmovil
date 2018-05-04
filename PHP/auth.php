u<?php
  include "../../../connect.php";

  $link=db_Connection();

  $email=$_POST["email"];
  $password=$_POST["password"];
  $key="yumyum";

  echo $email;
  echo "\n";
  echo $password;
  echo "\n";


  $check_user_query = $link->query("SELECT AES_DECRYPT(password, 'yumyum') as password FROM Usuarios WHERE mail ='".$email."' ");


  if (mysqli_num_rows($check_user_query) == 0) { 
    
    header("Location: ../sign_up.html");
    echo "no existe el usuario";
  } 

  else { 
      
    while ($row = $check_user_query->fetch_assoc()) {
      $pass=$row["password"];
    }

    if ($password==$pass){
    	header("Location: ../dashboard.php");
    }

    else{
    
    	header("Location: ../login_fail.html");  
    	echo "mala contraseña";
  	}
  } 
?>