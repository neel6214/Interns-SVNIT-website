
<?php
if(isset($_POST['submit']))
  $conn = new mysqli($servername, $username, $password, $dbname);
    {   
       
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$name2 = $_POST['name1'];
$email2 = $_POST['email1'];
$dob2 = $_POST['dob1'];
$username2 = $_POST['username1'];
$password2 = $_POST['password1'];
$mobno2 = $_POST['mobno1'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registrationinfo(name2,email2,dob2,username2,password2,mobno2)
VALUES ('$name2','$email2',$dob2,'$username2','$password2',$mobno2)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    }
     else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>
