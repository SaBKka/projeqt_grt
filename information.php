<?php

$name = $_POST['first_name'];
$info = $_POST['information'];
$number = $_POST['number'];
$email = $_POST['email'];
$quetstion = $_POST['quetstion']; 



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grt_company_persons";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  exit("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO persons (perons_name, persons_title , persons_number , persons_email, persons_Question)
VALUES ('$name', '$info', '$number' , '$email','$quetstion')";

if (mysqli_query($conn, $sql)) {
  echo "თქვენი მონაცემები წარმატებით გადაიგზავნა";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>