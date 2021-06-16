<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header-resources.php"; ?>

    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <style>
        .img-avatar {
            height: 50px;
            width: 50px;
            border-radius: 50px
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
                                <h3>Flexidink</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Pages</li>
                                    <li class="breadcrumb-item active">Staffs</li>
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
                                    <h5>Staffs</h5><span>See record of funds remited by your employer.</span>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="datatable">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Profile Picture</th>
                                                    <th>Staff ID</th>
                                                    <th>Fullname</th>
                                                    <th>Email</th>
                                                    <th>Department</th>
                                                    <th>Date Registered</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <img src="../assets/images/avtar/3.jpg" class="img-avatar" alt="">
                                                    </td>
                                                    <td>#jeifjwi383djnu393_30</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>Marketing</td>
                                                    <td>2011/04/25</td>
                                                    <td>
                                                        <a href="employee-profile" class="btn btn-xs btn-primary" target="_blank">
                                                            View Profile
                                                        </a>
                                                        <a href="staff-pension-records?id=222" class="btn btn-xs btn-success" target="_blank">
                                                            Pension Records
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <img src="../assets/images/avtar/3.jpg" class="img-avatar" alt="">
                                                    </td>
                                                    <td>#jeifjwi383djnu393_30</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>Marketing</td>
                                                    <td>2011/04/25</td>
                                                    <td>
                                                        <a href="employee-profile" class="btn btn-xs btn-primary" target="_blank">
                                                            View Profile
                                                        </a>
                                                        <a href="staff-pension-records?id=222" class="btn btn-xs btn-success" target="_blank">
                                                            Pension Records
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <img src="../assets/images/avtar/3.jpg" class="img-avatar" alt="">
                                                    </td>
                                                    <td>#jeifjwi383djnu393_30</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>Marketing</td>
                                                    <td>2011/04/25</td>
                                                    <td>
                                                        <a href="employee-profile" class="btn btn-xs btn-primary" target="_blank">
                                                            View Profile
                                                        </a>
                                                        <a href="staff-pension-records?id=222" class="btn btn-xs btn-success" target="_blank">
                                                            Pension Records
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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

    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script>
        $('#datatable').DataTable();
    </script>
    <!-- Plugin used-->
</body>

</html>