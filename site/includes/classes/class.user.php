<?php

//This is a class  for users of Tithe4Good!

/**
 * @author Herbert Musoke
 *
 */
class User{
	
/**
 * @param Logged in user id
 * @return nothing
 */	
	final public static function LogUserLogin(){		
		$user_id = $_SESSION['user_id'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$ref = $_SERVER['HTTP_REFERER'];
		$created = date('Y-m-d H:i:s');
		$sql = "INSERT INTO userlogins VALUES('','$ip','$browser','$ref','$created','$user_id')";
		Database::performQuery($sql);
	}
	
	
/**
 * @param email,password
 * @return Sessison live if successful else redirect to Login page with errors array
 */		
	public function DoLogin($email,$password)
	{
		$email = Database::prepData($email);
		$passwd = Database::prepData($password);
		$passwd = md5($passwd);
		$sql = "SELECT * FROM user WHERE email LIKE '$email' AND password LIKE '$passwd' LIMIT 0,1";
		$result = Database::performQuery($sql);
		
		//Check if there exists a user else redirect to login page
		if($result->num_rows == 0){
			$_SESSION['err'][] = "<li>Account does not exist. Check your email and password.</li>";
			redirect_to(BASE_URL.'/Login.html');
		}
		//login user
		else {
		 
		$user = $result->fetch_assoc();
		
		//Validate authenticated users
		if($user['activated'] == 0)
			$_SESSION['err'][] = "<li>Your acocunt is not activated. Please check your email to activate your account.</li>";
		if($user['isBanned'] == 1)
			$_SESSION['err'][] = "<li>Your account is banned. Please email your queries at support@tithe4good.org. </li>";
		if($user['Disabled'] == 1)
	    	$_SESSION['err'][] = "<li>Your account is disabled. Please contact support@tithe4good.org to re-enable it. </li>";
		
		//check for errors
		if(count($_SESSION['err']) == 0)
		{
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['photo'] = $user['photo'];
			$_SESSION['level'] = $user['UserCategory_id'];
			$_SESSION['name'] = $user['fname'].' '.$user['lname'];
			$_SESSION['live'] = 1;
			self::LogUserLogin();
			redirect_to(BASE_URL.'/Dashboard.html');  
		}
		else
				redirect_to(BASE_URL.'/Login.html');
	}
	
	}
	
/**
 * @param email
 * @return user_id
 */

	public static function SetUserId($email){
		$sql = "SELECT id FROM user WHERE email LIKE '$email'";
		$result = Database::performQuery($sql);
		$result = $result->fetch_assoc();
		$result = $result['id'];
		return $result;
	}
	
	
/**
 * @param email address
 * @return boolean
 *
 */
	public function emailExits($email){
		$sql = "SELECT id FROM user WHERE email LIKE '$email'";
		$result = Database::performQuery($sql);
		if($result->num_rows > 0)
			return true;
		else
			return false;
	}
	
	
	//Method for new User Register
	public function DoReg()
	{
					
		$fname = Database::prepData($_POST['first_name']);
		$lname = Database::prepData($_POST['last_name']);
		$email = Database::prepData($_POST['email']);
		$pass1 = Database::prepData($_POST['password']);
		$pass2 = Database::prepData($_POST['password2']);
		$phone = Database::prepData($_POST['phone']);
		$gender = Database::prepData($_POST['gender']);
		//Validation for email and password
		if($pass1 != $pass2)
			$_SESSION['err'][]="<li>Passwords do not match! </li>";
		if($this->emailExits($email))
			$_SESSION['err'][]="<li>Email already exists! </li>";
		
		//Add new user if there are no errors
		if(count($_SESSION['err']) == 0)   
		{			
			$pass = md5($pass1);
			$code = randomkey();
			$sql = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `password`, `phone`, `is_activated`, `user_category_id`, `gender`,activation_code)  VALUES('$fname','$lname','$email','$pass',$phone',0,2,'$gender','$code')";
			Database::performQuery($sql);
			$_SESSION['name'] = $fname.' '.$lname;
			$_SESSION['email'] = $email1;
			$_SESSION['user_id'] = self::SetUserId($email);
			$_SESSION['live'] = 1;
			 redirect_to(BASE_URL.'/?go=regPhoto');
		}
		//Go back to registration
		else 
		   redirect_to(BASE_URL.'/?go=reg');
		
	}
	
	
	public function DoRegOrg()
	{
			
		$oname = Database::prepData($_POST['oname']);
		$ein = Database::prepData($_POST['ein']);
		$email = Database::prepData($_POST['email']);
		$web = Database::prepData($_POST['web']);
		$cat = Database::prepData($_POST['cat']);
		$reg = date('Y-m-d H:i:s');
		$budget = Database::prepData($_POST['budget']);
		$status = Database::prepData($_POST['status']);
		$founded = Database::prepData($_POST['founded']);
		//Validation for email and password
		if($email1 != $email2)
			$_SESSION['err'][]="<li>Emails do not match! </li>";
		if($pass1 != $pass2)
			$_SESSION['err'][]="<li>Passwords do not match! </li>";
		if($this->emailExits($email1))
			$_SESSION['err'][]="<li>Email already exists! </li>";
	
		//Add new user if there are no errors
		if(count($_SESSION['err']) == 0)
		{
			$pass = md5($pass1);
			$sql = "INSERT INTO `user`(`id`, `fname`, `lname`, `email`, `phone`,`gender`,`password`, `photo`, `activated`, `isBanned`, `Disabled`, `UserCategory_id`)  VALUES('','$fname','$lname','$email1','$phone',$gender,'$pass','',1,0,0,1)";
			Database::performQuery($sql);
			$_SESSION['name'] = $fname.' '.$lname;
			$_SESSION['email'] = $email1;
			$_SESSION['user_id'] = self::SetUserId($email1);
			$_SESSION['live'] = 1;
			redirect_to(BASE_URL.'/RegPhoto.html');
		}
		//Go back to registration
		else
			redirect_to(BASE_URL.'/Register.html');
	
	}
	
	
	
	
	//Method for new User Register
	public function DoRegPhoto(){		
		if ($_FILES['photo']['error'] > 0) {
			echo "Error: " . $_FILES['photo']['error'] . "<br />";
		} else {
			// array of valid extensions
			$validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
			// get extension of the uploaded file
			$fileExtension = strrchr($_FILES['photo']['name'], ".");
			// check if file Extension is on the list of allowed ones
			if (in_array($fileExtension, $validExtensions)) {
				$newNamePrefix = time() . '_150X150_';
				$newNamePrefix1 = time() . '_400X400_';
				$newNamePrefix2 = time() . '_73X73_';
				
				$manipulator = new ImageManipulator($_FILES['photo']['tmp_name']);
				$manipulator1 = new ImageManipulator($_FILES['photo']['tmp_name']);
				$manipulator2 = new ImageManipulator($_FILES['photo']['tmp_name']);
				// resizing
				$newImage = $manipulator->resample(150, 150);
				$newImage1 = $manipulator1->resample(400, 400);
				$newImage2 = $manipulator2->resample(73, 73);
				
				// saving file to uploads folder
				$manipulator->save('assets/t4g/images/user/' . $newNamePrefix . $_FILES['photo']['name']);
				$manipulator1->save('assets/t4g/images/user/' . $newNamePrefix1 . $_FILES['photo']['name']);
				$manipulator2->save('assets/t4g/images/user/' . $newNamePrefix2 . $_FILES['photo']['name']);
				
				
				//Update user details with photo location
				$photo = $newNamePrefix . $_FILES['photo']['name'];
				$email = $_SESSION['email'];
				$sql = "UPDATE user SET photo ='$photo' WHERE email LIKE '$email'";		
				Database::performQuery($sql);
				redirect_to(BASE_URL.'/RegAddress.html');
			}
			else {
				$_SESSION['err'][] = "<li>Failed to process image.</li>";
				$_SESSION['err'][] = "<li>Allowed image types are .jpg,.jpeg,.png and .gif</li>";
				$_SESSION['err'][] = "<li>Please upload a new photo.</li>";
				redirect_to(BASE_URL.'/RegPhoto.html');				
			}
	
	}
	
	
}

/*  */
//Method for new User Address
    public function DoRegAddress(){

	$street1 = Database::prepData($_POST['street1']);
	$street2 = Database::prepData($_POST['street2']);
	$type = Database::prepData($_POST['type']);
	$city = Database::prepData($_POST['city']);
	$state = Database::prepData($_POST['state']);
	$zip = Database::prepData($_POST['zip']);
	$country = Database::prepData($_POST['country']);
	$user =  $_SESSION['user_id'];
	$sql = "INSERT INTO `useraddress`(`address_type_id`, `Street1`, `Street2`, `City`, `State`, `ZIP`, `Country`, `user_id`) 
			VALUES ('$type','$street1','$street2','$city','$state','$zip','$country','$user')";
	Database::performQuery($sql);
    redirect_to(BASE_URL.'/Dashboard.html');  
}



}
