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
                                    <li class="breadcrumb-item active">Company Profile</li>
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
                                <div class="card hovercard">
                                    <div class="cardheader"></div>
                                    <div class="user-image text-center">
                                        <div class="avatar"><img alt="" src="../assets/images/user/7.jpg"></div>
                                    </div>
                                    <div class="info">
                                        <div class="row text-center">
                                            <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="ttl-info text-start">
                                                            <h6><i class="fa fa-envelope"></i>   Email</h6><span>Marekjecno@yahoo.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="ttl-info text-start">
                                                            <h6><i class="fa fa-user"></i>   Staffs</h6><span>898</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                                <div class="user-designation">
                                                    <div class="title"><a href="JavaScript:void(0)">Flexidink</a></div>
                                                    <div class="desc">RC39333</div>
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
                                        <div class="follow text-center">
                                            <div class="row">
                                                <div class="col-6 text-md-end border-right">
                                                    <div class="follow-num counter">Staffs</div>
                                                    <span>
                                                        <a href="staffs" class="btn btn-primary">
                                                            View
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="col-6 text-md-start">
                                                    <div class="follow-num counter">Departments</div><span>
                                                        <a href="departments" class="btn btn-primary">
                                                            View
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="company-details">
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat unde expedita nesciunt nisi magni mollitia. Corrupti quaerat et, quas quidem reiciendis harum dolor aliquam architecto rem iste illum, ullam similique?

                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat unde expedita nesciunt nisi magni mollitia. Corrupti quaerat et, quas quidem reiciendis harum dolor aliquam architecto rem iste illum, ullam similique?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat unde expedita nesciunt nisi magni mollitia. Corrupti quaerat et, quas quidem reiciendis harum dolor aliquam architecto rem iste illum, ullam similique?

                                                <button class="btn btn-secondary btn-xs" id="edit-btn">Edit Description</button>
                                        </div>
                                        <div id="edit-about-company" style="display: none;">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <label for="">Company's description</label>
                                                    <textarea name="description" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group mt-5 text-center">
                                                    <button type="button" class="btn btn-warning" id="cancel-edit">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
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

    <script>
        $(function() {
            $('#edit-btn').click(function() {
                $('#company-details').fadeOut('slow', () => {
                    $('#edit-about-company').slideDown();
                })
            });
            $('#cancel-edit').click(function() {
                $('#edit-about-company').fadeOut('slow', () => {
                    $('#company-details').slideDown();
                })
            });
        })
    </script>
</body>

</html>