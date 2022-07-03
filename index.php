<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['email'])) {
    header("Location: home.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = ($_POST['pass']);
 
    $sql = "SELECT * FROM user WHERE email='$email' AND pass='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("Location: home.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>

  <body>
    <script src="./script.js"></script>
  </body>
</html>

<div class="bg-img">
  <h1>SANTAPAN TEGAL</h1>
  <div class="content">
    <header>Login</header>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
    <form action="" method="post">
      <div class="field">
        <span class="fa fa-user"></span>
        <input type="text" name="email"  required placeholder="Enter Mail" />
      </div>
      <div class="field space">
        <span class="fa fa-lock"></span>
        <input
          type="password"
          class="pass-key"
          name="pass"
          required
          placeholder="Password"
        />
        <span class="show">SHOW</span>
      </div>
      <div class="field">
        <input name="submit" type="submit" value="LOGIN" />
      </div>
    </form>
  </div>
</div>
