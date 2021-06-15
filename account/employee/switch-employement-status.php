<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "includes/header-resources.php"; ?>
</head>

<body>
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <?php include "includes/header.php"; ?>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <?php include "includes/sidebar.php"; ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>Settings</h3>
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item">Pages</li>
                  <li class="breadcrumb-item active">Settings</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h5>Employment</h5>
                  <span>Wallet ID: 3393_39ndj38NAUnf92</span>
                </div>
                <div class="card-body">
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

                  <form method="POST" action="#">
                    <div class="form-group">
                      <label class="col-form-label"><b>Switch Employment Status</b></label>
                      <div class="switch-lg">
                        <label class="switch">
                          <input type="checkbox" name="status" checked=""><span class="switch-state"></span>
                        </label>
                      </div>
                    </div>
                    <div class="form-group mt-5">
                      <label for="tnc">
                        <input type="checkbox" name="tnc" id="tnc">
                        I agree to the terms and conditions
                      </label>

                    </div>
                    <div class="text-center">
                      <button class="btn btn-primary" type="submit" name="submit">Submit Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
      <?php include "includes/footer.php"; ?>
    </div>
  </div>
  <?php include "includes/footer-resources.php"; ?>
  <!-- Plugin used-->
</body>

</html>