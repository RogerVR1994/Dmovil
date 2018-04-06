<?php
    require ('plivo-curl-wrapper.php');
    //use Plivo\RestAPI;
    $auth_id = "MAZTKYMJIWY2Y3YZNIYZ";
    $auth_token = "YjdlOGJlZTg3NzBhZTI1ZTI0MmY0NWNhNTRmN2U5";
    
    $p = new RestAPI($auth_id, $auth_token);
    // Send a message
    $params = array(
            'src' => '14083598743', // Sender's phone number with country code
            'dst' => '+525554181711', // Receiver's phone number with country code
            'text' => 'Error en PLC S7-1500. Usuario: Profe Virgilio' 
        );
    // Send message
    $response = $p->send_message($params);
    // Print the response
    echo "Response : ";
    print_r($response['response']);
    // Print the Api ID
    echo "<br> Api ID : {$response['response']['api_id']} <br>";
    // Print the Message UUID
    echo "Message UUID : {$response['response']['message_uuid'][0]} <br>";
    header("Location: /Redes/hola.html");
?>
