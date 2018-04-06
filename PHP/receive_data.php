<?php  
	include "../../../connect.php";

  	$link=db_Connection();


	
		$monto = $_POST['monto'];
		$stmt = $link->prepare("INSERT INTO TRANSACCIONES VALUES (NULL, NULL, ?)");
		var_dump($stmt);
		$stmt->bind_param("d", $monto);
		$stmt->execute();
		  
		$stmt->close();
		$link->close();

		$fp = fopen('log.txt', 'a');
		$str = 'Transacción recibida por monto de: $'.$monto.' a las '.date('g').':'.date('i')."\n";
		fwrite($fp, $str);



	
?>