<?php 
  session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hello World</title>
  <link href='styles.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="container-right">
      <img src="book.png" alt="">
    </div>
    <div class="container-left">
      <div>  
        <div class="logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" fill="none">
  
            <g id="SVGRepo_bgCarrier" stroke-width="0"/>
            
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
            
            <g id="SVGRepo_iconCarrier"> <path d="M4 19V6.2C4 5.0799 4 4.51984 4.21799 4.09202C4.40973 3.71569 4.71569 3.40973 5.09202 3.21799C5.51984 3 6.0799 3 7.2 3H16.8C17.9201 3 18.4802 3 18.908 3.21799C19.2843 3.40973 19.5903 3.71569 19.782 4.09202C20 4.51984 20 5.0799 20 6.2V17H6C4.89543 17 4 17.8954 4 19ZM4 19C4 20.1046 4.89543 21 6 21H20M9 7H15M9 11H15M19 17V21" stroke="#243642" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g>
            
            </svg>
        </div>
        <img src="" alt="" class="logo">
        <h1>Login</h1>
        <p>Login untuk melihat daftar peserta</p>
        <form method="post" action="../mysql/autentikasi.php" >
          <div class="style-input">
            <label for="username">
              <input type="email" name="email" autocomplete="new-email">
              <p>Email</p>
              <span></span>
            </label>
          </div>
          <div class="style-input">
            <label for="password">
              <p>Password</p>
              <input type="password" name="password" autocomplete="new-password">
              <span></span>
            </label>
          </div>
          <div class="after-input">
            <div class="rememberme-style">
              <input type="checkbox" name="rememberme" value="">
              <span>Remember me</span>
            </div>
            <div class="forget-style">
              <a href="#">Forget password?</a>
            </div>
          </div>
          <button type="submit" class="submit-button">Log In</button>
        </form>
      </div>
      <?= isset($_COOKIE['salah']) ? '<p style="color: red;">'. $_COOKIE['info'] . '</p>' : '' ?>
      <p class="sign-up">Don't have an account? <a href="daftar.php">Sign Up</a></p>
    </div>
  </div>
  <script defer type="text/javascript" src="script.js"></script>
</body>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const inputs = document.querySelectorAll('.style-input label input');
  
    inputs.forEach(input => {
      input.addEventListener('input', () => {
        const label = input.parentNode;
        if (input.value) {
          label.classList.add('has-value');
        } else {
          label.classList.remove('has-value');
        }
      });
    });
  });
</script>

</html>
