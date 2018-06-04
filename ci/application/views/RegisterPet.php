<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?= base_url();?>assets/img/logo.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Adote um animal | Registro de animais</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?= base_url();?>assets/css/linearicons.css">
			<link rel="stylesheet" href="<?= base_url();?>assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
			<link rel="stylesheet" href="<?= base_url();?>assets/css/magnific-popup.css">
			<link rel="stylesheet" href="<?= base_url();?>assets/css/nice-select.css">							
			<link rel="stylesheet" href="<?= base_url();?>assets/css/animate.min.css">
			<link rel="stylesheet" href="<?= base_url();?>assets/css/owl.carousel.css">
			<link rel="stylesheet" href="<?= base_url();?>assets/css/main.css">
		</head>
		<body>
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="<?= base_url();?>assets/img/logo.png" alt="Logo do Abrigo" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="about.html">Sobre nós</a></li>
				          <li><a href="volunteer.html">Seja um voluntário</a></li>				          
				          <li><a href="contact.html">Contato</a></li>
                          <li><a href="register.html">Registre-se</a></li>
                          <li><a href="login.html">Login</a></li>		              
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Registro de animais	
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?= base_url();?>index.php/Register_Animal/showRegister">Registro de animais</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start Volunteer-form Area -->
			<section class="Volunteer-form-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-20">Registre o animal</h1>
						</div>
					</div>						
					<div class="row justify-content-center">
						<form method="POST" action="ci/index.php/Register_Animal/complete" class="col-lg-3">

	  
						  <div class="form-row">
					  <div class="form-group">
						    <h3 for="first-name">Nome</h3>
						    <input type="text" class="form-control" placeholder="Nome (opcional)">
						  </div>
									<h3 class="col-12 mb-30" for="especie">Espécie</h3>
									<div class="default-select" id="default-select">
										<select id="especies" name="especie">
										    <?php echo $options_especies ?>
										</select>
									</div>
                            <div class="single-element-widget mt-30 boxsearch">
									<h3 class="col-12 mb-30 ">Raça</h3>
									<div class="default-select" id="default-select">
										<select>
											
										</select>
									</div>
								</div>
                            
                               <div class="single-element-widget mt-30 boxsearch">
									<h3 class="col-12 mb-30">Cor</h3>
									<div class="default-select" id="default-select">
										<select>
										    <option value="1">-</option>
											<option value="1">Branco</option>
											<option value="1">Preto</option>
											<option value="1">Creme</option>
											<option value="1">Cinza</option>
											<option value="1">Branco, Preto e Creme</option>
                                            <option value="1">Creme e Preto</option>
                                            <option value="1">Branco e Cinza</option>
                                            <option value="1">Branco e Creme</option>
										</select>
									</div>
								</div>
                            
                            <div class="single-element-widget mt-30 boxsearch">
									<h3 class="col-12 mb-30">Idade</h3>
									<div class="default-select" id="default-select">
										<select>
										    <option value="1">-</option>
											<option value="1">< 3 meses</option>
											<option value="1">3 meses - 6 meses</option>
											<option value="1">6 meses - 1 ano</option>
											<option value="1">1 ano ></option>
										</select>
									</div>
								</div>
                              <div class="single-element-widget mt-30 boxsearch">
									<h3 class="col-12 mb-30">Sexo</h3>
									<div class="default-select" id="default-select">
										<select>
										    <option value="1">-</option>
											<option value="1">Feminino</option>
											<option value="1">Masculino</option>
										</select>
									</div>
								</div>
                              <!--<div class="single-element-widget mt-30 boxsearch">
									<h3 class="col-6 mb-30">Tempo de abrigo</h3>
									<div class="default-select" id="default-select">
										<select>
											<option value="1"> < 3 meses </option>
											<option value="1">3 meses - 6 meses</option>
											<option value="1">6 meses - 1 ano</option>
											<option value="1">1 ano ></option>
										</select>
									</div>
								</div>-->
								
						  </div>							  
						  <button type="submit" class="primary-btn">Registrar</button>
						</form>
					
                    </div>
                </div>
                </div>
			</section>
			<!-- End Volunteer-form Area -->
																							
			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="copyright-text">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between">
							<p class="col-lg-8 col-sm-6 footer-text m-0 text-white">
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script>
                                Desenvolvido por Camila, Luis Felipe e Luiza</p>
						</div>						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="<?= base_url();?>assets/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?= base_url();?>assets/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="<?= base_url();?>assets/js/easing.min.js"></script>			
			<script src="<?= base_url();?>assets/js/hoverIntent.js"></script>
			<script src="<?= base_url();?>assets/js/superfish.min.js"></script>	
			<script src="<?= base_url();?>assets/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?= base_url();?>assets/js/jquery.magnific-popup.min.js"></script>	
			<script src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>						
			<script src="<?= base_url();?>assets/js/jquery.nice-select.min.js"></script>							
			<script src="<?= base_url();?>assets/js/mail-script.js"></script>	
			<script src="<?= base_url();?>assets/js/main.js"></script>	
		</body>
	</html>