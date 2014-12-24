/*****
To init the webpage - sidebar,message box etc
******/
$( document ).ready(function(){
	$("#menu").load("menu.html"); 
	$(".button-collapse").sideNav();
	$('.modal-trigger').leanModal();
	$('.materialboxed').materialbox();
	$('#notvalid').hide();
	$('#noback').hide();
	$('#nodata').hide();	

        
});

/*****
User Authentication for index.html
******/
$(document).ready(function(){
	 $("#login").click(function(){	
		  username=$("#uname").val();
		  password=$("#passwd").val();
	 	Pace.restart();
		  $.ajax({
		   type: "POST",
		   url: "http://localhost/eventViterServer/loginAuth.php",
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