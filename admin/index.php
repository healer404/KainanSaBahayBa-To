<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include './inc/head.php';
    ?>
    <!-- Unique CSS for this Page -->
    <link rel="stylesheet" href="./../assets/custom/css/admin/index.css" type="text/css">
    <!-- END Unique CSS for this Page -->
</head>
<body>
    <div class="wrapper">
        <?php
        $sidebar = "Dashboard";
        $mon_year = date('F Y');
        ?>
        <!-- sidebar section -->
        <?php include './inc/sidebar.php'; ?>
        <!-- END sidebar section -->

        <!-- page content -->
        <div id="content" class="test">
            <!-- Content navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light test">
                <div class="container-fluid">

                    <!-- sidebar toggler -->
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <!-- END sidebar toggler -->

                    <!-- page pills section -->
                    <div class="container">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-summary-tab" data-toggle="tab" href="#nav-summary" role="tab" aria-controls="nav-summary" aria-selected="true">Overall Summary</a>
                                <a class="nav-item nav-link" id="nav-report-tab" data-toggle="tab" href="#nav-report" role="tab" aria-controls="nav-report" aria-selected="false">Detailed Report</a>
                                <a class="nav-item nav-link" id="nav-problem-tab" data-toggle="tab" href="#nav-problem" role="tab" aria-controls="nav-contact" aria-selected="false">Problem Encountered</a>
                            </div>
                        </nav>
                    </div>
                    <!-- END page pills section -->
                </div>
            </nav>
            <!-- END Content navbar -->
            <!-- Main Content -->
            <div class="container-fluid">
                <div class="tab-content" id="nav-tabContent">
                    <!-- Summary Tab Contents -->
                    <div class="tab-pane fade show active" id="nav-summary" role="tabpanel" aria-labelledby="nav-summary-tab">
                        <div class="container-fluid">
                            <div id="dashboard-summary" class="mt-3">
                                <div class="page-section-header">
                                    Summary <sub><i><?php echo $mon_year; ?></i></sub>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-md-4">
                                    <!-- Earnings Card -->
                                    <div class="card card-summary mt-2">
                                        <div class="card-body bg-success">
                                            <div class="row text-white">
                                                <div class="col-md-12 card-summary-top">
                                                    Total Earnings
                                                </div>
                                                <div class="col-md-8 card-summary-middle-left pt-4">
                                                    PHP 999,000.00
                                                </div>
                                                <div class="col-md-4 card-summary-middle-right">
                                                    <i class="fas fa-money-bill-wave fa-4x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="card-header bg-lightgreen text-center card-summary-bottom">
                                          View More
                                        </a>
                                    </div>
                                    <!-- END Earnings Card -->
                                </div>
                                <div class="col-md-4">
                                    <!-- Expenses Card -->
                                    <div class="card card-summary mt-2">
                                        <div class="card-body bg-primary">
                                            <div class="row text-white">
                                                <div class="col-md-12 card-summary-top">
                                                    Total Expenses
                                                </div>
                                                <div class="col-md-8 card-summary-middle-left pt-4">
                                                    PHP 999,000.00
                                                </div>
                                                <div class="col-md-4 card-summary-middle-right">
                                                    <i class="fas fa-eject fa-4x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="card-header bg-lightblue text-center card-summary-bottom">
                                            View More
                                        </a>
                                    </div>
                                    <!-- END Expenses Card -->
                                </div>
                                <div class="col-md-4">
                                    <!-- Profit Card -->
                                    <div class="card card-summary mt-2">
                                        <div class="card-body bg-darkyellow">
                                            <div class="row text-white">
                                                <div class="col-md-12 card-summary-top">
                                                    Total Profit
                                                </div>
                                                <div class="col-md-8 card-summary-middle-left pt-4">
                                                    PHP 999,000.00
                                                </div>
                                                <div class="col-md-4 card-summary-middle-right">
                                                    <i class="fas fa-dollar-sign fa-4x"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" class="card-header bg-yellow text-center card-summary-bottom">
                                            View More
                                        </a>
                                    </div>
                                    <!-- END Profit Card -->
                                </div>
                            </div>

                            <!-- Best Selling Items -->
                            <div id="dashboard-summary" class="mt-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="page-section-header">
                                            Best Selling Items
                                        </div>
                                        <div class="row py-3">
                                            <div class="col-md-5 pr-0">
                                                <div class="card">
                                                    <div class="card-header text-center">
                                                        <img src="./../assets/custom/img/item/item1.jpg" alt="Item 1" height="150" width="250">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7 m-0 pl-0">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row px-2">
                                                            <div class="col-md-12">
                                                                <div class="item-name">
                                                                    AWM-2000
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 pt-1 text-justify">
                                                                <div class="item-details">
                                                                    <b>Servings Served: </b>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pt-1 text-center">
                                                                <div class="item-details">
                                                                    10,239
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 pt-1 text-justify">
                                                                <div class="item-details">
                                                                    <b>Available Stock: </b>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pt-1 text-center">
                                                                <div class="item-details">
                                                                    4,761
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 pt-1 text-justify">
                                                                <div class="item-details">
                                                                    <b>Price Per Serving: </b>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pt-1 text-center">
                                                                <div class="item-details">
                                                                    PHP 250.00
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="page-section-header">
                                            Critical Stock
                                        </div>
                                        <div class="row p-3">

                                            <div class="col-md-12 p-2 underline">
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-8 pt-2">
                                                        Spicy Chicken Popcorn <span class="badge badge-warning">20</span>
                                                    </div>
                                                    <div class="col-md-2 text-center">
                                                        <div class="show-product">
                                                            <button class="btn btn-primary">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 p-2 underline">
                                                <div class="row">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-8 pt-2">
                                                        Blue Lemonade (Pitcher) <span class="badge badge-danger">30</span>
                                                    </div>
                                                    <div class="col-md-2 text-center">
                                                        <div class="show-product">
                                                            <button class="btn btn-primary">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Best Selling Items -->
                        </div>
                    </div>
                    <!-- END Summary Tab Contents -->

                    <div class="tab-pane fade" id="nav-report" role="tabpanel" aria-labelledby="nav-report-tab">
                        Graphs
                    </div>

                    <div class="tab-pane fade" id="nav-problem" role="tabpanel" aria-labelledby="nav-problem-tab">
                        Problems Encountered
                    </div>
                </div>

                <div class="container-fluid bg-dark fixed-bottom text-right text-white p-1">
                    All Rights Reserved
                </div>
            </div>
            <!-- END Main Content -->
        </div>
        <!-- END page content -->
    </div>
    <?php
        include './inc/footer.php';
    ?>
</body>
</html>