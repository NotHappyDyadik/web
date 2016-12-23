<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Feedback
    </title>
    <link rel="stylesheet"  href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/main_page.css" type="text/css" charset="utf-8">
    <meta name="description" content="NEWS">
    <meta name="keywords" content="NEWS">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <link href="img/sv.png" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="css/font-awesome.min.css">
  </head>
  <body>
   <?php include 'login.php' ?>
<?php session_start();
  ?>
 <div id="wrapper">
      <div id="content">
        <?php include 'header.php';?>
        
      </div>
  <div >
   <span id="err" class="err"></span>
<form  action="" id="add_err"><br>
      
        <input type="text" value="" class="login" name="login" placeholder="login"/>
        <br><br>
        <input type="password" value="" class="password" name="password" placeholder="password"/>
        <br><br>
        <input type="text" value="" class="fname" name="fname" placeholder="First name"/>
        <br><br>
        <input type="text" value="" class="lname" name="lname" placeholder="Last name"/>
        <br><br>
        <input type="hidden" value="2" class="au" name="au" />
        <br>
        <input type="submit" class='reg myButton' value="create account"/>
      </form>

   </div><?php include 'footer.php';?>
</div>
      
   <?php include 'scr.php';?>
  </body>
   <script src="log.js"></script>
    <script src="regis.js"></script>
</html>