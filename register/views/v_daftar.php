<section class="section bgcolor-white">
    <div class="container">
        <div class="row">

            <!-- ## REGISTERASI ## -->
            <div class="col-md-6 col-md-offset-3">
                <form class="panel nm" id="form-register" name="form-register" action="" method="post">

                    <ul class="list-table pa15">
                        <li>
                            <div class="alert alert-info nm text-center">
                                <span class="semibold text-center">Catatan :</span>&nbsp;&nbsp;Silahkan diisi Semua.
                            </div>
                        </li>
                        
                    </ul>

                    <hr class="nm">

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-12 control-label">Nama</label>
                            <div class="col-md-6">
                                    <span class="text-danger errornamadepan"></span>

                                <div class="has-icon pull-left">
                                    <input type="text" class="form-control" name="namadepan"  placeholder="Nama Depan" data-parsley-required>
                                    <i class="ico-user2 form-control-icon"></i> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="text-danger errornamabelakang"></span>
                                <input type="text" class="form-control" name="namabelakang"  placeholder="Nama Belakang" data-parsley-required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Email</label>
                                    <span class="text-danger erroremail"></span>

                            <div class="col-md-12">

                                <div class="has-icon pull-left">
                                    <input type="text" class="form-control" name="email" placeholder="Ex@mple.com" data-parsley-required>
                                    <i class="ico-envelop form-control-icon"></i> 
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Daftar Sebagai</label>
                                    <span class="text-danger errordaftar_sebagai"></span>

                            <div class="col-md-12">
                                <div class="col-md-6"><input type="radio"
                                    name="daftar_sebagai" value="1" > Penyedia kosan</div>
                                    <div class="col-md-6"></div>

                                    <input type="radio"
                                    name="daftar_sebagai" value="1" > Pencari kosan <br><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Username</label>
                                    <span class="text-danger errorusername"></span>

                                <div class="col-md-12">
                                    <div class="has-icon pull-left">
                                        <input type="text" class="form-control" name="username" value="<?php echo set_value('namadepan'); ?>" placeholder="Username" data-parsley-required>
                                        <i class="ico-bubble-user form-control-icon"></i> 
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Akun Bank</label>
                                    <span class="text-danger errorbank"></span>

                                <div class="col-md-6">
                                    <div class="has-icon pull-left">
                                        <select class="form-control" name="bank">                                    
                                            <option value="BNI">BNI</option>
                                            <option value="BCA">BCA</option>
                                            <option value="MANDIRI">Mandiri</option>
                                            <option value="BRI">BRI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                 <input type="text" class="form-control" name="nomorRekening" placeholder="No Rekening" data-parsley-required>
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-md-12 control-label">Alamat</label>
                                    <span class="text-danger erroralamat"></span>

                             <div class="col-md-12">
                                <textarea class="form-control" name="alamat"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Telephone</label>
                                    <span class="text-danger errorPhone"></span>

                            <div class="col-md-12">
                                <div class="has-icon pull-left">
                                    <input type="text" class="form-control" name="Phone" value="<?php echo set_value('namadepan'); ?>" placeholder="Telephone" data-parsley-required>
                                    <i class="ico-phone-sign form-control-icon"></i> 
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Tanggal Lahir</label>
                                    <span class="text-danger errortanggal_lahir"></span>

                            <div class="col-md-12">
                                <div class="has-icon pull-left">
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                    <i class="ico-calendar3 form-control-icon"></i> 

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12 control-label" name="password">Password</label>
                                    <span class="text-danger errorpassword"></span>

                            <div class="col-md-12">
                                <div class="has-icon pull-left">
                                    <input type="password" class="form-control">
                                    <i class="ico-lock form-control-icon"></i> 

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label"><span class="text-danger">Confirm*</span></label>
                                    <span class="text-danger errorpassword_confirm"></span>

                            <div class="col-md-12">
                                <div class="has-icon pull-left">
                                    <input type="password" class="form-control"  name="password_confirm">
                                    <i class="ico-lock form-control-icon"></i> 
                                    <Br>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer"><br>
                                <a  onclick="register()"  class="btn btn-block btn-success" 
                                ><span class="semibold">Sign up</span></a>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </section>
        <script type="text/javascript">
            function register(){
                data = $('#form-register').serialize();

                url = "index.php/register/registrasi";
                $.ajax({
                    type:"POST",
                    url:"<?php echo base_url() ?>"+url,
                    data:data,
                    dataType:"json",                    success:function (data) {
                     $.each(data, function(key, value){
                        $('.error'+key).html(value);
                    })
                 },error:function(){
                    alert('ini gagal');
                }
            });

            }
        </script>