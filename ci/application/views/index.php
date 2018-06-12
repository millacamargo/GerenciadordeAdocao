<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="<?= base_url();?>assets/img/logo.png">
		<meta charset="UTF-8">
		<title>Adote um animal</title>

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
			<!--Inicio header-->
			  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="<?= base_url();?>index.php/inicio/index"><img src="<?= base_url();?>assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="<?= base_url();?>index.php/inicio/index">Home</a></li>
				          <li><a href="<?= base_url();?>index.php/inicio/sobre">Sobre nós</a></li>
				          <li><a href="<?= base_url();?>index.php/inicio/voluntario">Seja um voluntário</a></li>				          
				          <li><a href="<?= base_url();?>index.php/inicio/contato">Contato</a></li>
                          <li><a href="<?= base_url();?>index.php/user/register">Registre-se</a></li>
                          <li><a href="<?= base_url();?>index.php/user/login">Login</a></li>
				        </ul>
				      </nav><!-- Fim menu -->		    		
			    	</div>
			    </div>
			  </header><!-- Fim header -->

			<!-- Inicio banner -->
			<section class="banner-area relative" id="home">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-8 col-md-12">
							<h1 class="text-uppercase">
								Adote um pet, <br>
								Eles precisam da sua ajuda!		
							</h1>
							<p class="text-white sub-head">
								Faça o bem, ajude algum bichinho a fazer parte de uma família
							</p>
							<a href="<?= base_url();?>index.php/user/login" class="primary-btn header-btn text-uppercase">Encontre um pet para adoção</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- Fim banner-->

			<!-- Inicio da area de processo -->
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
						<div class="col-lg-4 col-md-8">
							<div class="single-process">
								<span class="lnr lnr-thumbs-up"></span>
								<a href="#">
									<h4>
										Seleção
									</h4>
								</a>
								<p>
									Escolha seu pet, temos um que com certeza irá adorar o seu carinho!
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-8">
							<div class="single-process">
								<span class="lnr lnr-user"></span>
								<a href="#">
									<h4>
										Reunião de autoridade
									</h4>
								</a>
								<p>
									Em 48 horas entraremos em contato com você para marcarmos uma reunião.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-8">
							<div class="single-process">
								<span class="lnr lnr-magic-wand"></span>
								<a href="#">
									<h4>
										Indo para a nova família
									</h4>
								</a>
								<p>
									Depois de todos os trâmites, é chegada a hora do pet ganhar um novo lar!
								</p>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- Fim da area de processo -->

			<!-- Inicio da area de voluntario -->
			<section class="calltoaction-area section-gap relative">
				<div class="container">
					<div class="overlay overlay-bg"></div>						
					<div class="row align-items-center justify-content-center">
						<h1 class="text-white">Quer ajudar? Torne-se um voluntário</h1>
						<p class="text-white">Fazer o bem é um dos privilégios que a vida nos dá a chance. A troca e a sensação de fazer algo para mudar o mundo é recompensadora. Temos espaços para todas as áreas! Você pode participar dos bazares, ajudar com tratamento veterinário e até com a parte audiovisual. Clique em Registrar-se e preencha o formulário e aguarde nosso contato! Temos certeza que você vai poder nos ajudar em algo!</p>
						<div class="buttons d-flex flex-row">
							<a href="<?= base_url();?>index.php/inicio/volunteer" class="primary-btn text-uppercase">Registre-se agora</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- Fim da area de voluntario -->
			
			<!-- Inicio da area de footer -->		
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
			<!-- Fim da area de footer -->	

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