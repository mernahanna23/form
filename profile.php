
<?php
session_start();
if(isset($_SESSION['user'])){
    if($_SESSION['user']->role == "user"){
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