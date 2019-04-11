<?php 
	$username = $_POST['newuser'];
	$pwd = $_POST['newpwd'];
	?>

<?php
$server = "sql9.freemysqlhosting.net";
$user = "sql9269783";
$password = "WQImnUYV2L";
$db = "sql9269783";


// creating the connection

$conn = new mysqli($server, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//assign new user an ID

$userid= rand(1,99999);



//check if username already exists
$sql_select = "SELECT * FROM userLogin";
$result = $conn->query($sql_select);
$usernameArray=[];
$exist="";
while($row = $result->fetch_assoc()) {
           
           $usernameArray[]=$row["username"];
}

foreach($usernameArray as $var){
    if($var==$username){
    $exist=true;
}
else{
    $exist=false;
}
}

if($exist){
//taken username
    echo "<h1>Virtual Closet</h1>
    <form style='text-align:right;' id ='insert' name='insert' action='index.php' 
        method ='POST'>
        <input type='submit' name='insert' value='Return to Log In Page'/>
        </form>";
    print "Username is already taken. <br> Please go back to the login page to use a different username. ";
}
else{
//insert user basic information
//username, password,userIDnumber
$sql_insert = "INSERT INTO userLogin
        VALUES ('$username','$pwd','$userid')";

if ($conn->query($sql_insert) === TRUE) {
    echo "<h1>Virtual Closet</h1>";
    echo "
    <form style='text-align:right;' id ='insert' name='insert' action='index.php' 
        method ='POST'>
        <input type='submit' name='insert' value='Return to Log In Page'/>
        </form>
    ";
    echo "<h2>Welcome to Virtual Closet, " . $username . "! Start making your outfit right now! </h2> <br> <br>";
    echo "
    <form method='POST' action='model.php'>
    <input type='hidden' id='userid' name='userid' value =". $userid.">
    <input type='submit' value='Go to Model Page' />
    ";
} else {
    echo "<br>Error adding values " . $conn->error;
}
}


?>