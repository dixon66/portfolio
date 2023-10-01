<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $company = $_POST["company"];
  $message = $_POST["message"];

  $to = "aforapple@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nCompany-Project-Tech: $company\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
