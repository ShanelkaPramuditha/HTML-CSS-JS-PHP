<!DOCTYPE html>
<html>
   <head>
      <title>Cone Volume</title>
   </head>
   <body>
      <form>
         <label>Radius</label><br>
         <input id="radius" type="text"><br><br>

         <label>Height</label><br>
         <input id="height" type="text"><br><br>

         <label>Volume</label><br>
         <input id="volume" type="text" disabled><br><br>

         <button type="button" id="calBtn">Calculate</button>
      </form>
   </body>
</html>

<script>
   var getRadius = document.getElementById("radius");
   var getHeight = document.getElementById("height");
   var getVolume = document.getElementById("volume");
   var calBtn = document.getElementById("calBtn");

   function calculate() {
      var radius = parseFloat(getRadius.value);
      var height = parseFloat(getHeight.value);
      var calVolume = (1/3) * Math.PI * Math.pow(radius, 2) * height;
      getVolume.value = calVolume.toFixed(2);
   }

   calBtn.addEventListener('click', calculate);

</script>