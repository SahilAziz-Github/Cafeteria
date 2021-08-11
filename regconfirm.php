<?php

session_start();


if($_POST["submit"] == true) {

$connect = mysqli_connect( "localhost", "root", "","final_project");

$sql=" insert into registration values ('".$_POST["uname"]."','".$_POST["phon"]."','".   
$_POST["email"]."','".$_POST["pass"]."','Customer'
) ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );
    
$sql=" insert into login values ('".$_POST["uname"]."','".$_POST["pass"]."','Customer'
) ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );



header("Location:reg.php?success=1");

}
 ?>