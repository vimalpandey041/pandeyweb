<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$mobilenumber = $_POST['mobilenumber'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','vimalpandey');

if($conn->connect_error){
    die('connection Failed :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into tabledata(name,email,mobilenumber,message)value(?,?,?,?)");
    $stmt->bind_param("ssis",$name,$email,$mobilenumber,$message);
    $stmt->execute();
    echo "Your Message Has Been Sent";
    $stmt->close();
    $conn->close();
}


?>