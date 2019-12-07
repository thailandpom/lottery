<div class="container">

	<div class="jumbotron text-center hoverable p-4">
		<h2 class="font-weight-normal text-left">
			<p class="text-success text-left"> <i class="fas fa-donate"></i> แจ้งเติมเครดิต</p>
		</h2>
		<hr>
		<center>
			<div class="col-xl-6 pb-6">
				<div class="card text-center">


					<form name="form1" class="text-center border border-light p-5" method="post"
						action="<?php echo base_url('index.php/user/insert') ?>">


						<!-- Phone number -->

						<h6 class="font-weight-normal text-left"><span
								class="badge badge-pill badge-success font-weight-normal">STEP 1</span>
							บัญชีธนาคาร LOTTORY</h6>
						<h6 class="font-weight-normal text-left"><i class="fas fa-university text-left"></i>
							บัญชีของเว็บที่ท่านโอนเงินเข้า</h6>
						<div class="row py-2 px-3 justify-content-center">
							<div class="col-3 col-sm-3 col-md-4 col-lg-3 pt-2">
								<img src="<?php echo base_url('assets/img/images.jpg') ?>" alt="" width="100%"
									id="bank2" class="detail-bank rounded icon-ktb">
							</div>
							<div
								class="col-9 col-sm-9 col-md-8 col-lg-5 p-2 d-flex flex-column justify-content-center align-items-start">
								<h6 class="numacc" id="acc2" style="color: rgb(27, 165, 225);">123457890</h6>
								<span class="badge badge-pill badge-secondary font-weight-normal"
									id="nameacclang">ชื่อบัญชี</span>

								<span id="name2">น.ส. เอเอ ไวไวไว</span>
								<input type="hidden" value="xxxxxxxxxx" id="accdeposit">
							</div>

						</div>




						<h6 class="font-weight-normal text-left"><i class="fas fa-home"></i> เลือกบัญชีธนาคารของลูกค้า
						</h6>
						<select class="browser-default  custom-select" name="b_id">
							<option value="" disabled selected>กรุณาเลือกธนาคาร</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
						<br>
						<hr>
						<h6 class="font-weight-normal text-left"><i class="fas fa-money-check-alt"></i>
							เลือกช่องทางการโอนเงิน </h6>
						<select class="browser-default  custom-select" name="b_id">
							<option value="" disabled selected>กรุณาเลือกช่องทางการทำธุระกรรม</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
						<br>
						<hr>
						<h6 class="font-weight-normal text-left"><i class="fas fa-money-bill"></i> จำนวนเงินที่โอน</h6>
						<input type="text" id="defaultRegisterFormEmail" name="username" class="form-control mb-4"
							placeholder="Username">
						<h6 class="font-weight-normal text-left"><i class="fas fa-calendar-alt"></i> วันที่โอน </h6>
						<input type="date" id="defaultRegisterFormEmail" name="username" class="form-control mb-4"
							placeholder="Username">
						<h6 class="font-weight-normal text-left"><i class="far fa-clock"></i> เวลาที่โอน </h6>
						<input type="datetime" id="defaultRegisterFormEmail" name="username" class="form-control mb-4"
							placeholder="Username">
						<small class="text-danger mt-2" style="display: inline-block;line-height: 1.2;">
							* กรุณากรอก วัน-เวลา ในการโอนให้ตรงกับ Slip ระบบจะเติมเครดิตให้คุณอัตโนมัติ </small>
						<h6 class="font-weight-normal text-left"><i class="far fa-star"></i>หมายเหตุ </h6>
						<textarea type="text" id="defaultRegisterFormEmail" name="username" class="form-control mb-4"
							placeholder="Username">
                        </textarea>
						<div class="alert alert-warning" role="alert">
							<small>กรุณาตรวจสอบข้อมูลของท่านให้ถูกต้อง และกดปุ่ม <span
									class="text-success">ยืนยันการแจ้งโอนเงิน</span></small>
						</div>







						<button class="btn btn-success my-4 btn-block" type="submit">ยืนยันการสมัคร</button>


					</form>
				</div>
		</center>
	</div>
</div>
<!-- News jumbotron -->
