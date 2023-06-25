<!-- Part c -->

<?php

require 'config.php';

// Capture the inputs
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $o_name = $_POST['o_name'];
   $mobile_num = $_POST['mobile_num'];
   $email = $_POST['email'];
   $o_address = $_POST['address'];
   $fuel_type = $_POST['fuel_type'];
   $vehicle_num = $_POST['vehicle_num'];
   $ac_status = $_POST['ac_status'];
   $pumped_date = $_POST['pumped_date'];
   $litres = $_POST['litres'];

   $sql = "INSERT INTO vehicle_details (owner_name, mobile_number, owner_email, owner_address, vehicle_type, vehicle_number, air_cond, pumped_date, litres)
   VALUES ('$o_name', '$mobile_num', '$email', '$o_address', '$fuel_type', '$vehicle_num', '$ac_status', '$pumped_date', '$litres')";

   // execute the query
   if ($conn -> query($sql) === TRUE) {
      echo "Record inserted successfully";
   }
   else {
      echo "Error inserting record: " . $conn -> error;
   }
}
$conn -> close();
?>