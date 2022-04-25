<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>Generator ciastka</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="cookie.css">
    <link rel="stylesheet" href="main.css">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function myFunction0() {
  		var x = document.getElementById("myDIV");
  		if (x.style.display === "none") {
    		x.style.display = "block";
  		} else {
    		x.style.display = "none";
  		}
		}
		function myFunction1() {
  		var x = document.getElementById("myDIV1");
  		if (x.style.display === "none") {
    		x.style.display = "block";
  		} else {
    		x.style.display = "none";
  		}
		}
		function myFunction2() {
  		var x = document.getElementById("myDIV2");
  		if (x.style.display === "none") {
    		x.style.display = "block";
  		} else {
    		x.style.display = "none";
  		}
		}
		function myFunction3() {
  		var x = document.getElementById("myLinks");
  		if (x.style.display === "block") {
    		x.style.display = "none";
  		} else {
    		x.style.display = "block";
  		}
		}
		function open_nav_user() {
  		var x = document.getElementById("open_user");
  		if (x.style.display === "block") {
    		x.style.display = "none";
  		} else {
    		x.style.display = "block";
  		}
		}
		function launch_toast() {
    	var x = document.getElementById("toast")
    	x.className = "show";
    	setTimeout(function() {
    		x.className = x.className.replace("show", "");
    	}, 5000);
		}
		$(document).ready(function () {
  		$(window).scroll(function () {
    		var windowScroll = $(window).scrollTop();
    		if (windowScroll > 165) {
      		$(".top").fadeIn(300);
    		} else {
      		$(".top").fadeOut(300);
    		}
  		});
  		$(".top").click(function () {
    		$("html,body").animate({ scrollTop: $("html").offset().top });
    		return false;
  		});
		});
	</script>
	<style>
		html {
  		scroll-behavior: smooth;
		}
		.top {
		  width: 50px;
		  height: 50px;
		  line-height: 50px;
		  text-align: center;
		  position: fixed;
		  bottom: 50px;
		  right: 50px;
		  border-radius: 50%;
		  text-decoration: none;
		  display: none;
		  animation: .3s;
		}
	</style>
</head>
<body>
	<div id="page-container">
	  <div id="content-wrap">
			<header></header>
<!-- 			<nav>
			  <div class="navbar navbar-dark p-3" style="background: rgb(111,87,73); background: linear-gradient(270deg, rgba(111,87,73,1) 0%, rgba(124,97,82,1) 40%, rgba(99,77,65,1) 100%); min-height: 75px; box-shadow: 0px -4px 24px 0px rgba(124, 97, 82, 1);">
			    <a class="navbar-brand text-center" href="main.php" id="navbar">
			      <h3 class="left mb-0">Cookie</h3>
			    </a>
			    <form class="form-inline" id="navbar-button">
			      <button class="btn btn-login rounded mr-1" type="button" onclick="location.href='login.php'">Zaloguj się</button>
			      <button class="btn btn-register rounded" type="button" onclick="location.href='register.php'">Zarejestruj się</button>
			      <button class="btn btn-hamburger p-0"type="button" onclick="myFunction3()"><i class="fas fa-bars" style="color: #ffffff; font-size: 36px;"></i></button>
			    </form>
			  </div>
			  <div class="px-3 pb-3 justify-content-end myLinks" id="myLinks" style="display:none; background-color: #7c6152;">
			  	<hr style="margin-top: 0px;">
			    <div class="container">
    				<div class="row">
        			<div class="col pb-2">
        	    	<a class="btn btn-login-hamburger" href="login.php" style="margin-left: 5%; min-width: 90%;">Zaloguj się</a>
        			</div>
    				</div>
    				<div class="row">
        			<div class="col">
        	    	<a class="btn btn-register-hamburger" href="register.php" style="margin-left: 5%; min-width: 90%">Zarejestruj się</a>
        			</div>
    				</div>
					</div>
  			</div>
			</nav> -->
			<!-- Wersja dla zalogowanego --> <nav>
			  <div class="navbar navbar-dark p-3" style="background: rgb(111,87,73); background: linear-gradient(270deg, rgba(111,87,73,1) 0%, rgba(124,97,82,1) 40%, rgba(99,77,65,1) 100%); min-height: 75px; box-shadow: 0px -4px 24px 0px rgba(124, 97, 82, 1);">
			    <a class="navbar-brand text-center" href="main.php" id="navbar">
			      <h3 class="left mb-0">Cookie</h3>
			    </a>
			    <form class="form-inline" id="navbar-button">
			    	<button type="button" class="btn btn-cart" onclick="location.href='cart.php'">
			    		<i class="fas fa-shopping-cart"></i> 
 							<span class="badge p-0" style="font-size:14px">...</span>
						</button>
			      <button class="btn btn-hamburger p-0 ml-3" type="button" onclick="open_nav_user()"><i class="fas fa-bars" style="color: #ffffff; font-size: 36px;"></i></button>
			      <button type="button" class="btn btn-login rounded ml-1" onclick="location.href='myaccount.php'">
   	 						<i class="fas fa-user"></i>
  					</button>
  					<button class="btn btn-login rounded ml-1" type="button" onclick="location.href='main.php'">
  						<i class="fas fa-sign-out-alt"></i>
  					</button>
			    </form>
			  </div>
			  <div class="px-3 pb-3 justify-content-end myLinks" id="open_user" style="display:none; background: rgb(111,87,73); background: linear-gradient(270deg, rgba(111,87,73,1) 0%, rgba(124,97,82,1) 40%, rgba(99,77,65,1) 100%); box-shadow: 0px -4px 24px 0px rgba(124, 97, 82, 1);">
			  	<hr style="margin-top: 0px;">
			    <div class="container">
    				<div class="row">
        			<div class="col pb-2">
        	    	<a class="btn btn-login-hamburger" href="myaccount.php" style="margin-left: 5%; min-width: 90%;">Moje konto</a>
        			</div>
    				</div>
    				<div class="row">
        			<div class="col">
        	    	<a class="btn btn-register-hamburger" href="main.php" style="margin-left: 5%; min-width: 90%">Wyloguj się</a>
        			</div>
    				</div>
					</div>
  			</div>
			</nav>
			<div class="row">
				<div class="col"></div>
				<div class="col-10">
					<div id="nav-home" class="tab-pane fade show active bb-0" role="tabpanel" aria-labelledby="nav-home-tab">
  					<div class="row pt-3">
  						<div class="col-md-2 col-sm-10 col-10 pb-2 szerokosc">
    						<div class="list-group d-flex justify-content-center sticky-top" id="list-tab" role="tablist">
				      		<a class="list-group-item list-group-item-action active" id="list-1-list" data-toggle="list" href="#list-1" role="tab" aria-controls="home">Baza ciastka</a>
				      		<a class="list-group-item list-group-item-action" id="list-2-list" data-toggle="list" href="#list-2" role="tab" aria-controls="profile">Dodatki do bazy</a>
				      		<a class="list-group-item list-group-item-action" id="list-3-list" data-toggle="list" href="#list-3" role="tab" aria-controls="messages">Owoce</a>
				      		<a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list" href="#list-4" role="tab" aria-controls="settings">Orzechy i ziarna</a>
				      		<a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list" href="#list-5" role="tab" aria-controls="settings">Czekolada</a>
    						</div>
  						</div>
 							<div class="col-md-6 col-sm-12 col-12 pt-3 pb-3" style="box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 25%);">
    						<div class="tab-content" id="nav-tabContent">
      						<div class="tab-panel fade show active" id="list-1" role="tabpanel" aria-labelledby="list-1-list">
      							<div class="row border mx-0 mt-0 mb-3" style="box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 25%);">
											<div class="col-md-5 col-12 py-2">
												<center><img src="113.svg" class="align-middle m-2 photo" alt="..."></center>
											</div>
											<div class="col-md-7 col-12 pt-3 pb-3">
												<div class="col font-weight-bold">Płatki owsiane</div>
												<div class="w-100"></div>
												<div class="col font-weight-light">Dla purystów i indywidualistów</div>
												<div class="col pt-3">
													<div class="row">
										    		<div class="col-2">
										    			<img src="vegan_pl_PL.svg" style="max-width: 24px;">
										   			</div>
										    		<div class="col">
										     			Odpowiedni dla wegan
										    		</div>
													</div>
												</div>
												<div class="col pt-2">
													<div class="row">
										    		<div class="col-2">
										    			<img src="vegan_pl_PL.svg" style="max-width: 24px;">
										   			</div>
										    		<div class="col">
										     			Odpowiedni dla wegan
										    		</div>
													</div>
												</div>
												<div class="col py-2">
													<div class="row">
										    		<div class="col-2">
										    			<img src="vegan_pl_PL.svg" style="max-width: 24px;">
										   			</div>
										    		<div class="col">
										     			Odpowiedni dla wegan
										    		</div>
													</div>
												</div>
												<div class="col pb-3">
													<div class="row">
										    		<div class="col d-flex justify-content-end mr-3 font-weight-bold">
										     			19.00 zł
										    		</div>
													</div>
												</div>
												<div class="w-100"></div>
												<div class="row">
										 	   <div class="col">
														<button class="btn btn-more rounded btn-size ml-3" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Więcej...</button>
														<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
												    		<div class="modal-content">
												    	  	<div class="modal-header">
												     	   	<h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Płatki owsiane</h5>
												     	 		</div>
												      		<div class="modal-body">
												        		<div class="container">
															    		<div class="row">
															      	  <div class="col font-weight-light">
															      	  	Dla purystów i indywidualistów
															      	  </div>
															    		</div>
															    		<div class="row">
															   		  	<div class="col pt-3">	
																					<div class="row">
																			    	<div class="col-2">
																		  	 			<img src="vegan_pl_PL.svg">
																		 				</div>
																		 	  		<div class="col">
																	 	    			Odpowiedni dla wegan
																		 	   		</div>
																					</div>															        	
															    	  	</div>
																				<div class="col pt-3">	
																					<div class="row">
																			    	<div class="col-2">
																		   				Icon
																		 				</div>
																		 	  		<div class="col">
																	     				Text
																	   		 		</div>
																					</div>															        	
															   		   	</div>
															   		   	<div class="w-100"></div>
															  				<div class="col">	
																					<div class="row">
																			    	<div class="col-2">
																		   				Icon
																		 				</div>
																			  		<div class="col">
																	   	  			Text
																	  	  		</div>
																					</div>															        	
															     		 	</div>
																				<div class="col">	
																					<div class="row">
																		  	  	<div class="col-2">
																		 	  			Icon
																			 			</div>
																			   		<div class="col">
																	  	   			Text
																	 		   		</div>
																					</div>															        	
															     		 	</div>																      
															   		 	</div>
															    		<div class="row">
															        	<div class="col pt-3 font-weight-light">
															        		Baza jaką są płatki owsiane stanowi idealną podstawę dla musli, a możliwość łączenia jej z dowolnymi składnikami sprawia, że całość smakuje dokładnie tak jak lubisz! * Zawiera naturalnie występujący cukier Ten skladnik powoduje jeszcze mniej emisji CO2. Jeszcze lepiej dla klimatu.
															        	</div>
															    		</div>
															    		<div class="row">
															        	<div class="col pt-3" style="font-size: 12px;">
															        		<a class="font-italic font-weight-light" style="pointer-events: none; cursor: default; color: black;">Wartość odżywcza w 100g: </a>
															        		<a>Wartość energetyczna <a>324kJ / 78kcal</a>; Tłuszcz <a>2,3g</a>, w tym kwasy tłuszczowe nasycone <a>0,2g</a>; Węglowodany <a>11g</a>, w tym cukry <a>6,9g</a>; Białko <a>1,4g</a>; Sól <a>0,38g</a></a>
															        	</div>
															        	<div class="w-100"></div>
															        	<div class="col pt-3" style="font-size: 12px;">
															        		<a class="font-italic font-weight-light" style="pointer-events: none; cursor: default; color: black;">Składniki: </a>
															        		<a>Płatki owsiane</a>
															        	</div>
															    		</div>
																		</div>
												      		</div>
												      		<div class="modal-footer">
       							 								<button type="button" class="btn btn-more" data-dismiss="modal">Zamknij</button>
												      		</div>
												    		</div>
												  		</div>
														</div>
										   	 	</div>
										    	<div class="col">
										    		<button class="btn btn-add btn-size rounded ml-3 font-weight-bold" type="button" onclick="location.href=''">Dodaj</button>
										    	</div>
												</div>
											</div>
										</div>

      							<div class="row border mx-0 mt-0 mb-3" style="box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 25%);">
											<div class="col-md-5 col-12 py-2">
												<center><img src="113.svg" class="align-middle m-2 photo" alt="..."></center>
											</div>
											<div class="col-md-7 col-12 pt-3 pb-3">
												<div class="col font-weight-bold">Płatki owsiane</div>
												<div class="w-100"></div>
												<div class="col font-weight-light">Dla purystów i indywidualistów</div>
												<div class="col pt-3">
													<div class="row">
										    		<div class="col-2">
										    			<img src="vegan_pl_PL.svg" style="max-width: 24px;">
										   			</div>
										    		<div class="col">
										     			Odpowiedni dla wegan
										    		</div>
													</div>
												</div>
												<div class="col pt-2">
													<div class="row">
										    		<div class="col-2">
										    			<img src="vegan_pl_PL.svg" style="max-width: 24px;">
										   			</div>
										    		<div class="col">
										     			Odpowiedni dla wegan
										    		</div>
													</div>
												</div>
												<div class="col py-2">
													<div class="row">
										    		<div class="col-2">
										    			<img src="vegan_pl_PL.svg" style="max-width: 24px;">
										   			</div>
										    		<div class="col">
										     			Odpowiedni dla wegan
										    		</div>
													</div>
												</div>
												<div class="col pb-3">
													<div class="row">
										    		<div class="col d-flex justify-content-end mr-3 font-weight-bold">
										     			19.00 zł
										    		</div>
													</div>
												</div>
												<div class="w-100"></div>
												<div class="row">
										 	   <div class="col">
														<button class="btn btn-more rounded btn-size ml-3" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Więcej...</button>
														<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
												    		<div class="modal-content">
												    	  	<div class="modal-header">
												     	   	<h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Płatki owsiane</h5>
												     	 		</div>
												      		<div class="modal-body">
												        		<div class="container">
															    		<div class="row">
															      	  <div class="col font-weight-light">
															      	  	Dla purystów i indywidualistów
															      	  </div>
															    		</div>
															    		<div class="row">
															   		  	<div class="col pt-3">	
																					<div class="row">
																			    	<div class="col-2">
																		  	 			<img src="vegan_pl_PL.svg">
																		 				</div>
																		 	  		<div class="col">
																	 	    			Odpowiedni dla wegan
																		 	   		</div>
																					</div>															        	
															    	  	</div>
																				<div class="col pt-3">	
																					<div class="row">
																			    	<div class="col-2">
																		   				Icon
																		 				</div>
																		 	  		<div class="col">
																	     				Text
																	   		 		</div>
																					</div>															        	
															   		   	</div>
															   		   	<div class="w-100"></div>
															  				<div class="col">	
																					<div class="row">
																			    	<div class="col-2">
																		   				Icon
																		 				</div>
																			  		<div class="col">
																	   	  			Text
																	  	  		</div>
																					</div>															        	
															     		 	</div>
																				<div class="col">	
																					<div class="row">
																		  	  	<div class="col-2">
																		 	  			Icon
																			 			</div>
																			   		<div class="col">
																	  	   			Text
																	 		   		</div>
																					</div>															        	
															     		 	</div>																      
															   		 	</div>
															    		<div class="row">
															        	<div class="col pt-3 font-weight-light">
															        		Baza jaką są płatki owsiane stanowi idealną podstawę dla musli, a możliwość łączenia jej z dowolnymi składnikami sprawia, że całość smakuje dokładnie tak jak lubisz! * Zawiera naturalnie występujący cukier Ten skladnik powoduje jeszcze mniej emisji CO2. Jeszcze lepiej dla klimatu.
															        	</div>
															    		</div>
															    		<div class="row">
															        	<div class="col pt-3" style="font-size: 12px;">
															        		<a class="font-italic font-weight-light" style="pointer-events: none; cursor: default; color: black;">Składniki: </a>
															        		<a>płatki owsiane</a>
															        	</div>
															    		</div>
																		</div>
												      		</div>
												      		<div class="modal-footer">
       							 								<button type="button" class="btn btn-outline-dark" data-dismiss="modal">Zamknij</button>
												      		</div>
												    		</div>
												  		</div>
														</div>
										   	 	</div>
										    	<div class="col">
										    		<button class="btn btn-add btn-size rounded ml-3 font-weight-bold" type="button" onclick="location.href=''">Dodaj</button>
										    	</div>
												</div>
											</div>
										</div>

      							<div class="row border mx-0 mt-0" style="box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 25%);">
											<div class="col-md-5 col-12 py-2">
												<center><img src="113.svg" class="align-middle m-2 photo" alt="..."></center>
											</div>
											<div class="col-md-7 col-12 pt-3 pb-3">
												<div class="col font-weight-bold">Płatki owsiane</div>
												<div class="w-100"></div>
												<div class="col font-weight-light">Dla purystów i indywidualistów</div>
												<div class="col pt-3">
													<div class="row">
										    		<div class="col-2">
										    			<img src="vegan_pl_PL.svg" style="max-width: 24px;">
										   			</div>
										    		<div class="col">
										     			Odpowiedni dla wegan
										    		</div>
													</div>
												</div>
												<div class="col pt-2">
													<div class="row">
										    		<div class="col-2">
										    			<img src="vegan_pl_PL.svg" style="max-width: 24px;">
										   			</div>
										    		<div class="col">
										     			Odpowiedni dla wegan
										    		</div>
													</div>
												</div>
												<div class="col py-2">
													<div class="row">
										    		<div class="col-2">
										    			<img src="vegan_pl_PL.svg" style="max-width: 24px;">
										   			</div>
										    		<div class="col">
										     			Odpowiedni dla wegan
										    		</div>
													</div>
												</div>
												<div class="col pb-3">
													<div class="row">
										    		<div class="col d-flex justify-content-end mr-3 font-weight-bold">
										     			19.00 zł
										    		</div>
													</div>
												</div>
												<div class="w-100"></div>
												<div class="row">
										 	   <div class="col">
														<button class="btn btn-more rounded btn-size ml-3" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Więcej...</button>
														<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
												    		<div class="modal-content">
												    	  	<div class="modal-header">
												     	   	<h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Płatki owsiane</h5>
												     	 		</div>
												      		<div class="modal-body">
												        		<div class="container">
															    		<div class="row">
															      	  <div class="col font-weight-light">
															      	  	Dla purystów i indywidualistów
															      	  </div>
															    		</div>
															    		<div class="row">
															   		  	<div class="col pt-3">	
																					<div class="row">
																			    	<div class="col-2">
																		  	 			<img src="vegan_pl_PL.svg">
																		 				</div>
																		 	  		<div class="col">
																	 	    			Odpowiedni dla wegan
																		 	   		</div>
																					</div>															        	
															    	  	</div>
																				<div class="col pt-3">	
																					<div class="row">
																			    	<div class="col-2">
																		   				Icon
																		 				</div>
																		 	  		<div class="col">
																	     				Text
																	   		 		</div>
																					</div>															        	
															   		   	</div>
															   		   	<div class="w-100"></div>
															  				<div class="col">	
																					<div class="row">
																			    	<div class="col-2">
																		   				Icon
																		 				</div>
																			  		<div class="col">
																	   	  			Text
																	  	  		</div>
																					</div>															        	
															     		 	</div>
																				<div class="col">	
																					<div class="row">
																		  	  	<div class="col-2">
																		 	  			Icon
																			 			</div>
																			   		<div class="col">
																	  	   			Text
																	 		   		</div>
																					</div>															        	
															     		 	</div>																      
															   		 	</div>
															    		<div class="row">
															        	<div class="col pt-3 font-weight-light">
															        		Baza jaką są płatki owsiane stanowi idealną podstawę dla musli, a możliwość łączenia jej z dowolnymi składnikami sprawia, że całość smakuje dokładnie tak jak lubisz! * Zawiera naturalnie występujący cukier Ten skladnik powoduje jeszcze mniej emisji CO2. Jeszcze lepiej dla klimatu.
															        	</div>
															    		</div>
															    		<div class="row">
															        	<div class="col pt-3" style="font-size: 12px;">
															        		<a class="font-italic font-weight-light" style="pointer-events: none; cursor: default; color: black;">Składniki: </a>
															        		<a>płatki owsiane</a>
															        	</div>
															    		</div>
																		</div>
												      		</div>
												      		<div class="modal-footer">
       							 								<button type="button" class="btn btn-outline-dark" data-dismiss="modal">Zamknij</button>
												      		</div>
												    		</div>
												  		</div>
														</div>
										   	 	</div>
										    	<div class="col">
										    		<button class="btn btn-add btn-size rounded ml-3 font-weight-bold" type="button" onclick="location.href=''">Dodaj</button>
										    	</div>
												</div>
											</div>
										</div>

      						</div>
      						<div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-2-list">
      							Text
      						</div>
	      					<div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-3-list">
	      						Text
	      					</div>
	      					<div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-4-list">
	      						Text
	     						</div>
	     						<div class="tab-pane fade" id="list-5" role="tabpanel" aria-labelledby="list-5-list">
	     							Text
	     						</div>
 	  						</div>
  						</div>
  						<div class="col-md-4 col-sm-12 col-12 pb-3" style="box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 25%);">
  							<div class="sticky-top pt-3">
      					<div class="row mx-1 mt-1 mb-3" style="box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 25%);">
									<div class="col pt-1 mt-2 mx-2" style="cursor: pointer;" onclick="myFunction0()">
										<div class="row pt-1 pb-1" style="box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 25%);">
											<div class="col-2 my-auto">
												<img src="113.svg">
											</div>
											<div class="col my-auto">
												Płatki owsiane
											</div>
											<div class="col my-auto d-flex justify-content-end">
												1
											</div>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col mx-2 p-1 border-top-0" style="display: none; box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 25%);" id="myDIV">
										<div class="row">
											<div class="col my-auto ml-3">
												<button class="btn btn-plus fas fa-minus"></button>
											</div>
											<div class="col my-auto mr-3">
												<button class="btn btn-plus fas fa-plus"></button>
												<!-- Nie można dodawać więcej niż jednej bazy, kliknięcie minusa ma spowodować jej usunięcie.  -->
											</div>
											<div class="col-6 my-auto">
												Baza ciastka
											</div>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col pt-1 m-1" style="cursor: pointer;" onclick="myFunction1()">
										<div class="row">
											<div class="col-2 my-auto">
												Icon
											</div>
											<div class="col my-auto">
												Składnik
											</div>
											<div class="col my-auto d-flex justify-content-end">
												Number
											</div>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col mx-2 p-1" style="display: none; box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 25%);" id="myDIV1">
										<div class="row">
											<div class="col my-auto ml-3">
												<button class="btn btn-plus fas fa-minus" ></button>
											</div>
											<div class="col my-auto mr-3">
												<button class="btn btn-plus fas fa-plus"></button>
												<!-- Limit ilości składników ogólnie oraz limit ilości składników danego typu. Kliknięcie minusa gdy jest 1 usuwa pozycję z listy a gdy jest ilosć maksymalna to pojawia się popup o braku dodania większej liczby składników. -->
											</div>
											<div class="col-6 my-auto">
												Typ składniku
											</div>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col pt-1 m-1" style="cursor: pointer;" onclick="myFunction2()">
										<div class="row pb-1">
											<div class="col-2 my-auto">
												Icon
											</div>
											<div class="col my-auto">
												Składnik
											</div>
											<div class="col my-auto d-flex justify-content-end">
												Number
											</div>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col mx-2 mb-2 p-1 border" style="display: none; box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 25%);" id="myDIV2">
										<div class="row">
											<div class="col my-auto ml-3">
												<button class="btn btn-plus fas fa-minus"></button>
											</div>
											<div class="col my-auto mr-3">
												<button class="btn btn-plus fas fa-plus"></button>
											</div>
											<div class="col-6 my-auto">
												Typ składniku
											</div>
										</div>
									</div>
									<div class="w-100"></div>
      					</div>
      					<div class="row border mx-1 mb-1 mt-2 p-2" style="box-shadow: 0px 0px 4px 0px rgb(0 0 0 / 25%);">
      						Wizualizacja
      					</div>
      					<div class="d-flex justify-content-center pt-3">
      						<button class="btn btn-delete rounded" type="button" onclick="location.href=''" style="width: 220px">Usuń wszystkie składniki</button>
  							</div>
  							<div class="d-flex justify-content-center pt-2">
      						<button class="btn btn-delete rounded" type="button" data-toggle="modal" data-target=".bd-example-modal-lg-2" style="width: 220px">Wartości odżywcze</button>
									<div class="modal fade bd-example-modal-lg-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
												  <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Wartośći odżywcze na 100g</h5>
												</div>
												<div class="modal-body">
												  <ul class="list-group list-group-flush">
													  <li class="list-group-item">
													  	<div class="container">
															  <div class="row">
															   	<div class="col">Wartość energetyczna</div>
															    <div class="col">Number</div>
															  </div>
															</div>
													  </li>
													  <li class="list-group-item">
													  	<div class="container">
															  <div class="row">
															   	<div class="col">Tłuszcz</div>
															    <div class="col">Number</div>
															  </div>
															</div>
													  </li>
													  <li class="list-group-item">
													  	<div class="container">
															  <div class="row">
															   	<div class="col"style="text-indent: 5%">w tym kwasy tłuszczowe nasycone</div>
															    <div class="col">Number</div>
															  </div>
															</div>
													  </li>
													  <li class="list-group-item">
													  	<div class="container">
															  <div class="row">
															   	<div class="col">Węglowodany</div>
															    <div class="col">Number</div>
															  </div>
															</div>
													  </li>
													  <li class="list-group-item">
													  	<div class="container">
															  <div class="row">
															   	<div class="col" style="text-indent: 5%">w tym cukry</div>
															    <div class="col">Number</div>
															  </div>
															</div>
													  </li>
													  <li class="list-group-item">
													  	<div class="container">
															  <div class="row">
															   	<div class="col">Błonnik</div>
															    <div class="col">Number</div>
															  </div>
															</div>
													  </li>
													 	<li class="list-group-item">
													  	<div class="container">
															  <div class="row">
															   	<div class="col">Białko</div>
															    <div class="col">Number</div>
															  </div>
															</div>
													  </li>
													  <li class="list-group-item">
													  	<div class="container">
															  <div class="row">
															   	<div class="col">Sól</div>
															    <div class="col">Number</div>
															  </div>
															</div>
													  </li>
													</ul>
												</div>
												<div class="modal-footer">
       							 			<button type="button" class="btn btn-outline-dark" data-dismiss="modal">Zamknij</button>
												</div>
											</div>
										</div>
									</div>
  							</div>
  							<div class="d-flex justify-content-center pt-3">
  								<h5 class="font-weight-bold mb-0 d-flex justify-content-center">10 ciastek tylko 39.90 zł</h5>
  							</div>
  							<div class="d-flex justify-content-center">
  								<p class="font-weight-light d-flex justify-content-center" style="font-size: 12px;">3.99 zł/ciastko zawiera VAT</p>
  							</div>
<!--   							<div class="d-flex justify-content-center">
  								<button class="btn btn-add btn-size rounded font-weight-bold" type="button" onclick="location.href=''" style="width: 220px;">
  									<i class="fas fa-shopping-cart"></i>
  									Dodaj
  								</button>
  							</div> -->
  							<div class="d-flex justify-content-center">
  								<button class="btn btn-add-cart rounded" type="button" onclick="location.href=''" style="width: 220px">
  									<i class="fas fa-shopping-cart" style="text-shadow: 0px 3px 3px rgba(255, 255, 255, .25);"></i>&nbsp;&nbsp;&nbsp;Dodaj do koszyka
  								</button>
  							</div>
  						</div>
						</div>
					</div>
  				</div>
				</div>
				<div class="col"></div>
			</div>
		</div>
		<div class="footer-login">
    <footer style="background: rgb(111,87,73); background: linear-gradient(270deg, rgba(111,87,73,1) 0%, rgba(124,97,82,1) 40%, rgba(99,77,65,1) 100%); box-shadow: 0px 4px 24px 0px rgba(124, 97, 82, 1);">
				<div class="container p-4">
			  	<div class="row">
			    	<div class="col-lg-6 col-md-12 mb-4">
				    	<h5 class="mb-3 foo">Footer content</h5>
				     	<p class="foo-content">
				        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
				        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
				        voluptatem veniam, est atque cumque eum delectus sint!
				      </p>
			      </div>
			      <div class="col-lg-3 col-md-6 mb-4">
			        <h5 class="mb-3 foo">Links</h5>
					    <ul class="list-unstyled mb-0">
					      <li class="mb-1">
					        <a class="foo-content underline" href="page.php#faq" style="text-decoration: none;">FAQ</a>
					      </li>
					      <li class="mb-1">
					     	  <a class="foo-content underline" href="page.php#obsluga" style="text-decoration: none;">Obsługa</a>
					      </li>
					      <li class="mb-1">
					        <a class="foo-content underline" href="page.php#polityka" style="text-decoration: none;">Polityka prywatności</a>
					      </li>
					      <li>
					        <a class="underline foo-content" href="page.php#regulamin" style="text-decoration: none;">Regulamin</a>
					      </li>
					    </ul>
			      </div>
			      <div class="col-lg-3 col-md-6 mb-4">
				    	<h5 class="mb-1 foo">Social Media</h5>
							<div class="container d-flex justify-content-center py-2">
						    <button type="button" class="btn btn-lg btn-facebook px-3 py-0 mx-1" onclick="location.href=''">
						    	<i class="fab fa-facebook-f"></i>
						    </button>
						    <button type="button" class="btn btn-instagram px-3 py-0 mx-1 d-flex align-items-center justify-content-center" onclick="location.href=''">
						    	<i class="fab fa-instagram" style="font-size: 24px;"></i>
						    </button>
						    <button type="button" class="btn btn-twitter px-3 py-0 mx-1 d-flex align-items-center justify-content-center" onclick="location.href=''">
									<i class="fab fa-twitter" style="font-size: 24px;"></i>
						    </button>
							</div>
			    	</div>
			  	</div>
				</div>
				<button type="button" class="top btn btn-lg btn-add-cart px-3 py-0 mx-1" href="#">
		    	<i class="fas fa-angle-double-up"></i>
		    </button>
				<div class="text-center foo p-3" style="background: rgb(65,57,56); background: linear-gradient(270deg, rgba(65,57,56,1) 0%, rgba(73,64,63,1) 40%, rgba(58,51,50,1) 100%);">
			  	© 2022 Copyright:
			  	<a class="foo-content underline" href="page.php">4BiG</a>
				</div>
			</footer>
    </div>
</div>
<!-- 		<button onclick="launch_toast()">Popup na błąd zbyt dużej liczby składników</button>
 -->
<div id="toast">
  <div id="img" class="fas fa-exclamation"></div>
  <div id="desc">Zbyt dużo składników</div>
</div>

	</div>
</body>
</html>