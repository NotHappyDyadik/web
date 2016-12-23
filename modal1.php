	<!-- The Modal -->
	<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
	<form method="get" action="insert1.php">
 	<span class="close" id="close2">x</span>
	<p><label for="pass">Password</label><br>
		<input type="password"  name="pass" id="pass" value=""/>
	</p>
	<p> <label for="login">Login</label><br>
		<input type="text"  name="login" id="login"/>
	</p>
	<p><label for="fname">First name</label><br>
		<input type="text" name="fname" id="fname"/>
	</p>
	<p><label for="lname">Last name</label><br>
		<input type="text"  name="lname" id="lname"/>
	</p>
	<p><label for="au">Group AU</label><br>
		<input type="text"  name="au" id="au"/>
	</p>
	<p><label for="date">Date creation</label><br>
		<input type="date"  name="date" id="date"/>
	</p>
	<p>
		<input class="myButton" type="submit" name="submit" value="send" />
	</p>
	</form>
  </div>

</div>

	
	<!-- The Modal -->
	<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
	<form id="fr12" method="get" action="edit1.php">
 	<span class="close" id="close3">x</span>
 	<input type="hidden"  name="eddel" id="eddel" value=""/>
 	<input type="hidden"  name="num" id="num" value=""/>

	<p>
	</p>
	<p> <label for="login">Login</label><br>
		<input type="text"  name="login1" id="login1" value=""/>
	</p>
	<p><label for="fname">First name</label><br>
		<input type="text" name="fname1" id="fname1" value=""/>
	</p>
	<p><label for="lname">Last name</label><br>
		<input type="text"  name="lname1" id="lname1" value=""/>
	</p>
	<p><label for="au">Group AU</label><br>
		<input type="text"  name="au1" id="au1" value=""/>
	</p>
	<p><label for="date">Date creation</label><br>
		<input type="date"  name="date1" id="date1" value=""/>
	</p>

	<p>
		<input class="myButton" type="submit" id="sub" name="sub" value="send" />
	</p>
	</form>
  </div>

</div>