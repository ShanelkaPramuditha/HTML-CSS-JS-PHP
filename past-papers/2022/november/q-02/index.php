<!DOCTYPE html>
<html>
   <head>
      <title>2022 November</title>
      <style>
         /* Part d) Change background color in multiplication table
         <style>
            table {
               background-color: #bde9ba;
            }
         </style>
         */
         table {
            background-color: #bde9ba; /* Answer */
            border-collapse: collapse;
            margin-top: 20px;
         }
         td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
         }
      </style>
   </head>
   <body>
      <!-- Header -->
      <h1>2022 November</h1>
      <h2>Question 02 - Answers</h2>
      <h2>Multiplication Table</h2>

      <!-- Part a) create html input boxes for get inputs -->
      <label>How many rows for your multiplication table?</label><br>
      <input type="text" id="getRow"><br>
      <label>How many columns for your multiplication table?</label><br>
      <input type="text" id="getColumn"><br>
      <button onclick="createTable()">Draw Multiplication Table</button> <!-- Part e) call createTable() function -->
   </body>
</html>

<script>
// Part b) accept user input and create table
function createTable() {
   var getRow = parseInt(document.getElementById("getRow").value);
   var getColumn = parseInt(document.getElementById("getColumn").value);

   // Part c) generate multiplication table
   var table = document.createElement("table");

   for (var i = 1; i <= getRow; i++) {
      var row = document.createElement("tr");

      for (var j = 1; j <= getColumn; j++) {
         var cell = document.createElement("td");
         var text = document.createTextNode(i * j);
         cell.textContent = i * j;
         row.appendChild(cell);
      }
      table.appendChild(row);
   }
   document.body.appendChild(table);
}
</script>
