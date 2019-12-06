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
<div class="container">

     <div class="jumbotron text-center hoverable p-4">
          <h4 class="card-title h4"><p class="text-left"> <i class="fas fa-list"></i> รายการแจ้งฝาก/ถอน</p></h4>
          <hr>
          <div class="text-right">
              
                  <a class="btn btn-xs-block btn-info" href="<?php echo base_url('index.php/user/deposit') ?>"><i class="fa fa-plus-circle"></i> แจ้งเติมเครดิต</a>
                  <a class="btn btn-xs-block btn-danger" href="/member/request/withdraw"><i class="fa fa-minus-circle"></i> แจ้งถอนเครดิต</a>
                </div>
         <br>
         <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
  width="100%">
  <thead class="black white-text">
                    <tr>
                      <th>วันที่</th>
                      <th>ผู้แจ้ง</th>
                      
                      <th>ประเภท</th>
                      <th>ธนาคาร</th>
                      <th>ชื่อบัญชี</th>
                      <th>เลขที่บัญชี</th>
                      <th>วันที่/เวลาฝาก</th>
                      <th>จำนวน</th>
                      <th>ข้อความหมายเหตุ</th>
                      <th>สถานะ</th>
                      
                    </tr>
                  </thead>
            
                  <tbody>
                    
                  </tbody>
                </table>
        <hr>
     </div>
</div>
<!-- News jumbotron -->