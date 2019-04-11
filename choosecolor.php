	<?php 
	$skin = $_POST['skin'];
	$sex = $_POST['sex'];
	$top = $_POST['top1'];
	$bottom =$_POST['bottom'];
	$userid = $_POST['userid'];
	?>
	<!--
	The following large section is acquired from John Dyer. 
	He made a really great open source Photoshop-like color picker tool
	which worked well with the purpose of the project
	 -->

	<!--
	Copyright (c) 2007 John Dyer (http://johndyer.name)
	
	Permission is hereby granted, free of charge, to any person
	obtaining a copy of this software and associated documentation
	files (the "Software"), to deal in the Software without
	restriction, including without limitation the rights to use,
	copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the
	Software is furnished to do so, subject to the following
	conditions:
	
	The above copyright notice and this permission notice shall be
	included in all copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
	EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
	OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
	NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
	HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
	WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
	FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
	OTHER DEALINGS IN THE SOFTWARE.
	-->
	
	<html xmlns="http://www.w3.org/1999/xhtml" ></html>
	
	<head>
		<title>Virtual Closet</title>
		<style type="text/css">
		body, td {
			font-family: tahoma;
			font-size: 10pt;
		}
		</style>
		<link rel="stylesheet" href="./css/styles.css">
	
		<script type="text/javascript" src="refresh_web/prototype.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/colormethods.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/colorvaluepicker.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/slider.js" ></script>
		<script type="text/javascript" src="refresh_web/colorpicker/colorpicker.js" ></script>
		<script type="text/javascript" src="script/ntc.js" ></script>
		<script src="script/javascript.js"></script>
	
	</head>
	<body>
	
		<h1>Choose Your Outfit and Color Combination</h1>
		<form style='text-align:right;' id ='insert' name='insert' action='index.php' 
        method ='POST'>
        <input type='submit' name='insert' value='Return to Log In Page'/>
        </form>
	
		<table>
			<tr>
				<td valign="top">
					<div id="cp1_ColorMap"></div>
				</td>
				<td valign="top">
					<div id="cp1_ColorBar"></div>
				</td>
	
				<td valign="top">
	
					<table>
						<tr>
							<td colspan="3">
								<div id="cp1_Preview" style="background-color: #fff; width: 60px; height: 60px; padding: 0; margin: 0; border: solid 1px #000;">
									<br />
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<input type="radio" id="cp1_HueRadio" name="cp1_Mode" value="0" />
							</td>
							<td>
								<label for="cp1_HueRadio">H:</label>
							</td>
							<td>
								<input type="text" id="cp1_Hue" value="0" style="width: 40px;" /> &deg;
							</td>
						</tr>
	
						<tr>
							<td>
								<input type="radio" id="cp1_SaturationRadio" name="cp1_Mode" value="1" />
							</td>
							<td>
								<label for="cp1_SaturationRadio">S:</label>
							</td>
							<td>
								<input type="text" id="cp1_Saturation" value="100" style="width: 40px;" /> %
							</td>
						</tr>
	
						<tr>
							<td>
								<input type="radio" id="cp1_BrightnessRadio" name="cp1_Mode" value="2" />
							</td>
							<td>
								<label for="cp1_BrightnessRadio">B:</label>
							</td>
							<td>
								<input type="text" id="cp1_Brightness" value="100" style="width: 40px;" /> %
							</td>
						</tr>
	
						<tr>
							<td colspan="3" height="5">
	
							</td>
						</tr>
	
						<tr>
							<td>
								<input type="radio" id="cp1_RedRadio" name="cp1_Mode" value="r" />
							</td>
							<td>
								<label for="cp1_RedRadio">R:</label>
							</td>
							<td>
								<input type="text" id="cp1_Red" value="255" style="width: 40px;" />
							</td>
						</tr>
	
						<tr>
							<td>
								<input type="radio" id="cp1_GreenRadio" name="cp1_Mode" value="g" />
							</td>
							<td>
								<label for="cp1_GreenRadio">G:</label>
							</td>
							<td>
								<input type="text" id="cp1_Green" value="0" style="width: 40px;" />
							</td>
						</tr>
	
						<tr>
							<td>
								<input type="radio" id="cp1_BlueRadio" name="cp1_Mode" value="b" />
							</td>
							<td>
								<label for="cp1_BlueRadio">B:</label>
							</td>
							<td>
								<input type="text" id="cp1_Blue" value="0" style="width: 40px;" />
							</td>
						</tr>
	
	
						<tr>
							<td>
								#:
							</td>
							<td colspan="2">
								<input type="text" id="cp1_Hex" value="FF0000" style="width: 60px;" />
							</td>
						</tr>
	
					</table>
				</td>
			</tr>
		</table>
		
	
	<div style="display:none;">
		<img src="refresh_web/colorpicker/images/rangearrows.gif" />
		<img src="refresh_web/colorpicker/images/mappoint.gif" />
		
		<img src="refresh_web/colorpicker/images/bar-saturation.png" />
		<img src="refresh_web/colorpicker/images/bar-brightness.png" />
		
		<img src="refresh_web/colorpicker/images/bar-blue-tl.png" />
		<img src="refresh_web/colorpicker/images/bar-blue-tr.png" />
		<img src="refresh_web/colorpicker/images/bar-blue-bl.png" />
		<img src="refresh_web/colorpicker/images/bar-blue-br.png" />
		<img src="refresh_web/colorpicker/images/bar-red-tl.png" />
		<img src="refresh_web/colorpicker/images/bar-red-tr.png" />
		<img src="refresh_web/colorpicker/images/bar-red-bl.png" />
		<img src="refresh_web/colorpicker/images/bar-red-br.png" />	
		<img src="refresh_web/colorpicker/images/bar-green-tl.png" />
		<img src="refresh_web/colorpicker/images/bar-green-tr.png" />
		<img src="refresh_web/colorpicker/images/bar-green-bl.png" />
		<img src="refresh_web/colorpicker/images/bar-green-br.png" />
		
		<img src="refresh_web/colorpicker/images/map-red-max.png" />
		<img src="refresh_web/colorpicker/images/map-red-min.png" />
		<img src="refresh_web/colorpicker/images/map-green-max.png" />
		<img src="refresh_web/colorpicker/images/map-green-min.png" />
		<img src="refresh_web/colorpicker/images/map-blue-max.png" />
		<img src="refresh_web/colorpicker/images/map-blue-min.png" />
		
		<img src="refresh_web/colorpicker/images/map-saturation.png" />
		<img src="refresh_web/colorpicker/images/map-saturation-overlay.png" />
		<img src="refresh_web/colorpicker/images/map-brightness.png" />
		<img src="refresh_web/colorpicker/images/map-hue.png" />
		
	</div>
 	<!--
	 From Here on, it is all original coding
	 -->
	<div>
		<form method="post" action="outfit_modifier.php">
		<img class="picktop" src="./images/boyskin1/shirt.png" alt="boy" id="tophalf"  height="230"; style="background-color: white";>
		<img class="pickbottom" src="./images/boyskin1/shorts.png" alt="boy" id="bottomhalf" height="230" style="background-color: white";>
		<br>
		<p id=shirtcolor>Top Color</p>
		<button type="button" onclick="chooseTopColor()"  value="choose Top Color">Choose Top Color</button>
		<p id=bottomtext>Bottom Color</p>
		<button type="button" onclick="chooseBottomColor()" value="choose Top Color">Choose Bottom Color</button>
		
		
		<h2>Select a Name to Identify Your Outfit</h2>
		<input type="text" id="name" name="name" value="">
		<br> Name can only be One Word, but can have underscores. If name has spaces, it will not enter into the database well;
		<h2>Select a Season to Associate your Outfit With</h2>
		<select name="season">
			<option value="spring">Spring</option>
			<option value="summer">Summer</option>
			<option value="fall">Fall</option>
			<option value="winter">Winter</option>
		</select>
		<input type="hidden" name="sex" value ="<?php echo $sex ?>">
		<input type="hidden" name="skin" value ="<?php echo $skin ?>">
		<input type="hidden" name="top" value ="<?php echo $top ?>">
		<input type="hidden" id="hiddentop" name="topcolor" value ="">
		<input type="hidden" name="bottom" value ="<?php echo $bottom ?>">
		<input type="hidden" id="hiddenbottom" name="bottomcolor" value ="">
		<input type="hidden" name="skin" value ="<?php echo $skin ?>">
		<input type='hidden' id='userid' name='userid' value ="<?php echo $userid ?>">
		<h2>Save Outfit</h2>
		<input type="submit" value="Save Outfit"><br> <br>

		</form>
		<form method="get" action="http://www.google.com/search" target="_blank">
		<h2>Search Google for Outfit</h2>
		<button type="button" onclick="specificTop()">Search Google for Top (Specific Color)</button><br>
		<button type="button" onclick="specificBottom()">Search Google for Bottom (Specific Color)</button><br>
		<button type="button" onclick="HueTop()">Search Google for Top (Specific Hue)</button><br>
		<button type="button" onclick="HueBottom()">Search Google for Bottom (Specific Hue)</button><br> <br>
		<input type="text" id="searchbar" name ="q" value="" style="width: 300px;">
		<input type="submit" value="Google Search">
		</form>
		<p> <a href="/Project/Week 3/view.php">Go to Viewpage</a> </p>
	</div>


	<script type="text/javascript">
	
	Event.observe(window,'load',function() {
		cp1 = new Refresh.Web.ColorPicker('cp1',{startHex: 'ffcc00', startMode:'s'});
	});
	
var specificTopColor="";
var specificBottomColor="";
var specificTopHue="";
var specificBottomHue="";
var topHex="";
var bottomHex="";

function chooseTopColor(){

	var pickedcolor=document.getElementById("cp1_Preview").style.backgroundColor;
	var tophalf=document.getElementById("tophalf");
	tophalf.style.backgroundColor=pickedcolor;
	var shirttext=document.getElementById("shirtcolor");
	var rgbarray=pickedcolor.split(",");
	var r = rgbarray[0].replace(/\D/g,'');
	var g = rgbarray[1].replace(/\D/g,'');
	var b = rgbarray[2].replace(/\D/g,'');
	var rgbToHex = function (rgb) { 
		var hex = Number(rgb).toString(16);
  		if (hex.length < 2) {
       		hex = "0" + hex;
 		 }
  	return hex;
}	;

	var fullColorHex = function(r,g,b) {   
 	 var red = rgbToHex(r);
 	 var green = rgbToHex(g);
  	var blue = rgbToHex(b);
  	return "#" + red+green+blue;
};
	var hexcode= fullColorHex(r,g,b);
	var colorname= ntc.name(hexcode);
	shirttext.innerHTML= "Top Color: " + colorname[1] + "<br />" + " Hue: " + colorname[3] ;
	
	specificTopColor=colorname[1];
	specificTopHue=colorname[3];
	topHex=colorname[0];
	console.log("top color: "+ topHex);
	hiddentop.value= topHex;
	console.log("hidden top: " +hiddentop.value);
}

function chooseBottomColor(){

var pickedcolor=document.getElementById("cp1_Preview").style.backgroundColor;
var tophalf=document.getElementById("bottomhalf");
tophalf.style.backgroundColor=pickedcolor;
var bottomtext=document.getElementById("bottomtext");
var rgbarray=pickedcolor.split(",");
var r = rgbarray[0].replace(/\D/g,'');
var g = rgbarray[1].replace(/\D/g,'');
var b = rgbarray[2].replace(/\D/g,'');
var rgbToHex = function (rgb) { 
	var hex = Number(rgb).toString(16);
	  if (hex.length < 2) {
		   hex = "0" + hex;
	  }
  return hex;
}	;

var fullColorHex = function(r,g,b) {   
  var red = rgbToHex(r);
  var green = rgbToHex(g);
  var blue = rgbToHex(b);
  return "#" + red+green+blue;
};
var hexcode= fullColorHex(r,g,b);
var colorname= ntc.name(hexcode);
bottomtext.innerHTML= "Bottom Color: " + colorname[1] + "<br />" + " Hue: " + colorname[3] ;
specificBottomColor=colorname[1];
specificBottomHue=colorname[3];
bottomHex=colorname[0];
console.log("Bottom color: "+ bottomHex);
hiddenbottom.value= bottomHex;
console.log("hidden top: " +hiddenbottom.value);
}

var clothedtop = document.getElementById("tophalf");
var clothedbottom = document.getElementById("bottomhalf");
var hiddentop=document.getElementById("hiddentop");
var hiddenbottom=document.getElementById("hiddenbottom");

var sex = "<?php echo $sex ?>";
var skin = "<?php echo $skin ?>";
var bottom = "<?php echo $bottom ?>";
var top2 ="<?php echo $top ?>";

var combo ="";
if (sex=="male"){
	var combo= "boy" + skin;
}
if (sex=="female"){
	var combo= "girl" + skin;
}

clothedtop.src= "/Project/Week%203/images/" + combo  + "/" + top2 + ".png";
clothedbottom.src= "/Project/Week%203/images/" + combo  + "/" + bottom + ".png";

function specificTop(){
	var search =document.getElementById("searchbar");
	search.value=specificTopColor;
	if(top2=="shirt"){
		search.value+= " T-Shirt";
	}
	if(top2=="tank"){
		search.value+= " Tanktop";
	}
	if(top2=="longsleeve"){
		search.value+= " Long Sleeve Shirt";
	}
	if(top2=="hoodie"){
		search.value+= " Hoodie";
	}
	if(top2=="button"){
		search.value+= " Button Down";
	}
	if(sex=="male"){
		search.value+=" for Men";
	}
	if(sex=="female"){
		search.value+=" for Women";
	}

}
function HueTop(){
	var search =document.getElementById("searchbar");
	search.value=specificTopHue;
	if(top2=="shirt"){
		search.value+= " T-Shirt";
	}
	if(top2=="tank"){
		search.value+= " Tanktop";
	}
	if(top2=="longsleeve"){
		search.value+= " Long Sleeve Shirt";
	}
	if(top2=="hoodie"){
		search.value+= " Hoodie";
	}
	if(top2=="button"){
		search.value+= " Button Down";
	}
	if(sex=="male"){
		search.value+=" for Men";
	}
	if(sex=="female"){
		search.value+=" for Women";
	}

}
function specificBottom(){
	var search =document.getElementById("searchbar");
	search.value=specificBottomColor;
	if(bottom=="shorts"){
		search.value+= " Shorts";
	}
	if(bottom=="sweats"){
		search.value+= " Sweatpants";
	}
	if(bottom=="skirt"){
		search.value+= " Skirt";
	}
	if(bottom=="jeans"){
		search.value+= " Jeans";
	}
	if(bottom=="capris"){
		search.value+= " Capri Pants";
	}
	if(sex=="male"){
		search.value+=" for Men";
	}
	if(sex=="female"){
		search.value+=" for Women";
	}

}
function HueBottom(){
	var search =document.getElementById("searchbar");
	search.value=specificBottomHue;
	if(bottom=="shorts"){
		search.value+= " Shorts";
	}
	if(bottom=="sweats"){
		search.value+= " Sweatpants";
	}
	if(bottom=="skirt"){
		search.value+= " Skirt";
	}
	if(bottom=="jeans"){
		search.value+= " Jeans";
	}
	if(bottom=="capris"){
		search.value+= " Capri Pants";
	}
	if(sex=="male"){
		search.value+=" for Men";
	}
	if(sex=="female"){
		search.value+=" for Women";
	}

}



hiddenbottom.value= topHex;
var now= new Date();
var utc= now.getTime();
document.getElementById("name").value= "Outfit" + utc;
	</script>
	
	<script>
console.log(<?php echo $userid ?>);
</script>
</body>
</html>