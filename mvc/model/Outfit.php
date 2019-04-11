<?php

class Outfit {
	public $name;
	public $sex; //male, female
	public $skin; //skin1, skin2, skin3, skin4, skin5
	public $top; //shirt, hoodie, tank, longsleeve, or button
	public $topcolor; //hexcode
	public $bottom;
	public $bottomcolor; //hexcode
	public $outfitid;
	public $season;
	public $userid;
	
	public function __construct($name, $sex, $skin, $top,$topcolor,$bottom,$bottomcolor,$outfitid,$season,$userid)  
    {  
        $this->name = $name;
	    $this->sex = $sex;
		$this->skin = $skin;
		$this->top = $top;
	    $this->topcolor = $topcolor;
		$this->bottom = $bottom;
		$this->bottomcolor = $bottomcolor;
	    $this->outfitid = $outfitid;
		$this->season = $season;
		$this->userid = $userid;
	} 
	public function Arrayify($name, $sex, $skin, $top,$topcolor,$bottom,$bottomcolor,$outfitid,$season,$userid){
		$array= array(
		
		"name" => $name,
		"outfitid" =>$outfitid,
		"sex" => $sex,
		"skin" => $skin,
		"top" =>$top,
	    "topcolor" =>$topcolor,
		"bottom" =>$bottom,
		"bottomcolor" =>$bottomcolor,
		"userid" => $userid,
		"season" =>$season
		
	);
	return $array;
		}
}

?>