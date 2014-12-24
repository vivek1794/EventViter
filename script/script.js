/***************************************************************************************
Change this domain to the place where eventViterServer folder is hosted. 
example : 
	domain=""; --> if server folder is inside the eventviter folder
	domain="http://www.example.com"; --> if server folder is in the root of example.com
	domain="http://localhost"; --> if the server folder is in the root of localhost
***************************************************************************************/
	var domain = "";

/***************************************************************************************
To init the webpage - sidebar,message box etc
***************************************************************************************/

$( document ).ready(function(){
	$("#menu").load("menu.html"); 
	$(".button-collapse").sideNav();
	$('.modal-trigger').leanModal();
	$('.materialboxed').materialbox();
	$('#notvalid').hide();
	$('#noback').hide();
	$('#nodata').hide();	

});

/***************************************************************************************
User Authentication for index.html
***************************************************************************************/
$(document).ready(function(){
	 $("#login").click(function(){	
		  username=$("#uname").val();
		  password=$("#passwd").val();
	 	Pace.restart();
		  $.ajax({
		   type: "POST",
		   url: domain+"eventViterServer/loginAuth.php",
			data: "name="+username+"&pwd="+password,
		   success: function(html){    
			if(html=='true') {
			 //$("#add_err").html("right username or password");
			 window.location="dashboard.html";
			}
			else    {
				$('#notvalid').show();
			}
		   },
		  });
		return false;
	});
});