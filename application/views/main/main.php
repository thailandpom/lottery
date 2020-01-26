   <?php
                    if ($this->session->userdata('userType') == null) {
                         $l_id = $this->session->userdata('l_id');
                        $query = $this->db->query("SELECT * FROM user WHERE l_id = '$l_id'");
                        $row = $query->row();
                        ?>
   <div class="text-center">
   	<a href="<?php echo base_url('index.php/user/register') ?>" class="btn btn-default mb-4 "><i
   			class="fas fa-address-card"> </i> สมัครสมาชิก</a>
   	<a href="" class="btn btn-deep-orange mb-4" data-toggle="modal" data-target="#modalRegisterForm"><i
   			class="fas fa-lock"> </i> เข้าใช้งานระบบ</a>
   </div>
   <?php } ?>
   <div class="container">
   	<div class="jumbotron text-center hoverable p-4">

   		<div class="row">
   			<div class="col-sm-6 mb-3 mb-md-0">

   				<div class="card border-danger">
   					<h5 class="card-header h5"> 
							 <i class="fas fa-crown"></i> 
							 	<?php if($settings[0]->award1 == ""){ ?>
								<?php
								$th_month_arr = array(
										"0" => "",
										"1" => "มกราคม",
										"2" => "กุมภาพันธ์",
										"3" => "มีนาคม",
										"4" => "เมษายน",
										"5" => "พฤษภาคม",
										"6" => "มิถุนายน",
										"7" => "กรกฎาคม",
										"8" => "สิงหาคม",
										"9" => "กันยายน",
										"10" => "ตุลาคม",
										"11" => "พฤศจิกายน",
										"12" => "ธันวาคม"
								);

								$date_all = date_create($settings[1]->dateP);
								$pDate = explode("-", $date_all->format('Y-m-d'));
								$dateThai = $pDate[2] . " " . $th_month_arr[$pDate[1]] . " " . (($pDate[0]) + 543);
								?>
								หวยรัฐบาล <font color="red"> <?php echo $dateThai; ?></font>
								<?php } ?>


								<?php if($settings[0]->award1 != ""){ ?>
								<?php
								$th_month_arr = array(
										"0" => "",
										"1" => "มกราคม",
										"2" => "กุมภาพันธ์",
										"3" => "มีนาคม",
										"4" => "เมษายน",
										"5" => "พฤษภาคม",
										"6" => "มิถุนายน",
										"7" => "กรกฎาคม",
										"8" => "สิงหาคม",
										"9" => "กันยายน",
										"10" => "ตุลาคม",
										"11" => "พฤศจิกายน",
										"12" => "ธันวาคม"
								);

								$date_all = date_create($settings[0]->dateP);
								$pDate = explode("-", $date_all->format('Y-m-d'));
								$dateThai = $pDate[2] . " " . $th_month_arr[$pDate[1]] . " " . (($pDate[0]) + 543);
								?>
								หวยรัฐบาล <font color="red"> <?php echo $dateThai; ?></font>
								<?php } ?>
   					</h5>
   					<div class="card-body">
   						<table class="table table-bordered">
   							<thead class="black white-text">
   								<tr class="text-center">
   									<th scope="col"><b>รางวัลที่ 1</b></th>
   									<th scope="col">สามตัวหน้า</th>
   									<th scope="col">สามตัวหลัง</th>
   									<th scope="col">สองตัวล่าง</th>
   								</tr>
   							</thead>
   							<tbody>
   								<tr class="text-center">
										<?php if($settings[0]->award1 == ""){ ?>
   									<th scope="row"><?php echo $settings[1]->award1; ?></th>
   									<td scope="row"><b><?php echo $settings[1]->beforeThree1. " " .$settings[1]->beforeThree2; ?></b></td>
   									<td scope="row"><b><?php echo $settings[1]->afterThree1. " " .$settings[1]->afterThree2; ?></b></td>
										<td scope="row"><b><?php echo $settings[1]->two; ?></b></td>
										<?php } ?>

										<?php if($settings[0]->award1 != ""){ ?>
   									<th scope="row"><?php echo $settings[0]->award1; ?></th>
   									<td scope="row"><b><?php echo $settings[0]->beforeThree1. " " .$settings[0]->beforeThree2; ?></b></td>
   									<td scope="row"><b><?php echo $settings[0]->afterThree1. " " .$settings[0]->afterThree2; ?></b></td>
										<td scope="row"><b><?php echo $settings[0]->two; ?></b></td>
										<?php } ?>
   								</tr>

   							</tbody>
   						</table>
   					</div>
   				</div>
   			</div>

   			<div class="col-sm-6">
   				<div class="card border-success">
   					<h5 class="card-header h5"> 
							 <i class="fas fa-crown"></i> 
							 <?php if($settings[0]->award1 == ""){ ?>
								<?php
								$th_month_arr = array(
										"0" => "",
										"1" => "มกราคม",
										"2" => "กุมภาพันธ์",
										"3" => "มีนาคม",
										"4" => "เมษายน",
										"5" => "พฤษภาคม",
										"6" => "มิถุนายน",
										"7" => "กรกฎาคม",
										"8" => "สิงหาคม",
										"9" => "กันยายน",
										"10" => "ตุลาคม",
										"11" => "พฤศจิกายน",
										"12" => "ธันวาคม"
								);

								$date_all = date_create($settings[0]->dateP);
								$pDate = explode("-", $date_all->format('Y-m-d'));
								$dateThai = $pDate[2] . " " . $th_month_arr[$pDate[1]] . " " . (($pDate[0]) + 543);
								?>
								หวยรัฐบาล <font color="red"> <?php echo $dateThai; ?></font>
								<?php }else{ ?>
								หวยรัฐบาล <font color="red"></font>
								<?php } ?>
   					</h5>


   					<div class="card-body">
   						<table class="table table-bordered">
   							<thead class="black white-text">
   								<tr class="text-center">
   									<th scope="col"><b>รางวัลที่ 1</b></th>
   									<th scope="col">สามตัวหน้า</th>
   									<th scope="col">สามตัวหลัง</th>
   									<th scope="col">สองตัวล่าง</th>
   								</tr>
   							</thead>
   							<tbody>
   								<tr class="text-center">
   									<th scope="row">xxxxxx</th>
   									<td scope="row"><b>xxx xxx</b></td>
   									<td scope="row"><b>xxx xxx</b></td>
   									<td scope="row"><b>xx</b></td>
   								</tr>

   							</tbody>
   						</table>
   					</div>
   				</div>


   			</div>
   		</div>
   		<hr>

   		<br>
   		<div class="col-6">
   			<center>
   				<h3> <b>
   						<p class="text-danger">จ่ายสูงที่สด บาทละ 800</p>
   						หวยรัฐบาลไทย
   					</b></h3>
   			</center>

   			<table class="table border-danger">
   				<thead class="danger-color white-text">
   					<tr>
   						<th scope="col" class="fa-lg"><b>ประเภท</b></th>
   						<th scope="col" class="text-center fa-lg">ราคา</th>

   						<th scope="col" class="text-right fa-lg">อัตราจ่าย</th>
   					</tr>
   				</thead>
   				<tbody>
   					<tr>
   						<th scope="row" class="fa-sm">3 ตัวบน</th>
   						<td class="text-center fa-sm">บาทละ</td>
   						<td class="text-right fa-sm">800 บาท</td>
   					</tr>
   					<tr>
   						<th scope="row" class="fa-sm">3 ตัวโต๊ด</th>
   						<td class="text-center fa-sm">บาทละ</td>
   						<td class="text-right fa-sm">150 บาท</td>
   					</tr>
   					<tr>
   						<th scope="row" class="fa-sm">2 ตัวบน</th>
   						<td class="text-center fa-sm">บาทละ</td>
   						<td class="text-right fa-sm">90 บาท</td>
   					</tr>
   					<tr>
   						<th scope="row" class="fa-sm">2 ตัวล่าง</th>
   						<td class="text-center fa-sm">บาทละ</td>
   						<td class="text-right fa-sm">90 บาท</td>
   					</tr>
   					</tr>
   					<tr>
   						<th scope="row" class="fa-sm">วิ่งบน</th>
   						<td class="text-center fa-sm">บาทละ</td>
   						<td class="text-right fa-sm">3.2 บาท</td>
   					</tr>
   					</tr>
   					<tr>
   						<th scope="row" class="fa-sm">วิ่งล่าง</th>
   						<td class="text-center fa-sm">บาทละ</td>
   						<td class="text-right fa-sm">4.2 บาท</td>
   					</tr>

   				</tbody>
   			</table>
   		</div>
   	</div>
   </div>
   </div>
   </div>
   </div>
