<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>Cookie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="login1.css">
  <link rel="stylesheet" href="cookie.css">
  	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


</head>
<body>
	<div class="container-login">
		<div>
	    <nav>
				<div class="navbar navbar-dark p-3" style="background: #7c6152;">
				  <a class="navbar-brand text-center" href="index.php" id="navbar">
				    <h3 class="left mb-0">Cookie</h3>
				  </a>
				  <form class="form-inline" id="navbar-button">
				    <button class="btn btn-login rounded mr-1" type="button" onclick="location.href='login.php'">
							<i class="fas fa-user"></i>
						</button>
				     <button class="btn btn-register rounded" type="button" onclick="location.href='index_register_user.php'">Wyloguj się</button>
				  </form>
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
      			<div class="col d-flex justify-content-center font-weight-bold" style="color: #49403f">
      				Zaloguj się
      			</div>
      			<hr class="my-3" style="border-top: 1px solid #e0e0e0">
      			<div class="d-flex justify-content-center pt-1">
      				<form>
	      				<div class="form">
	    						<input type="email" id="email" class="form__input" autocomplete="on" placeholder=" " onfocus="document.getElementById('result').style.display='none'; document.getElementById('result2').style.display='block'" onblur="document.getElementById('result').style.display='block'; document.getElementById('result2').style.display='none'">
	    						<label for="email" class="form__label">E-mail</label>
	  						</div>
	  						<div class="pt-3"></div>
	  		  			<div class="input-group txtShowDiv mb-2 mr-sm-2 pb-5">
   			 					<input type="password" id="password" class="form__input" autocomplete="off" placeholder=" " onfocus="document.getElementById('show_hide').style.display='block'; document.getElementById('show2').style.display='none'" onblur="document.getElementById('show_hide').style.display='none'; document.getElementById('show2').style.display='block'">
	    						<label for="password" class="form__label">Hasło</label>
      						<i class="fas fa-eye-slash" id="eye"></i>
  							</div>
   						  <div id="show_hide" style="height: 30px; display: none";>mm</div>
   						 	<div id="show2" style="height: 30px;"></div> 
	  					</form>
	  				</div>
      		</div>
      		<div class="col"></div>
    		</div>
			</div>
		</div>
   	

	  <div class="footer-login">
	    <footer style="background-color: #7c6152;">
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
						      <a class="foo-content underline" href="#!" style="text-decoration: none;">FAQ</a>
						    </li>
						    <li class="mb-1">
						     	<a class="foo-content underline" href="#!" style="text-decoration: none;">Classes</a>
						    </li>
						    <li class="mb-1">
						      <a class="foo-content underline" href="#!" style="text-decoration: none;">Pricing</a>
						    </li>
						    <li>
						      <a class="underline foo-content" href="#!" style="text-decoration: none;">Safety</a>
						    </li>
						  </ul>
				    </div>
				    <div class="col-lg-3 col-md-6 mb-4">
					   	<h5 class="mb-1 foo">Social Media</h5>
							<div class="container d-flex justify-content-center py-2">
							  <button type="button" class="btn btn-lg px-4" onclick="location.href=''">
							    <i class="fab fa-facebook-f" style="color: #1778F2"></i>
							  </button>
							  <button type="button" class="btn btn-lg px-4" onclick="location.href=''">
							    <i class="fab fa-youtube" style="color: #FF0000"></i>
							  </button>
							  <button type="button" class="btn btn-lg px-4" onclick="location.href=''">
							    <i class="fab fa-instagram" style="color: #8134AF"></i>
							  </button>
							  <button type="button" class="btn btn-lg px-4" onclick="location.href=''">
							    <i class="fab fa-twitter" style="color: #55ACEE"></i>
							  </button>
							</div>
				    </div>
				  </div>
				</div>
				<div class="text-center foo p-3" style="background-color: #49403f">
				  © 2022 Copyright:
				  <a class="foo-content underline" href="https://mdbootstrap.com/">4BiG</a>
				</div>
			</footer>
	  </div>
	</div>






<label for="email">Enter an email address: </label>
<input id="email" onfocus="document.getElementById('result').style.display='none'" onblur="document.getElementById('result').style.display='block';" />

<div class="pt-2">
  <h2 id="result"></h2>
</div>
</body>

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
    $result.css('border', '1px solid #f5c2c7')
    $result.css('border-radius', '.25rem')
   /$result.css('padding', '.5rem')
    $result.css('font-size', '16px')
  } else {
    $result.css('padding', '0rem')
        $result.css('border', 'none')
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