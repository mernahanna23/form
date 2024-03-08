


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body> 
    <div id='form'>
    <form action="" method="post">
    <h1>login/register</h1>
    email :<input type="email" id="" name="email" placeholder="email" required></br></br>
    password : <input type="password" id="" name="password" placeholder="password" require></br></br>
    <input type="submit" id="" name="submit" value='login' ></br>
<h4>or</h4>
<a href="update.php">if you forget your password  </a><br>
<a href="register.php">you don't have email sign up</a>
</form>
</div>

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
//session_start();
 require_once 'conn.php';
 if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM user WHERE email=:email AND password=:pass";
    $stmt=$conn->prepare($sql);
   // $stmt->bindparam("email",$_POST['email']);
   // $stmt->bindparam("password",$_POST['password']);

    $stmt->execute(array(
        ':email'=> $email,
        ':pass'=> $password 

    ));
    $user=$stmt->fetch(PDO::FETCH_ASSOC);


    if($user){
        session_start();
        $_SESSION['id']=$user['id'];
        $_SESSION['email']=$user['email'];
       $_SESSION['role']=$user['role'];
      //  header("location:profile.php");

if($user->role == "listner"){
    header("location: profile.php",true);
}

else if($user->role == "admin"){
    header("location: admin.php",true);
}

    }

 }



?>