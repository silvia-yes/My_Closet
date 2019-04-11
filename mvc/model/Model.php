<?php

include_once("model/Outfit.php");
include_once("model/User.php");

class Model {
	
	public function getOutfitList()
	{
		$server = "sql9.freemysqlhosting.net";
		$user = "sql9269783";
		$password = "WQImnUYV2L";
		$db = "sql9269783";
		$conn = new mysqli($server, $user, $password, $db);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		//else print "<br>Connection OK!";
		$sql_select = "SELECT * FROM outfit";
		$result = $conn->query($sql_select);
		$userIndex = 0;
		$megaArray=array();
		

		while($row = $result->fetch_assoc()){
			$outfitidArray[]=$row["outfit_id"];
			$sexArray[]=$row["gender"];
			$skin_colorArray[]=$row["skin_color"];
			$topArray[]=$row["top_name"];
			$topColorArray[]=$row["top_color"];
			$bottomArray[]=$row["bottom_name"];
			$bottomColorArray[]=$row["bot_color"];
			$nameArray[]=$row["outfit_name"];
			$userIDArray[]=$row["userid"];
			$seasonArray[]=$row["season"];
		
			$name= $nameArray[$userIndex];
			$outfitid= $outfitidArray[$userIndex];
			$sex=  $sexArray[$userIndex];
			$skin=  $skin_colorArray[$userIndex];
			$top= $topArray[$userIndex];
			$topcolor= $topColorArray[$userIndex];
			$bottom=  $bottomArray[$userIndex];
			$bottomcolor=  $bottomColorArray[$userIndex];
			$season=  $seasonArray[$userIndex];
			$userid= $userIDArray[$userIndex];
			$newoutfit = new Outfit($name, $sex, $skin, $top,$topcolor,$bottom,$bottomcolor,$outfitid,$season,$userid);
			
			
			$superArray = $newoutfit->Arrayify($name, $sex, $skin, $top,$topcolor,$bottom,$bottomcolor,$outfitid,$season,$userid);
			echo "<tr>";
			foreach($superArray as $key=>$var){
				echo('<td>' . $var. '</td>');
			}
			echo "</tr>";
			$megaArray[$userIndex] = "$superArray";
			$userIndex++;

			
			
		};
		
	}
	public function getUserlist(){
		$server = "sql9.freemysqlhosting.net";
		$user = "sql9269783";
		$password = "WQImnUYV2L";
		$db = "sql9269783";
		$conn = new mysqli($server, $user, $password, $db);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		//else print "<br>Connection OK!";
		$sql_select = "SELECT * FROM userLogin";
		$result = $conn->query($sql_select);
		$userIndex = 0;
		$megaArray=array();
		

		while($row = $result->fetch_assoc()){
			$usernameArray[]=$row["username"];
			$passwordArray[]=$row["password"];
			$userIDArray[]=$row["userIDnumber"];
		
			$username= $usernameArray[$userIndex];
			$password= $passwordArray[$userIndex];
			$userid= $userIDArray[$userIndex];

			$newuser = new User($username, $password,$userid);
			
			
			$superArray = $newuser->Arrayify($username, $password, $userid);
			
			echo "<tr>";
			foreach($superArray as $key=>$var){
				echo('<td>' . $var. '</td>');
			}
			echo "</tr>";
			$megaArray[$userIndex] = "$superArray";
			$userIndex++;

			
			
	};
}
}
?>