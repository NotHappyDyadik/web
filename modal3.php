	<!-- The Modal -->
	<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
	<form method="get" action="insert3.php">
 	<span class="close" id="close2">x</span>
	<p><label for="title">Title</label><br>
		<input type="text"  name="title" id="title"/>
	</p>
	<p> <label for="id_category">Category</label><br>
		<input type="text"  name="id_category" id="id_category"/>
	</p>
	<p> <label for="content">Content</label><br>
		<input type="text" name="content" id="content"/>
	</p>
	<p> <label for="url_img">Url image</label><br>
		<input type="text"  name="url_image" id="url_image"/>
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
	<form id="fr12" method="get" action="edit3.php">
 	<span class="close" id="close3">x</span>
 	<input type="hidden"  name="eddel" id="eddel" value=""/>
 	<input type="hidden"  name="num" id="num" value=""/>

	<p><label for="title">Title</label><br>
		<input type="text"  name="title1" id="title1"/>
	</p>
	<p> <label for="id_category">Category</label><br>
		<input type="text"  name="id_category1" id="id_category1"/>
	</p>
	<p> <label for="content">Content</label><br>
		<input type="text" name="content1" id="content1"/>
	</p>
	<p> <label for="url_img">Url image</label><br>
		<input type="text"  name="url_image1" id="url_image1"/>
	</p>
	<p>
		<input class="myButton" type="submit" id="sub" name="sub" value="send" />
	</p>
	</form>
  </div>

</div>