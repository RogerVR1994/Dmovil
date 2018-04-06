 <?php
$servername = "localhost";
$username = "root";
$password = "Ro9311o/";
$dbname = "Dinero_Movil";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO usuarios VALUES (NULL, ?, ?, ?, AES_ENCRYPT(?, ?))");
$stmt->bind_param("sssss", $firstname, $lastname, $email, $password, $key);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$password = "hola";
$key = 'yumyum';
$stmt->execute();



echo "New records created successfully";

$stmt->close();
$conn->close();
?> 