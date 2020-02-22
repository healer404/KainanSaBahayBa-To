<nav id="sidebar">
    <div class="sidebar-header">
        <h3><b>BAHAY BA'TO</b></h3>
    </div>

    <ul class="list-unstyled components">
        <p>
            <i class="fas fa-user"></i> DUKA, Roniel L.<br>
            <sub class="user-position text-center"><i>ADMINISTRATOR</i></sub>
        </p>

        <!-- DASHBOARD SECTION -->
        <?php if($sidebar == "Dashboard"){ ?>
        <li class="active">
        <?php }else{ ?>
        <li>
        <?php } ?>
            <a href="index.php" class="sidebar-links"><i class="fas fa-desktop"></i> Dashboard</a>
        </li>
        <!-- END DASHBOARD SECTION -->

        <li>
            <a href="#" class="sidebar-links"><i class="fas fa-dollar-sign"></i> &nbsp; Sales</a>
        </li>
        <li>
            <a href="#" class="sidebar-links"><i class="fas fa-receipt"></i> Reports</a>
        </li>

        <!-- PRODUCT SECTION -->
        <?php if($sidebar == "Product Section"){ ?>
        <li class="active">
        <?php }else{ ?>
        <li>
        <?php } ?>
            <a href="products.php" class=" sidebar-links"><i class="fas fa-box-open"></i> Products</a>
        </li>
        <!-- END PRODUCT SECTION -->

        <li>
            <a href="#" class="sidebar-links"><i class="fas fa-users"></i> Employee</a>
        </li>
        <li>
            <a href="#" class="sidebar-links"><i class="fas fa-user-cog"></i> Account Settings</a>
        </li>
        <li>
            <a href="#" class="sidebar-links"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
    </ul>
</nav>
