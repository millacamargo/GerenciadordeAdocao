<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="<?= base_url();?>assets/img/logo.png">
		<meta charset="UTF-8">
		<title>Adote um animal | Resultados</title>

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
				        <a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/dashboard"><img src="<?= base_url();?>assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/user/dashboard">Home</a></li>
				          <li><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/inicio/sobrelog">Sobre nós</a></li>
				          <li><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/inicio/voluntariolog">Seja um voluntário</a></li>				          
				          <li><a href="https://gerenciadordeadocao-lfvasconcellos.c9users.io/ci/index.php/inicio/contatolog">Contato</a></li>
				          <li style="color:white;font-weight:bold;font-size:14px;">Bem vindo</li>
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
								Animais Requisitados
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?= base_url();?>index.php/Required_Animals/showRequired">Animais Requisitados</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
            <div class="whole-wrap">
				<div class="container">
                    	<h2>Animais Requisitados</h2>
                    <div class="table-responsive">
                    	<table class="table">
    					<thead>
    						<tr>
    						<th>Nome</th>
    						<th>Espécie</th>
    						<th>Raça</th>
    						<th>Nome Usuário</th>
    						<th>E-mail</th>
    						<th>Data da requisição</th>
    						</tr>
    					</thead>
    					<tbody>
    					<?php foreach ($results as $info){ ?>
					     	<tr>
					            <td><?php echo $info['nome']; ?></td>
					        	<td><?php echo $info['especie'];?></td>
					        	<td><?php echo $info['raca'];?></td>
					        	<td><?php echo $info['primeironome'];?></td>
					        	<td><?php echo $info['email'];?></td>
					        	<td><?php echo $info['dt_requisicao'];?></td>
					        	<!--<td><button type="submit" name="submit" class="primary-btn">Adotar</button></td>-->
					      	</tr>
      					<?php } ?>
    					</tbody>
    				</table>
    			</div>
			</div>
			</div>
																							
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
				
			</div>
  			
			</footer>
			<!-- End footer Area -->	

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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