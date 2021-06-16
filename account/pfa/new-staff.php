<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header-resources.php"; ?>
    <style>
        .no-result-found-icon {
            font-size: 80px
        }
    </style>
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include "includes/header.php"; ?>
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include "includes/sidebar.php"; ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Staffs</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Staffs</li>
                                    <li class="breadcrumb-item active">New</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-8" id="new-staff-terms" style="display: none;">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Pension Terms</h5>
                                </div>
                                <div class="card-body">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

                                    <form method="POST" action="#">
                                        <div class="form-group">
                                            <label class="col-form-label"><b>Current Salary</b></label>
                                            <input type="text" required="required" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label"><b>Percentage for Pension</b></label>
                                            <input type="text" required="required" class="form-control" />
                                        </div>
                                        <div class="text-center mt-5">
                                            <button class="btn btn-primary add-loader" type="submit" name="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12" id="form-card">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Register New Staff</h5>
                                </div>
                                <div class="card-body">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

                                    <form method="POST" action="#" id="form-element">
                                        <div class="form-group">
                                            <label class="col-form-label"><b>Email Address</b></label>
                                            <input type="email" required="required" name="email" class="form-control" />
                                        </div>
                                        <div class="text-center mt-5">
                                            <button class="btn btn-primary add-loader" type="submit" name="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-4" id="fetch-loader" style="display:none">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Fetching Account Block</h5>
                                </div>
                                <div class="card-body">
                                    <div class="text-center my-5">
                                        <h2>
                                            <i class="fa fa-spinner fa-spin"></i>
                                        </h2>
                                        <p>Please wait...</p>
                                        <h3 id="counter-text">0%</h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4" id="no-result-found-card" style="display:none">
                            <div class="card">
                                <div class="card-header">
                                    <h5>No Profile found</h5>
                                </div>
                                <div class="card-body">
                                    <div class="text-center my-5">
                                        <p class="fa fa-close text-danger no-result-found-icon"></p>
                                        <p>No employee account found witht the specified email addresss. Please check to cofirm typo.</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-4 box-col-6" id="employee-profile-card" style="display:none">
                            <div class="card custom-card p-0">
                                <div class="card-header"><img class="img-fluid" src="../assets/images/user-card/1.jpg" alt=""></div>
                                <div class="card-profile"><img class="rounded-circle" src="../assets/images/avtar/3.jpg" alt=""></div>
                                <div class="text-center profile-details">
                                    <h5>Mark Jecno</h5>
                                    <h6>Manager <b>at Flexidink</b></h6>
                                </div>
                                <div class="card-footer row">
                                    <div class="col-6">
                                        <h6>Accept</h6>
                                        <button id="accept-staff-btn" class="btn btn-primary">YES</button>
                                    </div>
                                    <div class="col-6">
                                        <h6>Profile</h6>
                                        <a target="_blank" href="employee-profile" class="btn btn-warning">VIEW</a>
                                    </div>
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

    <script>
        $(function() {
            $('#form-element').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: '',
                    type: 'get',
                    dataType: 'JSON',
                    beforeSend: function() {
                        $('#form-card').addClass('col-md-8').removeClass('col-md-12');
                        $('#no-result-found-card, #employee-profile-card').slideUp();
                        $('#fetch-loader').slideDown();
                    },
                    success: function(response) {

                        timeOutLoader(() => {
                            $('#fetch-loader').slideUp('slow', () => {
                                if (response.totalHits === 0) {
                                    $('#no-result-found-card').slideDown();
                                } else {
                                    $('#employee-profile-card').slideDown();
                                }
                            });
                        });

                    },
                    error: function(error) {
                        /*   TODO: SHOULD BE UNCOMMENTED
                // alert("Opps. The server has encountered a temporary issue. Please try again.");
                // console.log(error);

                */

                        //   TODO: TO BE DELETED   
                        timeOutLoader(() => {
                            $('#fetch-loader').slideUp('slow', () => {
                                if (1 === 0) {
                                    $('#no-result-found-card').slideDown();
                                } else {
                                    $('#employee-profile-card').slideDown();
                                }
                            });

                        })
                    }
                })
            });

            $('#accept-staff-btn').click(function() {
                $('#form-card').slideUp('slow', function() {
                    $('#new-staff-terms').slideDown();
                })
            });

            function timeOutLoader(fn) {
                let counter = 0;
                const interval = setInterval(() => {
                    if (counter <= 100) {
                        $('#counter-text').text(`${counter}%`);
                        counter++;
                    } else {
                        fn();
                        clearInterval(interval);
                    }
                }, 100);
            }
        })
    </script>
</body>

</html>