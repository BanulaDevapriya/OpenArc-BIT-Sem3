<?php
require 'db.php';
$sql = "SELECT id, fname, email, mobile, Msg FROM formdatabase";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - First Name: " . $row["fname"]. " - Email: ".$row["email"]. " - Mobile No: " .$row["mobile"]. "<br>" ;
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>