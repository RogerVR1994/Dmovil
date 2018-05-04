<?php
include "../../../connect.php";
  
  $link= db_Connection();
  $monto = $_POST['monto'];
  $result= $link->query("UPDATE Usuarios set saldo = saldo +".$monto." where nombre = 'Rogelio'");
  header('Location: ../dashboard.php');
?>