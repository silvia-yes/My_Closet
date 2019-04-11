
var model = document.getElementById('model');


function swapMale()
{
var model = document.getElementById('model');    
model.src="./images/boy.png";
}

function swapFemale()
{
var model = document.getElementById('model');    
model.src="./images/girl.png";
}


function chooseColor(e){
    var skin= e.target.id;
    //document.getElementById("demo").innerHTML=skin;
    
    var skin1="#ffdbac";
    var skin2="#f1c27d";
    var skin3="#e0ac69";
    var skin4="#c68642";
    var skin5="#8d5524";

    switch(skin){
        case "skin1":
            document.getElementById("demo").innerHTML = skin1;
            var model=document.getElementById('model');
            model.style.backgroundColor=skin1;
             break;

         case "skin2":
            document.getElementById("demo").innerHTML = skin2;
            var model=document.getElementById('model');
            model.style.backgroundColor=skin2;
             break;
         case "skin3":
             document.getElementById("demo").innerHTML = skin3;
             var model=document.getElementById('model');
             model.style.backgroundColor=skin3;
              break;

        case "skin4":
            document.getElementById("demo").innerHTML = skin4;
            var model=document.getElementById('model');
            model.style.backgroundColor=skin4;
             break;

        case "skin5":
             document.getElementById("demo").innerHTML = skin5;
             var model=document.getElementById('model');
             model.style.backgroundColor=skin5;
              break;
        default:
            document.getElementById("demo").innerHTML+= " default";
    }
    
}

