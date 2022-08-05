<?php 

  include 'include/gifnoc.php';
  session_start();
  unset($_SESSION["cockpitemanresu"]);
  unset($_SESSION['nigol_cockpit']);
  if(!empty($_GET["logout"])){
    header("location:/Cockpit65R10/index.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cockpit KET10 - 2565 | Log-in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style>
body {
  font-family: "Prompt", sans-serif;
}
</style>
</head>
<body class="hold-transition">
  <?php
if(!empty($_POST["btn_L0gIn"])){
  $sql = "SELECT * FROM templog WHERE (clogtipkcoc = '".$_POST["emanresu"]."' AND dorwssap = MD5('".$_POST["p@ssw0rd"]."'))";
  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1){
    $objResult = mysqli_fetch_array($result,MYSQLI_ASSOC);
    session_start();
       $_SESSION["cockpitemanresu"] = $objResult["clogtipkcoc"];
       $_SESSION['nigol_cockpit'] = true;
    session_write_close();
    
    if(!empty($_POST["remember"])){
      setcookie ("emanresu",$_POST["emanresu"],time()+ 3600);
      setcookie ("p@ssw0rd",$_POST["p@ssw0rd"],time()+ 3600);
      echo "Save Cookies Success??";
    }
    header("location:/Cockpit65R10/index.php");
  }else{
    echo "<script>alert('Username and Password Incorrect!');</script>";
  }
  
}
  ?>
  <br><br><br><br><center>
  <TABLE><tr><td>
  <div class="login-logo">
    <b>ระบบรายงานตัวชี้วัด 2565<br>เขตสุขภาพที่ 10</b>
  </div>
  <!-- /.login-logo -->
  <div class="card card-danger">
              <div class="card-header">
                <h4 class="card-title">กรุณา Login เพื่อเข้าสู่ระบบ</h4>
              </div>
              <div class="card-body">
                <form action="" method="POST">
        <div class="input-group mb-6">
          <input type="text" class="form-control" placeholder="Username" name="emanresu" value="<?php if(isset($_COOKIE["emanresu"])) { echo $_COOKIE["emanresu"]; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <br>
        <div class="input-group mb-6">
          <input type="password" class="form-control" placeholder="Password" name="p@ssw0rd" value="<?php if(isset($_COOKIE["p@ssw0rd"])) { echo $_COOKIE["p@ssw0rd"]; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Remember Me
              </label>
              <p></p>
            </div>
                  <button type="submit" name="btn_L0gIn" value="9" class="btn btn-primary btn-block">Log In</button>
             </div>
        </div>
          <!-- /.col -->
          <div><p></p></div>
           <!-- <p class="mb-1" align="center">
        <a href="forgot-password.html">>>> ลืมรหัสผ่าน <<<</a>
      </p>-->
      </div>
          <!-- /.col -->
      </form>
    
    <!-- /.login-card-body -->
  </div>
              </div>
              <!-- /.card-body -->
            </div>
  
</div>
<!-- /.login-box -->
</td></tr></TABLE>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
