<?php
$fname = $_REQUEST['fname'];
$mname = $_REQUEST['mname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$nationality = $_REQUEST['nationality'];
$futureteam = $_REQUEST['futureteam'];
$option = $_REQUEST['option'];
$options = $_REQUEST['options'];
$nameyearposition = $_REQUEST['nameyearposition'];


$conn = mysqli_connect("localhost","root",'',"registrations", 3306);
if($conn === false){
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO participants VALUES('$fname', '$mname','$lname','$email',
'$nationality','$futureteam','$option','$options','$nameyearposition')";

if(mysqli_query($conn, $sql)){
    echo "<h3> Data Stored in a Database Successfully </h3>";
}
else{
    echo "Error: Hush! Sorry $sql. ".mysqli_error($conn);
}

mysqli_close($conn);        

?>