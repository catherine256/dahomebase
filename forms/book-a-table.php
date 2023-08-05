<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $date = $_POST["date"];
  $time = $_POST["time"];
  $people = $_POST["people"];
  $message = $_POST["message"];
  
  $to = "cnakyanzi2019@gmail.com";
  $subject = "New table booking request from Da home Base.";
  $body = "Name: $name\nEmail: $email\nPhone: $phone Booking Date & Time $date $time\nNumber of People: $people\n Reason: $message";
  
  // Send the email
  mail($to, $subject, $body);
  
  // Redirect to a thank you page
  header("Location: index.html");
  exit();
}
?>
