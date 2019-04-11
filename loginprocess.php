<?php
$server = "sql9.freemysqlhosting.net";
$user = "sql9269783";
$password = "WQImnUYV2L";
$db = "sql9269783";
$username = $_POST['newuser'];
$pwd = $_POST['newpwd'];


// print "Testing connection with ".$db;

// creating the connection

$conn = new mysqli($server, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



//check if username already exists

$sql_select = "SELECT * FROM userLogin";
$result = $conn->query($sql_select);
$usernameArray=[];
$pwdArray=[];
$idArray=[];
$exist="";
$existingpwd="";
$increment=0;
while($row = $result->fetch_assoc()){
           $usernameArray[]=$row["username"];
           $pwdArray[]=$row["password"];
           $idArray[]=$row["userIDnumber"];
}

while ( list($key, $val) = each($usernameArray) ) {
    if($val==$username){
    $exist=true;
    $userIndex= $key;
    $increment++;
    $realpwd= $pwdArray[$userIndex];
    //check if entered passwoed matches actual one
    if($realpwd==$pwd){
        $userid= $idArray[$userIndex];
        echo "
        <h1> Virtual Closet </h1>
        <h2> Welcome Back, ".$username ."! We missed you. Go to Model Page or Viewpage. </h2>
        <form method='POST' action='model.php'>
        <input type='hidden' id='userid' name='userid' value =". $userid.">
        <input type='submit' value='Go to Model Page' />
        </form>

        <form method='POST' action='view.php'>
        <input type='hidden' id='userid' name='userid' value =". $userid.">
        <input type='submit' value='Go to View Page' />
        </form>
        ";
        if ($username=="admin"){
           echo "
           <form method='POST' action='mvc/index.php'>
           <input type='hidden' id='userid' name='userid' value =". $userid.">
           <input type='submit' value='View Entire Database' />
          <br> Developer Tool (only works if username is 'admin')
           </form>
            ";
        }
    }
    else{
        echo "
        <h1> Virtual Closet </h1>
        <h2> Password and Username did not match. Please go back to the Log In Page<h2>
        <form style='text-align:center;' id ='insert' name='insert' action='index.php' 
        method ='POST'>
        <input type='submit' name='insert' value='Return to Log In Page'/>
        </form>
        ";
    }
}

}

if($increment==0){
    $exist==false;
}
//check 
    if ($exist==false) {
        print "
        <h1> Virtual Closet </h1>
        <h2>The Username Entered Does Not Exist<h2>
        <form style='text-align:center;' id ='insert' name='insert' action='index.php' 
        method ='POST'>
        <input type='submit' name='insert' value='Return to Log In Page'/>
        </form>
        ";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert_php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form style='text-align:right;' id ='insert' name='insert' action='index.php' 
        method ='POST'>
        <input type='submit' name='insert' value='Return to Log In Page'/>
        </form>
</body>
</html>