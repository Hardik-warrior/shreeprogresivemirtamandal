<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<aside class="menu-sidebar d-none d-lg-block">

            <div class="logo">
               
                    <img src="<?=base_url('assets/');?>images/icon/logo.png" alt="Cool Admin" />
              
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="<?=base_url('admin/adminHome');?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="<?=base_url('admin/adminRegister');?>">
                                <i class="fas fa-copy"></i>Registration</a>
                           
                        </li>
                       
                    </ul>
                </nav>
            </div>
        </aside>
</body>
</html>