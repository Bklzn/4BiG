<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>Moje konto</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css">
  <link rel="stylesheet" href="cookie.css">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="login1.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/datepicker-full.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/locales/pl.js"></script>
	<script type="text/javascript">
		function myFunction3() {
  		var x = document.getElementById("myLinks");
  		if (x.style.display === "block") {
    		x.style.display = "none";
  		} else {
    		x.style.display = "block";
  		}
		}
	</script>
</head>

<body>
<div class="container-login">
  <div>
    <nav>
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
			<div class="px-3 pb-3 justify-content-end myLinks" id="myLinks" style="display:none; background: rgb(111,87,73); background: linear-gradient(270deg, rgba(111,87,73,1) 0%, rgba(124,97,82,1) 40%, rgba(99,77,65,1) 100%);">
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
		</nav>
	</div>  
  <div class="container">
   	<div class="row pb-5 pt-4">
   		<div class="col-12">
   			<h3>Moje konto</h3>
   			<div class="row pt-3">
  				<div class="col-md-2 col-sm-10 col-10 mb-4 mx-auto">
				    <div class="list-group" id="list-tab" role="tablist">
				      <a class="btn btn-list mb-2 list-group-item-action active" id="list-profil-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
				      	<i class="fas fa-user mx-2"></i>
				    		Profil
				    	</a>
				      <a class="btn btn-list mb-2 list-group-item-action" id="list-adres-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
				      	<i class="fas fa-map-marker-alt mx-2"></i>
				      	Adres
				      </a>
				      <a class="btn btn-list mb-2 list-group-item-action" id="list-order-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">
				      	<i class="fas fa-shopping-bag mx-2"></i>
				      Zamówienia
				    	</a>
				      <a class="btn btn-list mb-2 list-group-item-action" id="list-ankieta-list" data-toggle="list" href="#list-ankieta" role="tab" aria-controls="ankieta">
								<i class="fas fa-clipboard-list mx-2"></i>
				      	Ankieta
				      </a>
				      <a class="btn btn-list list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="ustawienia">
				      	<i class="fas fa-cog mx-2"></i>
				      	Ustawienia
				      </a>
				    </div>
  				</div>
				  <div class="col-md-10 col-sm-12 col-11 mx-auto">
				    <div class="tab-content" id="nav-tabContent">
				      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
				      	<div class="row">
        					<div class="col-12 mb-3">
        						<h4>Profil</h4>
        					</div>
    						</div>
    						<div class="row">
        					<div class="col-12 mb-2">
        						<h5>Informacje personalne</h5>
        					</div>
    						</div>
    						<hr style="margin-top: 0px;">
						    <div class="row">
						      <div class="col-12 col-sm-12 col-md-4 pb-2">
						      	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut metus viverra, accumsan odio vitae, scelerisque leo. Sed efficitur congue odio et maximus.
						      </div>
						      <div class="col-6 col-sm-6 col-md-4">
						      	<label for="InputName">Imię</label>
    								<input type="text" class="form-control input-user">
    							</div>
						      <div class="col-6 col-sm-6 col-md-4">						      	
						      	<label for="InputLastName">Nazwisko</label>
    								<input type="text" class="form-control input-user">
    							</div>
						    </div>
						    <div class="row pt-2">
        					<div class="col-0 col-sm-0 col-md-4"></div>
					        <div class="col-6 col-sm-6 col-md-4">
					        	<label for="InputBirth">Data urodzenia</label>
										<div class="input-group mb-3">
  										<input type="text" class="datepicker_input form-control input-user" id="datepicker1">
  										<div class="input-group-append">
    										<span class="input-group-text" id="basic-addon2" style="background: none; border: 2px solid rgb(224, 224, 224) !important; color: rgba(124,97,82,1);">
    											<i class="fas fa-calendar"></i>
    										</span>
  										</div>
										</div>
          				</div>
					        <div class="col-0 col-sm-0 col-md-4"></div>
						    </div>
						    <div class="row pt-2">
        					<div class="col-0 col-sm-0 col-md-4"></div>
					        <div class="col-6 col-sm-6 col-md-4">
										<div class="form-group">
    									<label for="ImputPhone">Numer telefonu</label>
    									<input class="form-control input-user" type="tel" id="phone" name="phone" pattern="[0-9]{9}">
    									<small id="telhelp" class="form-text text-muted">Numer telfonu musi składać się z 9 cyfr</small>
  									</div>	
          				</div>
					        <div class="col-0 col-sm-0 col-md-4"></div>
						    </div>
						    <div class="row pt-2">
        					<div class="col-12 pt-2 d-flex justify-content-center">
        						<button class="btn btn-add-cart"> Zapisz zmiany</button>
        					</div>
    						</div>
    						<div class="row pt-5">
        					<div class="col-12 mb-2">
        						<h5>E-mail</h5>
        					</div>
    						</div>
    						<hr style="margin-top: 0px;">
    						<div class="row">
						      <div class="col-12 col-sm-12 col-md-4 pb-2">
						      	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut metus viverra, accumsan odio vitae, scelerisque leo. Sed efficitur congue odio et maximus.
						      </div>
						      <div class="col-10 col-sm-10 col-md-4 mx-auto">
						      	<label for="InputName">E-mail</label>
    								<input type="text" class="form-control input-user">
    							</div>
						      <div class="col-0 col-sm-0 col-md-4"></div>
						    </div>
						    <div class="row">
						      <div class="col-0 col-sm-0 col-md-4"></div>
						      <div class="col-10 col-sm-10 col-md-4 mx-auto pt-2">
						      	<label for="InputName">Powtórz e-mail</label>
    								<input type="text" class="form-control input-user">
    							</div>
						      <div class="col-0 col-sm-0 col-md-4"></div>
						    </div>
						    <div class="row pt-4">
        					<div class="col-12 pt-2 d-flex justify-content-center">
        						<button class="btn btn-add-cart">Zmień e-mail</button>
        					</div>
    						</div>
				     	</div>
				      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat mauris sed consequat tincidunt. Proin ac lacinia arcu. Nam at felis purus. Sed dolor sem, fringilla sit amet eros et, bibendum commodo massa. In eget commodo risus. Sed ut libero placerat eros congue fringilla non pulvinar orci. Cras sit amet tellus sed mauris commodo congue. Vivamus vulputate nunc id magna interdum interdum. Aenean fringilla posuere eros, eget varius augue. Integer porta, nisl eget volutpat pellentesque, eros ligula maximus ante, id placerat velit eros quis nulla. Morbi ultrices diam id gravida lobortis. Sed accumsan pulvinar consectetur. Sed eleifend justo ipsum, sit amet dignissim dolor fermentum eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum accumsan ante eget mauris aliquam, id mattis tortor molestie. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.

							Sed lobortis, nisi sit amet ornare venenatis, sem arcu posuere enim, nec tincidunt metus augue eget lacus. Quisque euismod nibh fermentum, aliquet ex eget, varius eros. Integer semper lorem nec sem viverra tristique. Sed commodo magna diam, id facilisis dolor ultricies sit amet. Praesent eget felis ac risus blandit suscipit. Vivamus luctus lorem ut nisi rutrum pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer id scelerisque risus.

							In in scelerisque mi, id sollicitudin nunc. Duis et euismod ligula. Duis rhoncus faucibus sodales. Aenean a eros erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Fusce quis congue massa, aliquam dignissim mauris. Donec suscipit tortor eros, nec tincidunt ipsum faucibus nec. Integer eu rhoncus erat.

							Aliquam vitae dapibus dui, vel rhoncus quam. Donec porttitor efficitur nulla vitae eleifend. In et dictum purus. Nulla lacinia tellus sed turpis luctus pharetra. Nam eget ipsum commodo, congue metus ut, porttitor velit. Proin non cursus nisi. In efficitur commodo elit at ullamcorper. Proin tincidunt est sit amet odio sodales, in congue tortor rhoncus. Phasellus in ultricies lectus.

							Aliquam felis augue, feugiat et vulputate sed, tempus at nisl. Donec ac elit nibh. Vestibulum est neque, sagittis vel urna mollis, semper facilisis diam. Mauris vel urna et metus dapibus dictum. Etiam eleifend, leo ac pretium feugiat, eros mi mollis mauris, non commodo sem lorem non lacus. Nam a eleifend justo. Phasellus euismod sem vitae pulvinar fringilla.</div>
				      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">		Zamówienia
				      </div>
				      <div class="tab-pane fade" id="list-ankieta" role="tabpanel" aria-labelledby="list-ankieta-list">			Ankieta
				      </div>
				     	<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">		Ustawienia
				      </div>
				    </div>
  				</div>
				</div>
   		</div>
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
			<div class="text-center foo p-3" style="background: rgb(65,57,56); background: linear-gradient(270deg, rgba(65,57,56,1) 0%, rgba(73,64,63,1) 40%, rgba(58,51,50,1) 100%);">
			  	© 2022 Copyright:
		  	<a class="foo-content underline" href="page.php">4BiG</a>
			</div>
		</footer>
  </div>
</div>
</body>

</html>
<script type="text/javascript">
	/* Bootstrap 5 JS included */
/* vanillajs-datepicker 1.1.4 JS included */

const getDatePickerTitle = elem => {
  // From the label or the aria-label
  const label = elem.nextElementSibling;
  let titleText = '';
  if (label && label.tagName === 'LABEL') {
    titleText = label.textContent;
  } else {
    titleText = elem.getAttribute('aria-label') || '';
  }
  return titleText;
}

const elems = document.querySelectorAll('.datepicker_input');
for (const elem of elems) {
  const datepicker = new Datepicker(elem, {
    'format': 'dd.mm.yyyy', // UK format
    'autohide': 'True',
    'language': 'pl',
    title: getDatePickerTitle(elem),
  });
}
</script>