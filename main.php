<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>Cookie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="cookie.css">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="login1.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script>
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
   	<div class="row py-5">
   		<div class="col-12">
   			<div class="card-deck">
 					<div class="card" style="cursor: pointer;" onclick="location.href='index.php'">
   					<img class="card-img-top d-flex justify-content-center py-4 " src="cookie-solid.svg" alt="Card image cap" style="max-height: 125px;">
    				<div class="card-body">
      				<h5 class="card-title">Generator ciastek</h5>
      				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta urna sit amet ornare convallis. Suspendisse consectetur efficitur neque in porttitor. Sed et tincidunt tortor.</p>
   					</div>
  				</div>
  				<div class="card">
   					<img class="card-img-top d-flex justify-content-center py-4" src="seedling-solid.svg" alt="Card image cap" style="max-height: 125px;">
   					<div class="card-body">
      				<h5 class="card-title">Odpowiedzialna produkcja</h5>
      				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta urna sit amet ornare convallis. Suspendisse consectetur efficitur neque in porttitor. Sed et tincidunt tortor.</p>
    				</div>
  				</div>
 					<div class="card">
   					<img class="card-img-top d-flex justify-content-center py-4" src="dolly-solid.svg" alt="Card image cap" style="max-height:125px;">
    				<div class="card-body">
      				<h5 class="card-title">Dostawa</h5>
      				<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta urna sit amet ornare convallis. Suspendisse consectetur efficitur neque in porttitor. Sed et tincidunt tortor.</p>
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
const validateEmail = (email) => {
  return email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
};

const validate = () => {
  const $result = $('#result');
  const email = $('#email').val();
  $result.text('');

  if (!validateEmail(email)) {
    $result.text('Wprowadź prawidłowy adres e-mail.');
    $result.css('background', '#f8d7da');
    $result.css('color', '#842029');
    $result.css('border', '1px solid #f5c2c7');
    $result.css('border-radius', '.25rem');
   	$result.css('padding', '.5rem');
    $result.css('font-size', '16px');
    $result.css('width', '320px');
  } else {
    $result.css('padding', '0rem');
    $result.css('border', 'none');
  }
  return false;
}

$('#email').on('input', validate);

$('#email').on('input', validate);
</script>