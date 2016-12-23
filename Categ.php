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
    $servername ='localhost';
    $username='root';
    $password='';
    $dbname='base1';
    $con= new mysqli($servername,$username,$password, $dbname);
    if ($con->connect_error){
      die('error');
    }
    
    $sql="SELECT * FROM categories ";
    $result=$con->query($sql);
    
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        ?>
        <img class="cImg" src="<?php echo $row['url_img']; ?>" />   
        <a href="Category.php?idcat=<?php echo $row['id'];?>" id="category"><?php echo $row['title']; ?></a>
        <!--<p class="category1 aa"><?php echo $row['title']; ?></p>-->
      <?php
    }
  }

  ?>


    
</div>
     
   <?php include 'scr.php';?>
  </body>
   <?php if (isset($_SESSION['login'])){ ?>
      <?php } else{ ?> 
      <script src="login.js"></script>
    <?php } ?>
</html>