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
                                <h3>Profile</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">
                                            <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Pages</li>
                                    <li class="breadcrumb-item active">Employee Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="user-profile">
                        <div class="row">
                            <!-- user profile first-style start-->
                            <div class="col-sm-12">
                                <div class="card hovercard text-center">
                                    <div class="cardheader"></div>
                                    <div class="user-image">
                                        <div class="avatar"><img alt="" src="../assets/images/user/7.jpg"></div>
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="ttl-info text-start">
                                                            <h6><i class="fa fa-envelope"></i>   Email</h6><span>Marekjecno@yahoo.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="ttl-info text-start">
                                                            <h6><i class="fa fa-calendar"></i>   BOD</h6><span>02 January 1988</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                                <div class="user-designation">
                                                    <div class="title"><a target="_blank" href="#">Mark jecno</a></div>
                                                    <div class="desc">Flexidink</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="ttl-info text-start">
                                                            <h6><i class="fa fa-phone"></i>   Contact Us</h6><span>Nigeria +91 123-456-7890</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="ttl-info text-start">
                                                            <h6><i class="fa fa-location-arrow"></i>   Location</h6><span>B69 Near Schoool Demo Home</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="follow">
                                            <div class="row">
                                                <div class="col-6 text-md-end border-right">
                                                    <div class="follow-num counter">Register</div>
                                                    <span>
                                                        <a href="#" class="btn btn-primary">
                                                            Register Employee
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="col-6 text-md-start">
                                                    <div class="follow-num counter">Department</div><span>
                                                        <a href="#" class="btn btn-primary">
                                                            Change Department
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- user profile first-style end-->
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