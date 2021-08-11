<?php

if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{
    
?>

<!DOCTYPE html>
<html>

<body>

<script   type="text/javascript">


</script>




<h3  style="text-shadow: 1px 1px blue">Change Password:</h3>

<div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">
  <form action="changepass.php" name= "fm"  method="post">

    <label for="pass"><b>Current Password:</b></label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="password" id="passw" name="pass"  placeholder="Current Password...."><br>

     
     <label for="usernamr"><b>New Password:</b></label>
    <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="password" id="newpass" name="newpss" placeholder="New Password...">
     <br>
    <b id="pas"></b>
    <br>
    





<?php




if (isset($_POST["submit"]))
 {

if($_POST["newpss"]!="" && strlen($_POST["newpss"])>4)

{


$temp=array();
$cred=array();


include("function.php");

logindataRead();



foreach ($temp as $k => $v) {
  


  if( $_COOKIE["uname"] == $k  &&  ($_POST["pass"]) ==  $v  )

  {
    $newpass = ($_POST['newpss']);
    $uname=$_COOKIE["uname"];


    $connect = mysqli_connect( "localhost", "root","","final_project");

    $sql="update  login set `Password`= '".$newpass."'  where 	UserName = '".$uname."' ";


    $result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );



    
    


    echo "<b  id='xxx' style='color:green'> Successfully Changed Password.</b>";


  

  }

  
}


}
else 
    echo "<b  id='xxx' style='color:green'> Password has to be more than 4 character.</b>";

}

?>

<b    id='haha'    style='color:red'></b>

 <input style="width: 100%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;
    cursor: pointer;" type="submit" value="Change Password" onclick=" return  valid()"  name="submit"><br>

   

  </form>

  <a href="customer.php" title=""  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Back</a><br><br><br>

</div>

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