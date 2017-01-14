 
           

   
        <link rel="stylesheet" href="<?=base_url('assets/plugins/owl/css/owl.carousel.min.css')?>">
        
        <link rel="stylesheet" href="<?=base_url('assets/plugins/layerslider/css/layerslider.min.css')?>">
        
        <!--/ Plugins stylesheet -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="<?=base_url('assets/library/bootstrap/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/stylesheet/layout.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/stylesheet/uielement.css')?>">

<section id="layerslider" style="width:100%;height:480px;">
 <div class="ls-slide" data-ls="transition2d:1; slidedelay:8000;">
  <!-- slide background -->
  <img src="<?=base_url('assets/image/layerslider/bg3.png') ?>" class="ls-bg">
  <!--/ slide background -->

  <!-- Layer #1 -->
  <img class="ls-l" style="top:90px;left:68%;" src="<?=base_url('assets/image/layerslider/layer/people2.png') ?>" data-ls="delayin:1000; easingin:easeOutElastic;">
  <!--/ Layer #1 -->

  <!-- Layer #2 -->
  <h1 class="ls-l font-alt" style="top:110px;left:150px;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
   Selamat Datang <br>Di <span class="text-primary">Bandung eboarding house!</span> 
  </h1>
  <!--/ Layer #2 -->

  <!-- Layer #3 -->
  <h4 class="ls-l font-alt thin text-default" style="top:210px;left:150px;width:550px;" data-ls="offsetxin:0; durationin:2000; delayin:2000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
   Bandung Eboarding House adalah situs penyewaan kos-kosan terbesar dan terlengkap di Kota Bandung!
  </h4>
  <!--/ Layer #3 -->


  <!-- Layer #5 -->
  <a href="<?=base_url('index.php/register') ?>" class="ls-l btn btn-primary" style="top:310px; left:150px;" data-ls="offsetxin:0; durationin:2000; delayin:3000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
  Daftar Sekarang! <i class="ico-angle-right ml5"></i>
  </a>
  <!--/ Layer #5 -->

  <!-- Layer #6 -->
  <img class="ls-l" style="top:320px;left:340px;" src="<?=base_url('assets/image/layerslider/layer/arrow.png') ?>" data-ls="delayin:3500; offsetxin:0; offsetyin:-30; easingin:easeOutElastic;">
  <!--/ Layer #6 -->
 </div>
 <!-- Slide #1 -->




</section>



 <!-- START Recent Blog Section -->
 <section class="section bgcolor-white">
  <div class="container">
   <!-- START row -->
   <div class="row">
    <!-- Header -->
    <div class="col-md-12">
     <div class="section-header section-header-bordered mb5">
      <h3 class="section-title">
       <p class="font-alt nm">Iklan Kosan Terbaru</p>
      </h3>
     </div>
     <!--/ Header -->
    </div>
    <!--/ Header -->
   </div>
   <!--/ END row -->

   <!-- START row -->
   <div class="row">
    <!-- Blog post #1 -->
    <?php for ($i=1;$i<=4;$i++): ?>                                        
     <div class="col-sm-3 post">
      <article class="panel overflow-hidden">
       <!-- Thumbnail -->
       <header class="thumbnail">
        <!-- media -->
        <div class="media">
         <!-- indicator -->
         <div class="indicator"><span class="spinner"></span></div>
         <!--/ indicator -->
         <!-- toolbar overlay -->
         <div class="overlay">
          <div class="toolbar">
           <a href="javascript:void(0);" class="btn btn-success"><i class="ico-new-tab"></i></a>
          </div>
         </div>
         <!--/ toolbar overlay -->
         <?php  $img = base_url('assets/imagekosan/kosan'.$i.'.jpg')?>
         <img data-toggle="unveil" src="<?=base_url('assets/image/background/blog/placeholder.jpg')?>" data-src="<?=$img ?>" alt="Photo" height="160px">
        </div>
        <!--/ media -->
       </header>
       <!--/ Thumbnail -->
       <!-- Content -->
       <section class="panel-body">
        <!-- heading -->
        <h4 class="font-alt mt0 ellipsis"><a href="javascript:void(0);" class="text-default">Iklan Kosan <?=$i ?></a></h4>
        <!--/ heading -->
        <!-- meta -->
        <p class="meta nm">
         <a href="javascript:void(0);">June, 2014</a><!-- date -->
         <span class="text-muted mr5 ml5">&#8226;</span>
         <span class="text-muted">By </span><a href="javascript:void(0);">Mark Adams</a><!-- author -->
        </p>
        <!--/ meta -->
       </section>
       <!--/ Content -->
      </article>
     </div>
     <!--/ Blog post #1 -->
    <?php endfor ?>

   </div>
   <!--/ END row -->
  </div>
 </section>
 <!--/ END Recent Blog Section -->


 <!-- START To Top Scroller -->
 <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
 <!--/ END To Top Scroller -->
</section>
<!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Library script : mandatory -->
        <script type="text/javascript" src="<?=base_url('assets/library/jquery/js/jquery.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/library/jquery/js/jquery-migrate.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/library/bootstrap/js/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/library/core/js/core.min.js')?>"></script>
        <!--/ Library script -->

        <!-- App and page level script -->
        <script type="text/javascript" src="<?=base_url('assets/plugins/sparkline/js/jquery.sparkline.min.js')?>"></script><!-- will be use globaly as a summary on sidebar menu -->
        <script type="text/javascript" src="<?=base_url('assets/javascript/app.js')?>"></script>
        
        
        <script type="text/javascript" src="<?=base_url('assets/plugins/owl/js/owl.carousel.min.js')?>"></script>
        
        <script type="text/javascript" src="<?=base_url('assets/plugins/layerslider/js/greensock.min.js')?>"></script>
        
        <script type="text/javascript" src="<?=base_url('assets/plugins/layerslider/js/transitions.min.js')?>"></script>
        
        <script type="text/javascript" src="<?=base_url('assets/plugins/layerslider/js/layerslider.min.js')?>"></script>
        
        <script type="text/javascript" src="<?=base_url('assets/javascript/pages/frontend/home.js')?>"></script>