 $('.reg').click(function(){	
event.preventDefault(); 
		  username=$(".login").val();
		  pas=$(".password").val();
		  fnm=$(".fname").val();
		  lnm=$(".lname").val();
		  $.ajax({
		   type: "POST",
		   url: "regis.php",
			data: { login: username, 
                        ps: pas, fn: fnm, 
                        ln: lnm},
		   success: function(html){
                        console.log(html);    
			if(html=='notexist')    {
			 window.location="index.php";
			}
			else    {
			 $("#err").html("Username is already exist");
			}
		   }
		  });
		});	