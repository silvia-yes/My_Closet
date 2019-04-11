<?php

class User {
	public $username;
	public $password; 
	public $userid;
	
	public function __construct($username, $password, $userid)  
    {  
        $this->username = $username;
	    $this->password = $sex;
		$this->userid = $userid;
	} 
	public function Arrayify($username, $password, $userid){
		$array= array(
		
		"username" => $username,
	    "password" => $password,
		"userid" => $userid,
		
	);
	return $array;
		}
}

?>