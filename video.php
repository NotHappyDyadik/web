<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NEWS
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
          
          <div style="clear:both">
            <br>
          </div>
          <div class="article1">
           <iframe width="580" height="320" src="https://www.youtube.com/embed/w0J3S5xnsJA" frameborder="0" allowfullscreen padding=""></iframe>

              <iframe width="580" height="320" src="https://www.youtube.com/embed/mMZAHN_WC5A" frameborder="0" allowfullscreen></iframe>

              <iframe width="580" height="320" src="https://www.youtube.com/embed/tmL-TrKgEVc" frameborder="0" allowfullscreen></iframe>
            <iframe width="580" height="320" src="https://www.youtube.com/embed/HFoPTE9Ui2Q" frameborder="0" allowfullscreen></iframe>

             <iframe width="580" height="320" src="https://www.youtube.com/embed/MxqhJ_2GCGA" frameborder="0" allowfullscreen></iframe>

             <iframe width="580" height="320" src="https://www.youtube.com/embed/5kK-UqxByhg" frameborder="0" allowfullscreen></iframe>

             <iframe width="580" height="320" src="https://www.youtube.com/embed/vutDBFvWpWQ" frameborder="0" allowfullscreen></iframe>

             <iframe width="580" height="320" src="https://www.youtube.com/embed/mMZAHN_WC5A" frameborder="0" allowfullscreen></iframe>

             <iframe width="580" height="320" src="https://www.youtube.com/embed/sQqQEau-VXE" frameborder="0" allowfullscreen></iframe>

             <iframe width="580" height="320" src="https://www.youtube.com/embed/T7E6HY98nAI" frameborder="0" allowfullscreen></iframe>
          </div>
          </a>
        </div><?php include 'footer.php';?>
      </div>
       
   <?php include 'scr.php';?>
  </body>
   <?php if (isset($_SESSION['login'])){ ?>
      <?php } else{ ?> 
      <script src="login.js"></script>
    <?php } ?>
</html>