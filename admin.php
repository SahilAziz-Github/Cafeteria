<?php

session_start();

if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{

$_SESSION["uname"]=$_COOKIE["uname"];

?>

<!DOCTYPE html>
<html>
<head>

<p><h1><u>Admin Panel</u></h1></p><br>

</head>
<body>

<p>
	<h2 style="color: blue;">Items Currently Available For Sale</h2>
<table style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;">
  <tr>

  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Food Item Name</th>


    <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Price</th>


  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Type</th>

  <th style="border: 1px solid #ddd; padding: 8px;padding-top: 12px;padding-bottom: 12px;text-align: left;
  background-color: #4CAF50;
  color: white;">Food Image</th>

  </tr>

<?php




include("library.php");

$jsonData= getJSONFromDB("select * from iteminfo ");

$jsn=json_decode($jsonData);


foreach ($jsn as $v) 
{
 
?>



  <tr >
    <td style="border: 1px solid #ddd; padding: 8px;" ><?php echo $v->Name;   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v->Price;   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v->Type;   ?></td>
    <td style="border: 1px solid #ddd; padding: 8px;"><?php  echo $v->Image;   ?></td>


  <?php
     
}     


?>


</table>
</p>


<a href="add.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Add Food Items</a><br>

   <a href="changepass.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Change Password</a><br>


<a href="Logout.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">LogOut</a><br><br><br>


</body>
</html>


<?php

}



else
{

 echo "<h1 style='color:red;text-align:center;'>You are not authorized to enter this page without Login.</h1><br><br>";

 echo "<h1 ><b style='color:black;text-align:center;'><u>Login First:</u><a  href='login.php' style='color:green;text-decoration:none;' >Go To Login Page    </a></b></h1>";

 

       
}


?>