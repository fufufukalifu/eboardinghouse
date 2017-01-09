             
<link rel="stylesheet" href="../assets/plugins/owl/css/owl.carousel.min.css">

<link rel="stylesheet" href="../assets/plugins/layerslider/css/layerslider.min.css">

<section id="layerslider" style="width:100%;height:480px;">
 <div class="ls-slide" data-ls="transition2d:1; slidedelay:8000;">
  <!-- slide background -->
  <img src="../assets/image/layerslider/bg3.png" class="ls-bg">
  <!--/ slide background -->

  <!-- Layer #1 -->
  <img class="ls-l" style="top:90px;left:68%;" src="../assets/image/layerslider/layer/people2.png" data-ls="delayin:1000; easingin:easeOutElastic;">
  <!--/ Layer #1 -->

  <!-- Layer #2 -->
  <h1 class="ls-l font-alt" style="top:110px;left:150px;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
   Welcome To <span class="text-primary">Adminre</span> 
  </h1>
  <!--/ Layer #2 -->

  <!-- Layer #3 -->
  <h4 class="ls-l font-alt thin text-default" style="top:170px;left:150px;width:550px;" data-ls="offsetxin:0; durationin:2000; delayin:2000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
   Adminre is a clean and flat backend and frontend theme build with Twitter bootstrap 3.1.1
  </h4>
  <!--/ Layer #3 -->

  <!-- Layer #4 -->
  <p class="ls-l text-default" style="top:230px;left:150px;width:550px;" data-ls="offsetxin:0; durationin:2000; delayin:2500; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   consequat.
  </p>
  <!--/ Layer #4 -->

  <!-- Layer #5 -->
  <a href="javascript:void(0);" class="ls-l btn btn-primary" style="top:310px; left:150px;" data-ls="offsetxin:0; durationin:2000; delayin:3000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
   Purchase Now <i class="ico-angle-right ml5"></i>
  </a>
  <!--/ Layer #5 -->

  <!-- Layer #6 -->
  <img class="ls-l" style="top:320px;left:280px;" src="../assets/image/layerslider/layer/arrow.png" data-ls="delayin:3500; offsetxin:0; offsetyin:-30; easingin:easeOutElastic;">
  <!--/ Layer #6 -->
 </div>
 <!-- Slide #1 -->

 <!-- Slide #2 -->
 <div class="ls-slide" data-ls="transition2d:1; slidedelay:8000;">
  <!-- slide background -->
  <img src="../assets/image/layerslider/bg2.png" class="ls-bg" alt="Slide background">
  <!--/ slide background -->

  <!-- Layer #1 -->
  <h4 class="ls-l font-alt thin text-default text-right" style="top:120px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:0;">
   Fully Responsive &amp; Clean Design
  </h4>
  <!--/ Layer #1 -->

  <!-- Layer #2 -->
  <h1 class="ls-l font-alt text-right" style="top:150px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:500;">
   <span class="text-primary">Mobile</span> Devices Optimize
  </h1>
  <!--/ Layer #2 -->

  <!-- Layer #3 -->
  <p class="ls-l text-default text-right" style="top:210px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:1000;">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   consequat.
  </p>
  <!--/ Layer #3 -->

  <!-- Layer #5 -->
  <p class="ls-l text-default text-right" style="top:290px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:1500;">
   <a href="javascript:void(0);" class="btn btn-primary">
    Learn More <i class="ico-angle-right ml5"></i>
   </a>
  </p>
  <!--/ Layer #5 -->

  <!-- Layer #6 -->
  <img class="ls-l" style="top:20px;left:250px;" src="../assets/image/layerslider/layer/iphone-5s.png" data-ls="delayin:2000; easingin:easeOutElastic;">
  <!--/ Layer #6 -->
 </div>
 <!-- Slide #2 -->
</section>

<!-- START Call To Action Section -->
<section class="section bgcolor-primary">
 <div class="container">
  <div class="col-sm-12">
   <h3 class="font-alt text-white mt0">            <!-- START navbar form -->
    <form action="" role="search">
     <div class="has-icon">
      <input type="text" class="form-control" placeholder="Cari Kosan...">
      <i class="ico-search form-control-icon"></i>
     </div>
    </form>
    <!-- START navbar form --></h3>
   </div>
  </div>
 </section>
 <!-- END Call To Action Section -->

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
         <?php  $img = "../assets/imagekosan/kosan".$i.".jpg" ?>
         <img data-toggle="unveil" src="../assets/image/background/blog/placeholder.jpg" data-src="<?=$img ?>" alt="Photo" height="160px">
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
