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
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
			<script type="text/javascript" src="<?= base_url();?>assets/js/registerpet.js"></script>
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
	              		  <li style="color:white;font-weight:bold;font-size:14px;">Bem vindo,  <?= $primeironome ?></li>
				          <li> <form method="POST" action="/ci/index.php/user/logout">
                                <input type="submit" class="genric-btn primary small" value="Logout"/>
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
								Registro de Animais	
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

						<form method="POST" action="https://gerenciadordeadocao-camilacamargo98.c9users.io/ci/index.php/Register_Animal/inserir" enctype="multipart/form-data" class="col-lg-3">
						  <div class="form-row">
						  	
					  <div class="form-group">
						    <h3 for="first-name">Nome</h3>
						    <input type="text" name="nome" class="form-control" placeholder="(Opcional)">
						  </div>
						  
						  	<div class="single-element-widget mt-30 boxsearch">
									<h3 class="col-12 mb-30" for="especies">Espécie</h3>
									<div class="default-select" id="default-select">
										<select id="especies" name="especies" class="form-control">
										    <?php echo $options_especies; ?>
										</select>
									</div>
							</div>
							
							<div class="single-element-widget mt-30 boxsearch">
									<h3 class="col-12 mb-30" for="racas">Raça</h3>
									<div class="default-select" id="default-select">
										<select id="racas" name="racas" class="form-control">
										 	<option>Selecione a espécie acima</option>
										</select>
									</div>
							</div>
								
                               <div class="single-element-widget mt-30 boxsearch">
									<h3 class="col-12 mb-30" for="cores">Cor</h3>
									<div class="default-select" id="default-select" >
										<select id="cores" name="cores" class="form-control">
										    <?php echo $options_cores; ?>
										</select>
									</div>
								</div>
                            
                            <div class="single-element-widget mt-30 boxsearch">
									<h3 class="col-12 mb-30" for="idades">Idade</h3>
									<div class="default-select" id="default-select">
										<select id="idades" name="idades" class="form-control">
										    <?php echo $options_idades; ?>
										</select>
									</div>
								</div>
                              <div class="single-element-widget mt-30 boxsearch">
									<h3 class="col-12 mb-30" for"sexo">Sexo</h3>
									<div class="default-select" id="default-select">
										<select id"sexo" name="sexo" class="form-control">
										    <?php echo $options_sexos; ?>
										</select>
									</div>
								</div>
								
								  <div class="form-group">
						    <h3 for="first-name">Mais Descrições</h3>
						    <input type="text" name="descricao" class="form-control" placeholder="(Opcional)">
						  </div>
						 
						  </div>							  
						  <button type="submit" name="submit" class="primary-btn">Registrar</button>
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
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		</body>
	</html>