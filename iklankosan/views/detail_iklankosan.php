        <link rel="stylesheet" href="<?=base_url('assets/stylesheet/layout.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/stylesheet/uielement.css')?>">      
        <link rel="stylesheet" href="<?=base_url('assets/plugins/owl/css/owl.carousel.min.css')?>">
        <div class="container">
        	<section class="jumbotron jumbotron-bg3 container" style="height: 300px;width: 100%">
        		<div class="section">
        			<!-- pattern + overlay -->
        			<div class="overlay pattern pattern10"></div>
        			<!-- pattern + overlay -->
        			<div class="container">
        				<!-- START row -->
        				<div class="row">
        					<!-- example 1 -->
        					<div class="col-sm-12 owl-carousel" id="customer-reviews">
        						<!-- review #1 -->
        						<?php for ($i=1;$i<9;$i++): ?>
        							<div class="item text-center pt5">
        								<img src="<?=base_url('assets/contohkosan/'.$i.'.jpg')?>" height="200px">
        							</div>
        						<?php endfor ?>



        					</div>
        					<!--/ example 1 -->
        				</div>
        				<!--/ END row -->
        			</div>
        		</div>
        	</section>
        </div>

        <div class="container bgcolor-white" >
        	<div class="section">
        		<div class="col-md-2">
        			<img src="<?=base_url('assets/image/avatar/avatar6.jpg')?>" class="img-responsive">
        		</div>	   

        		<div class="col-md-8">
        			<h4>{judul_halaman} <a href="" class="btn btn-default"><i class="ico-mail"></i></a></h4>
        			<p><i class="ico-home"></i> {alamat}</p> 
        			<a href="" class="btn btn-success">Rp. {harga} / Tahun</a> | <a href="" class="btn btn-warning"><i class="ico-plus"></i></a>
        		</div>
        	</div>
        </div>

        <div class="container bgcolor-white" >
        	<hr>
        	<div class="section col-md-8 col-md-offset-2">
        		<h3>Mengenai {judul_halaman}</h3>
        		<blockquote class="blockquote-reverse">
        			<p>{deskripsi}</p>
        			<footer>{penulis}</cite></footer>
        		</blockquote>
        		<hr>
        		<div class="col-md-12">

        			<div class="col-md-4">
        				<h4> Faslitas :</h4>
        			</div>

        			<div class="col-md-6">
        				<span class="checkbox custom-checkbox custom-checkbox-inverse">
        					<input disabled="true" type="checkbox" name="internet" id="internet" class="mb5" {status_internet} >
        					<label for="internet">&nbsp;&nbsp;Internet</label>&nbsp;&nbsp;<br><br>
        					<input disabled="true" type="checkbox" name="wc" id="wc" class="mb5" {status_wc} >
        					<label for="wc">&nbsp;&nbsp;WC Di dalam</label>&nbsp;&nbsp;<br><br>
        					<input disabled="true" type="checkbox" name="dapur" id="dapur" class="mb5" {status_wc} >
        					<label for="dapur">&nbsp;&nbsp;Dapur</label>&nbsp;&nbsp;<br><br>
        				</span>
        			</div>
        		</div>

        		<div class="col-md-12">
        			<hr>
        			<div class="col-md-4">
        				<h4> Peraturan :</h4>
        			</div>

        			<div class="col-md-6">
        				<span class="checkbox custom-checkbox custom-checkbox-inverse">
        					<p>{rules}</p>
        				</span>
        			</div>

        		</div>

        		<div class="col-md-12">
        		Kirim Review<br><br>
        		<textarea class="form-control" height="740px"></textarea>
        		
        		</p> 
        			<a href="" class="btn btn-success">Kirim
        			<i class="ico-send"></i></a>
        		</div>
        		</div>

        	</div>

        </div>

        <script type="text/javascript" src="<?=base_url('assets/plugins/owl/js/owl.carousel.min.js') ?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/javascript/pages/frontend/home.js') ?>"></script>
        <script type="text/javascript" src="<?=base_url('assets/javascript/pages/frontend/home.js')?>"></script>
