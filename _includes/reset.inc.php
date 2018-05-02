<?php  
include_once"db.inc.php";


if(isset($_POST['reset'])){


	$email = mysqli_real_escape_string($connection ,$_POST['resetemail']); 


	if( empty($email)){


		echo "fill empty fields";


	}else{


		$email = filter_var($email,FILTER_SANITIZE_EMAIL);
		
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			
			echo "enter a valid email";
			
		}else{
			
			$query = "SELECT * FROM user WHERE user_email ='$email' ";
	 
		 $get_user = mysqli_query($connection,  $query) ;
		 $resultCheck = mysqli_num_rows($get_user);
			
			
		if($resultCheck < 1){
				
				echo "User does not exist!";
	
	}else{


		$str =  "0123456789hxonqvytuijkwzbcafgpqmdersl";
		$str = str_shuffle($str);
		$str = substr($str,1,10);			
		echo $str;
	}			 

}
}
}




?>
