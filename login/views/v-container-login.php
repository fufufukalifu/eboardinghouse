<section class="section bgcolor-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Header -->
                <div class="section-header section-header-bordered text-center">
                    <h2 class="section-title">
                        <p class="font-alt nm">Login akun e-kosan anda!</p>
                    </h2>
                </div>
                <!--/ Header -->
            </div>
            <div class="button col-md-4 col-md-offset-4">
                <button type="button" class="btn btn-block btn-facebook">Login Dengan <i class="ico-facebook2 ml5"></i></button>
                <button type="button" class="btn btn-block btn-twitter">Login Dengan <i class="ico-twitter2 ml5"></i></button>
                <!-- Social button -->
               <!--  <ul>
                    <li><button type="button" class="btn btn-block btn-facebook">Login Dengan <i class="ico-facebook2 ml5"></i></button></li>
                    <li><button type="button" class="btn btn-block btn-twitter">Login Dengan <i class="ico-twitter2 ml5"></i></button></li>
                </ul> -->
                <!-- Social button -->

                <hr><!-- horizontal line -->

                <!-- Login form -->
                <form class="panel form-login" name="form-login">
                    <div class="panel-body">
                        <!-- Alert message -->
                        <div class="pesan-awal alert alert-warning">
                            <span class=" semibold">Note :</span>&nbsp;&nbsp;isi nama pengguna dan kata sandi anda lalu login!
                        </div>

                        <div class="gagal-login-kosong alert alert-danger" style="display: none">
                            <span class="semibold">Gagal login, username, email atau password anda salah!</span>
                        </div>

                        <div class="gagal-login alert alert-danger" style="display: none">
                            <span class="semibold">Gagal login, username, email atau password anda salah!</span>
                        </div>

                        <div class="form-group">
                            <div class="form-stack has-icon pull-left">
                                <input name="username" type="text" class="form-control input-lg" placeholder="Username / email" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your username / email" data-parsley-required>
                                <i class="ico-user2 form-control-icon"></i>
                            </div>
                            <div class="form-stack has-icon pull-left">
                                <input name="password" type="password" class="form-control input-lg" placeholder="Password" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your password" data-parsley-required>
                                <i class="ico-lock2 form-control-icon"></i>
                            </div>
                        </div>

                        <!-- Error container -->
                        <div id="error-container"class="mb15"></div>
                        <!--/ Error container -->

                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="checkbox custom-checkbox">  
                                        <input type="checkbox" name="remember" id="remember" value="1">  
                                        <label for="remember">&nbsp;&nbsp;Ingat saya</label>   
                                    </div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <a onclick="login()" class="btn btn-block btn-primary"><span class="semibold">Masuk</span></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group nm">
                        </div>
                    </div>
                </form>
                <!-- Login form -->
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function login(){
        data_form = $('.form-login').serialize();

        if(data_form.indexOf('=&') > -1 || data_form.substr(data_form.length - 1) == '='){
            $('.gagal-login-kosong').html("Silahkan lengkapi data login anda!");
            $('.gagal-login-kosong').toggle('slow');
        }else{
           url = "index.php/login/trylogin";
           $.ajax({
            type:"POST",
            url:"<?php echo base_url() ?>"+url,
            data:data_form,
            dataType:"json",
            success:function (data) {
                console.log(data.status);
                if (data.status==1) {
                            window.location = "<?=base_url('index.php/iklankosan') ?>";
                        }else{
                            $('.gagal-login').toggle('slow');
                            $('.gagal-login-kosong').toggle('slow');
                        }
                    },error:function(){
                        alert('ini gagal');
                    }
                });
       }


   }
</script>