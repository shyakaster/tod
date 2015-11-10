<?php
// A class to help work with Sessions
// In our case, primarily to manage logging users in and out 
class Session {

    //Contructor
	function __construct() {
		session_start();
	
		//Set action Here
		if(isset($_REQUEST['go'])){
			 $_SESSION['go']=$_REQUEST['go'];			
		}
		else 
		   $_SESSION['go']='home';
		
		
		//Set live sessions here 
	    if (!isset($_SESSION['live'])) {
	         $_SESSION['live'] = false;
           }
           
           
           //Set error sessions here
           if (!isset($_SESSION['err'])) {
           	$_SESSION['err'] = array();
           }    
                   
      	}
	
    
	
	//Method to logout users
	public static function logOut()
	{
		session_destroy();
	      redirect_to(BASE_URL.'/?go=admin');
	}
	
    
		
	//Method to add new login
	public function logLogin($user)
		{
		$user = $user->id_str;
		$date = date('Y-m-d H:i:s');
        $sql="INSERT INTO login(date, oauth_uid) VALUES ('$date',$user)";
	    Database::performQuery($sql);
	}
	

}

//Create New Session Here
$session = new Session();


