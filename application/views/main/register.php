 <div class="container">
            <div class="jumbotron">
                <?php
                if(!empty($this->session->flashdata('error'))){
                ?>
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong><?php echo $this->session->flashdata('error'); ?>!</strong>
                </div>
                <?php
                }
                ?>
                <center>
                    <div class="col-xl-6 pb-6">
                        <div class="card text-center">


                            <form name="form1" class="text-center border border-light p-5" method="post" action="<?php echo base_url('index.php/user/insert') ?>">

                                <p class="h4 mb-4"> <i class="fas fa-user"></i> สมัครสมาชิก</p>
                                <!-- Phone number -->
                                <p class="text text-left"><i class="fas fa-phone"></i> เบอร์โทร</p>
                                <input type="text" id="defaultRegisterPhonePassword" name="l_phone" class="form-control" maxlength="10" placeholder="เบอร์โทร" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
                                <!--Blue select--> <br>
                                <p class="text text-left"><i class="fas fa-home"></i> ธนาคาร</p>
                                <select class="browser-default  custom-select" name="b_id">
                                    <option value=""  disabled selected>เลือกธนาคาร</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <br> <br>
                                <p class="text text-left"><i class="fas fa-user"></i> ชื่อบัญชี</p>
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <!-- First name -->
                                        <input type="text" id="defaultRegisterFormFirstName" name="l_name" class="form-control" placeholder="ชื่อ-นามสกุล" required>
                                    </div>

                                </div>
                                <p class="text text-left"><i class="fas fa-list"></i> เลขที่บัญชี</p>
                                <input type="text" id="defaultRegisterPhonePassword" name="l_numbank" class="form-control" placeholder="เลขที่บัญชี" aria-describedby="defaultRegisterFormPhoneHelpBlock" required>
                                <hr class="my-4">
                                <!-- E-mail -->
                                <p class="text text-left"><i class="fas fa-user"></i>  Username</p>
                                <input type="text" id="defaultRegisterFormEmail" name="username" class="form-control mb-4" placeholder="Username" required

                                <!-- Password -->
                                <p class="text text-left"><i class="fas fa-paste"></i> รหัสผ่าน</p>
                                <input type="password" id="defaultRegisterFormPassword" name="password" class="form-control" placeholder="รหัสผ่าน" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                                <!-- Password --><br>
                                <p class="text text-left"><i class="fas fa-paste"></i>  ยืนยันรหัสผ่าน</p>

                                <input name="status" type="hidden" >
                                <input name="userType" type="hidden" >
                                <input type="password" id="defaultRegisterFormPassword" name="conpass" class="form-control" placeholder="ยืนยันรหัสผ่าน" aria-describedby="defaultRegisterFormPasswordHelpBlock" required>
                                <br>
                                <div class="alert alert-warning" role="alert">
                                    <p class="text text-left">กรุณาตรวจสอบข้อมูลของท่านให้ถูกต้อง และกดปุ่ม <font color="green"> ยืนยันการสมัคร</font></p>


                                </div>

                                <input class="btn btn-success my-4 btn-block" type="submit" value="ยืนยันการสมัคร" />


                            </form>
                        </div>
                </center>
                <!-- Default form register -->

            </div>

        </div></div>