<?php 
	
	include "../../../connect.php";

  	$link=db_Connection();
	$check_user_query = $link->query("SELECT correo as mail FROM Usuarios WHERE correo = 'rogeliovr94@gmail.com'");


	if (mysqli_num_rows($check_user_query) == 0) { 
   	//results are empty, do something here 
		echo "vacio";
	} 
	else { 
   		while ($row = $check_user_query->fetch_assoc()) {
    		$correo=$row["mail"];
    	}
		//$result= $link->query("SELECT * FROM tbl_lote ORDER BY `LOTE_PK` DESC");
		echo $correo;
	}  

	

	$link->close();

 ?>