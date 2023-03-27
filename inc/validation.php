<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form submitted
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Define variables and set to empty values
  $name = $company = $email = $phone = $subject = $message = "";

  // Validate the name field
  if (empty($_POST["name"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
    }
  }

  // Validate the email field
  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
    }
  }

  // Validate the phone field
  if (!empty($_POST["phone"])) {
    $phone = test_input($_POST["phone"]);
    // Check if phone is a number
    if (!is_numeric($phone)) {
      $phone_error = "Phone must be a number";
    }
  }

  // Set the other fields
  if (isset($_POST["company"])) {
    $company = test_input($_POST["company"]);
  }
  $subject = isset($_POST["subject"]) ? test_input($_POST["subject"]) : "";
  $message = isset($_POST["message"]) ? test_input($_POST["message"]) : "";

  // If there are no errors, insert the data into the database
  if (empty($name_error) && empty($email_error) && empty($phone_error)) {

    // Connect to the database 
    $servername = "localhost";
    $username = "samgray";
    $password = "qhfQpSI1nQ6@qd0v";
    $dbname = "samgray_netmatters";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Insert the data into the database
    $sql = "INSERT INTO contact (name, company, email, phone, subject, message) 
    VALUES ('" . $name . "', '" . $company . "', '" . $email . "', '" . $phone . "', '" . $subject . "', '" . $message . "')";

    if ($conn->query($sql) === TRUE) {
      // Data inserted successfully
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
  }
}

// Function to sanitize input data
function test_input($data) {
  if (!isset($data)) {
    return "";
  }
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>