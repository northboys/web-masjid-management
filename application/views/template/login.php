<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="assets/admin/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/admin/images/lg-masjid.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="assets/admin/images/logo.svg" alt="logo">
              </div>
              <h4>Silahkan Login</h4>
              <h6 class="fw-light">Sesuai username dan password</h6>
              <form class="pt-3" role="form" method="post">
                <div class="form-group">
                <label>Username</label>
                <input type="username" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                </div>
                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook me-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('assets/admin/') ?> assets/js/off-canvas.js"></script>
  <script src="<?= base_url('assets/admin/') ?> assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url('assets/admin/') ?> assets/js/template.js"></script>
  <script src="<?= base_url('assets/admin/') ?> assets/js/settings.js"></script>
  <script src="<?= base_url('assets/admin/') ?> assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
