<div class="container">
	<div class="row bg-white">
    <div class="col-12 mt-5 mb-4">
      <h2>ตั้งค่าระบบ</h2>
      
    </div>
  </div>
  <div class="row bg-white mt-4 py-4">
    <div class="col-12">
      การออกสลาก ตามงวด
    </div>
    <div class="col-12">
      <div class="float-right" style="width: 100px;">
        <?php 
          if($orders->status_receive == 1){
          ?>
        <a href="<?php echo base_url('index.php/setting/setting_create') ?>">
          <button type="button" class="btn btn-save w-100 mx-0">เพิ่ม</button>
        </a>
        <?php }else{ ?>
          <button type="button" class="btn btn-save w-100 mx-0" disabled>เพิ่ม</button>
        <?php } ?>
      </div>
    </div>
    <div class="col-12 mt-4">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">#</th>
              <th class="text-center" scope="col">งวดที่</th>
              <th scope="col">ประจำวันที่</th>
              <th scope="col">สถานะ</th>
              <th class="text-center" scope="col">จัดการข้อมูล</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $i = 1;
              foreach ($settings as $val) {
            ?>
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

              $date_all = date_create($val->dateP);
              $pDate = explode("-", $date_all->format('Y-m-d'));
              $dateThai = $pDate[2] . " " . $th_month_arr[$pDate[1]] . " " . (($pDate[0]) + 543);
            ?>
            <tr>
              <th class="text-center" scope="row"><?php echo $i++; ?></th>
              <th class="text-center" scope="row"><?php echo $val->amount; ?></th>
              <td><?php echo $dateThai; ?></td>
              <td>
                <?php  
                  if($val->status == 1){
                    echo '<span class="text-success">เปิดรับแทง</span>';
                  }else {
                    echo '<span class="text-danger">ปิดรับแทง</span>';
                  }
                ?>
              </td>
              <td class="text-center">
                <a class="btn btn-custom btn-primary" href="<?php echo base_url('index.php/setting/setting_result/' . $val->id) ?>">ผลการออกรางวัล</a>
                <a class="btn btn-setting btn-warning" href="<?php echo base_url('index.php/setting/setting_edit/' . $val->id) ?>">ตั้งค่า</a>
              </td>
            </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

