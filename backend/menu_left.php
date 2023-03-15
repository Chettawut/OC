<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="<?php echo PATH; ?>/backend/" class="brand-link bg-purple">
        <img src="<?php echo PATH; ?>/backend/img/logo KAE-01.jpg" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">OC Money Group</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo PATH; ?>/backend/img/default.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname'];?> </a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">ระบบข้อมูลสินค้า</li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/inventory" class="nav-link">
                        <i class="nav-icon fas fa-paste"></i>
                        <p>
                            ข้อมูลสินค้า
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/group" class="nav-link">
                        <i class="nav-icon 	fa fa-th-large"></i>
                        <p>
                            หมวดสินค้า
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/unit" class="nav-link">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            หน่วยพัสดุ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/type" class="nav-link">
                        <i class="nav-icon 	far fa-object-group"></i>
                        <p>
                            ประเภทสินค้า
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/brand" class="nav-link">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            แบรนด์สินค้า
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/color" class="nav-link">
                        <i class="nav-icon 	fas fa-palette"></i>
                        <p>
                            สีสินค้า
                        </p>
                    </a>
                </li>
                <li class="nav-header">ระบบจัดการพนักงาน</li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/user" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            ข้อมูลพนักงาน
                        </p>
                    </a>
                </li>
                <li class="nav-header">อยู่ระหว่างการพัฒนา</li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/customer" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            ข้อมูลลูกค้า
                        </p>
                    </a>
                </li>                
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/supplier" class="nav-link">
                        <i class="nav-icon 	fas fa-user-tie"></i>
                        <p>
                            ข้อมูลเจ้าหนี้/ผู้ขาย
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/user" class="nav-link">
                        <i class="nav-icon 	fas fa-comments-dollar"></i>
                        <p>
                            ข้อมูลลูกหนี้
                        </p>
                    </a>
                </li>

            </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>