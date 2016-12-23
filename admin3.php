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
  
<?php session_start();
  ?>
  

   <div id="wrapper">
      <div id="content">
        <?php include 'header.php';?>
        <?php include 'modal3.php' ?>
        
      </div>
       <table>
    <thead>
        <tr><th colspan="7">News</th></tr>
        <tr>
        <th >id</th>
        <th >title</th>
        <th >id_category</th>
        <th >content</th>
        <th >url_img</th>
        <th >action</th>
        <th ></th>
        </tr>
    </THead>
    <TBody>
<?php
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
      ?>
      <tr><td><?php echo $row['id']; ?></td>
      <td><?php echo $row['title']; ?></td>
      <td><?php echo $row['id_category']; ?></td>
      <td><?php echo  $row['content']; ?></td>
      <td><?php echo $row['url_image'];/*$row['url_image'];*/ ?></td>
      <td><a href="javascript: void(0);"><img class="help1 correct" src="https://world.utexas.edu/io/images/isss/planning%20icon.png" width=20 height=20/></a> 
      <a href="javascript: void(0);"><img class="del"  src="http://download.seaicons.com/icons/custom-icon-design/flatastic-1/512/delete-1-icon.png" width=20 height=20/></a></td>       
      </tr>
      <?php
    }
  }

  ?>
    </TBody>
    </table>
      <button class="bu" id="myBtn">Add</button>
          <div style="clear:both">
            <br>
          
    </div>
      
     

   <?php include 'scr.php';?>
  </body>
<script src="admin3.js"></script>
  <script src="admin.js"></script>
</html>