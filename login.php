<!DOCTYPE html>
<html>

<body>

<script   type="text/javascript">


var xmlhttp = new XMLHttpRequest();

var pError = 0;


  
function valid()
{

var un = document.fm.usernamr.value;
var pw = document.fm.pass.value;

var flag =true;

if( pError == 1  )

{

    flag=false;

    
       document.getElementById("una").innerHTML="";
       document.getElementById("haha").innerHTML="Wrong credential";
       document.getElementById("haha").style.color="red";
    
}

if( un.length == 0  || pw.length == 0   )

{
    flag=false;

    document.getElementById("una").innerHTML="Please Fill up all the fields.";
    document.getElementById("una").style.color="orange";
    var el = document.getElementById("haha");
    if(el != null)
    {
      
       document.getElementById("haha").innerHTML="";

    }
}

return flag;

}

</script>


<h3  style="text-shadow: 1px 1px blue">login Please</h3>

<div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">
  <form action="login.php" name= "fm"  method="post">
    <label for="usernamr"><b>User Name:</b></label>
    <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" id="usernamr" name="usernamr" onkeyup="showHint()" placeholder="UserName...">

    <label for="pass"><b>Password:</b></label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="password" id="passw" name="pass"  onkeyup="showHint()"     placeholder="Password...."><br>

     <b id="una"></b>
    
<?php

session_start();


if (isset($_POST["submit"]))
 {


    $temp=array();
    $cred=array();


    include("function.php");

    logindataRead();
    $flag=0;


    foreach ($temp as $k => $v) 
    {

      if( $_POST["usernamr"] == $k  &&  ($_POST["pass"]) ==  $v  )
      {
          
         
          if ($cred[$k]=="Customer") 
         {

          global $flag;
          global $k;


         setcookie("valid","yes",time()+5000);
         setcookie("uname",$k,time()+5000);

          $flag=1;

          header("Location:customer.php");
         } 

         if ($cred[$k]=="Admin") 
         {

           global $flag;
           global $k;

         setcookie("valid","yes",time()+5000);
         setcookie("uname",$k,time()+5000);

          $flag=1;

          header("Location:admin.php");

         }  
          
          

      }
        
        
        
    }
    
}

?>

<b    id='haha'    style='color:red'></b>

 <input style="width: 100%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;
    cursor: pointer;" type="submit" value="Login" onclick=" return  valid()"  name="submit"><br>

   

  </form>

  <a href="index.html" title=""  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Return</a><br><br><br>

</div>

</body>
</html>