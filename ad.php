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
          <div style="clear:both">
            <br>
          </div><iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d20496.146523226693!2d36.201842102099604!3d50.04848819822499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1482418445944"  display="flex" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe><?php include 'footer.php';?>
      </div>
      
      

   <?php include 'scr.php';?>
  </body>
  <?php if (isset($_SESSION['login'])){ ?>
      <?php } else{ ?> 
      <script src="login.js"></script>
    <?php } ?>
</html>