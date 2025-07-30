<!DOCTYPE html>
    <head>
        <title>This is DOM</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                text-align: center;
                padding: 20px;
            }
            #switchbutton {
                padding: 10px 20px;
                font-size: 16px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <h1 id="new" > "This is the JS Intro class" </h1>
 
<h2 id="new2">"This is AIUB." </h2>

<h1 id="pagetitle">"Light Mood"</h1>
<button id="switchbutton" onclick="toggle()">Switch</button>

 
<p id="para">  Today we will learn about Dom and form validation </p>
 
<button onclick="greet()"> click me </button>
<script>
    function toggle() {
        var body = document.body;
        var title = document.getElementById("pagetitle");
        var button = document.getElementById("switchbutton");

        if (body.style.backgroundColor === "black")
            {
            body.style.backgroundColor = "white";
            body.style.color = "black";
            title.innerHTML = "Light Mode";
            button.innerHTML = "Switch to Dark Mode";
        }
        else {
            body.style.backgroundColor = "black";
            body.style.color = "white";
            title.innerHTML = "Dark Mode";
            button.innerHTML = "Switch to Light Mode";
        }
    }   
document.getElementById("new").innerHTML="Welcome to AIUB";
document.getElementById("new2").innerHTML="Welcome to Doomdays"; 

var para=document.getElementById("para");
para.style.color="red";
para.style.backgroundColor="green";
para.style.fontWeight="bold";

function greet(){ 
alert("Hello World");
}
</script>
    </body>
</html>