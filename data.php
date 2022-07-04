<?php
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$nationality = $_POST['nationality'];
$futureteam = $_POST['futureteam'];
$academy = $_POST['option'];
$achievements = $_POST['options'];
$a_details = $_POST['nameyearposition'];


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into participants(fname, mname, lname, email, nationality, futureteam,
    academy, achievements, a_details) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $fname, $mname, $lname, $email, $nationality, $futureteam, $academy, $achievements, $a_details);
    $stmt->execute();
    echo "Registrated Successfully...";
    $stmt->close();
    $conn->close();
}

?>