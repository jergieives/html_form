<?php
    var_dump($_POST);

    $fullName = '';
    $gender = '';
    $country = '';
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "i201";


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<?php
$sql = "INSERT INTO student_record (id, fullName, gender, country)
VALUES (NULL, '$fullName', '$gender', '$country')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>