	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="<?= base_url();?>assets/img/logo.png">
		<meta charset="UTF-8">
		<title>Adote um animal | Contato</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS -->
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
				        <a href="<?= base_url();?>index.php/user/dashboard"><img src="<?= base_url();?>assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="<?= base_url();?>index.php/User/dashboard">Home</a></li>
				          <li class="menu-active"><a href="<?= base_url();?>index.php/Animal_Results/showResults">Adoção</a></li>
				          <li class="menu-active"><a href="<?= base_url();?>index.php/Inicio/sobrelog">Sobre nós</a></li>
				          <li class="menu-active"><a href="<?= base_url();?>index.php/Inicio/voluntariolog">Seja um voluntário</a></li>				          
				          <li class="menu-active"><a href="<?= base_url();?>index.php/Inicio/contatolog">Contato</a></li>
                          <li style="color:white;font-weight:bold;font-size:14px;">Bem vindo(a),  <?= $primeironome ?></li>
				          <li> <form method="POST" action="/ci/index.php/user/logout">
                                <input type="submit" class="genric-btn primary small" value="Logout"/>
                          </form> </li>		              
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
								Contato				
							</h1>	
							<p class="text-white link-nav"><a href="<?= base_url();?>index.php/User/dashboard">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?= base_url();?>index.php/inicio/contatolog"> Contato</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<form class="form-area " action="<?=base_url()?>index.php/Controller_Contatos/postEmail" method="POST" id="myForm"  class="contact-form text-right">
								<div class="row">	
									<div class="col-lg-6 form-group">
									
										<input name="name" placeholder="Nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="E-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" class="common-input mb-20 form-control" required="" type="email">
									
										<input name="subject" placeholder="Assunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6 form-group">
									
										<textarea class="common-textarea form-control" name="message" placeholder="Mensagem" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" required=""></textarea>						
									</div>
									<div class="col-lg-12 d-flex justify-content-between">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="primary-btn" style="float: right;" type="submit" value="Enviar">Enviar</button>		
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

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
	</html>


	