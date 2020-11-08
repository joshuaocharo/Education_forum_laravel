<?php
$con = mysqli_connect('localhost', 'root', '', 'mshauri') or die("Error: ".mysqli_connect_error());
$sql = "INSERT into student(name, email, phone_number, form, subject) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['form']."','".$_POST['subject']."')";
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
header('Location: http://localhost/mshauri/blaise/kcpe/kcpe/home.php');
?>