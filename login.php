<?php
    session_start();

    if(isset($_SESSION['user'])){
        header('location:hometest.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>CCS</b>(DBMS)</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Log In</p>

      <form action="#" method="post" id="login-form">
      <div id="loginAlert"></div>
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" required
          value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email']; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password"
          value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password']; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember"
              <?php if(isset($_COOKIE['email'])) { ?>
              checked <?php }?> >
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" id="login-btn" class="btn btn-primary btn-block">Sign In</button>

          </div>
          <!-- /.col -->
        </div>
      </form>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>


<script type="text/javascript">

    $(document).ready(function(){

      	$("#login-btn").click(function(e){

                e.preventDefault();

                $.ajax({
                    url:'assets/php/action.php',
                    method:'post',
                    data: $("#login-form").serialize()+'&action=login',
                    success:function(response){
                        // console.log(response);
                        if (response === 'user'){
                            alert("Successfully Login!!!")
                            window.location = 'home.php';
                        }
                        else{
                            $("#loginAlert").html(response);
                            setTimeout(function(){
                              $("#loginAlert").fadeOut();
                              location.reload();
                            },3000);
                        }

                    }
                });





        });
    });

    </script>

</body>
</html>
