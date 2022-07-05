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

const attributes = ["Beautiful", "Smart", "Motivated", "Paid"];

let text = "<ul>";
attributes.forEach(myFunction);
text += "</ul>";
document.getElementById("forEach").innerHTML = text;

function myFunction(value) {
  text += "<li>" + value + "</li>";
} 
