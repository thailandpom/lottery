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
    <div class="col-12"><h3>ตั้งค่า</h3></div>
    <div class="col-12 mt-4">
      <form method="post" action="<?php echo base_url('index.php/setting/setting_insert') ?>">
        <div class="row mx-0">
          <div class="col-4 px-0">
            <div class="form-group">
              <label>งวดที่</label>
              <input type="text" name="amount" value="" class="form-control"  required />
            </div>
          </div>
        </div>
        <div class="row mx-0">
          <div class="col-4 px-0">
            <div class="form-group">
              <label>ประจำวันที่</label>
              <div class='input-group date' id='datepicker1'>
                <input type='text' name="dateP" value="" id="click-btn1" class="form-control" required/>
                <span class="input-group-addon" id="input-group-addon1">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="row mx-0">
          <div class="col-4 px-0">
            <div class="form-group">
              <label>เปิด - ปิด ระบบแทงหวย อัตโนมัติ</label>
              <div class='input-group date' id='datetimepicker1'>
                <input type='text' name="datetime" value="" id="click-btn2" class="form-control" required/>
                <span class="input-group-addon" id="input-group-addon2">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="row mx-0 mt-4">
          <div class="col-4 px-0">
            <button type="submit" class="btn btn-save mx-0" id="btn-save-form">บันทึก</button>
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