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
									<button class="btn btn-main" id="btn-main1" value="สามตัวบน">สามตัวบน (750)</button>
								</div>
								<div class="col-6 pr-0">
									<button class="btn btn-main" id="btn-main2" value="สามตัวโต้ด">สามตัวโต้ด (120)</button>
								</div>
							</div>
            </div>
            
            <div class="show-number-three">
              <div class="show-three backdrop-number1"></div>
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
									<button class="btn btn-main" id="btn-two-top" value="สองตัวบน">สองตัวบน (90)</button>
								</div>
								<div class="col-6 pr-0">
									<button class="btn btn-main" id="btn-two-bottom" value="สองตัวล่าง">สองตัวล่าง (90)</button>
								</div>
							</div>
            </div>
            <div class="show-number-two">
              <div class="show-two backdrop-number2"></div>
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
                      <button class="btn btn-first-two" value="<?php echo $i; ?>"><?php echo $i; ?></button>
                    </div>
                    <?php 
                  }
                ?>
                  </div>
                </div>
              </div>
            </div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="main-run">
						<div class="w-100">
							<div class="row mx-0">
								<div class="col-6 pl-0">
									<button class="btn btn-main" id="btn-run-top" value="วิ่งบน">วิ่งบน (3.20)</button>
								</div>
								<div class="col-6 pr-0">
									<button class="btn btn-main" id="btn-run-bottom" value="วิ่งล่าง">วิ่งล่าง (4.20)</button>
								</div>
							</div>
            </div>
            <div class="show-number-run">
              <div class="show-run backdrop-number3"></div>
              <div class="w-100 mt-4">
                <div class="row mx-0">
                  <div class="col-12 px-0">


                    <?php 
                      for($i = 0; $i <= 9; $i++){
                    ?>
                    <div class="column-20">
                      <button class="btn btn-first-run" value="<?php echo $i; ?>"><?php echo $i; ?></button>
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
			</div>
			<div class="col-4 p-4">
				<div>
          <h5>รายการแทง</h5>
        </div>
        <div class="number mt-4">
          <div class="three-top d-none">
            <p class="p-show d-none">สามตัวบน</p>
          </div>
          <div class="three-tod d-none">
            <p class="p-show d-none">สามตัวโต้ด</p>
          </div>
          <div class="two-top d-none">
            <p class="p-show d-none">สองตัวบน</p>
          </div>
          <div class="two-bottom d-none">
            <p class="p-show d-none">สองตัวล่าง</p>
          </div>
          <div class="run-top d-none">
            <p class="p-show d-none">วิ่งบน</p>
          </div>
          <div class="run-bottom d-none">
            <p class="p-show d-none">วิ่งล่าง</p>
          </div>
        </div>
			</div>
		</div>
	</div>
</div>

<script>
$('#btn-main1').on('click', function(){
  if(!$(this).hasClass('active')){
    $(this).addClass('active');
    if($(this).hasClass('active') || $('#btn-main2').hasClass('active')){
      $('.show-three').removeClass('backdrop-number1');
    }else{
      $(this).removeClass('active');
      $('.show-three').addClass('backdrop-number1');
    }
  }else{
    $(this).removeClass('active');
    if($(this).hasClass('active') || $('#btn-main2').hasClass('active')){
      $('.show-three').removeClass('backdrop-number1');
    }else{
      $(this).removeClass('active');
      $('.show-three').addClass('backdrop-number1');
    }
  }
})
$('#btn-main2').on('click', function(){
  if(!$(this).hasClass('active')){
    $(this).addClass('active');
    if($(this).hasClass('active') || $('#btn-main1').hasClass('active')){
      $('.show-three').removeClass('backdrop-number1');
    }else{
      $(this).removeClass('active');
      $('.show-three').addClass('backdrop-number1');
    }
  }else{
    $(this).removeClass('active');
    if($(this).hasClass('active') || $('#btn-main1').hasClass('active')){
      $('.show-three').removeClass('backdrop-number1');
    }else{
      $(this).removeClass('active');
      $('.show-three').addClass('backdrop-number1');
    }
  }
})





$('#btn-two-top').on('click', function(){
  if(!$(this).hasClass('active')){
    $(this).addClass('active');
    if($(this).hasClass('active') || $('#btn-two-bottom').hasClass('active')){
      $('.show-two').removeClass('backdrop-number2');
    }else{
      $(this).removeClass('active');
      $('.show-two').addClass('backdrop-number2');
    }
  }else{
    $(this).removeClass('active');
    if($(this).hasClass('active') || $('#btn-two-bottom').hasClass('active')){
      $('.show-two').removeClass('backdrop-number2');
    }else{
      $(this).removeClass('active');
      $('.show-two').addClass('backdrop-number2');
    }
  }
})
$('#btn-two-bottom').on('click', function(){
  if(!$(this).hasClass('active')){
    $(this).addClass('active');
    if($(this).hasClass('active') || $('#btn-two-top').hasClass('active')){
      $('.show-two').removeClass('backdrop-number2');
    }else{
      $(this).removeClass('active');
      $('.show-two').addClass('backdrop-number2');
    }
  }else{
    $(this).removeClass('active');
    if($(this).hasClass('active') || $('#btn-main1').hasClass('active')){
      $('.show-two').removeClass('backdrop-number2');
    }else{
      $(this).removeClass('active');
      $('.show-two').addClass('backdrop-number2');
    }
  }
})





$('#btn-run-top').on('click', function(){
  if(!$(this).hasClass('active')){
    $(this).addClass('active');
    if($(this).hasClass('active') || $('#btn-run-bottom').hasClass('active')){
      $('.show-run').removeClass('backdrop-number3');
    }else{
      $(this).removeClass('active');
      $('.show-run').addClass('backdrop-number3');
    }
  }else{
    $(this).removeClass('active');
    if($(this).hasClass('active') || $('#btn-run-bottom').hasClass('active')){
      $('.show-run').removeClass('backdrop-number3');
    }else{
      $(this).removeClass('active');
      $('.show-run').addClass('backdrop-number3');
    }
  }
})
$('#btn-run-bottom').on('click', function(){
  if(!$(this).hasClass('active')){
    $(this).addClass('active');
    if($(this).hasClass('active') || $('#btn-run-top').hasClass('active')){
      $('.show-run').removeClass('backdrop-number3');
    }else{
      $(this).removeClass('active');
      $('.show-run').addClass('backdrop-number3');
    }
  }else{
    $(this).removeClass('active');
    if($(this).hasClass('active') || $('#btn-main1').hasClass('active')){
      $('.show-run').removeClass('backdrop-number3');
    }else{
      $(this).removeClass('active');
      $('.show-run').addClass('backdrop-number3');
    }
  }
})





$('.btn-first').on('click', function(){
  if($('#btn-main1').hasClass('active') || $('#btn-main2').hasClass('active')){
    if($('#btn-main1').hasClass('active') && $('#btn-main2').hasClass('active')){
      $('.three-top').removeClass('d-none');
      $('.three-tod').removeClass('d-none');
      $('.three-top .p-show').removeClass('d-none');
      $('.three-tod .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
      var text1 = "";
      text1 +=  '<div class="input-group">';
      text1 +=  '<button class="btn-number">'+($(this).val())+'</button>';
      text1 +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
      text1 +=  '<button class="btn-sum" disabled>ชนะ : 750</button>';
      text1 +=  '<button class="btn-del" id="btn-three-top'+($(this).val())+'" onclick="del_three_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
      text1 +=  '</div>';
      var text2 = "";
      text2 +=  '<div class="input-group">';
      text2 +=  '<button class="btn-number">'+($(this).val())+'</button>';
      text2 +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
      text2 +=  '<button class="btn-sum" disabled>ชนะ : 120</button>';
      text2 +=  '<button class="btn-del" id="btn-three-tod'+($(this).val())+'" onclick="del_three_tod(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
      text2 +=  '</div>';
      $(this).addClass('active');
      $(this).attr('id', 'three-all'+$(this).val());
      $('.three-top').append(text1);
      $('.three-tod').append(text2);
    }
    }
    else if($('#btn-main1').hasClass('active')){
      $('.three-top').removeClass('d-none');
      $('.three-top .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
        var text = "";
        text +=  '<div class="input-group">';
        text +=  '<button class="btn-number">'+($(this).val())+'</button>';
        text +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 750</button>';
        text +=  '<button class="btn-del" id="btn-three-top'+($(this).val())+'" onclick="del_three_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
        text +=  '</div>';
        $(this).addClass('active');
        $(this).attr('id', 'three-top'+$(this).val());
        $('.three-top').append(text);
      }
    }else if ($('#btn-main2').hasClass('active')){
      $('.three-tod').removeClass('d-none');
      $('.three-tod .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
        var text = "";
        text +=  '<div class="input-group">';
        text +=  '<button class="btn-number">'+($(this).val())+'</button>';
        text +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 120</button>';
        text +=  '<button class="btn-del" id="btn-three-tod'+($(this).val())+'" onclick="del_three_tod(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
        text +=  '</div>';
        $(this).addClass('active');
        $(this).attr('id', 'three-tod'+$(this).val());
        $('.three-tod').append(text);
      }
    }
  }else{
    alert('เลือก สามตัวบน หรือ สามตัวโต้ดก่อน!!!');
  }
})






$('.btn-first-two').on('click', function(){
  if($('#btn-two-top').hasClass('active') || $('#btn-two-bottom').hasClass('active')){
    if($('#btn-two-top').hasClass('active') && $('#btn-two-bottom').hasClass('active')){
      $('.two-top').removeClass('d-none');
      $('.two-bottom').removeClass('d-none');
      $('.two-top .p-show').removeClass('d-none');
      $('.two-bottom .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
      var text1 = "";
      text1 +=  '<div class="input-group">';
      text1 +=  '<button class="btn-number">'+($(this).val())+'</button>';
      text1 +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
      text1 +=  '<button class="btn-sum" disabled>ชนะ : 90</button>';
      text1 +=  '<button class="btn-del" id="btn-two-top'+($(this).val())+'" onclick="del_two_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
      text1 +=  '</div>';
      var text2 = "";
      text2 +=  '<div class="input-group">';
      text2 +=  '<button class="btn-number">'+($(this).val())+'</button>';
      text2 +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
      text2 +=  '<button class="btn-sum" disabled>ชนะ : 90</button>';
      text2 +=  '<button class="btn-del" id="btn-two-bottom'+($(this).val())+'" onclick="del_two_bottom(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
      text2 +=  '</div>';
      $(this).addClass('active');
      $(this).attr('id', 'two-all'+$(this).val());
      $('.two-top').append(text1);
      $('.two-bottom').append(text2);
    }
    }
    else if($('#btn-two-top').hasClass('active')){
      $('.two-top').removeClass('d-none');
      $('.two-top .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
        var text = "";
        text +=  '<div class="input-group">';
        text +=  '<button class="btn-number">'+($(this).val())+'</button>';
        text +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 90</button>';
        text +=  '<button class="btn-del" id="btn-two-top'+($(this).val())+'" onclick="del_two_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
        text +=  '</div>';
        $(this).addClass('active');
        $(this).attr('id', 'two-top'+$(this).val());
        $('.two-top').append(text);
      }
    }else if ($('#btn-two-bottom').hasClass('active')){
      $('.two-bottom').removeClass('d-none');
      $('.two-bottom .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
        var text = "";
        text +=  '<div class="input-group">';
        text +=  '<button class="btn-number">'+($(this).val())+'</button>';
        text +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 90</button>';
        text +=  '<button class="btn-del" id="btn-two-bottom'+($(this).val())+'" onclick="del_two_bottom(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
        text +=  '</div>';
        $(this).addClass('active');
        $(this).attr('id', 'two-bottom'+$(this).val());
        $('.two-bottom').append(text);
      }
    }
  }else{
    alert('เลือก สองตัวบน หรือ สองตัวล่างก่อน!!!');
  }
})





$('.btn-first-run').on('click', function(){
  if($('#btn-run-top').hasClass('active') || $('#btn-run-bottom').hasClass('active')){
    if($('#btn-run-top').hasClass('active') && $('#btn-run-bottom').hasClass('active')){
      $('.run-top').removeClass('d-none');
      $('.run-bottom').removeClass('d-none');
      $('.run-top .p-show').removeClass('d-none');
      $('.run-bottom .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
      var text1 = "";
      text1 +=  '<div class="input-group">';
      text1 +=  '<button class="btn-number">'+($(this).val())+'</button>';
      text1 +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
      text1 +=  '<button class="btn-sum" disabled>ชนะ : 3.20</button>';
      text1 +=  '<button class="btn-del" id="btn-run-top'+($(this).val())+'" onclick="del_run_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
      text1 +=  '</div>';
      var text2 = "";
      text2 +=  '<div class="input-group">';
      text2 +=  '<button class="btn-number">'+($(this).val())+'</button>';
      text2 +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
      text2 +=  '<button class="btn-sum" disabled>ชนะ : 4.20</button>';
      text2 +=  '<button class="btn-del" id="btn-run-bottom'+($(this).val())+'" onclick="del_run_bottom(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
      text2 +=  '</div>';
      $(this).addClass('active');
      $(this).attr('id', 'run-all'+$(this).val());
      $('.run-top').append(text1);
      $('.run-bottom').append(text2);
    }
    }
    else if($('#btn-run-top').hasClass('active')){
      $('.run-top').removeClass('d-none');
      $('.run-top .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
        var text = "";
        text +=  '<div class="input-group">';
        text +=  '<button class="btn-number">'+($(this).val())+'</button>';
        text +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 3.20</button>';
        text +=  '<button class="btn-del" id="btn-run-top'+($(this).val())+'" onclick="del_run_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
        text +=  '</div>';
        $(this).addClass('active');
        $(this).attr('id', 'run-top'+$(this).val());
        $('.run-top').append(text);
      }
    }else if ($('#btn-run-bottom').hasClass('active')){
      $('.run-bottom').removeClass('d-none');
      $('.run-bottom .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
        var text = "";
        text +=  '<div class="input-group">';
        text +=  '<button class="btn-number">'+($(this).val())+'</button>';
        text +=  '<input type="number" name="" value="1" min="1" class="form-control" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 4.20</button>';
        text +=  '<button class="btn-del" id="btn-run-bottom'+($(this).val())+'" onclick="del_run_bottom(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
        text +=  '</div>';
        $(this).addClass('active');
        $(this).attr('id', 'run-bottom'+$(this).val());
        $('.run-bottom').append(text);
      }
    }
  }else{
    alert('เลือก วิ่งบน หรือ วิ่งล่างก่อน!!!');
  }
})



function del_three_top (val) {
  var three_top = $('.three-top .input-group').length;
  if(three_top <= 1){
    $('.three-top .p-show').addClass('d-none');
  }
  $("#three-top"+val).removeClass('active');
  $("#three-all"+val).attr('id', 'three-tod'+val);
  $("#btn-three-top"+val).parent().remove();
  
}
function del_three_tod (val) {
  var three_tod = $('.three-tod .input-group').length;
  if(three_tod <= 1){
    $('.three-tod .p-show').addClass('d-none');
  }
  $("#three-tod"+val).removeClass('active');
  $("#three-all"+val).attr('id', 'three-top'+val);
  $("#btn-three-tod"+val).parent().remove();
}
function del_two_top (val) {
  var two_top = $('.two-top .input-group').length;
  if(two_top <= 1){
    $('.two-top .p-show').addClass('d-none');
  }
  $("#two-top"+val).removeClass('active');
  $("#two-all"+val).attr('id', 'two-bottom'+val);
  $("#btn-two-top"+val).parent().remove();
}
function del_two_bottom (val) {
  var two_bottom = $('.two-bottom .input-group').length;
  if(two_bottom <= 1){
    $('.two-bottom .p-show').addClass('d-none');
  }
  $("#two-bottom"+val).removeClass('active');
  $("#two-all"+val).attr('id', 'two-top'+val);
  $("#btn-two-bottom"+val).parent().remove();
}
function del_run_top (val) {
  var run_top = $('.run-top .input-group').length;
  if(run_top <= 1){
    $('.run-top .p-show').addClass('d-none');
  }
  $("#run-top"+val).removeClass('active');
  $("#run-all"+val).attr('id', 'run-bottom'+val);
  $("#btn-run-top"+val).parent().remove();
}
function del_run_bottom (val) {
  var run_bottom = $('.run-bottom .input-group').length;
  if(run_bottom <= 1){
    $('.run-bottom .p-show').addClass('d-none');
  }
  $("#run-bottom"+val).removeClass('active');
  $("#run-all"+val).attr('id', 'run-top'+val);
  $("#btn-run-bottom"+val).parent().remove();
}

// function del (val) {
//   var three_top = $('.three-top .input-group').length;
//   var three_tod = $('.three-tod .input-group').length;
//   var two_top = $('.two-top .input-group').length;
//   var two_bottom = $('.two-bottom .input-group').length;
//   var run_top = $('.run-top .input-group').length;
//   var run_bottom = $('.run-bottom .input-group').length;
//   if(three_top <= 1){
//     $('.three-top p').empty();
//   }
//   if(three_tod <= 1){
//     $('.three-tod p').empty();
//   }
//   if(two_top <= 1){
//     $('.two-top p').empty();
//   }
//   if(two_bottom <= 1){d
//     $('.two-bottom p').empty();
//   }
//   if(run_top <= 1){
//     $('.run-top p').empty();
//   }
//   if(run_bottom <= 1){
//     $('.two-bottom p').empty();
//   }
//   console.log($("#btn-"+val).parent());
//   // $("#btn-"+val).parent().remove();
// }

</script>
