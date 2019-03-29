<?php
session_start();

// initializing variables
$First_name = "";
$Surname= "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'Yfcnz1987', 'userlist');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $First_name = mysqli_real_escape_string($db, $_POST['First_name']);
  $Surname = mysqli_real_escape_string($db, $_POST['Surname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $birthday_day = mysqli_real_escape_string($db, $_POST['birthday_day']);
  $birthday_month = mysqli_real_escape_string($db, $_POST['birthday_month']);
  $birthday_year = mysqli_real_escape_string($db, $_POST['birthday_year']);
  $sex = mysqli_real_escape_string($db, $_POST['sex']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array


if (empty($First_name)) { array_push($errors, "First_name is required"); }
  if (empty($Surname)) { array_push($errors, "Surname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM usertbl WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    $date = ($birthday_year.'-'.$birthday_month.'-'.$birthday_day);

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

    $user_check_query = "SELECT * FROM usertbl WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

  	$query = "INSERT INTO usertbl (First_name,Surname,email,password,BTH_date,sex)
  			  VALUES('$First_name','$Surname', '$email', '$password','$date','$sex')";
  	mysqli_query($db, $query);
  	$_SESSION['First_name'] = $First_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: main.html');


  }
}

// ...
// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM usertbl WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
