	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta charset="UTF-8">
		<title>Adote um animal | Dashboard </title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!-- CSS -->
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
				        <a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/dashboard"><img src="<?= base_url();?>assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/dashboard">Home</a></li>
				          <li><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/inicio/sobrelog">Sobre nós</a></li>
				          <li><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/inicio/voluntariolog">Seja um voluntário</a></li>				          
				          <li><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/inicio/contatolog">Contato</a></li>
				          <li style="color:white;font-weight:bold;font-size:14px;">Bem vindo,  <?= $primeironome ?></li>
				          <li> <form method="POST" action="/ci/index.php/user/logout">
                                <input type="submit" class="genric-btn primary small" value="Logout"/>
                          </form> </li>
				        </ul>
				      </nav><!-- Fim do menu -->		    		
			    	</div>
			    </div>
			  </header><!-- Fim do header -->

			<!-- Inicio Banner -->
			<section class="banner-area relative" id="home">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-8 col-md-12">
							<h1 class="text-uppercase">
								Adote-nos, <br>
								Precisamos da sua ajuda!		
							</h1>
							<p class="text-white sub-head">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp
								or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
							<a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/Animal_Results/showResults" class="primary-btn header-btn text-uppercase">Encontre um pet para adoção</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- Fim da area de banner-->

			<!-- Area de processo de doação -->
			<section class="process-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Processo para adoção de um pet</h1>
								<p>Veja como é simples o processo para adoção de um pet!</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-thumbs-up"></span>
								<a href="#">
									<h4>
										Seleção
									</h4>
								</a>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
								</p>
							</div>
						</div>
                        <div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-license"></span>
								<a href="#">
									<h4>
										Preenchimento do formulário de adoção
									</h4>
								</a>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-user"></span>
								<a href="#">
									<h4>
										Reunião de autoridade
									</h4>
								</a>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-process">
								<span class="lnr lnr-magic-wand"></span>
								<a href="#">
									<h4>
										Indo para a nova família
									</h4>
								</a>
								<p>
									inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- Fim da area de processo de doação -->

			<!-- Inicio da area de voluntario -->
			<section class="calltoaction-area section-gap relative">
				<div class="container">
					<div class="overlay overlay-bg"></div>						
					<div class="row align-items-center justify-content-center">
						<h1 class="text-white">Quer ajudar? Torne-se um voluntário</h1>
						<p class="text-white">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
						</p>
						<div class="buttons d-flex flex-row">
							<a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/welcome/volunteerlogado" class="primary-btn text-uppercase">Registre-se agora</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- Fim da area de voluntario -->
			
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
            
            <!-- js -->
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