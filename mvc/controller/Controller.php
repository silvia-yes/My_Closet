<?php
include_once("model/Model.php");
include_once("model/Outfit.php");

class Controller {
	public $model;
	public $user;
	public function __construct()  
    {  
        $this->model = new Model();
		$this->user = new Model();
    } 
	
	public function invoke()
	{
		//Show entire MySQL Table of Outfits
		include 'view/outfitlist.php';
		$outfits = $this->model->getOutfitList();
		
		
		
		//Show entire MySql Table of Users
		include 'view/userlist.php';
		$outfit = $this->user->getUserlist();
		
		echo "<br>";
	}
}

?>