<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css" />
  </head>
  <body>
    <div class="container">
      <div class="message signup">
        <div class="btn-wrapper">
          <button class="button" id="signup">Sign Up</button>
          <a href="<?= URL ?>dashboard"><button class="button" id="login">Login</button></a>
        </div>
      </div>
      <div class="form form--signup">
        <div class="form--heading">Selamat datang</div>
        <form method="post" action="">
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <input type="submit" class="button" value="Login" />
        </form>
      </div>
      <div class="form form--login">
        <div class="form--heading">Selamat Datang</div>
        <form autocomplete="off">
          <input type="text" placeholder="Name" />
          <input type="password" placeholder="Password" />
          <a href="<?= URL ?>dashboard"><button class="button">Login</button></a>
        </form>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../assets/dasboard_rplb_2122.js"></script>
  </body>
</html>
