<?php 
//session_start();

/*if(!isset($_session['id'])){
   /* header('location:index.php');
    exit(); 

}
else{*/
    require_once 'conn.php' ;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id=$_POST['id'];

        $newpassword=$_POST['password'];
$sql="UPDATE users SET password=:pass WHERE id=:id ";
$stmt=$conn->prepare($sql);
$stmt->execute(array(
    ':pass'=>$newpassword,
    ':id'=>$id
));
if($stmt){
    echo "data update" ;
}

else{
    echo "data not update" ;
}

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
id : <input type="text" id="" name="id" placeholder="id" require></br></br>

password : <input type="password" id="" name="password" placeholder="password" require></br></br>
<input type="submit" id="" name="submit" value='update' ></br>
</form>

</body>
</html>