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
        <?php include 'modal1.php' ?>
        
      </div>
        <table>
    <thead>
        <tr><th colspan="7">Users</th></tr>
        <tr>
        <th >user_id</th>
        <th >login</th>
        <th >first_name</th>
        <th >last_name</th>
        <th >group_au</th>
        <th >date_creation</th>
        <th >action</th>
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
  
  $sql="SELECT * FROM users ";
  $result=$con->query($sql);
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      ?>
      <tr >
      <td><?php echo $row['user_id']; ?></td>
      <td><?php echo $row['login']; ?></td>
      <td><?php echo $row['first_name']; ?></td>
      <td><?php echo $row['last_name']; ?></td>
      <td><?php echo $row['group_au']; ?></td>
      <td><?php echo $row['date_creation']; ?></td>
      <td><a href="javascript: void(0);"><img class="help1 correct" src="https://world.utexas.edu/io/images/isss/planning%20icon.png" width=20 height=20/></a>   
      <a href="javascript: void(0);"><img class="del"  src="http://download.seaicons.com/icons/custom-icon-design/flatastic-1/512/delete-1-icon.png" width=20 height=20/></a></td>       
      </tr>
      <?php
    }
  }

  ?>
  </tbody>
  </Table>
  <button class="bu" id="myBtn">Add</button>
          <div style="clear:both">
            <br>
         </div> 
      </div>
      
     

   <?php include 'scr.php';?>
  </body>
  <script src="admin1.js"></script>
  <script src="admin.js"></script>

</html>