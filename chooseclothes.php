	<?php 
	$skin = $_POST['skin'];
	$sex = $_POST['sex'];
	$userid = $_POST['userid'];
	?>
	
	<html xmlns="http://www.w3.org/1999/xhtml" ></html>
	
	<head>
		<title>Virtual Closet</title>
	
	
		<script type="text/javascript" src="refresh_web/prototype.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/colormethods.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/colorvaluepicker.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/slider.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/colorpicker.js" ></script>
		<script type="text/javascript" src="script/ntc.js" ></script>
		<script src="script/javascript.js"></script>
	
	</head>

	<body>
	
		<h1>Choose Your Outfit</h1>
		<form style='text-align:right;' id ='insert' name='insert' action='index.php' 
        method ='POST'>
        <input type='submit' name='insert' value='Return to Log In Page'/>
        </form>
	<div>
		<form method="post" action="choosecolor.php">
		<h2>Choose a Top</h2>
		<input type="radio" name="top1" id="shirtradio" value="shirt" > <label for="shirt"><img class="picktop" src="./images/boyskin1/shirt.png" alt="boy" id="shirt"  height="230"; style="background-color: white";>
		<input type="radio" name="top1" id="buttonradio" value="button" > <label for="button"><img class="picktop" src="./images/boyskin1/shorts.png" alt="boy" id="button" height="230" style="background-color: white";>
		<input type="radio" name="top1" id="tankradio" value="tank" > <label for="tank"><img class="picktop" src="./images/boyskin1/shorts.png" alt="boy" id="tank" height="230" style="background-color: white";>
		<input type="radio" name="top1" id="hoodieradio" value="hoodie" > <label for="hoodie"><img class="picktop" src="./images/boyskin1/shorts.png" alt="boy" id="hoodie" height="230" style="background-color: white";>
		<input type="radio" name="top1" id="longsleeveradio" value="longsleeve" > <label for="longsleeve"><img class="picktop" src="./images/boyskin1/shorts.png" alt="boy" id="longsleeve" height="230" style="background-color: white";>
		<br>
		<h2>Choose a Bottom</h2>
		<input type="radio" name="bottom" id="shortsradio" value="shorts" > <label for="shorts"><img class="pickbottom" src="./images/boyskin1/shorts.png" alt="boy" id="shorts" height="230" style="background-color: white";>
		<input type="radio" name="bottom" id="jeansradio" value="jeans" > <label for="jean"><img class="pickbottom" src="./images/boyskin1/shorts.png" alt="boy" id="jeans" height="230" style="background-color: white";>
		<input type="radio" name="bottom" id="sweatsradio" value="sweats" > <label for="jean"><img class="pickbottom" src="./images/boyskin1/shorts.png" alt="boy" id="sweats" height="230" style="background-color: white";>
		<input type="radio" name="bottom" id="caprisradio" value="capris" > <label for="jean"><img class="pickbottom" src="./images/boyskin1/shorts.png" alt="boy" id="capris" height="230" style="background-color: white";>
		<input type="radio" name="bottom" id="skirtradio" value="skirt" > <label for="jean"><img class="pickbottom" src="./images/boyskin1/shorts.png" alt="boy" id="skirt" height="230" style="background-color: white";>
		
		<input type="hidden" name="sex" value ="<?php echo $sex ?>">
		<input type="hidden" name="skin" value ="<?php echo $skin ?>">
		<input type="hidden" name="userid" value ="<?php echo $userid ?>">
		<br>
		<p id=test style = "display: none;">Test  </p>
		<p style = "display: none;"><?php echo $userid?></p>


		<input type="submit" value="Confirm Selection" />
		
		
		</form>
	</div>


<script type="text/javascript">
	
var testtext = document.getElementById("test");
var shirt = document.getElementById("shirt");
var button = document.getElementById("button");
var tank = document.getElementById("tank");
var hoodie = document.getElementById("hoodie");
var longsleeve = document.getElementById("longsleeve");
var shorts = document.getElementById("shorts");
var jeans = document.getElementById("jeans");
var sweats = document.getElementById("sweats");
var capris = document.getElementById("capris");
var skirt = document.getElementById("skirt");
var sex = "<?php echo $sex ?>";
var skin = "<?php echo $skin ?>";
var sexskin= sex + skin;

testtext.innerHTML = sex + " " + skin + " " + sexskin;

switch(sexskin){
	case "maleskin1":
	testtext.innerHTML+= "win1";

	shirt.src="/Project/Week%203/images/boyskin1/shirt.png";
	button.src = "/Project/Week%203/images/boyskin1/button.png";
	tank.src = "/Project/Week%203/images/boyskin1/tank.png";
	hoodie.src = "/Project/Week%203/images/boyskin1/hoodie.png";
	longsleeve.src = "/Project/Week%203/images/boyskin1/longsleeve.png";
	shorts.src = "/Project/Week%203/images/boyskin1/shorts.png";
	jeans.src = "/Project/Week%203/images/boyskin1/jeans.png";
	sweats.src = "/Project/Week%203/images/boyskin1/sweats.png";
	capris.src = "/Project/Week%203/images/boyskin1/capris.png";
	skirt.src = "/Project/Week%203/images/boyskin1/skirt.png";

	break;
	case "maleskin2":
	testtext.innerHTML+= "win2";

	shirt.src="/Project/Week%203/images/boyskin2/shirt.png";
	button.src = "/Project/Week%203/images/boyskin2/button.png";
	tank.src = "/Project/Week%203/images/boyskin2/tank.png";
	hoodie.src = "/Project/Week%203/images/boyskin2/hoodie.png";
	longsleeve.src = "/Project/Week%203/images/boyskin2/longsleeve.png";
	shorts.src = "/Project/Week%203/images/boyskin2/shorts.png";
	jeans.src = "/Project/Week%203/images/boyskin2/jeans.png";
	sweats.src = "/Project/Week%203/images/boyskin2/sweats.png";
	capris.src = "/Project/Week%203/images/boyskin2/capris.png";
	skirt.src = "/Project/Week%203/images/boyskin2/skirt.png";

	break;
	case "maleskin3":
	testtext.innerHTML+= "win3";

	shirt.src="/Project/Week%203/images/boyskin3/shirt.png";
	button.src = "/Project/Week%203/images/boyskin3/button.png";
	tank.src = "/Project/Week%203/images/boyskin3/tank.png";
	hoodie.src = "/Project/Week%203/images/boyskin3/hoodie.png";
	longsleeve.src = "/Project/Week%203/images/boyskin3/longsleeve.png";
	shorts.src = "/Project/Week%203/images/boyskin3/shorts.png";
	jeans.src = "/Project/Week%203/images/boyskin3/jeans.png";
	sweats.src = "/Project/Week%203/images/boyskin3/sweats.png";
	capris.src = "/Project/Week%203/images/boyskin3/capris.png";
	skirt.src = "/Project/Week%203/images/boyskin3/skirt.png";

	break;
	case "maleskin4":
	testtext.innerHTML+= "win4";

	shirt.src="/Project/Week%203/images/boyskin4/shirt.png";
	button.src = "/Project/Week%203/images/boyskin4/button.png";
	tank.src = "/Project/Week%203/images/boyskin4/tank.png";
	hoodie.src = "/Project/Week%203/images/boyskin4/hoodie.png";
	longsleeve.src = "/Project/Week%203/images/boyskin4/longsleeve.png";
	shorts.src = "/Project/Week%203/images/boyskin4/shorts.png";
	jeans.src = "/Project/Week%203/images/boyskin4/jeans.png";
	sweats.src = "/Project/Week%203/images/boyskin4/sweats.png";
	capris.src = "/Project/Week%203/images/boyskin4/capris.png";
	skirt.src = "/Project/Week%203/images/boyskin4/skirt.png";

	break;
	case "maleskin5":
	testtext.innerHTML+= "win5";

	shirt.src="/Project/Week%203/images/boyskin5/shirt.png";
	button.src = "/Project/Week%203/images/boyskin5/button.png";
	tank.src = "/Project/Week%203/images/boyskin5/tank.png";
	hoodie.src = "/Project/Week%203/images/boyskin5/hoodie.png";
	longsleeve.src = "/Project/Week%203/images/boyskin5/longsleeve.png";
	shorts.src = "/Project/Week%203/images/boyskin5/shorts.png";
	jeans.src = "/Project/Week%203/images/boyskin5/jeans.png";
	sweats.src = "/Project/Week%203/images/boyskin5/sweats.png";
	capris.src = "/Project/Week%203/images/boyskin5/capris.png";
	skirt.src = "/Project/Week%203/images/boyskin5/skirt.png";

	break;
	case "femaleskin1":
	testtext.innerHTML+= "win6";

	shirt.src="/Project/Week%203/images/girlskin1/shirt.png";
	button.src = "/Project/Week%203/images/girlskin1/button.png";
	tank.src = "/Project/Week%203/images/girlskin1/tank.png";
	hoodie.src = "/Project/Week%203/images/girlskin1/hoodie.png";
	longsleeve.src = "/Project/Week%203/images/girlskin1/longsleeve.png";
	shorts.src = "/Project/Week%203/images/girlskin1/shorts.png";
	jeans.src = "/Project/Week%203/images/girlskin1/jeans.png";
	sweats.src = "/Project/Week%203/images/girlskin1/sweats.png";
	capris.src = "/Project/Week%203/images/girlskin1/capris.png";
	skirt.src = "/Project/Week%203/images/girlskin1/skirt.png";

	break;
	case "femaleskin2":
	testtext.innerHTML+= "win7";

	shirt.src="/Project/Week%203/images/girlskin2/shirt.png";
	button.src = "/Project/Week%203/images/girlskin2/button.png";
	tank.src = "/Project/Week%203/images/girlskin2/tank.png";
	hoodie.src = "/Project/Week%203/images/girlskin2/hoodie.png";
	longsleeve.src = "/Project/Week%203/images/girlskin2/longsleeve.png";
	shorts.src = "/Project/Week%203/images/girlskin2/shorts.png";
	jeans.src = "/Project/Week%203/images/girlskin2/jeans.png";
	sweats.src = "/Project/Week%203/images/girlskin2/sweats.png";
	capris.src = "/Project/Week%203/images/girlskin2/capris.png";
	skirt.src = "/Project/Week%203/images/girlskin2/skirt.png";


	break;
	case "femaleskin3":
	testtext.innerHTML+= "win8";

	shirt.src="/Project/Week%203/images/girlskin3/shirt.png";
	button.src = "/Project/Week%203/images/girlskin3/button.png";
	tank.src = "/Project/Week%203/images/girlskin3/tank.png";
	hoodie.src = "/Project/Week%203/images/girlskin3/hoodie.png";
	longsleeve.src = "/Project/Week%203/images/girlskin3/longsleeve.png";
	shorts.src = "/Project/Week%203/images/girlskin3/shorts.png";
	jeans.src = "/Project/Week%203/images/girlskin3/jeans.png";
	sweats.src = "/Project/Week%203/images/girlskin3/sweats.png";
	capris.src = "/Project/Week%203/images/girlskin3/capris.png";
	skirt.src = "/Project/Week%203/images/girlskin3/skirt.png";


	break;
	case "femaleskin4":
	testtext.innerHTML+= "win9";

	shirt.src="/Project/Week%203/images/girlskin4/shirt.png";
	button.src = "/Project/Week%203/images/girlskin4/button.png";
	tank.src = "/Project/Week%203/images/girlskin4/tank.png";
	hoodie.src = "/Project/Week%203/images/girlskin4/hoodie.png";
	longsleeve.src = "/Project/Week%203/images/girlskin4/longsleeve.png";
	shorts.src = "/Project/Week%203/images/girlskin4/shorts.png";
	jeans.src = "/Project/Week%203/images/girlskin4/jeans.png";
	sweats.src = "/Project/Week%203/images/girlskin4/sweats.png";
	capris.src = "/Project/Week%203/images/girlskin4/capris.png";
	skirt.src = "/Project/Week%203/images/girlskin4/skirt.png";


	break;
	case "femaleskin5":
	testtext.innerHTML+= "win10";

	shirt.src="/Project/Week%203/images/girlskin5/shirt.png";
	button.src = "/Project/Week%203/images/girlskin5/button.png";
	tank.src = "/Project/Week%203/images/girlskin5/tank.png";
	hoodie.src = "/Project/Week%203/images/girlskin5/hoodie.png";
	longsleeve.src = "/Project/Week%203/images/girlskin5/longsleeve.png";
	shorts.src = "/Project/Week%203/images/girlskin5/shorts.png";
	jeans.src = "/Project/Week%203/images/girlskin5/jeans.png";
	sweats.src = "/Project/Week%203/images/girlskin5/sweats.png";
	capris.src = "/Project/Week%203/images/girlskin5/capris.png";
	skirt.src = "/Project/Week%203/images/girlskin5/skirt.png";


	break;
	default:
	testtext.innerHTML+= "win00";
}

	</script>
	
	<script>
console.log(<?php echo $userid ?>);
</script>
</body>
</html>