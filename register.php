
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <div id=form >
    <h1>register</h1>
    <br><br>
    <form action="" method="post">


email: <input type="email" id="" name="email" placeholder="email"  ></br></br>
password : <input type="password" id="" name="password" placeholder="password" ></br></br>


<input type="submit" id="" name="submit" value='register' ></br></br>
</div>
</form>

<style>
        body{
            background-color : pink ;
        }
        #form{
            background-color: white;
            width: 45%;
            margin:120px auto;
            padding: 50 px; 
        }
    </style>
</body>
</html>


<?php
session_start();
require_once 'conn.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
$email=$_POST['email'];
$password=$_POST['password'];

    $sql="  INSERT INTO users (email , password,role)  VALUES (:email ,:pass,'listner')"; 
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
        ':email' => $email,
        ':pass'=> $password
    ));
   if($stmt)
   echo "registration success";
else {
    echo 1 ;
}
}
else{
    echo "hi ";
}
?>