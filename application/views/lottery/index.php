<div class="container lottery">
	<div class="row bg-white">
    <div class="col-12 mt-5">
      <h2>แทงหวย</h2>
    </div>
    <div class="col-12 mt-4">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href="#main-three" role="tab" data-toggle="tab">สามตัว</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#main-two" role="tab" data-toggle="tab">2 ตัว</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#main-run" role="tab" data-toggle="tab">เลขวิ่ง</a>
        </li>
      </ul>
    </div>
	</div>
	<div class="">
		<div class="row bg-white mt-4">
			<div class="col-8 p-4">
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active show" id="main-three">
						<div class="w-100">
							<div class="row mx-0">
								<div class="col-6 pl-0">
									<button class="btn btn-main" id="btn-main1" value="สามตัวบน">สามตัวบน</button>
								</div>
								<div class="col-6 pr-0">
									<button class="btn btn-main" id="btn-main2" value="สามตัวกลับ">สามตัวกลับ</button>
								</div>
							</div>
            </div>
            
            <div class="show-number-three">
              <div class="show-three backdrop-number"></div>
              <ul class="nav nav-tabs mt-4" role="tablist">
                <?php 
                  for($i = 0; $i <= 900; $i+= 100){
                    if($i < 10){
                      $i = '00'.$i;
                    }
                ?>
                <li class="nav-item three">
                  <a class="nav-link <?php if($i==000){ echo 'active';} else {echo '';} ?>" href="#main-<?php echo $i; ?>" role="tab" data-toggle="tab"><?php echo $i; ?></a>
                </li>
                <?php 
                  }
                ?>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active show" id="main-000">
                  <?php 
                    for($i = 0; $i <= 99; $i++){
                      if($i < 10){
                        $i = '00'.$i;
                      }
                      if($i >=10 && $i <= 99){
                        $i = '0'.$i;
                      }
                      ?>
                      
                      <div class="column">
                          <button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
                        </div>
                        <?php 
                    }
                  ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="main-100">
                    <?php 
                    for($i = 100; $i <= 199; $i++){
                      ?>
                      
                      <div class="column">
                          <button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
                        </div>
                        <?php 
                    }
                  ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="main-200">
                    <?php 
                    for($i = 200; $i <= 299; $i++){
                      ?>
                      
                      <div class="column">
                          <button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
                        </div>
                        <?php 
                    }
                  ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="main-300">
                    <?php 
                    for($i = 300; $i <= 399; $i++){
                      ?>
                      
                      <div class="column">
                          <button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
                        </div>
                        <?php 
                    }
                  ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="main-400">
                    <?php 
                    for($i = 400; $i <= 499; $i++){
                      ?>
                      
                      <div class="column">
                          <button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
                        </div>
                        <?php 
                    }
                  ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="main-500">
                    <?php 
                    for($i = 500; $i <= 599; $i++){
                      ?>
                      
                      <div class="column">
                          <button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
                        </div>
                        <?php 
                    }
                  ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="main-600">
                    <?php 
                    for($i = 600; $i <= 699; $i++){
                      ?>
                      
                      <div class="column">
                          <button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
                        </div>
                        <?php 
                    }
                  ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="main-700">
                    <?php 
                    for($i = 700; $i <= 799; $i++){
                      ?>
                      
                      <div class="column">
                          <button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
                        </div>
                        <?php 
                    }
                  ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="main-800">
                    <?php 
                    for($i = 800; $i <= 899; $i++){
                      ?>
                      
                      <div class="column">
                          <button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
                        </div>
                        <?php 
                    }
                  ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="main-900">
                    <?php 
                    for($i = 900; $i <= 999; $i++){
                      ?>
                      
                      <div class="column">
                          <button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
                        </div>
                        <?php 
                    }
                  ?>
                </div>
              </div>
            </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="main-two">
						<div class="w-100">
							<div class="row mx-0">
								<div class="col-6 pl-0">
									<button class="btn btn-main">สองตัวบน</button>
								</div>
								<div class="col-6 pr-0">
									<button class="btn btn-main">สองตัวล่าง</button>
								</div>
							</div>
						</div>
						<div class="w-100 mt-4">
							<div class="row mx-0">
								<div class="col-12 px-0">


									<?php 
                for($i = 1; $i <= 99; $i++){
                  if($i < 10){
                    $i = '0'.$i;
                  }
              ?>
									<div class="column-two">
										<button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
									</div>
									<?php 
                }
              ?>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="main-run">
						<div class="w-100">
							<div class="row mx-0">
								<div class="col-6 pl-0">
									<button class="btn btn-main">วิ่งบน</button>
								</div>
								<div class="col-6 pr-0">
									<button class="btn btn-main">วิ่งล่าง</button>
								</div>
							</div>
						</div>
						<div class="w-100 mt-4">
							<div class="row mx-0">
								<div class="col-12 px-0">


									<?php 
                    for($i = 0; $i <= 9; $i++){
                  ?>
									<div class="column-20">
										<button class="btn btn-first" value="<?php echo $i; ?>"><?php echo $i; ?></button>
									</div>
									<?php 
                    }
                  ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 p-4">
				<div>
          <h5>รายการแทง</h5>
        </div>
        <div class="number mt-4">
          
        </div>
			</div>
		</div>
	</div>
</div>

<script>
$('.btn-main').on('click', function(){
  if(!$(this).hasClass('active')){
    $(this).addClass('active');
    // $('.number').append('<p>'+ $(this).val() +'</p>');
    $('.show-three').removeClass('backdrop-number');
  }else{
    $(this).removeClass('active');
    $('.show-three').addClass('backdrop-number');
  }
})
$('.btn-first').on('click', function(){
  if(!$(this).hasClass('active')){
    var text = "";
    text +=  '<div class="input-group">';
    text +=  '<button class="btn-number">'+($(this).val())+'</button>';
    text +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
    text +=  '<button class="btn-sum" disabled>ชนะ : 750</button>';
    text +=  '<button class="btn-del"><i class="fas fa-times"></i></button>';
    text +=  '</div>';
    $(this).addClass('active');
    $('.number').append(text);
  }else{
    // $(this).removeClass('active');
  }
})
$('.btn-del').on('click', function(){
  alert('test');
  $(this).parent().remove();
})
</script>
