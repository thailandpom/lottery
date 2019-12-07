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
    <div class="col-12">
      สถานะ ระบบแทงหวย
      <label class="switch align-middle ml-4">
        <input type="checkbox" id="btn_status" disabled onclick="" <?php if($settings->status == 1){echo 'checked';}else{echo '';} ?> />
        <div class="slider round"></div>
      </label>
    </div>
    <div class="col-12 mt-4">
      เปิด - ปิด ระบบแทงหวย อัตโนมัติ
    </div>
    <div class="col-12 mt-4">
      <form method="post" action="<?php echo base_url('index.php/setting/update') ?>">
      <div class="row mx-0">
        <div class="col-4 mt-3 pl-0">
          <div class="form-group">
            <div class='input-group date' id='datetimepicker1'>
              <input type='text' name="datetime" value="<?php echo $settings->public_time; ?>" id="click-btn" class="form-control"/>
              <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
          </div>
        </div>
        <div class="col-4 mt-2 pl-0">
          <button type="submit" class="btn btn-save" id="btn-save-form">บันทึก</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>




<script type="text/javascript">
  $('#datetimepicker1').datetimepicker({
    defaultDate: new Date(),
    format: 'YYYY-MM-DD H:mm:ss',
    sideBySide: true
  });
  $('#click-btn').on('click', function(){
    $('.input-group-addon').click();
  });
</script>