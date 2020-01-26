<div class="container">
  <div class="row bg-white">
    <div class="col-12 mt-5 mb-4">
      <h2>รายการโพย</h2>

    </div>
  </div>
  <div class="row bg-white mt-4 py-4">
    <div class="col-12">
      <!-- การออกสลาก ตามงวด -->
    </div>

    <div class="col-12 mt-4">
      <div class="table-responsive">
        <table class="table table-striped new-table">
          <thead>
            <tr>
              <th class="text-center" scope="col">เลขที่รายการ</th>
              <th class="text-center" scope="col">งวดที่</th>
              <th scope="col">ประจำวันที่</th>
              <th scope="col">เงินเดิมพัน (บาท)</th>
              <th scope="col">ผลชนะ (บาท)</th>
              <th class="text-center" scope="col">สถานะ</th>
              <th class="text-center" scope="col">ดูโพย</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($orders as $val) {
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
              <th class="text-center" scope="row"><?php echo $val->o_id; ?></th>
              <th class="text-center" scope="row"><?php echo $val->amount; ?></th>
              <td><?php echo $dateThai; ?></td>
              <td><?php echo $val->sum; ?></td>
              <td>
                <?php  
                  if($val->received != 0){
                    echo '<span class="text-success">+'.number_format($val->received).'</span>';
                  }else {
                    echo '<span class="">0</span>';
                  }
                ?>
              </td>
              <td class="text-center">
                <?php  
                  if($val->status_receive == 0){
                    echo '<span class="">ยังไม่ประกาศผล</span>';
                  }else if($val->status_receive == 1 && $val->received != 0){
                    echo '<span class="text-success">ถูกรางวัล</span>';
                  }else{
                    echo '<span class="text-danger">ไม่ถูกรางวัล</span>';
                  }
                ?>
              </td>
              <td class="text-center">
                <a onclick="remove()" data-toggle="modal" data-target="#myModal<?php echo $val->id; ?>">ดู</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<?php 
  if(isset($orders) && !empty($orders)){ 
    foreach ($orders as $order) {
?>
<div class="modal fade" id="myModal<?php echo $order->id; ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">เลขที่รายการ : <?php echo $order->o_id; ?></h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <table class="table table-light modal-table">
         <tbody>
              <?php
            
       
              echo '<tr class="col-sum">';
              echo '<th>แทงเลข</th>';
              echo '<th>ประเภท</th>';
              echo '<th>ราคาแทง</th>';
              echo '<th class="text-right">ผลชนะ (บาท)</th>';
              echo '</tr>';

                
              foreach ($details as $detail) {
                if($order->id == $detail->order_id){
                  
                    echo '<tr class="text-type1 active">';
                    echo '<td>'.$detail->number.'</td>';
                    if($detail->type == 1){
                      echo '<td>สามตัวบน</td>';
                    }else if($detail->type == 2){
                      echo '<td>สามตัวโต้ด</td>';
                    }else if($detail->type == 3){
                      echo '<td>สองตัวบน</td>';
                    }else if($detail->type == 4){
                      echo '<td>สองตัวล่าง</td>';
                    }else if($detail->type == 5){
                      echo '<td>วิ่งบน</td>';
                    }else if($detail->type == 6){
                      echo '<td>วิ่งล่าง</td>';
                    }
                    echo '<td>'.$detail->price.'</td>';
                    if($detail->amount_received == 0){
                      echo '<td class="text-right">0</td>';
                    }else{
                      echo '<td class="text-success text-right">+'.number_format($detail->amount_received).'</td>';
                    }
                    
                    echo '</tr>';
                }
              }

              echo '<tr class="col-sum">';
              echo '<td colspan="2">รวม</td>';
              echo '<td>'.$order->sum.'</td>';
              echo '<td class="text-right">'.number_format($order->received).'</td>';
              echo '</tr>';


            ?>
         </tbody>
       </table>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-save w-auto px-4" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>
<?php 
  }
} 
?>
