<?php 

$conn = mysqli_connect("localhost", "root", "", "mother_bakery");

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$insert_data = mysqli_query($conn, "INSERT INTO `contact`(`name`, `email`, `phone`, `message`, `status`) 
	VALUES ('$name', '$email', '$phone', '$message', 'Active')")or die(mysqli_error($conn));
	
	if($insert_data){
		echo "<script>window.location.href = 'about.html'</script>";
	}
	else{
		echo "error";
	}
}

?>