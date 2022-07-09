
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sistema Integral de Salud</title>
		<link href="css/style1.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<!--<a href="index.html" style="font-size: 40px; color: #fff; font-weight: bold;">Sistema Integral de Salud</a>-->
					<a href="index.html" ><img src="sisi.jpg" alt="" style="width: 20%;"></a>
					<div class="top-nav">
						<ul>
							<li class="active"><a href="#">Inicio</a></li>
							
							<li><a href="#">Contacto</a></li>
						</ul>					
					</div>
				</div>
				<!--end-logo-->
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		<div class="clear"> </div>
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="img/bg1.jpg" alt=""></li>
						  <li><img src="img/bg2.jpg" alt=""></li>
					      <li><img src="img/slider-image2.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">
								
							
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="img/6.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Pacientes</h3>
						  <div class="button"><span><a href="LoginPaciente.php">Ingrese</a></span></div>
				    </div>
				</div>	

				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="img/4.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Doctor</h3>
						
						  <div class="button"><span><a href="#">Ingrese</a></span></div>
					</div>
				</div>


					<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="img/5.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Administrador</h3>
						
						  <div class="button"><span><a href="LoginAdmin.php">Ingrese</a></span></div>
				     </div>
				</div>			
			</div>
		    </div>
		   </div>
		   	<div class="wrap">
				<div class="content-box">
		   		</div>
		   	</div>

		<!--end-wrap-->
	</body>
</html>

