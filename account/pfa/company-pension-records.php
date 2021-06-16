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
                                <h3>Flexidink: RC4834488</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Pages</li>
                                    <li class="breadcrumb-item active">Pension</li>
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
                                    <h5>Pension</h5><span>See record of funds remited by your employer.</span>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="datatable">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Transaction Ref</th>
                                                    <th>Amount</th>
                                                    <th>Date</th>
                                                    <th>Departments</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>#3ujnf43uejri4</td>
                                                    <td>&#8358;9,300,082</td>
                                                    <td>2011/04/25</td>
                                                    <td>45</td>
                                                    <td>
                                                        <span class="badge badge-secondary">processing</span>
                                                    </td>
                                                    <td>
                                                        <a href="pension-departments?id=2" class="btn btn-xs btn-primary" target="_blank">
                                                            View Details
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>#3ujnf43uejri4</td>
                                                    <td>&#8358;9,300,082</td>
                                                    <td>2011/04/25</td>
                                                    <td>45</td>
                                                    <td>
                                                        <span class="badge badge-success">successful</span>
                                                    </td>
                                                    <td>
                                                        <a href="pension-departments?id=2" class="btn btn-xs btn-primary" target="_blank">
                                                            View Details
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