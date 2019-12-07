<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>LOTTERY</title>
	<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link href="<?php echo base_url('./assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('./assets/css/mdb.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('./assets/css/style.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('./assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('./assets/css/mdb.lite.min.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('./assets/css/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet"
		type="text/css" />

	<script src="<?php echo base_url('./assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/bootstrap.min.js') ?>"></script>
	<!-- <script src="<?php echo base_url('./assets/js/angular.min.js') ?>"></script> -->
	<script src="<?php echo base_url('./assets/js/mdb.min.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('./assets/js/bootstrap-datetimepicker.min.js') ?>"></script>
	<script type="text/javascript"></script>


	<style>
		body {
			background-image: url('<?php echo base_url('assets/img/88.jpg') ?>');
		}
	</style>
</head>

<body>

	<!--Navbar -->

	<nav class="mb-1 navbar navbar-expand-lg  navbar-dark danger-color-dark">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url('index.php/user/main') ?>">LOTTERRY</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
				<ul class="navbar-nav mr-auto">
					<?php
                    if ($this->session->userdata('userType') == 1) {
                        $l_id = $this->session->userdata('l_id');
                        $query = $this->db->query("SELECT * FROM user WHERE l_id = '$l_id'");
                        $row = $query->row();
                        ?>
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url('index.php/user/showmain') ?>"><i
								class="fas fa-home"></i>หน้าหลัก
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('index.php/user/listbank') ?>"><i
								class="fas fa-list"></i>แจ้ง ฝาก-ถอน</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('index.php/setting/setting_main') ?>"><i
								class="fas fa-gears"></i> ตั้งค่าระบบ</a>
					</li>
					<?php
            } else {
          ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('index.php/user/register') ?>"><i
								class="fas fa-address-card"> </i> กรุณาสมัครสมาชิกเพื่อใช้งานระบบ</a>
					</li>
					<?php } ?>
				</ul>
				<ul class="navbar-nav ml-auto nav-flex-icons float-right">
					<?php
            if ($this->session->userdata('userType') == 1) {
                      
          ?>
					<li class="nav-item">
						<a class="nav-link waves-effect waves-light">
							<span class="badge badge-pill badge-light">0.00<i class="fab fa-btc"
									aria-hidden="true"></i></span>
						</a>
					</li>
					<?php } ?>
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
							<i class="fas fa-user"> <?php echo $this->session->userdata('username'); ?></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-default"
							aria-labelledby="navbarDropdownMenuLink-333">
							<a class="dropdown-item" href="#"><i class="fas fa-user-cog"></i> ตั้งค่าบัญชีผู้ใช้</a>
							<a class="dropdown-item" href="<?php echo base_url('index.php/user/login') ?>"><i
									class="fas fa-sign-in-alt"></i> ออกจากระบบ</a>

						</div>
					</li>
					<?php
            }
          ?>
					<?php
            if ($this->session->userdata('userType') == null) {
          ?>
					<li class="nav-item">
						<a href="" class="nav-link waves-effect waves-light" data-toggle="modal"
							data-target="#modalRegisterForm">
							<i class="fas fa-lock"> เข้าสู่ระบบ</i>
						</a>
					</li>
					<?php
            }
          ?>
				</ul>
			</div>
		</div>
	</nav>
        <div class="start-container"></div>
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
				<form action="<?php echo base_url('index.php/user/checklogin') ?>" method="POST">
					<div class="modal-body mx-3">
						<div class="md-form mb-5">
							<i class="fas fa-user prefix grey-text"></i>
							<input type="text" name="username" id="orangeForm-name" class="form-control validate">
							<label data-error="wrong" data-success="right" for="orangeForm-name">ชื่อผู้ใช้</label>
						</div>


						<div class="md-form mb-4">
							<i class="fas fa-lock prefix grey-text"></i>
							<input type="password" name="password" id="orangeForm-pass" class="form-control validate">
							<label data-error="wrong" data-success="right" for="orangeForm-pass">รหัสผ่าน</label>
						</div>

					</div>

					<div class="modal-footer d-flex justify-content-center">
						<button class="btn btn-deep-orange">เข้าสู่ระบบ</button>
					</div>
				</form>
			</div>

		</div>
	</div>
