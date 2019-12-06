 <div class="container">
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
       <h4> <i class="fas fa-chart-line"></i>  เงินคงเหลือ <br>
          
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
        
          <a class="btn btn-light" href="<?php echo base_url('index.php/lottery/index') ?>"><h4><i class="fas fa-magic"></i>  แทงหวย</h4></a>
  
    </div>
    <div class="col-sm">
        <a class="btn btn-light" href="#"><h4><i class="fas fa-list"></i>   โพยหวย</h4></a>
    </div>
    <div class="col-sm">
<button type="button" class="btn btn-light"><h4><i class="fas fa-chart-bar"></i> รายการแจ้งฝาก/ถอน </h4></button>
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
</div></div>
<!-- News jumbotron -->