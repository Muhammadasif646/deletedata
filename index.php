<?php
include("connection.php"); // Make sure this file exists

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];


    $sql = "INSERT INTO students (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";
    
$res=mysqli_query($conn,$sql);

if($res){

header("location:show.php");

}



  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>

    <h2>Student Registration Form</h2>
<a href="show.php"><input type="button"  value="show data"> </a>   
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter Name" required><br><br>
        <input type="email" name="email" placeholder="Enter Email" required><br><br>
        <input type="text" name="phone" placeholder="Enter Phone Number" required><br><br>
        <input type="text" name="course" placeholder="Enter Course Name" required><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>
