<?php 
	$userid = $_POST['userid'];
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
<form method="POST" action="chooseclothes.php">

<div class="images">
<img src="./images/girl.png" id="model" height="465" style="background-color: rgb(211, 211, 211);"/>
</div>

<br>

<h2>Choose A Skin Color</h2>
<p id=demo>Default</p>

<input type="hidden" name="userid" value ="<?php echo $userid ?>">
<input type="radio" name="skin" id="skin1" value="skin1" onclick="chooseColor(event)"> <label for="skin1"> <img src="./images/box.png" id="skin1" style="background-color: #ffdbac; " > <br>
<input type="radio" name="skin" id="skin2" value="skin2"onclick="chooseColor(event)"> <label for="skin2"> <img src="./images/box.png" id="skin2" style="background-color: #f1c27d; " > <br>
<input type="radio" name="skin" id="skin3" value="skin3" onclick="chooseColor(event)"> <label for="skin3"> <img src="./images/box.png" id="skin3" style="background-color: #e0ac69; " > <br>
<input type="radio" name="skin" id="skin4" value="skin4" onclick="chooseColor(event)"> <label for="skin4"> <img src="./images/box.png" id="skin4" style="background-color: #c68642; " ><br>
<input type="radio" name="skin" id="skin5" value="skin5" onclick="chooseColor(event)"> <label for="skin5"> <img src="./images/box.png" id="skin5" style="background-color: #8d5524;" ><br>
<br>
<br>

<h2>Choose Body Model</h2>

<input type="radio" name="sex" id="male" value="male" onclick="swapMale()"> <label for="male">Male
<br>
<input type="radio" name="sex" id="female" value="female" onclick="swapFemale()"> <label for="female">Female
<br>
<br>
<input type="submit" value="Confirm Selection" />

</form>
<script>
console.log(<?php echo $userid ?>);
</script>
</body>