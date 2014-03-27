<?php
// starts session
session_start();

// checks if the there is a current user in the session
if($_SESSION['user']){
	// if there is a current user in session the user will be redirected to the gameplay page
	$_SESSION['success'] = '"loggedin! welcome to mental math:)"';
    header('Location: mentalmath.php');
    return;
}


// This will be true when data is sent from the from
// it will also save the data in a session so that the first if becomes true next time the user enters the browser
if($_POST['user']){

$myusername = 'fredrik';
$myusername=htmlentities($_POST['user']);

$_SESSION['user'] = $myusername;

	$_SESSION['success'] = '"loggedin! welcome to mental math:)"';
    header('Location: mentalmath.php');
    return;
}
?>


