<!DOCTYPE html>
<html>
<body>

<p>Click the button to display a dialog box which will ask for your favorite color.</p>

<button onclick="myFunction()">Favorite Color</button>

<p id="demo"></p>

<script>
function myFunction() {
  var text;
  var favcolor = prompt("What's your favorite color?", "White");
  switch(favcolor) {
    case "Red":
      text = "Excellent choice. Red is very ellegant!";
      break;
    case "Blue":
      text = "Blue is my favorite too!";
      break;
    case "Green":
      text = "Really? Are you sure black is your favorite?";
      break;
    default:
      text = "I don't like that color";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>

</body>
</html>
