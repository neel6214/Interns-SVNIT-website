<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(isset($_POST['submit']))
$conn = new mysqli($servername, $username, $password, $dbname);
    {   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$loginid2 = $_POST['1loginid'];
$password2 = $_POST['1password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username2,password2 FROM registrationinfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if(strcmp($loginid2,$row["username2"])==0 && strcmp($password2,$row["password2"]==0)
        	{click here to login
        }
    }
} else {
    echo "0 results";
}
}
$conn->close();
?>
</body>
</html>
