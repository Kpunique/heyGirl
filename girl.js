// this is an example of an if else statement
const time = new Date().getHours();
let greeting;
if (time < 10) {
  greeting = "Good morning";
} else if (time < 20) {
  greeting = "Good day";
} else {
  greeting = "Good evening";
}
document.getElementById("greeting").innerHTML = greeting;

//this is an example of a switch statement

switch (new Date().getDay()) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case 6:
    day = "Saturday";
}
document.getElementById("day").innerHTML = "today is " + day;

//this is an example of an array with output in a foreach statement

const attributes = ["Beautiful", "Smart", "Motivated"];

let text = "<ul>";
attributes.forEach(myFunction);
text += "</ul>";
document.getElementById("forEach").innerHTML = text;

function myFunction(value) {
  text += "<li>" + value + "</li>";
}

function newTask() {
  console.log("passed");
  //create delete option for each list item
  var listItem = document.getElementsByTagName("LI");
  var i;
  for (i=0; i < listItem.length; i++){
    var span = document.createElement("SPAN");


  }
}

https://www.w3schools.com/howto/howto_js_todolist.asp