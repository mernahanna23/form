<?php
$dsn='mysql:host=localhost;dbname=db1';
//user to connect
$user='root';
//password to this user
$pass='';
$options = [
    PDO :: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
try {

$conn= new PDO($dsn,$user,$pass); // start a new connection with pdo class
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
echo 'you are connected';
}

catch(PDOException $e){
    echo 'fail' . $e->getMessage();
}

?>
