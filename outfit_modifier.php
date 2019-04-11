<?php
$skin = $_POST['skin'];
$sex = $_POST['sex'];
$top = $_POST['top'];
$bottom =$_POST['bottom'];
$name = $_POST['name'];
$season = $_POST['season'];
$topcolor = $_POST['topcolor'];
$bottomcolor =$_POST['bottomcolor'];
$userid = $_POST['userid'];
$digits = 5;
$outfitid = rand(pow(10, $digits-1), pow(10, $digits)-1);

?>
<head>
        <title>Virtual Closet</title>
</head>
<body>
    
<h1>Virtual Closet</h1>
<form style='text-align:right;' id ='insert' name='insert' action='index.php' 
        method ='POST'>
        <input type='submit' name='insert' value='Return to Log In Page'/>
        </form> 
<h2>Outfit Saved!</h2>
<p>
   
   Skin: <?php echo $skin ?> <br>
   Sex: <?php echo $sex ?> <br>
   Top: <?php echo $top ?> <br>
   Top Color: <?php echo $topcolor ?> <br>
   Bottom: <?php echo $bottom ?> <br>
   Bottom Color: <?php echo $bottomcolor ?> <br>
   Name: <?php echo $name ?> <br>
   Season: <?php echo $season ?> <br>
   ID: <?php echo $outfitid ?> <br>
   User ID: <?php echo $userid ?>
</p>

<?php
$server = "sql9.freemysqlhosting.net";
$user = "sql9269783";
$password = "WQImnUYV2L";
$db = "sql9269783";

//print "Testing connection with ".$db;

// creating the connection

$conn = new mysqli($server, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else print "<br>Connection OK!";

//outfit_id, skin_color, gender,top_name, top_color, bottom_name, bot_color, outfit_name, user_id, season 
$sql_insert = "INSERT INTO outfit
        VALUES ('$outfitid','$skin','$sex','$top','$topcolor','$bottom','$bottomcolor', '$name', '$userid', '$season')";

if ($conn->query($sql_insert) === TRUE) {
    echo "<br>Values added";
} else {
    echo "<br>Error adding values " . $conn->error;
}
$sql_select = "SELECT * FROM outfit";

// echo "<br>See values below:";
// if ($result = $conn->query("SELECT * FROM outfit")) {
// //    printf("Select returned %d rows.\n", $result->num_rows);
// }

// $result = $conn->query($sql_select);
// echo "<br>";
// while($row = $result->fetch_assoc()) {
//        	echo "outfit_id " . $row["outfit_id"]. " skin_color: " . $row["skin_color"]. "gender:" . $row["gender"]. "top_name:". $row["top_name"]. "bottom_name:" . $row["bottom_name"]." bot_color: " . $row["bot_color"]." <br>";
// }

// ?>
<p> 
    <form method='POST' action='model.php'>
        <input type='hidden' id='userid' name='userid' value ="<?php echo $userid ?>">
        <input type='submit' value='Go to Model Page and Make another Outfit' />
        </form>

        <form method='POST' action='view.php'>
        <input type='hidden' id='userid' name='userid' value ="<?php echo $userid ?>">
        <input type='hidden' id='season' name='season' value ="all">
        <input type='submit' value='View All Outfits' />
        </form>

        <form method='POST' action='view.php'>
        Season: 
            <select name="season">
			<option value="spring">Spring</option>
			<option value="summer">Summer</option>
			<option value="fall">Fall</option>
			<option value="winter">Winter</option>
		</select>
        <input type='hidden' id='userid' name='userid' value ="<?php echo $userid ?>">
        <br> <br>
        <input type='submit' value='View Outfits by Season' />
        </form>
 </p>

<script>
console.log(<?php echo $userid ?>);
</script>
 </body>