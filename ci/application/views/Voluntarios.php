<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="<?= base_url();?>assets/img/logo.png">
		<meta charset="UTF-8">
		<title>Adote um animal | Seja um voluntário</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS-->
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
				        <a href="<?= base_url();?>index.php/inicio/index"><img src="<?= base_url();?>assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="<?= base_url();?>index.php/Inicio/index">Home</a></li>
				          <li><a href="<?= base_url();?>index.php/inicio/sobre">Sobre nós</a></li>
				          <li><a href="<?= base_url();?>index.php/inicio/voluntario">Seja um voluntário</a></li>				          
				          <li><a href="<?= base_url();?>index.php/inicio/contato">Contato</a></li>
                          <li><a href="<?= base_url();?>index.php/user/register">Registre-se</a></li>
                          <li><a href="<?= base_url();?>index.php/user/login">Login</a></li>			              
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
								Seja um voluntário			
							</h1>	
							<p class="text-white link-nav"><a href="<?= base_url();?>index.php/inicio/index">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?= base_url();?>index.php/inicio/voluntario">Registro de Voluntários</a></p>
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
								<h1 class="mb-20">Quer ajudar? Torne-se um voluntário</h1>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center">
						<form class="col-lg-9" method="POST" action="<?=base_url()?>index.php/Controller_Voluntario/inserir">
						  <div class="form-group">
						    <label>Primeiro Nome</label>
						    <input type="text" name="firstName" class="form-control" placeholder="Primeiro Nome">
						  </div>
						  <div class="form-group">
						    <label>Sobrenome</label>
						    <input type="text" name="lastName" class="form-control" placeholder="Sobrenome">
						  </div>						  
						  <div class="form-group">
						    <label>Endereço</label>
						    <input type="text" name="enderVol" class="form-control mb-20" placeholder="Endereço">
						  </div>						  
						  <div class="form-row">
						  	<div class="col-6 mb-30">
						  		<label>Cidade</label>
						   		<div class="select-option" id="service-select">
									<select name="cidadeVol">
										<?php echo $dados['options_cidades']; ?>
									</select>
								</div>	
						  	</div>
						  	<div class="col-6 mb-30">
						  		<label>CEP</label>
						   		<input type="text" name="cepVol" class="form-control" placeholder="CEP">						  		
						  	</div>						  	
						  	<div class="col-6 mb-30">
						  		<label>E-mail</label>
						   		<input type="email" name="emailVol" class="form-control" placeholder="E-mail">
						  	</div>
						  	<div class="col-6 mb-30">
						  		<label>Número de telefone</label>
						   		<input type="phone" name="celVol" class="form-control" placeholder="Número de telefone">
						  	</div>
						  </div>		
                          <div class="form-group">
						    <label>Quais dias você pode ser voluntário?</label>
						    <input type="text" name="diasDisp" class="form-control" placeholder="Digite os dias da semana. Ex: Segunda, Terça.">
						  </div> 
						  <div class="form-group">
						    <label>Fale sobre você</label>
						    <textarea class="form-control" name="sobreVol" rows="5" placeholder="Fale sobre você" style="width=50px"></textarea>
						  </div>
						  <button type="submit" class="primary-btn float-right">Enviar</button>
                            </div>
						</form>
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