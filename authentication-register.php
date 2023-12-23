<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />

</head>
<?php
include "conn.php";
?>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="assets/images/logos/logo-LOMART.png" width="180" alt="" />
                </a>
                <p class="text-center">Fresh Fast Clean</p>
                <form action="register.php" method="POST">
                  <div class="mb-3">
                    <label for="reg_un" class="form-label">Enter Your Username</label>
                    <input type="text" class="form-control" id="reg_un" name="reg_un" />
                  </div>
                  <div class="mb-4">
                    <label for="reg_email" class="form-label">Enter Your
                      Email</label>
                    <input type="email" class="form-control" id="reg_email" name="reg_email" />
                  </div>
                  <div class="mb-5">
                    <label for="reg_pass" class="form-label">Enter Your
                      Password</label>
                    <input type="password" class="form-control" id="reg_pass" name="reg_pass" />
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <a class="text-primary fw-bold" href="index.html">Forgot Password ?</a>
                  </div>
                  <div class="mb-5">
                    <input type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4
                                        rounded-2" value="Register" />
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Sudah Punya Akun?</p>
                    <a class="text-primary fw-bold ms-2" href="authentication-login.php">Masuk</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>