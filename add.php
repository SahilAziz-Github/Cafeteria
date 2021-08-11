<?php

session_start();


if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{
    
?>

<!DOCTYPE html>
<html>

<script  type="text/javascript">

function valid()
{

var iname = document.fm.Name.value;
var price = document.fm.price.value;
var ufile = document.fm.ufile.value;


var flag = true;




if(iname.length == 0  || price.length == 0  || ufile.length == 0 )

{




          
       
       document.getElementById("fill").innerHTML="Please Fill Up all the Fields.";
       document.getElementById("fill").style.color="red";

        flag = false;




}














return flag;





}

  


</script>

<body>

<h2 style="text-shadow: 1px 1px blue">Insert Items</h3>

<div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">




  <form action="add.php" method="post"  name="fm" enctype="multipart/form-data">

    
    

    <label for="Size"><b>Name:</b></label>
   <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" id="Name" name="Name" placeholder="Name of Item">
      
    <label for="price"><b>Price:</b></label>
    <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="text" id="price" name="price" placeholder="Price">



      <label for="files"><b>Upload Picture:</b></label><br>
   <input style="width: 35%;padding: 12px 20px;color:blue; font-weight:bold;background-color: white;     margin: 8px 0;display: inline-block;border: 1px solid #ccc;border-radius: 4px;
    box-sizing: border-box;" type="file" id="files" name="ufile">

     <p>

<label ><b>Area:</b></label><br><br>
  <select  name="type">
  <option value="Cake">Cake</option>
  <option value="Pastry">Pastry</option>
  <option value="icecream">Ice Cream</option>
  
 
</select>
  
    </p><br><br><br>



     <b id="fill"></b>
  
    <input style="width: 100%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;
    cursor: pointer;float: left;" type="submit"  name="submit"  onclick=" return  valid() "   value="Submit"><br><br><br>

  

   

  </form>

   <a href="admin.php" title=""  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float:left;">Back</a><br><br>



<a href="logout.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Logout</a><br><br><br>


  

</div>






</body>
</html>
 
 <?php


if(isset($_POST["submit"]))
         {


if( $_POST["Name"]!="" && $_POST["price"]!="" )
  {
     

$connect = mysqli_connect( "localhost", "root", "","final_project");

$sql=" insert into iteminfo (Name, Price, Type, Image)
values ('".$_POST["Name"]."','".$_POST["price"]."','".$_POST["type"]."', 'NA'
) ";

$result = mysqli_query($connect,$sql) or die  ( mysqli_error($connect)  );






echo "<h3 style='color:green'>Inserted Successfully.</h3>";


}

}

?>

<?php

}



else
{

 echo "<h1 style='color:red;text-align:center;'>You are not authorized to enter this page without Login.</h1><br><br>";

 echo "<h1 ><b style='color:black;text-align:center;'><u>Login First:</u><a  href='login.php' style='color:green;text-decoration:none;' >Go To Login Page    </a></b></h1>";

 

       
}


?>