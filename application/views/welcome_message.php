<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>LOTTERY</title>
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link href="<?php echo base_url('./assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('./assets/css/mdb.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('./assets/css/style.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('./assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('./assets/css/mdb.lite.min.css') ?>" rel="stylesheet" type="text/css"/>

        <script src="<?php echo base_url('./assets/js/jquery.min.js') ?>"></script>

        <script src="<?php echo base_url('./assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('./assets/js/angular.min.js') ?>"></script>
        <script src="<?php echo base_url('./assets/js/mdb.min.js') ?>"></script>
        <script src="<?php echo base_url('./assets/js/popper.min.js') ?>"></script>
        <script type="text/javascript"></script>


        <style>

            body{   
                background-image: url('<?php echo base_url('assets/img/88.jpg') ?>');                
            }

        </style>  

    </head>
    <script>
        var total_jackpot = '1000000.00'
    </script>
    <body>
        <script language="javascript">
$(document).ready(function () {
$('#dtHorizontalExample').DataTable({
"scrollX": true
});
$('.dataTables_length').addClass('bs-select');
});
            function fncSubmit()

            {

                if (document.form1.password.value != document.form1.conpass.value)

                {

                    alert('Confirm Password Not Match');

                    document.form1.conpass.focus();

                    return false;

                }



                document.form1.submit();

            }

        </script>
        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg  navbar-dark danger-color">
            <a class="navbar-brand" href="#">LOTTERRY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                <ul class="navbar-nav mr-auto">
                    <?php
                    if ($this->session->userdata('userType') != NULL) {
                        $l_id = $this->session->userdata('l_id');
                        $query = $this->db->query("SELECT * FROM user WHERE l_id = '$l_id'");
                        $row = $query->row();
                        ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-home"></i>หน้าหลัก
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-magic"></i> แทงหวย</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-list"></i>แจ้ง ฝาก-ถอน</a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">กรุณาสมัครสมาชิกเพื่อใช้งานระบบ</a>
                        </li>
                    <?php } ?>

                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">

                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fas fa-phone"> ติดต่อ |</i>
                        </a>
                    </li>
                    <?php
                    if ($this->session->userdata('userType') != null) {
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"> <font color='green'><?php echo $this->session->userdata('username'); ?></font></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-default"
                                 aria-labelledby="navbarDropdownMenuLink-333">
                                <a class="dropdown-item" href="#">ตั้งค่าการเปลี่ยนแปลง</a>
                                <a class="dropdown-item" href="#">ออกจากระบบ</a>

                            </div>
                        </li>
                        <?php
                    }
                    ?>
                    <?php
                    if ($this->session->userdata('userType') == null) {
                        ?>
                        <li class="nav-item">
                            <a href=""       class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#modalRegisterForm">
                                <i class="fas fa-lock"> เข้าสู่ระบบ</i>
                            </a>
                        </li>
                        <?php
                    }
                    ?>

                </ul>
            </div>
        </nav>
        <!--/.Navbar -->

        <div class="col-xl-12 pb-12">
            <div class="jumbotron">
                <center>
                    <div class="col-xl-6 pb-6">
                        <div class="card text-center">


                            <form name="form1" class="text-center border border-light p-5" method="post" action="<?php echo base_url('index.php/user/insert') ?>">

                                <p class="h4 mb-4"> <i class="fas fa-user"></i> สมัครสมาชิก</p>
                                <!-- Phone number -->
                                <p class="text text-left"><i class="fas fa-phone"></i> เบอร์โทร</p>
                                <input type="text" id="defaultRegisterPhonePassword" name="l_phone" class="form-control" maxlength="10" placeholder="เบอร์โทร" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                                <!--Blue select--> <br>
                                <p class="text text-left"><i class="fas fa-home"></i> ธนาคาร</p>
                                <select class="browser-default  custom-select" name="b_id">
                                    <option value=""  disabled selected>เลือกธนาคาร</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <br> <br>
                                <p class="text text-left"><i class="fas fa-user"></i> ชื่อบัญชี</p>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <!-- First name -->
                                        <input type="text" id="defaultRegisterFormFirstName" name="l_name" class="form-control" placeholder="ชื่อ-นามสกุล">
                                    </div>

                                </div>
                                <p class="text text-left"><i class="fas fa-list"></i> เลขที่บัญชี</p>
                                <input type="text" id="defaultRegisterPhonePassword" name="l_numbank" class="form-control" placeholder="เลขที่บัญชี" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                                <hr class="my-4">
                                <!-- E-mail -->
                                <p class="text text-left"><i class="fas fa-user"></i>  Username</p>
                                <input type="text" id="defaultRegisterFormEmail" name="username" class="form-control mb-4" placeholder="Username">

                                <!-- Password -->
                                <p class="text text-left"><i class="fas fa-paste"></i> รหัสผ่าน</p>
                                <input type="password" id="defaultRegisterFormPassword" name="password" class="form-control" placeholder="รหัสผ่าน" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                <!-- Password --><br>
                                <p class="text text-left"><i class="fas fa-paste"></i>  ยืนยันรหัสผ่าน</p>

                                <input name="status" type="hidden" >
                                <input name="position" type="hidden" >
                                <input type="password" id="defaultRegisterFormPassword" name="conpass" class="form-control" placeholder="ยืนยันรหัสผ่าน" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                <br>
                                <div class="alert alert-warning" role="alert">
                                    <p class="text text-left">กรุณาตรวจสอบข้อมูลของท่านให้ถูกต้อง และกดปุ่ม <font color="green"> ยืนยันการสมัคร</font></p>


                                </div>

                                <button class="btn btn-success my-4 btn-block" type="submit">ยืนยันการสมัคร</button>


                            </form>
                        </div>
                </center>
                <!-- Default form register -->

            </div>

        </div></div>
</body>
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 font-weight-bold"><strong>Sign in</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fas fa-user prefix grey-text"></i>
                    <input type="text" id="orangeForm-name" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-name">ชื่อผู้ใช้</label>
                </div>


                <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">รหัสผ่าน</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-deep-orange">เข้าสู่ระบบ</button>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
        Modal Register Form</a>
</div>
 <h5 class="card-header h5">  <div class="col-8"><p class="text-white bg-dark"><i class="fas fa-crown"></i> หวยรัฐบาล 16 December 2019</p></div></h5>
<footer>
    <!-- Footer -->
    <footer class="page-footer font-small black">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-4">© 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> LOTTERY.COM</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</footer>
</html>