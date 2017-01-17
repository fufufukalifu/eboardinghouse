<style>
	input[type=range] {
		-webkit-appearance: none;
		margin: 10px 0;
		width: 100%;
	}
	input[type=range]:focus {
		outline: none;
	}
	input[type=range]::-webkit-slider-runnable-track {
		width: 100%;
		height: 5px;
		cursor: pointer;
		animate: 0.2s;
		box-shadow: 0px 0px 0px #000000;
		background: #2497E3;
		border-radius: 1px;
		border: 0px solid #000000;
	}
	input[type=range]::-webkit-slider-thumb {
		box-shadow: 0px 0px 0px #000000;
		border: 1px solid #2497E3;
		height: 18px;
		width: 18px;
		border-radius: 25px;
		background: #A1D0FF;
		cursor: pointer;
		-webkit-appearance: none;
		margin-top: -7px;
	}
	input[type=range]:focus::-webkit-slider-runnable-track {
		background: #2497E3;
	}
	input[type=range]::-moz-range-track {
		width: 100%;
		height: 5px;
		cursor: pointer;
		animate: 0.2s;
		box-shadow: 0px 0px 0px #000000;
		background: #2497E3;
		border-radius: 1px;
		border: 0px solid #000000;
	}
	input[type=range]::-moz-range-thumb {
		box-shadow: 0px 0px 0px #000000;
		border: 1px solid #2497E3;
		height: 18px;
		width: 18px;
		border-radius: 25px;
		background: #A1D0FF;
		cursor: pointer;
	}
	input[type=range]::-ms-track {
		width: 100%;
		height: 5px;
		cursor: pointer;
		animate: 0.2s;
		background: transparent;
		border-color: transparent;
		color: transparent;
	}
	input[type=range]::-ms-fill-lower {
		background: #2497E3;
		border: 0px solid #000000;
		border-radius: 2px;
		box-shadow: 0px 0px 0px #000000;
	}
	input[type=range]::-ms-fill-upper {
		background: #2497E3;
		border: 0px solid #000000;
		border-radius: 2px;
		box-shadow: 0px 0px 0px #000000;
	}
	input[type=range]::-ms-thumb {
		box-shadow: 0px 0px 0px #000000;
		border: 1px solid #2497E3;
		height: 18px;
		width: 18px;
		border-radius: 25px;
		background: #A1D0FF;
		cursor: pointer;
	}
	input[type=range]:focus::-ms-fill-lower {
		background: #2497E3;
	}
	input[type=range]:focus::-ms-fill-upper {
		background: #2497E3;
	}
</style>

<!-- START Register Content -->
<section class="section bgcolor-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					<!-- Form horizontal layout -->
					<form class="form-horizontal panel panel-default" action="">           
						<div class="panel-body">
							<!-- TIPE KOSAN -->
							<div class="form-group">
								<label class="control-label col-sm-4">Tipe Kosan <i class="ico-question-sign"></i></label>
								<div class="col-sm-8">
									<input type="radio" name="tipekosan" id="customcheckbox1" class="mb3" value="1">
									<label for="customcheckbox1">&nbsp;&nbsp;Putra</label>&nbsp;&nbsp;&nbsp;&nbsp;


									<input type="radio" name="tipekosan" id="customcheckbox2" class="mb3" value="2">
									<label for="customcheckbox2">&nbsp;&nbsp;Putri</label>&nbsp;&nbsp;&nbsp;&nbsp;


									<input type="radio" name="tipekosan" id="customcheckbox3" class="mb3" value="3">
									<label for="customcheckbox3"  >&nbsp;&nbsp;Campur</label>&nbsp;&nbsp;&nbsp;&nbsp;
								</div>
							</div>
							<!-- TIPE KOSAN -->

							<!-- RENTANG HARGA KOSAN -->
							<div class="form-group">
								<label class="control-label col-sm-4">Rentang Harga</label>
								<div class="col-sm-8">
									<span class="checkbox custom-checkbox custom-checkbox-inverse">

										<input type="range" name="rentang" min="2500000" max="10000000">

										<div class="col-md-12 m0" style="padding:0">
											<!-- <span class="text-right">1</span> -->
											<div class="col-md-6 text-left" style="margin:0;padding:0">Rp.2.000K,-</div>
											<!-- <span class="text-right">1</span> -->
											<div class="col-md-6 text-right" style="margin:0;padding:0">Rp.10.000K,-</div>

										</div>	
									</span>

								</div>
							</div>
							<!-- RENTANG HARGA KOSAN -->
							<!-- fasilitas KOSAN -->
							<div class="form-group">
								<label class="control-label col-sm-4">Fasilitas</i></label>
								<div class="col-sm-8">
									<span class="checkbox custom-checkbox custom-checkbox-inverse">
										<input type="checkbox" name="internet" id="internet" class="mb5" value="1">
										<label for="internet">&nbsp;&nbsp;Internet</label>&nbsp;&nbsp;
										<input type="checkbox" name="wc" id="wc" class="mb5" value="1">
										<label for="wc">&nbsp;&nbsp;WC Di dalam</label>&nbsp;&nbsp;
										<input type="checkbox" name="dapur" id="dapur" class="mb5" value="1">
										<label for="dapur">&nbsp;&nbsp;Dapur</label>&nbsp;&nbsp;
									</span>
									<br>
									<a type="button" class="btn btn-info mb5 btn-search">
										<i class="ico-search"></i> Cari</a>
									<a onclick="load_data()" type="button" class="btn btn-primary mb5 btn-search">
										<i class="ico-file"></i> Reset</a>


									</div>
								</div>
								<!-- fasilitas KOSAN -->
							</form>
							<!--/ Form horizontal layout -->

							<hr>
							<div class="panel panel-default">

								<!-- panel body with collapse capable -->
								<div class="panel-collapse pull out">
									<!-- Loading indicator -->
									<div class="indicator"><span class="spinner"></span></div>
									<!--/ Loading indicator -->
									<hr class="nm"><!-- horizontal line -->
									<div class="panel-body">
										<!-- START row -->
										<div class="row kosancontainer" style="height: 400px;overflow: auto">




										</div>
										<!--/ END row -->
									</div>
								</div>
								<!--/ panel body with collapse capabale -->
							</div>
						</div>

					</div>


					<div class="col-md-6">
						<!-- START panel -->
						<!-- START panel -->
						<div class="panel panel-default">
							<!-- panel heading/header -->
							<!--/ panel heading/header -->
							<!-- panel body with collapse capabale -->
							<div class="panel-collapse">
								<div class="panel-body np" id="gmaps-marker" style="height:730px;"></div>
							</div>
							<!--/ panel body with collapse capabale -->
						</div>
						<!--/ END panel -->
					</div>

				</div>
			</div>
		</div>
	</section>


	<script type="text/javascript">
		var base_url = "<?=base_url() ?>";
		var map;
		var gmarkers = [];



		function load_data(){
			url = base_url+"index.php/iklankosan/data";
			get_data(url);
			$('input[name=tipekosan]').attr('checked', false);
			$('.form-horizontal').reset();
		}
		$('document').ready(function(){
			load_data();
		})

		function initMap() {
		//	UNTUK SET GOOGLE MAPSNYA //
		map = new google.maps.Map(document.getElementById('gmaps-marker'), {
			center: {lat: -6.869927, lng: 107.591320},
			zoom: 14
		});



	}

	function get_data(url){
		$.post(url, function(data) {
			$.each( data, function( key, val ) {
				set_kosan(val);
				set_marker(val);
			});
		},
		'json'); 
	}

	function get_data_search(parameter,url){
		var dataKirim = {"tipe":parameter.tipe_kosan,"internet":parameter.internet,"wc":parameter.wc,"dapur":parameter.dapur};
		console.log(dataKirim);
		$.post(url,dataKirim,function(data) {
			$.each( data, function( key, val ) {
				if (val=="") {
					alert('masuk');
				}
				set_kosan(val);
				set_marker(val);
			});
		},
		'json').fail(function(evt){ 
			console.log("asdasd");
		});; 
	}

	function set_kosan(data){
		base = "<?=base_url() ?>";
		img = base+'assets/imagekosan/kosan'+data.id+'.jpg';
		imgplace = base+'/assets/image/portfolio/placeholder.jpg';

		kosan_konten = '<div class="col-sm-6 shuffle mb15">'+

		'<div class="thumbnail nm">'+

		'<div class="media">'+

		'<div class="indicator"><span class="spinner"></span></div>'+

		'<div class="overlay">'+
		'<div class="toolbar">'+
		'<a title="Lihat Kosan" href="'+base_url+"index.php/iklankosan/detailkosan/"+data.id+'" class="btn btn-success"><i class="ico-home8"></i></a>'+
		'</div>'+
		'</div>'+

		'<img  src="http://localhost/ekosan/assets/imagekosan/kosan'+data.id+'.jpg" data-src="http://localhost/ekosan/assets/imagekosan/kosan'+data.id+'.jpg" alt="Photo" width="100%" />'+
		'</div>'+

		'</div>'+


		'<h4 class="font-alt text-center mb10">'+data.namaIklanKosan+'</h4>'+
		'<div class="text-center">'+
		'<i class="ico-tags text-muted mr5"></i>'+
		'<a title="diupload oleh"  class="text-muted">Dibuat : '+data.createdBy+'</a>'+
		'</div>'+

		'</div>';
		$('.kosancontainer').append(kosan_konten);
    	// return kosan_konten;
    }

    function set_marker(data){
		// untuk set toolstip //
		contentString = '<a href='+base_url+"index.php/iklankosan/detailkosan/"+data.id+' class="label label-success">'+data.namaIklanKosan+
		" Rp. "+data.HargaKosan+'</a>';
		infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		// buat marker //
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(parseFloat(data.lat),parseFloat(data.long)),
			map: map,
			icon:"https://cdn3.iconfinder.com/data/icons/luchesa-vol-9/128/Home-20.png",
			title: data.namaIklanKosan
		});

		// Push your newly created marker into the array:
		gmarkers.push(marker);






		//tampilin marker//
		infowindow.open(map, marker);
        // ketika marker diklik//
        marker.addListener('click', function() {
        	window.location = base_url+"/iklankosan/detailkosan/"+data.id;
        });
       }



       function drop_marker(){
       	for(i=0; i<gmarkers.length; i++){
       		gmarkers[i].setMap(null);
       	}
       }

       $('.btn-search').click(function(){
       	var parameter ={
       		"tipe_kosan":$('input[name=tipekosan]:checked').val(),
       		"rentang_awal":1,
       		"rentang_akhir":1,
       		"internet":$('input[name=internet]:checked').val(),
       		"wc":$('input[name=wc]:checked').val(),
       		"dapur":$('input[name=dapur]:checked').val()
       	};


       	$('.kosancontainer').html("");
       	url = base_url+"/index.php/iklankosan/data_coba";
       	get_data_search(parameter,url);
       	drop_marker();
       })
      </script>
      <script type="text/javascript" src="<?=base_url('assets/library/jquery/js/jquery.min.js') ?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/library/jquery/js/jquery-migrate.min.js') ?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/library/bootstrap/js/bootstrap.min.js') ?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/library/core/js/core.min.js') ?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/plugins/sparkline/js/jquery.sparkline.min.js')?>"></script><!-- will be use globaly as a summary on sidebar menu -->

      <script type="text/javascript" src="<?=base_url('assets/javascript/app.min.js') ?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/plugins/magnific/js/jquery.magnific-popup.min.js') ?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/plugins/shuffle/js/jquery.shuffle.min.js') ?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/plugins/owl/js/owl.carousel.min.js') ?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/javascript/pages/frontend/portfolio.js') ?>"></script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3do9pXzyVLggsmJnvs7e2KoxT7wKKQxA&callback=initMap">
     </script>
        <script type="text/javascript" src="<?=base_url('assets/javascript/components/button.js')?>"></script>
