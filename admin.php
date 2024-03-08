<?php
session_start();
/*if(!isset($_session['id'])){
    header('location:login.php');
    exit();
}
if($_session['role']=== "Admin"){
    echo"hi Admin".$_SESSION['email'];
}
else{
    echo "not allow";
}*/


if(isset($_SESSION['user'])){
    if($_SESSION['user']->role == "admin"){
echo 'welcome'.$_SESSION['user']->email;
    }else{
       header("location://http://localhost:8080/form/index.php",true) ;
       die("");
    }

else{
    header("location://http://localhost:8080/form/index.php",true) ;
    die("");
 }
}


?>