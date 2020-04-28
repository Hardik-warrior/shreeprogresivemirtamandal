<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
          <?php include('admin_csslink.php');?>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?=base_url('assets/');?>images/icon/logo.png" >
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?=base_url('admin/adminLogin');?>" method="post">
                                <div class="form-group">
                                    <label>Admin Name</label>
                                    <input class="au-input au-input--full" type="name" name="Name" placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="Password" placeholder="Enter Password">
                                </div>
                                  <span style="font-size: 15px;" class="text-danger"> 
                                    <?php echo $this->session->flashdata('Admin_Ermsg'); ?>
                                  </span>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Log in</button>
                                <!-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div> -->
                                <!--
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div> -->
                            </form>
                            <!-- <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

      <?php include('admin_jslink.php');?>

</body>

</html>
<!-- end document-->
