<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="bg-white">
      test
        <?php 
          foreach($users as $val) {
            echo $val->l_id;
          }
        ?>
      </div>
    </div>
  </div>
</div>
