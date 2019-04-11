<?php
$server = "sql9.freemysqlhosting.net";
$user = "sql9269783";
$password = "WQImnUYV2L";
$db = "sql9269783";
$userid = $_POST['userid'];
$season = $_POST['season']
?>

<!doctype html>
<html lang ="en">
<head>
    <meta charset="utf-8">

    <title>Virtual Closet</title>
    <script 
        src = "./script/javascript.js",
        src="./script/jscolor.js">
    </script>

    <link rel="stylesheet" href="./css/styles.css">
    
</head>


<body>
<h1>Virtual Closet</h1>
<form style='text-align:right;' id ='insert' name='insert' action='index.php' 
        method ='POST'>
        <input type='submit' name='insert' value='Return to Log In Page'/>
        </form>

<?php
$conn = new mysqli($server, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//else print "<br>Connection OK!";
$sql_select = "SELECT * FROM outfit";
$result = $conn->query($sql_select);
echo "<h2> Hear Are All Your Outfit Names </h2>";
echo "<h3> Click on the Names of your outfits to view them</h3>";
echo "<br>";

if($season=="all"){
    
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
        
    };
    // echo $userid;
    // echo "<br>";
    while ( list($key, $val) = each($userIDArray) ) {
        // echo $val;
        // echo "<br>";
        if($val==$userid){ 
            $userIndex= $key;

            $Realname= $nameArray[$userIndex];
            $Realoutfitid= $outfitidArray[$userIndex];
            $Realsex=  $sexArray[$userIndex];
            $Realskin=  $skin_colorArray[$userIndex];
            $Realtop= $topArray[$userIndex];
            $RealtopColor= $topColorArray[$userIndex];
            $Realbottom=  $bottomArray[$userIndex];
            $RealbottomColor=  $bottomColorArray[$userIndex];
            $Realseason=  $seasonArray[$userIndex];

            echo  " <div onmouseover class= 'mouseover(e)' 'select' onclick='clickName(this)' id='" .$Realoutfitid. "'> Name: " . $Realname."</div> <div 
            style='display: none;'
            id = '" .$Realoutfitid. "*' >" . $Realsex." ". $Realskin ." ". $Realtop ." ". $RealtopColor ." ". $Realbottom ." ". $RealbottomColor." ".  $Realoutfitid. "</div>" ." ". " <br>";
            // echo "$val \n";
            // echo "$username";
        }
        
    }
}
else{
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
    }
    while ( list($key, $val) = each($userIDArray) ) {
        if($val==$userid){ 
            $userIndex= $key;

            $Realname= $nameArray[$userIndex];
            $Realoutfitid= $outfitidArray[$userIndex];
            $Realsex=  $sexArray[$userIndex];
            $Realskin=  $skin_colorArray[$userIndex];
            $Realtop= $topArray[$userIndex];
            $RealtopColor= $topColorArray[$userIndex];
            $Realbottom=  $bottomArray[$userIndex];
            $RealbottomColor=  $bottomColorArray[$userIndex];
            $Realseason=  $seasonArray[$userIndex];
            if($season==$Realseason){
            echo  " <div onmouseover class= 'mouseover(e)' 'select' onclick='clickName(this)' id='" .$Realoutfitid. "'> Name: " . $Realname."</div> <div 
            style='display: none;'
            id = '" .$Realoutfitid. "*' onclick='clickName(this)'>" . $Realsex." ". $Realskin ." ". $Realtop ." ". $RealtopColor ." ". $Realbottom ." ". $RealbottomColor." ".  $Realoutfitid. "</div>" ." ". " <br>"; 

        }
    }
}
}
?>

<p> 
    <form method='POST' action='model.php'>
        <input type='hidden' id='userid' name='userid' value ="<?php echo $userid ?>">
        <input type='submit' value='Go to Model Page and Make another Outfit' />
        </form>
<br>
        <form method='POST' action='view.php'>
        <input type='hidden' id='userid' name='userid' value ="<?php echo $userid ?>">
        <input type='hidden' id='season' name='season' value ="all">
        <input type='submit' value='View All Outfits' />
        </form>
<br>
        <form method='POST' action='view.php'>
        Season: 
        <br>
            <select name="season">
			<option value="spring">Spring</option>
			<option value="summer">Summer</option>
			<option value="fall">Fall</option>
			<option value="winter">Winter</option>
		</select>
        <input type='hidden' id='userid' name='userid' value ="<?php echo $userid ?>"> <br>
        <br><input type='submit' value='View Outfits by Season' />
        </form> </p>


<div id = "create">



</div>




<script type="text/javascript">
console.log(<?php echo $username ?>);
var images = document.getElementById("create");
function create(sex, skin, top1, topcolor, bottom1, bottomcolor){
    images.innerHTML="";
    var top =document.createElement("img");
    var bottom =document.createElement("img");
    if(sex=="male"){
        sex="boy";
    }
    if(sex=="female"){
        sex="girl";
    }
    var combo=sex+skin;
    top.src="/Project/Week%203/images/"+combo+"/" + top1 +".png";
    bottom.src="/Project/Week%203/images/"+combo+"/" + bottom1 +".png";
    top.style.backgroundColor= topcolor;
    bottom.style.backgroundColor= bottomcolor;
    top.style.height="450px";
    bottom.style.height="450px";
    top.style.display="block";
    top.style.marginLeft="auto";
    top.style.marginRight="auto";
    bottom.style.display="block";
    bottom.style.marginLeft="auto";
    bottom.style.marginRight="auto";
    images.appendChild(top);
    images.appendChild(bottom);
}
function pluck(){
var line = document.getElementById("entry").textContent;

line=line.split(" ");
var sex = line[0];
var skin = line[1];
var top = line[2];
var topcolor = line[3];
var bottom = line[4];
var bottomcolor = line[5];
console.log(line);
create(sex, skin, top, topcolor, bottom, bottomcolor);
}

function mouseover(e){
    e.style.fontWeight ="bold";
}
function clickName(e){

    console.log(e.id);
    var desired= e.id + "*";
    console.log(desired);
    var selected = document.getElementById(desired);
    console.log(selected.id);
    var line = selected.textContent;
    console.log(line);


    line=line.split(" ");
    console.log(line);
    var sex = line[0];
    var skin = line[1];
    var top = line[2];
    var topcolor = line[3];
    var bottom = line[4];
    var bottomcolor = line[5];

    create(sex, skin, top, topcolor, bottom, bottomcolor);
    
}
</script>
<script>
console.log(<?php echo $userid ?>);
</script>
</body>