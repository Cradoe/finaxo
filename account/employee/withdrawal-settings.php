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
                                    <h5>Withdrawal</h5>
                                    <span>Wallet ID: 3393_39ndj38NAUnf92</span>
                                </div>
                                <div class="card-body">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                    <h4>Current Balance: &#8358;<span id="total-balance">5000</span></h4>
                                    <form method="POST" action="#">
                                        <div class="form-group">
                                            <label class="col-form-label"><b> Duration</b></label>
                                            <div class="switch-lg">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <input class="touchspin" id="month-input" data-bts-min="12" type="text" value="40" data-bts-postfix="months">
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4">
                                            <label class="col-form-label"><b> Amount Per Month <span class="badge badge-info">(&#8358;)</span></b></label>
                                            <div class="switch-lg">
                                                <fieldset>
                                                    <div class="input-group">
                                                        <input class="form-control" value="0" readonly id="amount-input" type="text">
                                                    </div>
                                                </fieldset>
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
    <script src="../assets/js/touchspin/vendors.min.js"></script>
    <script src="../assets/js/touchspin/touchspin.js"></script>
    <script src="../assets/js/touchspin/input-groups.min.js"></script>
    <!-- Plugin used-->
    <script>
        $(function() {
            const totalBalance = Number($('#total-balance').text()),
                monthInput = $('#month-input'),
                amountInput = $('#amount-input');

            let monthDuration = Number(monthInput.val()),
                newAmount = totalBalance / monthDuration;

            amountInput.val(newAmount);

            monthInput.change(function() {
                monthDuration = Number($(this).val()),
                    newAmount = totalBalance / monthDuration;

                amountInput.val(newAmount);


            })

        })
    </script>
</body>

</html>