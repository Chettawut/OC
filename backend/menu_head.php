<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="<?php echo PATH; ?>/backend/" role="button">
                <i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto center">
        <li class="nav-item d-sm-inline-block" >
            <a href="<?php echo PATH; ?>/backend/" class="nav-link">
                <i class="nav-icon fas fa-globe"> ภาพรวม </i></a>
        </li>
        <li class="nav-item d-sm-inline-block">
            <a href="<?php echo PATH; ?>/backend/" class="nav-link" style="cursor: no-drop;">
                <i class="nav-icon fas fa-cash-register"> ขายสินค้า </i></a>
        </li>
        <li class="nav-item d-sm-inline-block">
            <a href="<?php echo PATH; ?>/backend/" class="nav-link" style="cursor: no-drop;">
                <i class="nav-icon fas fa-credit-card">&nbsp;ผ่อนสินค้า </i></a>
        </li>
        <li class="nav-item d-sm-inline-block">
            <a href="<?php echo PATH; ?>/backend/" class="nav-link" style="cursor: no-drop;">
                <i class="nav-icon fas fas fa-user-plus"> เพิ่มสมาชิก </i></a>
        </li>
        <li class="nav-item d-sm-inline-block">
            <a href="<?php echo PATH; ?>/backend/" class="nav-link" style="cursor: no-drop;">
                <i class="nav-icon fas fa-chart-pie"> รายงาน </i></a>
        </li>
        <li class="nav-item d-sm-inline-block front-danger" style="margin-left:70px;">
            <a type="button" href="<?php echo PATH; ?>/backend/logout.php" class="nav-link">
                <p style="color:red"><i class="nav-icon fas  fa-sign-in-alt"> ออกจากระบบ </i></p>
            </a>
        </li>
    </ul>
</nav>