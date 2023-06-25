<!-- Part d) Display details -->

<?php
require 'config.php';

$sql = "SELECT * FROM vehicle_details";

// Execute the query
$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
   while ($row = $result -> fetch_assoc()) {
      echo "<h3>Owner Details:</h3>";
      echo "Customer Name: " . $row["owner_name"] . "<br>";
      echo "Customer Email: " . $row["owner_email"] . "<br>";
      echo "Customer Phone Number: " . $row["mobile_number"] . "<br>";
      echo "Customer Address: " . $row["owner_address"] . "<br><br>";

      echo "<h3>Vehicle Details</h3>";
      echo "Vehicle Number: " . $row["vehicle_number"] . "<br>";
      echo "Fuel Type: " . $row["vehicle_type"] . "<br>";
      echo "Air Condition: " . $row["air_cond"] . "<br>";
      echo "Pumped Date: " . $row["pumped_date"] . "</br>";
      echo "Number of Ltr: " . $row["litres"] . "<br>";
      echo "<hr>";
   }
}
?>