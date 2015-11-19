<?php include('header.php');?>

<?php	
	/*validation*/
	$to = "info@nyccheeseclub.com";
	$email = $_POST['email'];
	$name = $_POST['name'];
	$category = $_POST['category'];
	$subject = "New message from " . $name . ' (' . $category . ')';
	$body = $_POST['msg'];
	$headers = 'From: ' . $email;
	$error_msg = '';
	
	if(!isset($name) || !isset($email) || !isset($body) || $name == '' || $email == '' || $body == ''){
		$error_msg = "Please fill out all fields. <a class='go_back' href='contact.php'>Go back</a>";
	}
	else if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)) {
		$error_msg = "Please enter a valid email address. <a class='go_back' href='contact.php'>Go back</a>";
	}
	if ($error_msg){
		echo $error_msg;
	}
	else{
	 	if (mail($to, $subject, $body, $headers)) {
	   		echo "Thank you for your message! We will be in touch shortly.";
	  	} else {
	   		echo "Uh oh, there was a problem and your message was not sent. Please try again later.";
		}
	}
?>
</div>
</body>
</html>