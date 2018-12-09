<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PORTOFOLIO ASDI</title>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="assets\css\loginCss.cs"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/loginCss.cs">
  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
          <img src="assets\asdi.png" id="icon" alt="User Icon" />
          <h1>LOGIN ADMIN PORTOFOLIO ALUMNI ASDI</h1>
        </div>

        <!-- Login Form -->
        <form action="<?php echo site_url('login/cekLogin')?>" method="post" name="Login_Form" class="form-signin">
          <input type="text" class="fadeIn second" name="username" placeholder="username">
          <input type="text" class="fadeIn third" name="password" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Go to the Site</a>
        </div>

      </div>
    </div>
  </body>
</html>
