<section class="section bgcolor-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Header -->
                <div class="section-header section-header-bordered text-center">
                    <h2 class="section-title">
                        <p class="font-alt nm">Ayo mulai menjadi anggota e-kosan, dan dapatkan keuntunganya!</p>
                    </h2>
                </div>
                <!--/ Header -->
            </div>
            <!-- ## REGISTERASI ## -->
            <div class="col-md-6 col-md-offset-3">
                <form class="panel nm" name="form-register" action="<?=base_url()?>index.php/register/saveguru" method="post">

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
                                <div class="has-icon pull-left">
                                    <input type="text" class="form-control" name="namadepan" value="<?php echo set_value('namadepan'); ?>" placeholder="Nama Depan" data-parsley-required>
                                    <i class="ico-user2 form-control-icon"></i> 
                                </div>
                            </div>
                            <div class="col-md-6">
                             <input type="text" class="form-control" name="namabelakang" value="<?php echo set_value('namabelakang'); ?>" placeholder="Nama Belakang" data-parsley-required>
                         </div>
                     </div>

                     <div class="form-group">
                        <label class="col-md-12 control-label">Email</label>
                        <div class="col-md-12">
                            <div class="has-icon pull-left">
                                <input type="text" class="form-control" name="email" value="<?php echo set_value('namadepan'); ?>" placeholder="Ex@mple.com" data-parsley-required>
                                <i class="ico-envelop form-control-icon"></i> 
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 control-label">Daftar Sebagai</label>
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
                            <div class="col-md-12">
                                <div class="has-icon pull-left">
                                    <input type="text" class="form-control" name="namadepan" value="<?php echo set_value('namadepan'); ?>" placeholder="Username" data-parsley-required>
                                    <i class="ico-bubble-user form-control-icon"></i> 
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12 control-label">Akun Bank</label>
                            <div class="col-md-6">
                                <div class="has-icon pull-left">
                                    <select class="form-control">                                    
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
                         <div class="col-md-12">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 control-label">Telephone</label>
                        <div class="col-md-12">
                            <div class="has-icon pull-left">
                                <input type="text" class="form-control" name="Phone" value="<?php echo set_value('namadepan'); ?>" placeholder="Telephone" data-parsley-required>
                                <i class="ico-phone-sign form-control-icon"></i> 
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 control-label">Tanggal Lahir</label>
                        <div class="col-md-12">
                            <div class="has-icon pull-left">
                                <input type="date" class="form-control">
                                <i class="ico-calendar3 form-control-icon"></i> 

                            </div>
                        </div>
                    </div>
<div class="form-group">
                        <label class="col-md-12 control-label">Password</label>
                        <div class="col-md-12">
                            <div class="has-icon pull-left">
                                <input type="password" class="form-control">
                                <i class="ico-lock form-control-icon"></i> 

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 control-label"><span class="text-danger">Confirm*</span></label>
                        <div class="col-md-12">
                            <div class="has-icon pull-left">
                                <input type="password" class="form-control">
                                <i class="ico-lock form-control-icon"></i> 
                                <Br>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer"><br>
                        <button type="submit" class="btn btn-block btn-success" id="kirimdata" disabled><span class="semibold">Sign up</span></button>
                    </div>

                    
                </form>
            </div>

        </div>
    </div>
</section>