<!-- Provides basic PHP form validation to Contact form. -->
<h3>Form Processing...</h3>
<?php
	/* Extracts the variables. */
	$name = $_POST['commentName'];
	$email = $_POST['commentEmail'];
	$phone = $_POST['commentPhone'];
	$telephone = str_replace("-", "", $phone);
	
	/* Trims and removes harmful elements in the comments section. */
	$comment = mysql_real_escape_string(trim(strip_tags($_POST['commentMessage'])));
	$comment_length = strlen($comment);

	/* Identifies the time when the form was submitted. */
	$now = time();
	$date = date('Y-m-d H:i:s', $now);
	
	/* RegEx for names, email and phone. */
	$name_pattern = '/^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s\'\-]{0,}$/';
	$email_pattern = '/^[_A-Za-z0-9-\\+]+(\\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\\.[A-Za-z0-9]+)*(\\.[A-Za-z]{2,})$/';
	$phone_pattern = '/^[[:digit:]]{10}$/';

	/* Validation. */
	if(!preg_match($name_pattern, $name)) {
		echo '<b>Please enter a valid name.</b><br/>';
	} 

	if(!preg_match($email_pattern, $email)) {
		echo '<b>Please enter a valid email address.</b><br/>';
	}

	if(!preg_match($phone_pattern, $telephone)) {
		echo '<b>Please enter a valid telephone number.</b><br/>';
	}
	
	if($comment_length <= 29){
		echo '<b>Comments must be at least 30 characters.</b>';
	} 

	/* If the form is valid, the following message is echoed. */
	if(preg_match($name_pattern, $name) && preg_match($email_pattern, $email) && preg_match($phone_pattern, $telephone) && $comment_length >= 30){
		echo '<b>The following data will be entered to the MySQL database: </b><br>
			Name: ' . $name . '<br>
			Email: ' . $email . '<br>
			Telephone number: ' . $telephone . '<br>
			Comments: ' . $comment . '<br>
			Entry date: ' .$date . '<br>';
	}	
?>

<br><a href="../index.php">Home</a>