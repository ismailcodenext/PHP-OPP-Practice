<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if( $conn->connect_errno){
    die("Connection Faild: ". $conn->connect_errno);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo " Id: {$row["id"]} - Name: {$row["student_name"]} - Age: {$row["age"]} <br>";
    }
}else {
        echo "No Result Found..!";
    }

    $conn->close();



?>