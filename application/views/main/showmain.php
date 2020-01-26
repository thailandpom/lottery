 <div class="container">
 	<div class="alert alert-danger alert-dismissible fade show" role="alert">
 		<h4> <i class="fas fa-chart-line"></i> เงินคงเหลือ <br>

 			<strong class="text-danger">0.00 <i class="fab fa-btc"></i></strong>
 			<br><?php echo $this->session->userdata('username'); ?></h4>
 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 			<span aria-hidden="true">&times;</span>
 		</button>
 	</div>
 	<!-- News jumbotron -->
 	<div class="jumbotron text-center hoverable p-4">
 		<div class="row">
 			<div class="col-sm">
			 <?php
				$th_month_arr = array(
						"0" => "",
						"1" => "ม.ค.",
						"2" => "ก.พ.",
						"3" => "มี.ค.",
						"4" => "เม.ย.",
						"5" => "พ.ค.",
						"6" => "มิ.ย.",
						"7" => "ก.ค.",
						"8" => "ส.ค.",
						"9" => "ก.ย.",
						"10" => "ต.ค.",
						"11" => "พ.ค.",
						"12" => "ธ.ค."
				);

				$date_all = date_create($settings->public_time);
				$sub_all = explode(" ", $date_all->format('Y-m-d H:i:s'));
				$date = $sub_all[0];
				$time = $sub_all[1];
				$pDate = explode("-", $date);
				$dateThai = $pDate[2] . " " . $th_month_arr[$pDate[1]] . " " . (($pDate[0]) + 543);
				?>
				<?php if($settings->status == 0)
					{
				?>
 				<a class="btn btn-light btn-close">
					 <h4><i class="fas fa-magic"></i> แทงหวย</h4>
					 <div class="border-bottom mb-2"></div>
					 ปิดรับ : <?php echo $dateThai . " " .$time; ?>
				</a>
				<?php 
					}else{ 
				?>
				<a class="btn btn-light btn-open" href="<?php echo base_url('index.php/lottery/index') ?>">
					 <h4><i class="fas fa-magic"></i> แทงหวย</h4>
					 <div class="border-bottom mb-2"></div>
					 ปิดรับ : <?php echo $dateThai . " " .$time; ?>
				</a>
				<?php 
					}
				?>
 			</div>
 			<div class="col-sm">
 				<a class="btn btn-primary" href="#">
 					<h4><i class="fas fa-list"></i> โพยหวย</h4>
 				</a>
 			</div>
 			<div class="col-sm">
 				<button type="button" class="btn btn-success">
 					<h4><i class="fas fa-chart-bar"></i> รายการแจ้งฝาก/ถอน </h4>
 				</button>
 			</div>
 		</div>
 		<br>
 		<div class="card text-left">
 			<div class="card-header text-danger">
 				ประกาศ
 			</div>
 			<div class="card-body">
 				<blockquote class="blockquote mb-0">
 					<p>จ่ายครึ่งพร้อมตัวกลับ</p>
 					<footer class="blockquote-footer">ปิด<cite title="Source Title">15.00 น.</cite></footer>
 				</blockquote>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- News jumbotron -->
