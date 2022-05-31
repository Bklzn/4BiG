<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>Zaloguj się</title>
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
</head>
<body>
<div class="container-login">
    <div>
    	<nav>
			  <div class="navbar navbar-dark p-3" style="background: rgb(111,87,73); background: linear-gradient(270deg, rgba(111,87,73,1) 0%, rgba(124,97,82,1) 40%, rgba(99,77,65,1) 100%); min-height: 75px; box-shadow: 0px -4px 24px 0px rgba(124, 97, 82, 1);">
			    <a class="navbar-brand text-center" href="main.php" id="navbar">
			      <h3 class="left mb-0">Cookie</h3>
			    </a>
			  </div>
			</nav>
    </div>
    <div>
    	<div class="container">
    		<div class="row">
      		<div class="col"></div> 
      		<div class="col-8 col-sm-8 col-md-6 col-lg-4 pb-5">
      			<div class="display-4 d-flex justify-content-center pt-5 pb-2 ">
      				<i class="fas fa-user" style="color: #49403f"></i>
      			</div>
      			<div class="col d-flex justify-content-center" style="color: #49403f">
      				Zaloguj się
      			</div>
      			<hr class="my-3" style="border-top: 1px solid #e0e0e0">
      			<div class="d-flex justify-content-center pt-1">
      				<form>
	      				<div class="form">
	    						<input type="email" id="email" class="form__input" autocomplete="email" placeholder=" " onfocus="document.getElementById('result').style.display='none'; document.getElementById('result2').style.display='block'" onblur="document.getElementById('result').style.display='block'; document.getElementById('result2').style.display='none'" autofocus>
	    						<label for="email" class="form__label">E-mail</label>
	  						</div>
	  						<div class="pt-2 d-flex justify-content-center">
  								<h2 id="result"></h2>
  								<h2 id="result2"></h2>
								</div>
								<div class="d-flex justify-content-end">
					        <a class="kot" href="password_reset.php" style="text-decoration: none;">Nie pamiętasz hasła?</a>
								</div>
								<div class="pt-1"></div>
	  		  			<div class="input-group txtShowDiv mb-2 mr-sm-2 pb-5">
   			 					<input type="password" id="password" class="form__input" autocomplete="current-password" placeholder=" " onfocus="document.getElementById('show_hide').style.display='block'; document.getElementById('show2').style.display='none'" onblur="document.getElementById('show_hide').style.display='none'; document.getElementById('show2').style.display='block'" style="border-radius: 0.25rem;">
	    						<label for="password" class="form__label">Hasło</label>
      						<i class="fas fa-eye-slash" id="eye"></i>
  							</div>
  							<div style="height: 30px;">
	   						  <div id="show_hide" style="height: 30px; display: none; font-size: 12px; color: #49403f;">
	   						  Hasło musi zawierać minimum 6 znaków
	   							</div>
	   						 	<div id="show2" style="height: 30px;"></div> 
	   						</div>
	   						<div style="display: none">
	   							<h2 style="background-color: rgb(248, 215, 218); color: rgb(132, 32, 41); border: 1px solid rgb(245, 194, 199); border-radius: 0.25rem; padding: 0.5rem; font-size: 16px; width: 320px;"> 
	   								Niepoprawny e-mail lub hasło.
	   							</h2>
	   						</div>
	   						<div class="d-flex justify-content-center">
	   							<button class="btn btn-l rounded" type="button" onclick="location.href=''" style="width: 320px">Zaloguj się</button>
	   						</div>
	  					</form>
	  				</div>
	  				<hr class="my-3" style="border-top: 1px solid #e0e0e0">
	  				<div class="d-flex justify-content-center pb-2">
	   					<button class="btn btn-facebook" style="min-width: 320px ; height: 38px;">
  							<div class="row">
    							<div class="col-2">
      							<i class="fab fa-facebook-f"></i>
    							</div>
    							<div class="col">
      							Zaloguj się przez Facebook
    							</div>
  							</div>
							</button>
	   				</div>
	   				<div class="d-flex justify-content-center">
	   					<button class="btn btn-google" style="min-width: 320px; height: 38px;">
  							<div class="row">
    							<div class="col-2">
      							<img src="google.svg" style="height: 16px">
    							</div>
    							<div class="col">
      							Zaloguj się przez Google
    							</div>
  							</div>
							</button>
	   				</div>
	   				<div class="d-flex justify-content-center pt-3">
	   					<div>
	   						Nie masz konta?
	   						<a class="register-line" href="register.php" style="text-decoration: none;">Zarejestruj się</a>
	   					</div>
	   				</div>
      		</div>
      		<div class="col"></div>
    		</div>
			</div>
   	</div>
    <div class="footer-login">
        <footer style="background: rgb(111,87,73); background: linear-gradient(270deg, rgba(111,87,73,1) 0%, rgba(124,97,82,1) 40%, rgba(99,77,65,1) 100%); box-shadow: 0px 4px 24px 0px rgba(124, 97, 82, 1);">
          <div class="container p-4">
            <div class="row">
              <div class="col-lg-6 col-md-12 mb-3">
                <h5 class="mb-3 foo">Footer content</h5>
                <p class="foo-content">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                  molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                  voluptatem veniam, est atque cumque eum delectus sint!
                </p>
              </div>
              <div class="col-lg-3 col-md-6 mb-3">
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
                  <li>
                    <a class="underline foo-content" href="contact.php" style="text-decoration: none;">Kontakt</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 mb-3">
                <h5 class="mb-1 foo">Social Media</h5>
                <div class="container d-flex justify-content-center py-2">
                  <button type="button" class="btn btn-lg btn-facebook px-3 py-0 mx-1 d-flex align-items-center justify-content-center rounded-circle" onclick="location.href=''">
                    <i class="fab fa-facebook-f"></i>
                  </button>
                  <button type="button" class="btn btn-instagram px-3 py-0 mx-1 d-flex align-items-center justify-content-center rounded-circle" onclick="location.href=''">
                    <i class="fab fa-instagram" style="font-size: 24px;"></i>
                  </button>
                  <button type="button" class="btn btn-twitter px-3 py-0 mx-1 d-flex align-items-center justify-content-center rounded-circle" onclick="location.href=''">
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

$(function(){
  
  $('#eye').click(function(){
       
        if($(this).hasClass('fa-eye-slash')){
           
          $(this).removeClass('fa-eye-slash');
          
          $(this).addClass('fa-eye');
          
          $('#password').attr('type','text');
            
        }else{
         
          $(this).removeClass('fa-eye');
          
          $(this).addClass('fa-eye-slash');  
          
          $('#password').attr('type','password');
        }
    });
});
</script>