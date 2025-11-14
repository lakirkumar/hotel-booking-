<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['password'])) {
            $_SESSION['user'] = $row['name'];
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo"No account found with this email!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

/* Page background */
body {
  background: linear-gradient(135deg, #74ebd5 0%, #9face6 100%);
  display: flex;
  justify-content: center;
  background: #f4f4f4; 
  background-image: url(img/background.jpeg);
  background-size: cover; 
  align-items: center;
  min-height: 100vh;
}

/* Booking container */
.container {
  width: 400px;
  background: rgba(255,255,255,0.3);
  padding: 30px;
  backdrop-filter: blur(10px);
  border-radius: 12px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
  animation: fadeIn 1s ease-in-out;
}

/* Heading */
.container h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

/* Input fields */
.container input,
.container label {
  display: block;
  width: 100%;
  margin-bottom: 12px;
  font-size: 14px;
}

.container input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 6px;
  transition: 0.3s;
}

.container input:focus {
  border-color: #4cafef;
  outline: none;
  box-shadow: 0 0 5px rgba(76, 175, 239, 0.6);
}

/* Button */
.container button {
  width: 100%;
  padding: 12px;
  background: #28a745;
  color: white;
  font-size: 16px;
  font-weight: bold;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: 0.3s;
}

.container button:hover {
  background: #218838;
  transform: scale(1.02);
}

/* Animation */
@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

  </style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="submit">Login</button>
    </form>
    <p>Don’t have an account? <a href="register.php">Register</a></p>
</div>
</body>
</html>
