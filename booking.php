<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking System</title>
  <style>
    body { 
        font-family: Arial, sans-serif; 
        background: #f4f4f4; 
        background-image: url(img/background.jpeg);
        background-size: cover; 
    }
    .container { 
        width: 400px;
        margin: 50px auto;
        background-color: rgb(255,255,255,0.3);
        backdrop-filter: blur(10px);
        padding: 20px; 
        border-radius: 10px; 
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
     }
    h2 { text-align: center; }
    input{ width: 370px;padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px;}
    button { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; }
    button { background: #28a745; color: white; font-weight: bold; border: none; cursor: pointer; }
    button:hover { background: #218838; }
  </style>
</head>
<body>

  <div class="container">
    <h2>Book Your Stay</h2>
    <form action="" method="POST">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <label for="Check_in">Check In</label>
      <input type="date" name="check_in" required>
      <label for="check_out">Check Out</label>
      <input type="date" name="check_out" required>
      <input type="number" name="guests" placeholder="No. of Guests" required>
      <button type="submit">Book Now</button>
    </form>
  </div>
</body>
</html>

<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $guests = $_POST['guests'];

    $sql = "INSERT INTO bookings (name, email, check_in, check_out, guests) 
            VALUES ('$name', '$email', '$check_in', '$check_out', '$guests')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Booking Successful!</h2>";
        echo "<p>Thank you, $name. Your stay from $check_in to $check_out for $guests guest(s) is confirmed.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

