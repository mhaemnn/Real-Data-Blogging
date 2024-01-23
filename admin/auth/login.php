<?php
// Simpan file ini sebagai login.php

// Fungsi untuk melakukan pengecekan login
function login($username, $password)
{
  // Implementasi pengecekan login (disesuaikan dengan kebutuhan Anda)
  // ...

  // Contoh sederhana: jika username dan password sesuai, set sesi dan arahkan ke dashboard
  if ($username == 'admin' && $password == '123') {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'Admin'; // Tentukan role sesuai dengan aturan aplikasi Anda
    header('Location: /index.php');
    exit();
  } else {
    // Jika login gagal, tampilkan pesan error (disesuaikan dengan kebutuhan Anda)
    $error_message = "Login failed. Invalid username or password.";
    return $error_message;
  }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data dari form
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Lakukan pengecekan login
  $error_message = login($username, $password);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Tambahkan link CSS sesuai kebutuhan Anda -->
</head>

<body>

  <div>
    <h2>Login</h2>
    <form method="post" action="">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>

      <button type="submit">Login</button>
    </form>

    <?php
    // Tampilkan pesan error jika login gagal
    if (isset($error_message)) {
      echo '<p style="color: red;">' . $error_message . '</p>';
    }
    ?>
  </div>

</body>

</html>