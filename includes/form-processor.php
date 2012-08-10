<?php
//doesnt have to be name, but it is easier to associate to the fields

$thanks = false;
$errors = array();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$souad = 'Souad Daou';
$myemail = 'souaddaou@gmail.com';
$subject = 'Contact form';
$message = 'Thank you for registering';
/*Validation*/

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	//0 is considered empty
	//Empty: 0, false, null, '', array(), '0'
	//to validate the name
	if (empty($name)) {
		$errors['name'] = true;
	}
	//to validate the email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['email'] = true;
	}
	
	if (empty($title)) {
		$errors['title'] = true;
	}
	
	//there are two methods for characters : strlen() 
	//and mb_strlen() which is better to use cause it will support all languages
	//to validate the message
	if (empty($notes)) {
		$errors['notes'] = true;
	}
	
	//validate it to send email
	//inorder to send it it should have all the requirements:
	//to:
	//subject:
	//message:
	//from: name and email
	if (empty($errors)){
	$thanks = true;
	$headers = 'From: ' . $souad . '<' . $email . '>';
	mail('souaddaou@gmail.com', $subject, $message, $headers);
	}
}

