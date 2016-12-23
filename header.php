<header>
          <div id = "logo" >
            <a href="index.php" title="На главную">
              <img src="img/logo.png" title="NEWS.com" alt="news.com">
              <span>NEW`S
              </span>
            </a>
          </div>
          <div id="about">
          <div class="nav">
          <ul >
            <li>
            <a href="Categ.php" title="Узнать детальней">Category
            </a>
            <ul>
            <?php
              require_once 'db_connect.php';  
              $db = new DB_CONNECT();

              $result = mysql_query("SELECT * FROM categories")  or die(mysql_error());

                if (mysql_num_rows($result) > 0) {              
                  while ($row = mysql_fetch_array($result)) { ?>
                  <a href="Category.php?idcat=<?php echo $row['id'];?>"><li><?php echo $row['title']; ?></li></a>           
               <?php  }
}
               ?>
               </ul>
               </li>
               <?php if (isset($_SESSION['login'])){ if($_SESSION['au']==1){ ?>
            <li>
              <a href="admin1.php"><h4>Users</h4></a>
            </li>
            <li>
              <a href="admin2.php"><h4>Categories</h4></a>
            </li>
            <li>
              <a href="admin3.php"><h4>News</h4></a>
            </li>
            <?php } } ?> 
               </ul>
               </div>
            <a href="ad.php" title="Написать письмо">Where you can find us?
            </a>
          </div>
          <div id="reg_auth">
          <!--  <a href="" title="Войти в личный кабинет пользователя">-->
            <?php if (isset($_SESSION['login'])){ ?><?php echo 'Hello '.$_SESSION['login'];?>
              <a href="logout.php"><h4>Logout<?php ?></h4>
              </a>
            <?php } else{ ?> 
              <a href="javascript: void(0);" id="myLog"><div id="btn">Login</div></a>
              <?php } ?>
          <!--      <div id="btn">
                Log in
              </div>
           </a>
            <a href="" title="Зарегистрироваться на сайте">
              <div id="btn1">
                Sing up
              </div>
            </a>-->
          </div>
        </header>
        <nav>
          <a href="index.php">IT news
          </a>
          <a href="video.php">Video
          </a>
          <a href="">Forum
          </a>
          <div id="search">
            <span>Поиск
            </span>
            <i class="fa fa-search" aria-hidden="true">
            </i>
          </div>
        </nav>