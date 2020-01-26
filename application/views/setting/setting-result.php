<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<link rel="stylesheet"
  href="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css">
<script src="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/js/bootstrap-datetimepicker.min.js"></script>
<div class="container lottery">
	<div class="row bg-white">
    <div class="col-12 mt-5 mb-4">
      <h2>ตั้งค่าระบบ</h2>
      
    </div>
  </div>
  <div class="row bg-white mt-4 py-4">
    <div class="col-12"><h3>ผลการออกรางวัล</h3></div>
    <div class="col-12 mt-4">
      <form id="form-save" method="post" action="<?php echo base_url('index.php/setting/result_update') ?>">
        <input type="hidden" value="<?php echo $settings->id; ?>" name="id" />
        <div class="row mx-0">
          <div class="col-4 px-0">
            <div class="form-group">
              <label>รางวัลที่ 1</label>
              <input type="text" name="award1" value="<?php echo $settings->award1; ?>" class="form-control" minlength="6" pattern="[0-9]*" maxlength="6"  required <?php if($orders->status_receive){echo 'readonly';}else{echo '';} ?> />
            </div>
          </div>
        </div>
        <div class="row mx-0">
          <div class="col-4 px-0">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label>สามตัวหน้า 1</label>
                  <input type="text" name="beforeThree1" value="<?php echo $settings->beforeThree1; ?>" class="form-control" pattern="[0-9]*" minlength="3" maxlength="3"  required <?php if($orders->status_receive){echo 'readonly';}else{echo '';} ?> />
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>สามตัวหน้า 2</label>
                  <input type="text" name="beforeThree2" value="<?php echo $settings->beforeThree2; ?>" class="form-control" pattern="[0-9]*" minlength="3" maxlength="3"  required <?php if($orders->status_receive){echo 'readonly';}else{echo '';} ?> />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mx-0">
          <div class="col-4 px-0">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label>สามตัวหลัง 1</label>
                  <input type="text" name="afterThree1" value="<?php echo $settings->afterThree1; ?>" class="form-control" pattern="[0-9]*" minlength="3" maxlength="3"  required <?php if($orders->status_receive){echo 'readonly';}else{echo '';} ?> />
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>สามตัวหลัง 2</label>
                  <input type="text" name="afterThree2" value="<?php echo $settings->afterThree2; ?>" class="form-control" pattern="[0-9]*" minlength="3" maxlength="3"  required <?php if($orders->status_receive){echo 'readonly';}else{echo '';} ?> />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mx-0">
          <div class="col-4 px-0">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label>สองตัวล่าง</label>
                  <input type="text" name="two" value="<?php echo $settings->two; ?>" class="form-control" pattern="[0-9]*" minlength="2" maxlength="2"  required <?php if($orders->status_receive){echo 'readonly';}else{echo '';} ?> />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mx-0">
          <div class="col-12 px-0">
            <span class="text-danger">* หมายเหตุ : สามารถยืนยันข้อมูลได้เพียงครั้งเดียว กรุณาตรวจสอบความถูกต้องก่อนกดปุ่ม "บันทึก"</span>
          </div>
        </div>
        <div class="row mx-0 mt-4">
          <div class="col-4 px-0">
            <?php 
            if($orders->status_receive != 1){
            ?>
            <button type="submit" class="btn btn-save mx-0" onclick="return confirm('คุณยืนยันที่จะบันทึกข้อมูลนี้หรือไม่?')">บันทึก</button>
            <?php
            }else{
            ?>
            <button type="button" class="btn btn-save mx-0" id="btn-save-form" disabled>บันทึก</button>
            <?php
            }
            ?>
            <a href="<?php echo base_url('index.php/setting/setting_main') ?>">
              <button type="button" class="btn btn-reset mx-0 ml-3" id="btn-save-form">ยกเลิก</button>
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>




<script type="text/javascript">
// $("#btn-save-form").on('click', function(){
//   var r = confirm("คุณยืนยันที่จะบันทึกข้อมูลนี้หรือไม่!!!");
//   if (r == true) {
//     $("#form-save").submit();
//   }
// });
$('#datepicker1').datetimepicker({
  defaultDate: new Date(),
  format: 'YYYY-MM-DD',
  sideBySide: true
});
$('#click-btn1').on('click', function(){
  $('#input-group-addon1').click();
});

$('#datetimepicker1').datetimepicker({
  defaultDate: new Date(),
  format: 'YYYY-MM-DD H:mm:ss',
  sideBySide: true
});
$('#click-btn2').on('click', function(){
  $('#input-group-addon2').click();
});
  
</script>