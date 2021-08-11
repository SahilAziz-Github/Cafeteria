<?php

session_start();


if(isset($_COOKIE["valid"]) && $_COOKIE["valid"]=="yes")
{



?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
    .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}
    

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
    body {margin:0;}
    /*body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif} */

</style>

<p><h1>Welcome <?php echo $_COOKIE["uname"]; ?></h1></p><br>

</head>
<body>



    <div class="row"> 
              <div class="column">
                <a href="s4.html"><img src="images/s4.png" style="width:100%"></a>
                  <h2><p><b><i>Kinder Bueno Cheesecake</i></b></p></h2>
                <a href="s2.html"><img src="images/s2.png" style="width:100%"></a>
                  <h2><p><b><i>Strawberry Cheesecake</i></b></p></h2>
                <a href="p1.html"><img src="images/p1.png" style="width:100%"></a>
                  <h2><p><b><i>Mango Kulfi</i></b></p></h2>
                <a href="p2.html"><img src="images/p2.png" style="width:100%"></a>
                  <h2><p><b><i>Shahi Firni</i></b></p></h2>
              </div>
        
              <div class="column">
                <a href="s4.html"><img src="images/s3.png" style="width:100%"></a>
                  <h2><p><b><i>Kinder Bueno Cheesecake</i></b></p></h2>
                <a href="s1.html"><img src="images/s1.png" style="width:100%"></a>
                  <h2><p><b><i>Black Forest Cake</i></b></p></h2>
                <a href="p3.html"><img src="images/p3.png" style="width:100%"></a>
                  <h2><p><b><i>Yogurt Bowl</i></b></p></h2>
                <a href="p4.html"><img src="images/p4.png" style="width:100%"></a>
                  <h2><p><b><i>Mango Oatmeal</i></b></p></h2>
              </div>

              
    </div>
    
    
    






</p>


<a href="menu.html"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">See Upcoming Dish Menu</a><br>

   <a href="changepass.php"  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Change Password</a><br>


<a href="logout.php" title=""  style="width: 97%;background-color: #4CAF50;color: white;padding: 14px 20px;margin: 8px 0;border: none;
   border-radius: 4px; cursor: pointer;text-align:center;text-decoration: none;float: left;">Log Out</a><br><br><br>






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