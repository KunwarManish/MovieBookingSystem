<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/header.css">
<style>

</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">Theatre</a>
  <a href="#contact">About us</a>
  <a href="#">Coming soon</a>
  <a href="#">ADMIN</a>
  <a href="register.php"><span style="color:tomato;">Register</a>
  <div class="open-button" onclick="openForm()"><a><span style="color:red;">LOG IN</span></a></div>
  <?php include "login.php"?>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<br>


</body>
</html>
