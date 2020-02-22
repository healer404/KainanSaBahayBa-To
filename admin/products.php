<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include './inc/head.php';
    ?>
    <!-- Unique CSS for this Page -->
    <link rel="stylesheet" href="./../assets/custom/css/admin/index.css" type="text/css">
    <link rel="stylesheet" href="./../assets/custom/css/admin/products.css" type="text/css">
    <!-- END Unique CSS for this Page -->
</head>
<body>
<div class="wrapper">
    <?php
    $sidebar = "Product Section";
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
                            <a class="nav-item nav-link active" id="nav-products-tab" data-toggle="tab" href="#nav-products" role="tab" aria-controls="nav-products" aria-selected="true">Products</a>
                            <a class="nav-item nav-link" id="nav-raw-tab" data-toggle="tab" href="#nav-raw" role="tab" aria-controls="nav-raw" aria-selected="false">Raw Items</a>
                            <a class="nav-item nav-link" id="nav-recipe-tab" data-toggle="tab" href="#nav-recipe" role="tab" aria-controls="nav-recipe" aria-selected="false">Products Recipe</a>
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

                <!-- Tab Show All Contents -->
                <div class="tab-pane fade show active" id="nav-products" role="tabpanel" aria-labelledby="nav-products-tab">
                    <div class="container-fluid">
                        <div class="row p-3">
                            <!-- Category Section -->
                            <div class="col-md-3">
                                <!-- Categories Section Header -->
                                <div id="product-products">
                                    <div class="page-section-header">
                                        Categories
                                    </div>
                                </div>
                                <!-- END Categories Section Header -->

                                <!-- Categories Section Category List -->
                                <div class="col-md-12 underline mt-2 pb-2">
                                    <div class="row">
                                        <div class="col-md-9 py-2">
                                            Budget Meals
                                        </div>
                                        <div class="col-md-3 text-center">
                                            <div class="show-product text-center">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Categories Section Category List -->

                            </div>
                            <!-- END Category Section -->

                            <!-- Product Item List -->
                            <div class="col-md-9">
                                <!-- Product Item List Header -->
                                <div id="product-products">
                                    <div class="page-section-header">
                                        <div class="row">
                                            <div class="col-md-4">
                                                Product Items
                                            </div>
                                            <div class="col-md-8 text-right">
                                                <div class="btn-group">
                                                    <input type="search" class="form-control" placeholder="Search Product Item">
                                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Product Item List Header -->

                                <table class="table table-responsive table-bordered table-striped table-light mt-2">
                                    <!-- Table Headers -->
                                    <tr class="product-info text-center">
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Code</th>
                                        <th>Item Name</th>
                                        <th>Quantity</th>
                                        <th>Cost</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                    <!-- END Table Headers -->

                                    <!-- Table Items -->
                                    <tr class="product-info">
                                        <td class="pt-3 product-number">1</td>
                                        <td class="pt-3 product-image">
                                            <img src="./../assets/custom/img/category/item1.jpg" alt="Category 1" width="30" height="30">
                                        </td>
                                        <td class="pt-3 product-code">Spcy Chckn Ssg</td>
                                        <td class="pt-3 product-name">Spicy Chicken Sisig</td>
                                        <td class="pt-3 product-quantity">4,720</td>
                                        <td class="pt-3 product-cost">123.00</td>
                                        <td class="pt-3 product-price">150.00</td>
                                        <td class="product-action">
                                            <button class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="product-info">
                                        <td class="pt-3 product-number">1</td>
                                        <td class="pt-3 product-image">
                                            <img src="./../assets/custom/img/category/item1.jpg" alt="Category 1" width="30" height="30">
                                        </td>
                                        <td class="pt-3 product-code">Spcy Chckn Ssg</td>
                                        <td class="pt-3 product-name">Spicy Chicken Sisig</td>
                                        <td class="pt-3 product-quantity">4,720</td>
                                        <td class="pt-3 product-cost">123.00</td>
                                        <td class="pt-3 product-price">150.00</td>
                                        <td class="product-action">
                                            <button class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="product-info">
                                        <td class="pt-3 product-number">1</td>
                                        <td class="pt-3 product-image">
                                            <img src="./../assets/custom/img/category/item1.jpg" alt="Category 1" width="30" height="30">
                                        </td>
                                        <td class="pt-3 product-code">Spcy Chckn Ssg</td>
                                        <td class="pt-3 product-name">Spicy Chicken Sisig</td>
                                        <td class="pt-3 product-quantity">4,720</td>
                                        <td class="pt-3 product-cost">123.00</td>
                                        <td class="pt-3 product-price">150.00</td>
                                        <td class="product-action">
                                            <button class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="product-info">
                                        <td class="pt-3 product-number">1</td>
                                        <td class="pt-3 product-image">
                                            <img src="./../assets/custom/img/category/item1.jpg" alt="Category 1" width="30" height="30">
                                        </td>
                                        <td class="pt-3 product-code">Spcy Chckn Ssg</td>
                                        <td class="pt-3 product-name">Spicy Chicken Sisig</td>
                                        <td class="pt-3 product-quantity">4,720</td>
                                        <td class="pt-3 product-cost">123.00</td>
                                        <td class="pt-3 product-price">150.00</td>
                                        <td class="product-action">
                                            <button class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- END Table Items -->
                                </table>
                            </div>
                            <!-- END Product Item List -->
                        </div>
                    </div>
                </div>
                <!-- END Tab Show All Contents -->

                <!-- Tab Raw Items Contents -->
                <div class="tab-pane fade" id="nav-raw" role="tabpanel" aria-labelledby="nav-raw-tab">
                    <div class="container-fluid">
                        <div class="row p-3">
                            <!-- Critical Stock Section -->
                            <div class="col-md-4">

                                <!-- Critical Stock Section Header -->
                                <div class="page-section-header">
                                    Critical Stock
                                </div>
                                <!-- END Critical Stock Section Header -->

                                <!-- Critical Stock Section List -->
                                <div class="col-md-12 underline mt-2 pb-2">
                                    <div class="row">
                                        <div class="col-md-9 py-2">
                                            Chili Pepper <span class="badge badge-danger">19 grams</span>
                                        </div>
                                        <div class="col-md-3 text-center">
                                            <div class="show-product text-center">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Critical Stock Section List -->

                            </div>
                            <!-- END Critical Stock Section -->

                            <!-- Raw Items Section -->
                            <div class="col-md-8">

                                <!-- Raw Items Section Header -->
                                <div class="page-section-header">
                                    <div class="row">
                                        <div class="col-md-4">
                                            Raw Items
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <div class="btn-group">
                                                <input type="search" class="form-control" placeholder="Search Raw Item">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Raw Items Section Header -->

                                <!-- Raw Items Section List -->
                                <table class="table table-responsive table-bordered table-striped table-light mt-2">
                                    <!-- Table Headers -->
                                    <tr class="product-info text-center">
                                        <th>#</th>
                                        <th>Raw Item Name</th>
                                        <th>Quantity <sub>in grams</sub></th>
                                        <th>Quantity <sub>in kilograms</sub></th>
                                        <th>Cost</th>
                                        <th>Action</th>
                                    </tr>
                                    <!-- END Table Headers -->

                                    <!-- Table Items -->
                                    <tr class="product-info">
                                        <td class="pt-3 product-number">1</td>
                                        <td class="pt-3 product-name">Spicy Chicken Sisig</td>
                                        <td class="pt-3 product-quantity">4,720,000</td>
                                        <td class="pt-3 product-quantity">4,720</td>
                                        <td class="pt-3 product-cost">123.00</td>
                                        <td class="product-action">
                                            <button class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- END Table Items -->

                                </table>
                                <!-- END Raw Items Section List -->

                            </div>
                            <!-- END Raw Items Section -->
                        </div>
                    </div>
                </div>
                <!-- END Tab Raw Items Contents -->

                <div class="tab-pane fade" id="nav-recipe" role="tabpanel" aria-labelledby="nav-recipe-tab">
                    Product Recipe
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