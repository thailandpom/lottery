<div class="container lottery">
	<div class="row bg-white">
    <div class="col-12 mt-5">
        <h2><i class="fas fa-magic"></i> แทงหวย
        <span class="badge badge-pill badge-danger font-weight-light"><small>17 มกราคม 2563</small></span></h2>
    </div>
    <div class="col-12 mt-4">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="set-main" href="#main-three" role="tab" data-toggle="tab">สามตัว</a>
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
		<div class="row bg-white mt-4 py-4">
			<div class="col-8">
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane tab-main fade in active show" id="main-three">
						<div class="w-100">
							<div class="row mx-0">
								<div class="col-6 pl-0">
									<button class="btn btn-main" id="btn-main1" value="สามตัวบน">สามตัวบน (800)</button>
								</div>
								<div class="col-6 pr-0">
									<button class="btn btn-main" id="btn-main2" value="สามตัวโต้ด">สามตัวโต้ด (150)</button>
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
                <div role="tabpanel" class="tab-pane tab-sub fade in active show" id="main-000">
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
                <div role="tabpanel" class="tab-pane tab-sub fade" id="main-100">
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
                <div role="tabpanel" class="tab-pane tab-sub fade" id="main-200">
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
                <div role="tabpanel" class="tab-pane tab-sub fade" id="main-300">
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
                <div role="tabpanel" class="tab-pane tab-sub fade" id="main-400">
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
                <div role="tabpanel" class="tab-pane tab-sub fade" id="main-500">
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
                <div role="tabpanel" class="tab-pane tab-sub fade" id="main-600">
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
                <div role="tabpanel" class="tab-pane tab-sub fade" id="main-700">
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
                <div role="tabpanel" class="tab-pane tab-sub fade" id="main-800">
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
                <div role="tabpanel" class="tab-pane tab-sub fade" id="main-900">
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
					<div role="tabpanel" class="tab-pane tab-main fade" id="main-two">
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
					<div role="tabpanel" class="tab-pane tab-main fade" id="main-run">
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
			<div class="col-4">
				<div>
          <h5>รายการแทง</h5>
        </div>
        <form method="post" id="form-save">
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
            <div class="sum mt-3">
              <p class="p-show new-class" id="sumofaudi"></p>
            </div>
            <div class="btn-submit-form d-none mt-4">
              <input type="hidden" name="s_id" value="<?php echo $settings->id; ?>" class="form-control">
              <input type="hidden" name="summary" id="summary" class="form-control" />
              <button type="button" class="btn btn-save" id="btn-save-form">แทงพนัน</button>
              <button type="button" class="btn btn-reset" id="btn-reset">ล้างข้อมูล</button>
            </div>
          </div>
        </form>
			</div>
		</div>
	</div>
</div>

<div class="">

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
    var count = $('.input-group').length;
    if($('#btn-main1').hasClass('active') && $('#btn-main2').hasClass('active')){
      $('.three-top').removeClass('d-none');
      $('.three-tod').removeClass('d-none');
      $('.three-top .p-show').removeClass('d-none');
      $('.three-tod .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
        var text1 = "";
        text1 +=  '<div class="input-group s-three-top">';
        text1 +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
        text1 +=  '<input type="hidden" name="perPrice'+count+'" value="800" class="form-control" />';
        text1 +=  '<input type="hidden" name="type'+count+'" value="1" class="form-control" />';
        text1 +=  '<input type="hidden" name="num'+count+'" value="'+($(this).val())+'" class="form-control" />';
        text1 +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
        text1 +=  '<button class="btn-sum" disabled>ชนะ : 800</button>';
        text1 +=  '<button class="btn-del" type="button" id="btn-three-top'+($(this).val())+'" onclick="del_three_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
        text1 +=  '</div>';
        var text2 = "";
        text2 +=  '<div class="input-group s-three-tod">';
        text2 +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
        text2 +=  '<input type="hidden" name="perPrice'+(count + 1)+'" value="150" class="form-control" />';
        text2 +=  '<input type="hidden" name="type'+(count + 1)+'" value="2" class="form-control" />';
        text2 +=  '<input type="hidden" name="num'+(count + 1)+'" value="'+($(this).val())+'" class="form-control" />';
        text2 +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
        text2 +=  '<button class="btn-sum" disabled>ชนะ : 150</button>';
        text2 +=  '<button class="btn-del" type="button" id="btn-three-tod'+($(this).val())+'" onclick="del_three_tod(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
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
        text +=  '<div class="input-group s-three-top">';
        text +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
        text +=  '<input type="hidden" name="perPrice'+count+'" value="800" class="form-control" />';
        text +=  '<input type="hidden" name="type'+count+'" value="1" class="form-control" />';
        text +=  '<input type="hidden" name="num'+count+'" value="'+($(this).val())+'" class="form-control" />';
        text +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 800</button>';
        text +=  '<button class="btn-del" type="button" id="btn-three-top'+($(this).val())+'" onclick="del_three_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
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
        text +=  '<div class="input-group s-three-tod">';
        text +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
        text +=  '<input type="hidden" name="perPrice'+count+'" value="150" class="form-control" />';
        text +=  '<input type="hidden" name="type'+count+'" value="2" class="form-control" />';
        text +=  '<input type="hidden" name="num'+count+'" value="'+($(this).val())+'" class="form-control" />';
        text +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 150</button>';
        text +=  '<button class="btn-del" type="button" id="btn-three-tod'+($(this).val())+'" onclick="del_three_tod(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
        text +=  '</div>';
        $(this).addClass('active');
        $(this).attr('id', 'three-tod'+$(this).val());
        $('.three-tod').append(text);
      }
    }
    var sum = 0;
    $("input[class *= 'price']").each(function(){
        sum += +$(this).val();
    });
    $("#sumofaudi").text("จำนวนเงินทั้งหมด : "+sum);
    $('#summary').val(sum);
    if(count < 0) {
      $('.btn-submit-form').addClass('d-none');
    }else{
      $('.btn-submit-form').removeClass('d-none');
    }
  }else{
    alert('เลือก สามตัวบน หรือ สามตัวโต้ดก่อน!!!');
  }
})






$('.btn-first-two').on('click', function(){
  if($('#btn-two-top').hasClass('active') || $('#btn-two-bottom').hasClass('active')){
    var count = $('.input-group').length;
    if($('#btn-two-top').hasClass('active') && $('#btn-two-bottom').hasClass('active')){
      $('.two-top').removeClass('d-none');
      $('.two-bottom').removeClass('d-none');
      $('.two-top .p-show').removeClass('d-none');
      $('.two-bottom .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
        var text1 = "";
        text1 +=  '<div class="input-group s-two-top">';
        text1 +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
        text1 +=  '<input type="hidden" name="perPrice'+count+'" value="90" class="form-control" />';
        text1 +=  '<input type="hidden" name="type'+count+'" value="3" class="form-control" />';
        text1 +=  '<input type="hidden" name="num'+count+'" value="'+($(this).val())+'" class="form-control" />';
        text1 +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
        text1 +=  '<button class="btn-sum" disabled>ชนะ : 90</button>';
        text1 +=  '<button class="btn-del" type="button" id="btn-two-top'+($(this).val())+'" onclick="del_two_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
        text1 +=  '</div>';
        var text2 = "";
        text2 +=  '<div class="input-group s-two-bottom">';
        text2 +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
        text2 +=  '<input type="hidden" name="perPrice'+(count + 1)+'" value="90" class="form-control" />';
        text2 +=  '<input type="hidden" name="type'+(count + 1)+'" value="4" class="form-control" />';
        text2 +=  '<input type="hidden" name="num'+(count + 1)+'" value="'+($(this).val())+'" class="form-control" />';
        text2 +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
        text2 +=  '<button class="btn-sum" disabled>ชนะ : 90</button>';
        text2 +=  '<button class="btn-del" type="button" id="btn-two-bottom'+($(this).val())+'" onclick="del_two_bottom(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
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
        text +=  '<div class="input-group s-two-top">';
        text +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
        text +=  '<input type="hidden" name="perPrice'+count+'" value="90" class="form-control" />';
        text +=  '<input type="hidden" name="num'+count+'" value="'+($(this).val())+'" class="form-control" />';
        text +=  '<input type="hidden" name="type'+count+'" value="3" class="form-control" />';
        text +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 90</button>';
        text +=  '<button class="btn-del" type="button" id="btn-two-top'+($(this).val())+'" onclick="del_two_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
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
        text +=  '<div class="input-group s-two-bottom">';
        text +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
        text +=  '<input type="hidden" name="perPrice'+count+'" value="90" class="form-control" />';
        text +=  '<input type="hidden" name="type'+count+'" value="4" class="form-control" />';
        text +=  '<input type="hidden" name="num'+count+'" value="'+($(this).val())+'" class="form-control" />';
        text +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 90</button>';
        text +=  '<button class="btn-del" type="button" id="btn-two-bottom'+($(this).val())+'" onclick="del_two_bottom(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
        text +=  '</div>';
        $(this).addClass('active');
        $(this).attr('id', 'two-bottom'+$(this).val());
        $('.two-bottom').append(text);
      }
    }
    var sum = 0;
    $("input[class *= 'price']").each(function(){
        sum += +$(this).val();
    });
    $("#sumofaudi").text("จำนวนเงินทั้งหมด : "+sum);
    $('#summary').val(sum);
    if(count < 0) {
      $('.btn-submit-form').addClass('d-none');
    }else{
      $('.btn-submit-form').removeClass('d-none');
    }
  }else{
    alert('เลือก สองตัวบน หรือ สองตัวล่างก่อน!!!');
  }
})





$('.btn-first-run').on('click', function(){
  if($('#btn-run-top').hasClass('active') || $('#btn-run-bottom').hasClass('active')){
    var count = $('.input-group').length;
    if($('#btn-run-top').hasClass('active') && $('#btn-run-bottom').hasClass('active')){
      $('.run-top').removeClass('d-none');
      $('.run-bottom').removeClass('d-none');
      $('.run-top .p-show').removeClass('d-none');
      $('.run-bottom .p-show').removeClass('d-none');
      if(!$(this).hasClass('active')){
      var text1 = "";
      text1 +=  '<div class="input-group s-run-top">';
      text1 +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
      text1 +=  '<input type="hidden" name="perPrice'+count+'" value="3.20" class="form-control" />';
      text1 +=  '<input type="hidden" name="type'+count+'" value="5" class="form-control" />';
      text1 +=  '<input type="hidden" name="num'+count+'" value="'+($(this).val())+'" class="form-control" />';
      text1 +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
      text1 +=  '<button class="btn-sum" disabled>ชนะ : 3.20</button>';
      text1 +=  '<button class="btn-del" type="button" id="btn-run-top'+($(this).val())+'" onclick="del_run_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
      text1 +=  '</div>';
      var text2 = "";
      text2 +=  '<div class="input-group s-run-bottom">';
      text2 +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
      text2 +=  '<input type="hidden" name="perPrice'+(count + 1)+'" value="4.20" class="form-control" />';
      text2 +=  '<input type="hidden" name="type'+(count + 1)+'" value="6" class="form-control" />';
      text2 +=  '<input type="hidden" name="num'+(count + 1)+'" value="'+($(this).val())+'" class="form-control" />';
      text2 +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
      text2 +=  '<button class="btn-sum" disabled>ชนะ : 4.20</button>';
      text2 +=  '<button class="btn-del" type="button" id="btn-run-bottom'+($(this).val())+'" onclick="del_run_bottom(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
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
        text +=  '<div class="input-group s-run-top">';
        text +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
        text +=  '<input type="hidden" name="perPrice'+count+'" value="3.20" class="form-control" />';
        text +=  '<input type="hidden" name="type'+count+'" value="5" class="form-control" />';
        text +=  '<input type="hidden" name="num'+count+'" value="'+($(this).val())+'" class="form-control" />';
        text +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 3.20</button>';
        text +=  '<button class="btn-del" type="button" id="btn-run-top'+($(this).val())+'" onclick="del_run_top(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
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
        text +=  '<div class="input-group s-run-bottom">';
        text +=  '<button class="btn-number" disabled>'+($(this).val())+'</button>';
        text +=  '<input type="hidden" name="perPrice'+count+'" value="4.20" class="form-control" />';
        text +=  '<input type="hidden" name="type'+count+'" value="6" class="form-control" />';
        text +=  '<input type="hidden" name="num'+count+'" value="'+($(this).val())+'" class="form-control" />';
        text +=  '<input type="text" name="price[]" value="1" minlength="1" maxlength="3" class="form-control price" />';
        text +=  '<button class="btn-sum" disabled>ชนะ : 4.20</button>';
        text +=  '<button class="btn-del" type="button" id="btn-run-bottom'+($(this).val())+'" onclick="del_run_bottom(\''+($(this).val())+'\')"><i class="fas fa-times"></i></button>';
        text +=  '</div>';
        $(this).addClass('active');
        $(this).attr('id', 'run-bottom'+$(this).val());
        $('.run-bottom').append(text);
      }
    }
    var sum = 0;
    $("input[class *= 'price']").each(function(){
        sum += +$(this).val();
    });
    $("#sumofaudi").text("จำนวนเงินทั้งหมด : "+sum);
    $('#summary').val(sum);
    if(count < 0) {
      $('.btn-submit-form').addClass('d-none');
    }else{
      $('.btn-submit-form').removeClass('d-none');
    }
  }else{
    alert('เลือก วิ่งบน หรือ วิ่งล่างก่อน!!!');
  }
})



function del_three_top (val) {
  var r = confirm("คุณยืนยันที่จะลบข้อมูลเลือกนี้หรือไม่!!!");
  if (r == true) {
    var three_top = $('.three-top .input-group').length;
    if(three_top <= 1){
      $('.three-top .p-show').addClass('d-none');
      $('#btn-main1').removeClass('active');
    }
    $("#three-top"+val).removeClass('active');
    $("#three-all"+val).attr('id', 'three-tod'+val);
    $("#btn-three-top"+val).parent().remove();
    var sum = 0;
    $("input[class *= 'price']").each(function(){
        sum += +$(this).val();
    });
    $("#sumofaudi").text("จำนวนเงินทั้งหมด : "+sum);
    $('#summary').val(sum);
    var count = $('.input-group').length;
    if(count <= 0) {
      $("#sumofaudi").empty();
      $('.btn-submit-form').addClass('d-none');
    }else{
      $('.btn-submit-form').removeClass('d-none');
    }
    if($('#btn-main1').hasClass('active') || $('#btn-main2').hasClass('active')){
      $('.show-three').removeClass('backdrop-number1');
    }else{
      $(this).removeClass('active');
      $('.show-three').addClass('backdrop-number1');
    }
  }
}
function del_three_tod (val) {
  var r = confirm("คุณยืนยันที่จะลบข้อมูลเลือกนี้หรือไม่!!!");
  if (r == true) {
    var three_tod = $('.three-tod .input-group').length;
    if(three_tod <= 1){
      $('.three-tod .p-show').addClass('d-none');
      $('#btn-main2').removeClass('active');
    }
    $("#three-tod"+val).removeClass('active');
    $("#three-all"+val).attr('id', 'three-top'+val);
    $("#btn-three-tod"+val).parent().remove();
    var sum = 0;
    $("input[class *= 'price']").each(function(){
        sum += +$(this).val();
    });
    $("#sumofaudi").text("จำนวนเงินทั้งหมด : "+sum);
    $('#summary').val(sum);
    var count = $('.input-group').length;
    if(count <= 0) {
      $("#sumofaudi").empty();
      $('.btn-submit-form').addClass('d-none');
    }else{
      $('.btn-submit-form').removeClass('d-none');
    }
    if($('#btn-main1').hasClass('active') || $('#btn-main2').hasClass('active')){
      $('.show-three').removeClass('backdrop-number1');
    }else{
      $(this).removeClass('active');
      $('.show-three').addClass('backdrop-number1');
    }
  }
}
function del_two_top (val) {
  var r = confirm("คุณยืนยันที่จะลบข้อมูลเลือกนี้หรือไม่!!!");
  if (r == true) {
    var two_top = $('.two-top .input-group').length;
    if(two_top <= 1){
      $('.two-top .p-show').addClass('d-none');
      $('#btn-two-top').removeClass('active');
    }
    $("#two-top"+val).removeClass('active');
    $("#two-all"+val).attr('id', 'two-bottom'+val);
    $("#btn-two-top"+val).parent().remove();
    var sum = 0;
    $("input[class *= 'price']").each(function(){
        sum += +$(this).val();
    });
    $("#sumofaudi").text("จำนวนเงินทั้งหมด : "+sum);
    $('#summary').val(sum);
    var count = $('.input-group').length;
    if(count <= 0) {
      $("#sumofaudi").empty();
      $('.btn-submit-form').addClass('d-none');
    }else{
      $('.btn-submit-form').removeClass('d-none');
    }
    if($('#btn-two-top').hasClass('active') || $('#btn-two-bottom').hasClass('active')){
      $('.show-two').removeClass('backdrop-number2');
    }else{
      $(this).removeClass('active');
      $('.show-two').addClass('backdrop-number2');
    }
  }
}
function del_two_bottom (val) {
  var r = confirm("คุณยืนยันที่จะลบข้อมูลเลือกนี้หรือไม่!!!");
  if (r == true) {
    var two_bottom = $('.two-bottom .input-group').length;
    if(two_bottom <= 1){
      $('.two-bottom .p-show').addClass('d-none');
      $('#btn-two-bottom').removeClass('active');
    }
    $("#two-bottom"+val).removeClass('active');
    $("#two-all"+val).attr('id', 'two-top'+val);
    $("#btn-two-bottom"+val).parent().remove();
    var sum = 0;
    $("input[class *= 'price']").each(function(){
        sum += +$(this).val();
    });
    $("#sumofaudi").text("จำนวนเงินทั้งหมด : "+sum);
    $('#summary').val(sum);
    var count = $('.input-group').length;
    if(count <= 0) {
      $("#sumofaudi").empty();
      $('.btn-submit-form').addClass('d-none');
    }else{
      $('.btn-submit-form').removeClass('d-none');
    }
    if($('#btn-two-top').hasClass('active') || $('#btn-two-bottom').hasClass('active')){
      $('.show-two').removeClass('backdrop-number2');
    }else{
      $(this).removeClass('active');
      $('.show-two').addClass('backdrop-number2');
    }
  }
}
function del_run_top (val) {
  var r = confirm("คุณยืนยันที่จะลบข้อมูลเลือกนี้หรือไม่!!!");
  if (r == true) {
    var run_top = $('.run-top .input-group').length;
    if(run_top <= 1){
      $('.run-top .p-show').addClass('d-none');
      $('#btn-run-top').removeClass('active');
    }
    $("#run-top"+val).removeClass('active');
    $("#run-all"+val).attr('id', 'run-bottom'+val);
    $("#btn-run-top"+val).parent().remove();
    var sum = 0;
    $("input[class *= 'price']").each(function(){
        sum += +$(this).val();
    });
    $("#sumofaudi").text("จำนวนเงินทั้งหมด : "+sum);
    $('#summary').val(sum);
    var count = $('.input-group').length;
    if(count <= 0) {
      $("#sumofaudi").empty();
      $('.btn-submit-form').addClass('d-none');
    }else{
      $('.btn-submit-form').removeClass('d-none');
    }
    if($('#btn-run-top').hasClass('active') || $('#btn-run-bottom').hasClass('active')){
      $('.show-run').removeClass('backdrop-number3');
    }else{
      $(this).removeClass('active');
      $('.show-run').addClass('backdrop-number3');
    }
  }
}
function del_run_bottom (val) {
  var r = confirm("คุณยืนยันที่จะลบข้อมูลเลือกนี้หรือไม่!!!");
  if (r == true) {
    var run_bottom = $('.run-bottom .input-group').length;
    if(run_bottom <= 1){
      $('.run-bottom .p-show').addClass('d-none');
      $('#btn-run-bottom').removeClass('active');
    }
    $("#run-bottom"+val).removeClass('active');
    $("#run-all"+val).attr('id', 'run-top'+val);
    $("#btn-run-bottom"+val).parent().remove();
    var sum = 0;
    $("input[class *= 'price']").each(function(){
        sum += +$(this).val();
    });
    $("#sumofaudi").text("จำนวนเงินทั้งหมด : "+sum);
    $('#summary').val(sum);
    var count = $('.input-group').length;
    if(count <= 0) {
      $("#sumofaudi").empty();
      $('.btn-submit-form').addClass('d-none');
    }else{
      $('.btn-submit-form').removeClass('d-none');
    }
    if($('#btn-run-top').hasClass('active') || $('#btn-run-bottom').hasClass('active')){
      $('.show-run').removeClass('backdrop-number3');
    }else{
      $(this).removeClass('active');
      $('.show-run').addClass('backdrop-number3');
    }
  }
}


$(document).on("change", ".price", function() {
  var three_top = $(this).parent().hasClass('s-three-top');
  var three_tod = $(this).parent().hasClass('s-three-tod');
  var two_top = $(this).parent().hasClass('s-two-top');
  var two_bottom = $(this).parent().hasClass('s-two-bottom');
  var run_top = $(this).parent().hasClass('s-run-top');
  var run_bottom = $(this).parent().hasClass('s-run-bottom');

  if(three_top == true) {
    var new_val = $(this).val() * 800;
    $(this).parent().find(".btn-sum").text("ชนะ : " + new_val);
  }
  if(three_tod == true) {
    var new_val = $(this).val() * 150;
    $(this).parent().find(".btn-sum").text("ชนะ : " + new_val);
  }
  if(two_top == true || two_bottom == true) {
    var new_val = $(this).val() * 90;
    $(this).parent().find(".btn-sum").text("ชนะ : " + new_val);
  }
  if(run_top == true) {
    var new_val = $(this).val() * 3.20;
    $(this).parent().find(".btn-sum").text("ชนะ : " + new_val);
  }
  if(run_bottom == true) {
    var new_val = $(this).val() * 4.20;
    $(this).parent().find(".btn-sum").text("ชนะ : " + new_val);
  }


  var sum = 0;
  $("input[class *= 'price']").each(function(){
      sum += +$(this).val();
  });
  $("#sumofaudi").text("จำนวนเงินทั้งหมด : "+sum);
  $('#summary').val(sum);
});


</script>

<script type="text/javascript">

$("#btn-save-form").on('click', function(){
  var r = confirm("คุณยืนยันที่แทงพนันหรือไม่!!!");
  if (r == true) {
    $("#form-save").submit();
  }
});
$("#form-save").on('submit', function(e){
    e.preventDefault();
    $.ajax({
      url: "<?php echo base_url(); ?>index.php/lottery/insert",
      data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: "POST",
      success: function(data) {
        console.log(data);
        if(data == 'success') {
          reset();
          alert('ชำระเงินสำเร็จ');
        }else{
          alert('จำนวนเงินไม่เพียงพอจ่าย');
        }
      },
      error: function() {
        console.log(data);
        alert('Something is wrong');
      }
    });
  
});

$('.btn-reset').on('click', function(){
  var r = confirm("คุณยืนยันที่จะล้างข้อมูลหรือไม่!!!");
  if (r == true) {
    reset();
  } else {
    return false;
  }
})

function reset() {
  $('.three-top').addClass('d-none');
  $('.three-tod').addClass('d-none');
  $('.three-top .p-show').addClass('d-none');
  $('.three-tod .p-show').addClass('d-none');
  $('.two-top').addClass('d-none');
  $('.two-bottom').addClass('d-none');
  $('.two-top .p-show').addClass('d-none');
  $('.two-bottom .p-show').addClass('d-none');
  $('.run-top').addClass('d-none');
  $('.run-bottom').addClass('d-none');
  $('.run-top .p-show').addClass('d-none');
  $('.run-bottom .p-show').addClass('d-none');
  $("#sumofaudi").empty();
  $('.btn-submit-form').addClass('d-none');


  $('#btn-main1').removeClass('active');
  $('#btn-main2').removeClass('active');
  $('#btn-two-top').removeClass('active');
  $('#btn-two-bottom').removeClass('active');
  $('#btn-run-top').removeClass('active');
  $('#btn-run-bottom').removeClass('active');

  $('.btn-first').removeClass('active');
  $('.btn-first-two').removeClass('active');
  $('.btn-first-run').removeClass('active');
  $('.show-three').addClass('backdrop-number1');
  $('.show-two').addClass('backdrop-number2');
  $('.show-run').addClass('backdrop-number3');

  $('.nav-link').removeClass('active');
  $('#set-main').addClass('active');

  $('.tab-main').removeClass('active show');
  $('#main-three').addClass('active show');
  $('.tab-sub').removeClass('active show');
  $('#main-000').addClass('active show');

  $('.input-group').remove();
}



</script>