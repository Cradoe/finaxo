<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/header-resources.php"; ?>
    <style>
        #chain-bg {
            background-image: url("../assets/images/chain.gif");
            background-repeat: no-repeat;
            background-size: contain;
            min-height: 30vh;
            background-position: center;
        }

        #approval-bg {
            background-image: url("../assets/images/approved.jpg");
            background-repeat: no-repeat;
            background-size: contain;
            min-height: 30vh;
            background-position: center;
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
                                <h3>Pension</h3>
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
                            <div class="card" id="details-card">
                                <div class="card-header">
                                    <h5>January 2021</h5><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5>Departments: </h5>
                                            <h6>58</h6>
                                        </div>
                                        <div class="col">
                                            <h5>Staffs:</h5>
                                            <h6>58</h6>
                                        </div>
                                        <div class="col">
                                            <h5>Total Amount: </h5>
                                            <h6>&#8358;58,0000</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class=" text-center my-5">
                                        <form>
                                            <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                                            <button id="btn-pay" class="btn btn-secondary btn-lg">Payment Process</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="transfer-block-card" style="display: none;">
                                <div class="card-header">
                                    <h5 id="transfer-block-header">Processing...</h5><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                </div>
                                <div class="card-body" id="chain-bg">
                                </div>
                                <div class="card-footer text-center">
                                    <h2 id="counter-text"></h2>
                                </div>
                            </div>

                            <div class="card" id="receipt-card" style="display: none;">
                                <div class="card-header">
                                    <h5>Transaction Successful...</h5><span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                </div>
                                <div class="card-body" id="approval-bg">

                                </div>
                                <div class="card-footer text-center">
                                    <h5 id="hash-text"></h5>
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
            const API_FLUTTERWAVE_PK = "FLWPUBK_TEST-d8874760a3b0881addafcde787d96dae-X",
                chargedPrice = 5000,
                customerInfo = {
                    email: 'test@test.com',
                    phone: '08149617083',
                    companyName: 'Flexidink'
                };
            let date = new Date(),
                txRef = '';

            $('#btn-pay').click((e) => {
                e.preventDefault();

                date = new Date();
                txRef =
                    "FD" +
                    date.getFullYear().toString() +
                    date.getMonth().toString() +
                    date.getMilliseconds().toString() +
                    Math.floor(getRandomNumber()).toString();
                makePayment();
            });



            function makePayment() {
                savePaymentDetailsToServer(txRef);
                return;
                var o = getpaidSetup({
                    PBFPubKey: API_FLUTTERWAVE_PK,
                    customer_email: customerInfo.email,
                    amount: chargedPrice.toString(),
                    customer_phone: customerInfo.phone,
                    customer_firstname: customerInfo.companyName,
                    customer_lastname: customerInfo.companyName,
                    currency: "NGN",
                    country: "NG",
                    txref: txref,
                    onclose: function() {},
                    callback: function(e) {
                        handlePaymentResponse(e), o.close();
                    }
                });
            }

            function getRandomNumber(e = 0, t = 100) {
                return Math.random() * (t - e) + e;
            }

            function handlePaymentResponse(e) {

                var t = e.tx;
                if ("00" == t.chargeResponseCode || "0" == t.chargeResponseCode) {
                    let e = {
                        txref: t.txRef,
                        orderRef: t.orderRef,
                        flwChargedAmount: t.flwChargedAmount,
                        flwRef: t.flwRef,
                        amount: chargedPrice
                    };
                    savePaymentDetailsToServer(e);
                } else
                    handleServerError("Unknown error. Server couldn't process the request.");
            }

            function savePaymentDetailsToServer(data) {
                showTransferBlock();
                setTimeout(() => {
                    showReceiptBlock(txRef);
                }, 2000);
                return;
                try {
                    $.ajax({
                        url: 'YOUR URL HERE',
                        type: "POST",
                        dataType: 'json',
                        data: data,
                        beforeSend: () => {
                            showTransferBlock();
                        },
                        success: (response) => {
                            if (response.status == 'ok' && response.success == true) {
                                setTimeout(() => {
                                    showReceiptBlock(data.txref);
                                }, 3000);
                            } else {
                                handleServerError(response);
                            }
                        },
                        error: (error) => {
                            handleServerError(error);
                        }
                    })
                } catch (error) {
                    handleServerError(error);
                }
            }

            function showTransferBlock() {
                $('#details-card').fadeOut('slow', () => {
                    $('#transfer-block-card').slideDown('slow', function() {});
                });


            }

            function showReceiptBlock(txref) {
                timeOutLoader(() => {
                    $('#hash-text').text(`Transaction Ref: ${txRef}`);
                    $('#transfer-block-card').fadeOut('slow', () => {
                        $('#receipt-card').slideDown();
                    });
                });

            }

            function handleServerError(e) {
                alert(
                        "Opps! The server as encountered a temporary error. Please refresh the page or contact our customer service."
                    ),
                    console.error(e);
            }

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