<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>sosmed :v</title>
    <link rel="icon" type="image/x-icon" href="styles/medsos.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="styles/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
    
  <form action="proses/proses_register.php" method="POST">
    <!-- <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal">Bikin Akun Dulu Cuy</h1>
    <?php
    if(isset($_GET['msg'])){
        echo '<div class="alert alert-danger">'. $_GET['msg'] .'</div>';
        }
    ?>

    <div class="form-floating">
        <input name="full_name" type="text" class="form-control rounded-3" placeholder="Email Address" required>
        <label >Full Name</label>
    </div>
    <div class="form-floating">
        <input name="username" type="text" class="form-control rounded-3" id="floatingInput" placeholder="Username" required>
        <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password"required>
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating"> 
      <input name="confirm_password" type="password" class="form-control rounded-3" id="floatingPasswordConfirmation" placeholder="Confirm Password"required>
      <label for="floatingPasswordConfirmation">Confirm Password</label>
    </div>
    <div class="mb-2">
  <p>Sudah Punya Akun? <a href="login.php">klik disini</a></p>
  </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    <p class="mt-5 mb-3 text-muted">&copy; sosmed-pahan</p>
  </form>
</main>


    
  </body>
</html>
