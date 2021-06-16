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
                <h3>
                  Dashboard</h3>
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item">Dashboard</li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row size-column">
            <div class=" xl-100 chart_data_left box-col-12">
              <div class="card">
                <div class="card-body p-0">
                  <div class="row m-0 chart-main">
                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                      <div class="media align-items-center">
                        <div class="hospital-small-chart">
                          <div class="small-bar">
                            <div class="small-chart flot-chart-container"></div>
                          </div>
                        </div>
                        <div class="media-body">
                          <div class="right-chart-content">
                            <h4>1001</h4><span>Companies </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                      <div class="media align-items-center">
                        <div class="hospital-small-chart">
                          <div class="small-bar">
                            <div class="small-chart1 flot-chart-container"></div>
                          </div>
                        </div>
                        <div class="media-body">
                          <div class="right-chart-content">
                            <h4>1005</h4><span>Employees</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                      <div class="media align-items-center">
                        <div class="hospital-small-chart">
                          <div class="small-bar">
                            <div class="small-chart2 flot-chart-container"></div>
                          </div>
                        </div>
                        <div class="media-body">
                          <div class="right-chart-content">
                            <h4>0</h4><span>Frauds Detected</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                      <div class="media border-none align-items-center">
                        <div class="hospital-small-chart">
                          <div class="small-bar">
                            <div class="small-chart3 flot-chart-container"></div>
                          </div>
                        </div>
                        <div class="media-body">
                          <div class="right-chart-content">
                            <h4>101</h4><span>Purchase ret</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="risk-col xl-100 box-col-12">
              <div class="card total-users">
                <div class="card-header card-no-border">
                  <h5>At a Glance</h5>

                </div>
                <div class="card-body pt-0">
                  <div class="apex-chart-container goal-status text-center row">
                    <div class="rate-card col-xl-12">
                      <div class="goal-chart">
                        <div id="riskfactorchart"></div>
                      </div>
                      <div class="goal-end-point">
                        <ul>
                          <li class="mt-0 pt-0">
                            <h6 class="font-primary">As From</h6>
                            <h6 class="f-w-400">24 March 2021</h6>
                          </li>
                          <li>
                            <h6 class="mb-2 f-w-400">Total Transations</h6>
                            <h5 class="mb-0">7977</h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <ul class="col-xl-12">
                      <li>
                        <div class="goal-detail">
                          <h6> <span class="font-primary">Pension Received : </span>&#8358;91,000.000</h6>
                          <div class="progress sm-progress-bar progress-animate">
                            <div class="progress-gradient-primary" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="goal-detail mb-0">
                          <h6><span class="font-primary">Payouts: </span>&#8358;91,000.000</h6>
                          <div class="progress sm-progress-bar progress-animate">
                            <div class="progress-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="btn-download btn btn-gradient f-w-500">Download details</div>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-6 appointment-sec box-col-6">
              <div class="row">
                <div class="col-xl-12 appointment">
                  <div class="card">
                    <div class="card-header card-no-border">
                      <div class="header-top">
                        <h5 class="m-0">Credits</h5>
                      </div>
                    </div>
                    <div class="card-body pt-0">
                      <div class="appointment-table table-responsive">
                        <table class="table table-bordernone">
                          <tbody>
                            <tr>
                              <td><img class="img-fluid img-40 rounded-circle mb-3" src="../assets/images/appointment/app-ent.jpg" alt="Image description">
                                <div class="status-circle bg-primary"></div>
                              </td>
                              <td class="img-content-box"><span class="d-block">Venter Loren</span><span class="font-roboto">22 Sept</span></td>
                              <td>
                                <p class="m-0 font-primary">&#8358;44344</p>
                              </td>
                              <td class="text-end">
                                <div class="button btn btn-primary">Done<i class="fa fa-check-circle ms-2"></i></div>
                              </td>
                            </tr>
                            <tr>
                              <td><img class="img-fluid img-40 rounded-circle" src="../assets/images/appointment/app-ent.jpg" alt="Image description">
                                <div class="status-circle bg-primary"></div>
                              </td>
                              <td class="img-content-box"><span class="d-block">John Loren</span><span class="font-roboto">24 Sept</span></td>
                              <td>
                                <p class="m-0 font-primary">&#8358;44344</p>
                              </td>
                              <td class="text-end">
                                <div class="button btn btn-danger">Pending<i class="fa fa-clock-o ms-2"></i></div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <hr class="my-3">
                      <div class="text-center">
                        <a href="pension-transactions" class="btn btn-xs btn-primary">See More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 appointment-sec box-col-6">
              <div class="col-xl-12 alert-sec">
                <div class="card bg-img">
                  <div class="card-header">
                    <div class="header-top">
                      <h5 class="m-0">Alert </h5>
                      <div class="dot-right-icon">
                        <a href="unapproved-companies">
                          <i class="fa fa-ellipsis-h text-white"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="body-bottom">
                      <h6>303 companies are awaiting approval...</h6><span class="font-roboto">Lorem Ipsum is simply dummy...It is a long established fact that a reader will be distracted by </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-9 xl-100 box-col-12">
              <div class="row">
                <div class="col-xl-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="best-seller-table responsive-tbl">
                        <div class="item">
                          <div class="table-responsive product-list">
                            <table class="table table-bordernone">
                              <thead>
                                <tr>
                                  <th class="f-22">
                                    Recent Withdrawals</th>
                                  <th>Ref</th>
                                  <th>Date</th>
                                  <th>Amount</th>
                                  <th class="text-end">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="d-inline-block align-middle"><img class="img-40 m-r-15 rounded-circle align-top" src="../assets/images/avtar/7.jpg" alt="">
                                      <div class="status-circle bg-primary"></div>
                                      <div class="d-inline-block"><span>John keter</span>
                                      </div>
                                    </div>
                                  </td>
                                  <td>#ijij8menjknj</td>
                                  <td>06 August</td>
                                  <td> <span class="label">&#8358;5,08,652</span></td>
                                  <td class="text-end"><i class="fa fa-check-circle"></i>Successful</td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-inline-block align-middle"><img class="img-40 m-r-15 rounded-circle align-top" src="../assets/images/avtar/7.jpg" alt="">
                                      <div class="status-circle bg-primary"></div>
                                      <div class="d-inline-block"><span>John keter</span>
                                      </div>
                                    </div>
                                  </td>
                                  <td>#ijij8menjknj</td>
                                  <td>06 August</td>
                                  <td> <span class="label">&#8358;5,08,652</span></td>
                                  <td class="text-end"><i class="fa fa-check-circle"></i>Successful</td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-inline-block align-middle"><img class="img-40 m-r-15 rounded-circle align-top" src="../assets/images/avtar/7.jpg" alt="">
                                      <div class="status-circle bg-primary"></div>
                                      <div class="d-inline-block"><span>John keter</span>
                                      </div>
                                    </div>
                                  </td>
                                  <td>#ijij8menjknj</td>
                                  <td>06 August</td>
                                  <td> <span class="label">&#8358;5,08,652</span></td>
                                  <td class="text-end"><i class="fa fa-check-circle"></i>Successful</td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-inline-block align-middle"><img class="img-40 m-r-15 rounded-circle align-top" src="../assets/images/avtar/7.jpg" alt="">
                                      <div class="status-circle bg-primary"></div>
                                      <div class="d-inline-block"><span>John keter</span>
                                      </div>
                                    </div>
                                  </td>
                                  <td>#ijij8menjknj</td>
                                  <td>06 August</td>
                                  <td> <span class="label">&#8358;5,08,652</span></td>
                                  <td class="text-end"><i class="fa fa-check-circle"></i>Successful</td>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
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

  <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
  <script src="../assets/js/chart/chartist/chartist.js"></script>
  <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>

  <script>
    $(function() {


      var options = {
        series: [100],
        chart: {
          height: 350,
          type: 'radialBar',
          offsetY: -10,
        },

        plotOptions: {
          radialBar: {
            startAngle: -135,
            endAngle: 135,
            inverseOrder: true,
            hollow: {
              margin: 5,
              size: '60%',
              image: '../assets/images/dashboard-2/radial-image.png',
              imageWidth: 140,
              imageHeight: 140,
              imageClipped: false,
            },
            track: {
              opacity: 0.4,
              colors: CubaAdminConfig.primary
            },
            dataLabels: {
              enabled: false,
              enabledOnSeries: undefined,
              formatter: function(val, opts) {
                return val + "%"
              },
              textAnchor: 'middle',
              distributed: false,
              offsetX: 0,
              offsetY: 0,

              style: {
                fontSize: '14px',
                fontFamily: 'Helvetica, Arial, sans-serif',
                fill: ['#2b2b2b'],

              },
            },
          }
        },

        fill: {
          type: 'gradient',
          gradient: {
            shade: 'light',
            shadeIntensity: 0.15,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [0, 100],
            gradientToColors: ['#a927f9'],
            type: 'horizontal'
          },
        },
        stroke: {
          dashArray: 15,
          strokecolor: ['#ffffff']
        },

        labels: ['Performance'],
        colors: [CubaAdminConfig.primary],
      };

      var chart4 = new ApexCharts(document.querySelector("#riskfactorchart"),
        options
      );
      chart4.render();



      //small chart-1

      new Chartist.Bar('.small-chart', {
        labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7'],
        series: [
          [400, 900, 800, 1000, 700, 1200, 300],
          [1000, 500, 600, 400, 700, 200, 1100]
        ]
      }, {
        plugins: [
          Chartist.plugins.tooltip({
            appendToBody: false,
            className: "ct-tooltip"
          })
        ],
        stackBars: true,
        axisX: {
          showGrid: false,
          showLabel: false,
          offset: 0
        },
        axisY: {
          low: 0,
          showGrid: false,
          showLabel: false,
          offset: 0,
          labelInterpolationFnc: function(value) {
            return (value / 1000) + 'k';
          }
        }
      }).on('draw', function(data) {
        if (data.type === 'bar') {
          data.element.attr({
            style: 'stroke-width: 3px'
          });
        }
      });

      //small-2

      new Chartist.Bar('.small-chart1', {
        labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7'],
        series: [
          [400, 600, 900, 800, 1000, 1200, 500],
          [1000, 800, 500, 600, 400, 200, 900]
        ]
      }, {
        plugins: [
          Chartist.plugins.tooltip({
            appendToBody: false,
            className: "ct-tooltip"
          })
        ],
        stackBars: true,
        axisX: {
          showGrid: false,
          showLabel: false,
          offset: 0
        },
        axisY: {
          low: 0,
          showGrid: false,
          showLabel: false,
          offset: 0,
          labelInterpolationFnc: function(value) {
            return (value / 1000) + 'k';
          }
        }
      }).on('draw', function(data) {
        if (data.type === 'bar') {
          data.element.attr({
            style: 'stroke-width: 3px'
          });
        }
      });
      // small-3

      new Chartist.Bar('.small-chart2', {
        labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7'],
        series: [
          [1100, 900, 600, 1000, 700, 1200, 300],
          [300, 500, 800, 400, 700, 200, 1100]
        ]
      }, {
        plugins: [
          Chartist.plugins.tooltip({
            appendToBody: false,
            className: "ct-tooltip"
          })
        ],
        stackBars: true,
        axisX: {
          showGrid: false,
          showLabel: false,
          offset: 0
        },
        axisY: {
          low: 0,
          showGrid: false,
          showLabel: false,
          offset: 0,
          labelInterpolationFnc: function(value) {
            return (value / 1000) + 'k';
          }
        }
      }).on('draw', function(data) {
        if (data.type === 'bar') {
          data.element.attr({
            style: 'stroke-width: 3px'
          });
        }
      });
      // small-4
      new Chartist.Bar('.small-chart3', {
        labels: ['Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7'],
        series: [
          [400, 600, 800, 1000, 700, 1100, 300],
          [1000, 500, 600, 300, 700, 200, 1100]
        ]
      }, {
        plugins: [
          Chartist.plugins.tooltip({
            appendToBody: false,
            className: "ct-tooltip"
          })
        ],
        stackBars: true,
        axisX: {
          showGrid: false,
          showLabel: false,
          offset: 0
        },
        axisY: {
          low: 0,
          showGrid: false,
          showLabel: false,
          offset: 0,
          labelInterpolationFnc: function(value) {
            return (value / 1000) + 'k';
          }
        }
      }).on('draw', function(data) {
        if (data.type === 'bar') {
          data.element.attr({
            style: 'stroke-width: 3px'
          });
        }
      });

    })
  </script>
</body>

</html>