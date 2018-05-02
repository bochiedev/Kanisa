<?php 

	
	session_start();
    session_destroy();


	
	

    setcookie( email ,$login_email , time()-3600 ,' /bahati' );
	setcookie( pass ,$login_password , time()-3600 , '/bahati' );
			 

	
	
	header("Location: ../index.php");


	
	





?>