<?php
	
	if(isset($_POST['email']) and $_POST['email']=="vcemm24@gmail.com" ){
		header("location:test2.html");
	}
		
	elseif($_POST['email']and $_POST['email']=="denismamba@gmail.com"){
			header("location:test1.html");
		}
	else{
			header("location:index.html");}
	
	
	//echo $_POST['email'];

?>