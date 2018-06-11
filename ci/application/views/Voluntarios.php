<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Adote um animal | Seja um voluntário</title>

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
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
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
								Seja um voluntário			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="volunteer.html">Seja um voluntário</a></p>
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
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center">
						<form class="col-lg-9">
						  <div class="form-group">
						    <label name="first-name">Primeiro Nome</label>
						    <input type="text" class="form-control" placeholder="Primeiro Nome">
						  </div>
						  <div class="form-group">
						    <label name="last-name">Sobrenome</label>
						    <input type="text" class="form-control" placeholder="Sobrenome">
						  </div>						  
						  <div class="form-group">
						    <label name="Address">Endereço</label>
						    <input type="text" class="form-control mb-20" placeholder="Endereço">
						  </div>						  
						  <div class="form-row">
						  	<div class="col-6 mb-30">
						  		<label name="City">Cidade</label>
						   		<div class="select-option" id="service-select">
									<select>
										<option data-display="Selecione a cidade">Selecione a cidade</option>
                                        <option value="1">Bertioga</option>
										<option value="2">Cubatão</option>
										<option value="3">Guarujá</option>
										<option value="4">Itanhaém</option>
										<option value="5">Mongaguá</option>
                                        <option value="6">Peruíbe</option>
										<option value="7">Praia Grande</option>
										<option value="8">Santos</option>
                                        <option value="9">São Vicente</option>
									</select>
								</div>	
						  	</div>
						  	<div class="col-6 mb-30">
						  		<label name="postal-code">CEP</label>
						   		<input type="text" class="form-control" placeholder="CEP">						  		
						  	</div>						  	
						  	<div class="col-6 mb-30">
						  		<label name="email">E-mail</label>
						   		<input type="email" class="form-control" placeholder="E-mail">
						  	</div>
						  	<div class="col-6 mb-30">
						  		<label name="phone">Número de telefone</label>
						   		<input type="phone" class="form-control" placeholder="Número de telefone">
						  	</div>
						  </div>		

						  <fieldset class="form-group">
							<label name="day">Quais dias você pode ser voluntário?</label>
                            <div class="form-group ">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio1" value="option1"> Segunda
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio2" value="option2"> Terça
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio3" value="option3"> Quarta
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio2" value="option4"> Quinta
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio2" value="option5"> Sexta
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio2" value="option6"> Sábado
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="inlinecheckbox" id="inlineRadio2" value="option6"> Domingo
                                    </label>
                                </div>                                
                            </div>
						  </fieldset>
						  <div class="form-group">
						    <label name="note">Fale sobre você</label>
						    <textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Fale sobre você"></textarea>
						  </div>						  
						  <button type="submit" class="primary-btn float-right">Enviar</button>
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
		<sript src="<?= base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>                                                                                   
        <script src="<?= base_url();?>assets/js/jquery.nice-select.min.js"></script>                                                                                                         
        <script src="<?= base_url();?>assets/js/mail-script.js"></script>
        <script src="<?= base_url();?>assets/js/main.js"></script>    	

		</body>
	</html>