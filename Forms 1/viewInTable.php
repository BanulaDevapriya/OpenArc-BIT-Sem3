<?php
require 'db.php';
$sql = "SELECT id, fname, email, mobile, Msg FROM formdatabase";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='border: solid 1px black;'><tr><th>ID</th><th>Name</th><th>Email</th><th>Mobile number</th><th>Message</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]."</td><td>".$row["Msg"]."</td></tr>";
  }
  echo "</>";
} else {
  echo "0 results";
}
$conn->close();
?>
