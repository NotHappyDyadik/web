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
   <?php 
      $idn = $_GET['idn'];
    $servername ='localhost';
    $username='root';
    $password='';
    $dbname='base1';
    $con= new mysqli($servername,$username,$password, $dbname);
    if ($con->connect_error){
      die('error');
    }
    
    $sql="SELECT * FROM news ";
    $result=$con->query($sql);
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
                                 if($row['id']==$idn){
        ?>
        <img class="cImg" src="<?php echo $row['url_image'];?>"/>   
        <p><?php echo $row['title']; ?></p>
        <p><?php echo $row['content']; ?></p>
      <?php

  }}}

  ?>

   </div>
</div>
      
   <?php include 'scr.php';?>
  </body>
   <?php if (isset($_SESSION['login'])){ ?>
      <?php } else{ ?> 
      <script src="login.js"></script>
    <?php } ?>
</html>