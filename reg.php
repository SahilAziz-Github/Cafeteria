<?php
session_start();


?>

<!DOCTYPE html>
<html>



<head>

<script  type="text/javascript">


var xmlhttp = new XMLHttpRequest();
var pError = 0 ;



</script>





	
</head>






<body>

<h2 style="text-shadow: 1px 1px blue"> <U style="color: blue;">Registration Please</U></h3>

<div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">





  <form action="regconfirm.php" method="post" id="fm" name="fm">

   
     

    <label for="uname"><b>User Name:</b></label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" id="uname" name="uname"   placeholder="User Name....">

    
   <br>
    <b id="una"></b>
    <br> <br>

     

     <label for="pass"><b>Password:</b></label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="password" id="pass" name="pass" placeholder="Password....">

    <br>
    <b id="pas"></b>



     <label for="cpass"><b>Confirm Password:</b></label>
       <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
        box-sizing: border-box;" type="password" id="cpass" name="cpass" placeholder="Confirm Password....">


         <br>
        <b id="con"></b>
        <br> <br>




   <label for="phon"><b>Phone:</b></label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text"  id="phon" name="phon"     placeholder="Phone..." >

     <br>
    <b id="pho"></b>
    <br> <br>



    <label for="email"><b>Email:</b></label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" id="email" name="email"    placeholder="Email...">


 <br>
    <b id="eml"></b>
    <br> <br>



    <?php

if (isset($_GET["success"])) 
{
  echo "<h3 id='sus' style='color:green'> Registration is Successful</h3>";
}


?>


    
  
    <input style="width: 100%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;
    cursor: pointer;float: left;" type="submit"  name="submit" onclick =" return validate() "    value="Submit"><br><br><br>

   

  </form>

   <a href="index.html" title=""  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float:left;">Back</a><br><br><br>

 


</div>






</body>
</html>