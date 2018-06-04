<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="<?= base_url();?>assets/img/fav.png">
		<meta charset="UTF-8">
		<title>Animal Shelter | Login</title>

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
		    <!-- Inicio do header -->
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/inicio/index"><img src="<?= base_url();?>assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <!--Inicio do menu-->
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/inicio/index">Home</a></li>
				          <li><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/inicio/about">Sobre nós</a></li>
				          <li><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/voluntario/volunteer">Seja um voluntário</a></li>				          
				          <li><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/contato/contact">Contato</a></li>
                          <li><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/usuario/register">Registre-se</a></li>
                          <li><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/usuario/login">Login</a></li>				              
				        </ul>
				      </nav><!-- Fim do menu -->		    		
			    	</div>
			    </div>
			  </header><!-- Fim do header -->

			<!-- Inicio do Banner -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Login	
							</h1>	
							<p class="text-white link-nav"><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/inicio/index">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/usuario/login">Login</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- Fim do Banner -->	
            
            <!-- Inicio do form de login -->
            <div id="formlogin">
			<section class="Volunteer-form-area section-gap">
				<div class="container">
				    <form class="col-lg-12" method="POST" action="/ci/index.php/usuario/autenticar">
						  <div class="form-group">
						  	<div class="col-6 mb-20">
						  	<h2 style="margin:0 120px 10px 120px;font-size:10px;color:red;"><?= $msgErro ?></h2>
						   		<input name="email" type="email" class="form-control" placeholder="Digite seu e-mail">
						  	</div>
                            <div class="col-6 mb-20">
						   		<input name="password" type="password" class="form-control" placeholder="Digite sua senha">
						  	</div>
						  </div>
						  <input type="submit" value="Entrar" class="primary-btn btnlogin" style="200px"/>
				    </form>
                </div>
			</section>
            </div>
            <!-- Fim do form de login -->
																							
			<!-- Inicio do footer -->		
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
			<!-- Fim do footer -->

            <!--JS-->
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