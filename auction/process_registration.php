<?php

// TODO: Extract $_POST variables, check they're OK, and attempt to create
// an account. Notify user of success/failure and redirect/give navigation 
// options.

include("connect_to_database.php"); // connect to the database


var_dump($_POST); echo "<br />"; // info about the post form
$user = array(); // sets up empty array to fill with user info

// extract user info from POST form and save it in the user array
$user["firstName"] = $_POST["firstName"];
$user["familyName"] = $_POST["familyName"];
$user["accountType"] = $_POST["accountType"];
$user["email"] = $_POST["email"];
$user["password"] = $_POST["password"];

var_dump($user);

// construct sql query to add user info to database
$query = "INSERT INTO users (firstName, lastName, email, password, accountType)".
"VALUES ('${user['firstName']}','${user['familyName']}', '${user['email']}','${user['password']}', '${user['accountType']}')";

// connect to database and upload user info to it
$result = mysqli_query($connection,$query)
or die("Error making saveToDatabase query");
mysqli_close($connection);



?> 
