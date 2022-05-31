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

		function open_nav_user() {
  		var x = document.getElementById("open_user");
  		if (x.style.display === "block") {
    		x.style.display = "none";
  		} else {
    		x.style.display = "block";
  		}
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
		.top
{
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
<div class="container-login">
    <div>
			<nav>
			  <div id="top" class="navbar navbar-dark p-3" style="background: rgb(111,87,73); background: linear-gradient(270deg, rgba(111,87,73,1) 0%, rgba(124,97,82,1) 40%, rgba(99,77,65,1) 100%); min-height: 75px; box-shadow: 0px -4px 24px 0px rgba(124, 97, 82, 1);">
			    <a class="navbar-brand text-center" href="main.php" id="navbar">
			      <h3 class="left mb-0">Cookie</h3>
			    </a>
			    <form class="form-inline" id="navbar-button">
			      <button class="btn btn-login rounded mr-1" type="button" onclick="location.href='login.php'">Zaloguj się</button>
			      <button class="btn btn-register rounded" type="button" onclick="location.href='register.php'">Zarejestruj się</button>
			      <button class="btn btn-hamburger p-0"type="button" onclick="myFunction3()"><i class="fas fa-bars" style="color: #ffffff; font-size: 36px;"></i></button>
			    </form>
			  </div>
			  <div class="px-3 pb-3 justify-content-end myLinks" id="myLinks" style="display:none; background: rgb(111,87,73); background: linear-gradient(270deg, rgba(111,87,73,1) 0%, rgba(124,97,82,1) 40%, rgba(99,77,65,1) 100%); box-shadow: 0px -4px 24px 0px rgba(124, 97, 82, 1);">
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
    
		<div>
    	<div class="container">
    		<div class="row">
      		<div class="col"></div> 
      		<div class="col-10 pb-5 pt-3">
      			<h3 style="text-indent: -5%">Links</h3>
      			<div class="btn-group-vertical d-block d-md-none d-flex justify-content-center rounded " role="group" style="box-shadow: 0px 4px 4px 0px rgb(0 0 0 / 25%);">
 							<button type="button" class="btn btn-page" onclick="location.href='#faq'" style="min-width: 25%;">FAQ</button>
 							<hr class="my-0" style="border: 1px solid #886a5a !important">
  						<button type="button" class="btn btn-page" onclick="location.href='#obsluga'" style="min-width: 25%;">Obsługa</button>
  						<hr class="my-0 border-bottom">
  						<button type="button" class="btn btn-page" onclick="location.href='#polityka'" style="min-width: 25%; word-break: break-word;">Polityka prywatności</button>
  						<hr class="my-0 border-bottom">
    					<button type="button" class="btn btn-page" onclick="location.href='#regulamin'" style="min-width: 25%; word-break: break-word;">Regulamin</button>
						</div>
      			<div class="btn-group d-flex justify-content-center rounded btn-group-big" role="group" style="box-shadow: 0px 4px 4px 0px rgb(0 0 0 / 25%);">
 							<button type="button" class="btn btn-page" onclick="location.href='#faq'" style="min-width: 25%;">FAQ</button>
  						<button type="button" class="btn btn-page" onclick="location.href='#obsluga'" style="min-width: 25%;">Obsługa</button>
  						<button type="button" class="btn btn-page" onclick="location.href='#polityka'" style="min-width: 25%; word-break: break-word;">Polityka prywatności</button>
    					<button type="button" class="btn btn-page" onclick="location.href='#regulamin'" style="min-width: 25%; word-break: break-word;">Regulamin</button>
						</div>						
						<div class="mt-4 p-2" id="faq">
  						<h4 style="text-indent: 5%">FAQ</h4>
  						<p class="mb-0" style="text-indent: 2.5%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor pretium enim sit amet sagittis. Quisque tincidunt tellus nec nisi placerat lobortis. Quisque elementum dignissim urna vitae faucibus. Sed imperdiet nisl et est consequat, maximus feugiat ipsum porttitor. Duis vitae consequat lorem. Quisque erat magna, tincidunt at porta nec, rhoncus in quam. Aliquam ac orci nec ipsum ultrices aliquet. Morbi ligula libero, condimentum eu augue eu, aliquet feugiat risus. Duis sit amet faucibus eros. Curabitur id quam nec purus cursus hendrerit. Curabitur quis tortor est.</p>
  						<p class="mb-0" style="text-indent:2.5%"> Phasellus ut molestie dui. Integer molestie volutpat metus, et faucibus risus pellentesque non. Integer nec sapien venenatis, tincidunt turpis condimentum, dignissim velit. Duis mollis hendrerit tellus vel ultrices. Pellentesque lectus eros, condimentum ut auctor id, efficitur et ante. Cras dapibus egestas metus vitae molestie. Maecenas gravida erat at nunc bibendum, at ultrices tellus tincidunt. Quisque hendrerit, libero eu venenatis euismod, tortor odio rhoncus ante, vel placerat eros nunc a ante.</p>
							<p class="mb-0" style="text-indent:2.5%">Nunc ac lectus nunc. Fusce egestas eros ac mauris suscipit lobortis vel eu justo. Ut et risus ac massa maximus accumsan sit amet eget dolor. Etiam tempus varius odio non mattis. Ut tellus tellus, consequat ac vestibulum sed, tristique non massa. Donec nec tincidunt est. Vivamus congue pretium lorem et maximus. Vestibulum tincidunt leo luctus felis viverra, non luctus dui tincidunt. Phasellus laoreet porttitor ex. Sed sit amet neque vitae lacus eleifend volutpat at ac leo. Sed euismod egestas rhoncus. Sed dapibus vitae lorem id placerat.</p>
							<p class="mb-0" style="text-indent:2.5%">Maecenas lacinia volutpat tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus quis facilisis justo, non porttitor risus. Nullam rhoncus nunc non consectetur facilisis. Phasellus interdum, nibh eget iaculis hendrerit, risus sem ullamcorper sapien, ac molestie purus sem id leo. Sed dapibus, urna id sodales condimentum, mi metus aliquet ipsum, ut vehicula libero nibh vitae odio. Sed a imperdiet ex. Vivamus a dolor venenatis, volutpat sapien quis, convallis leo. Morbi malesuada, lorem eu ultricies lacinia, est quam faucibus magna, mattis facilisis massa justo eget mi. Proin ut diam eget tellus dignissim sodales. Vivamus laoreet pretium dignissim. Vivamus et euismod erat. Maecenas at nisl et ligula mattis lobortis vestibulum suscipit felis. Maecenas consequat tincidunt elit, quis congue dolor accumsan sed.</p>
  						<p class="mb-0" style="text-indent:2.5%">
							Pellentesque nibh metus, suscipit vel porta egestas, venenatis vel nunc. Aenean ex massa, rhoncus pharetra scelerisque in, blandit vehicula massa. Donec eu orci a risus mattis facilisis. Proin vestibulum pellentesque aliquam. Maecenas a scelerisque turpis. Nullam ultricies purus eu metus facilisis, eget eleifend tellus tempor. Etiam posuere felis et purus pharetra, eget hendrerit ipsum hendrerit.</p>
						</div>
						<div class="mt-4 p-2" id="obsluga">
  						<h4 style="text-indent: 5%">Obsługa</h4>
  						<p class="mb-0" style="text-indent: 2.5%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor pretium enim sit amet sagittis. Quisque tincidunt tellus nec nisi placerat lobortis. Quisque elementum dignissim urna vitae faucibus. Sed imperdiet nisl et est consequat, maximus feugiat ipsum porttitor. Duis vitae consequat lorem. Quisque erat magna, tincidunt at porta nec, rhoncus in quam. Aliquam ac orci nec ipsum ultrices aliquet. Morbi ligula libero, condimentum eu augue eu, aliquet feugiat risus. Duis sit amet faucibus eros. Curabitur id quam nec purus cursus hendrerit. Curabitur quis tortor est.</p>
  						<p class="mb-0" style="text-indent:2.5%"> Phasellus ut molestie dui. Integer molestie volutpat metus, et faucibus risus pellentesque non. Integer nec sapien venenatis, tincidunt turpis condimentum, dignissim velit. Duis mollis hendrerit tellus vel ultrices. Pellentesque lectus eros, condimentum ut auctor id, efficitur et ante. Cras dapibus egestas metus vitae molestie. Maecenas gravida erat at nunc bibendum, at ultrices tellus tincidunt. Quisque hendrerit, libero eu venenatis euismod, tortor odio rhoncus ante, vel placerat eros nunc a ante.</p>
							<p class="mb-0" style="text-indent:2.5%">Nunc ac lectus nunc. Fusce egestas eros ac mauris suscipit lobortis vel eu justo. Ut et risus ac massa maximus accumsan sit amet eget dolor. Etiam tempus varius odio non mattis. Ut tellus tellus, consequat ac vestibulum sed, tristique non massa. Donec nec tincidunt est. Vivamus congue pretium lorem et maximus. Vestibulum tincidunt leo luctus felis viverra, non luctus dui tincidunt. Phasellus laoreet porttitor ex. Sed sit amet neque vitae lacus eleifend volutpat at ac leo. Sed euismod egestas rhoncus. Sed dapibus vitae lorem id placerat.</p>
							<p class="mb-0" style="text-indent:2.5%">Maecenas lacinia volutpat tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus quis facilisis justo, non porttitor risus. Nullam rhoncus nunc non consectetur facilisis. Phasellus interdum, nibh eget iaculis hendrerit, risus sem ullamcorper sapien, ac molestie purus sem id leo. Sed dapibus, urna id sodales condimentum, mi metus aliquet ipsum, ut vehicula libero nibh vitae odio. Sed a imperdiet ex. Vivamus a dolor venenatis, volutpat sapien quis, convallis leo. Morbi malesuada, lorem eu ultricies lacinia, est quam faucibus magna, mattis facilisis massa justo eget mi. Proin ut diam eget tellus dignissim sodales. Vivamus laoreet pretium dignissim. Vivamus et euismod erat. Maecenas at nisl et ligula mattis lobortis vestibulum suscipit felis. Maecenas consequat tincidunt elit, quis congue dolor accumsan sed.</p>
  						<p class="mb-0" style="text-indent:2.5%">
							Pellentesque nibh metus, suscipit vel porta egestas, venenatis vel nunc. Aenean ex massa, rhoncus pharetra scelerisque in, blandit vehicula massa. Donec eu orci a risus mattis facilisis. Proin vestibulum pellentesque aliquam. Maecenas a scelerisque turpis. Nullam ultricies purus eu metus facilisis, eget eleifend tellus tempor. Etiam posuere felis et purus pharetra, eget hendrerit ipsum hendrerit.</p>
						</div>
						<div class="mt-4 p-2" id="polityka">
  						<h4 style="text-indent: 5%">Polityka prywatności</h4>
  						<p class="mb-0" style="text-indent: 2.5%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor pretium enim sit amet sagittis. Quisque tincidunt tellus nec nisi placerat lobortis. Quisque elementum dignissim urna vitae faucibus. Sed imperdiet nisl et est consequat, maximus feugiat ipsum porttitor. Duis vitae consequat lorem. Quisque erat magna, tincidunt at porta nec, rhoncus in quam. Aliquam ac orci nec ipsum ultrices aliquet. Morbi ligula libero, condimentum eu augue eu, aliquet feugiat risus. Duis sit amet faucibus eros. Curabitur id quam nec purus cursus hendrerit. Curabitur quis tortor est.</p>
  						<p class="mb-0" style="text-indent:2.5%"> Phasellus ut molestie dui. Integer molestie volutpat metus, et faucibus risus pellentesque non. Integer nec sapien venenatis, tincidunt turpis condimentum, dignissim velit. Duis mollis hendrerit tellus vel ultrices. Pellentesque lectus eros, condimentum ut auctor id, efficitur et ante. Cras dapibus egestas metus vitae molestie. Maecenas gravida erat at nunc bibendum, at ultrices tellus tincidunt. Quisque hendrerit, libero eu venenatis euismod, tortor odio rhoncus ante, vel placerat eros nunc a ante.</p>
							<p class="mb-0" style="text-indent:2.5%">Nunc ac lectus nunc. Fusce egestas eros ac mauris suscipit lobortis vel eu justo. Ut et risus ac massa maximus accumsan sit amet eget dolor. Etiam tempus varius odio non mattis. Ut tellus tellus, consequat ac vestibulum sed, tristique non massa. Donec nec tincidunt est. Vivamus congue pretium lorem et maximus. Vestibulum tincidunt leo luctus felis viverra, non luctus dui tincidunt. Phasellus laoreet porttitor ex. Sed sit amet neque vitae lacus eleifend volutpat at ac leo. Sed euismod egestas rhoncus. Sed dapibus vitae lorem id placerat.</p>
							<p class="mb-0" style="text-indent:2.5%">Maecenas lacinia volutpat tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus quis facilisis justo, non porttitor risus. Nullam rhoncus nunc non consectetur facilisis. Phasellus interdum, nibh eget iaculis hendrerit, risus sem ullamcorper sapien, ac molestie purus sem id leo. Sed dapibus, urna id sodales condimentum, mi metus aliquet ipsum, ut vehicula libero nibh vitae odio. Sed a imperdiet ex. Vivamus a dolor venenatis, volutpat sapien quis, convallis leo. Morbi malesuada, lorem eu ultricies lacinia, est quam faucibus magna, mattis facilisis massa justo eget mi. Proin ut diam eget tellus dignissim sodales. Vivamus laoreet pretium dignissim. Vivamus et euismod erat. Maecenas at nisl et ligula mattis lobortis vestibulum suscipit felis. Maecenas consequat tincidunt elit, quis congue dolor accumsan sed.</p>
  						<p class="mb-0" style="text-indent:2.5%">
							Pellentesque nibh metus, suscipit vel porta egestas, venenatis vel nunc. Aenean ex massa, rhoncus pharetra scelerisque in, blandit vehicula massa. Donec eu orci a risus mattis facilisis. Proin vestibulum pellentesque aliquam. Maecenas a scelerisque turpis. Nullam ultricies purus eu metus facilisis, eget eleifend tellus tempor. Etiam posuere felis et purus pharetra, eget hendrerit ipsum hendrerit.</p>
						</div>
						<div class="mt-4 p-2" id="regulamin">
  						<h4 style="text-indent: 5%">Regulamin</h4>
  						<p class="mb-0" style="text-indent: 2.5%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor pretium enim sit amet sagittis. Quisque tincidunt tellus nec nisi placerat lobortis. Quisque elementum dignissim urna vitae faucibus. Sed imperdiet nisl et est consequat, maximus feugiat ipsum porttitor. Duis vitae consequat lorem. Quisque erat magna, tincidunt at porta nec, rhoncus in quam. Aliquam ac orci nec ipsum ultrices aliquet. Morbi ligula libero, condimentum eu augue eu, aliquet feugiat risus. Duis sit amet faucibus eros. Curabitur id quam nec purus cursus hendrerit. Curabitur quis tortor est.</p>
  						<p class="mb-0" style="text-indent:2.5%"> Phasellus ut molestie dui. Integer molestie volutpat metus, et faucibus risus pellentesque non. Integer nec sapien venenatis, tincidunt turpis condimentum, dignissim velit. Duis mollis hendrerit tellus vel ultrices. Pellentesque lectus eros, condimentum ut auctor id, efficitur et ante. Cras dapibus egestas metus vitae molestie. Maecenas gravida erat at nunc bibendum, at ultrices tellus tincidunt. Quisque hendrerit, libero eu venenatis euismod, tortor odio rhoncus ante, vel placerat eros nunc a ante.</p>
							<p class="mb-0" style="text-indent:2.5%">Nunc ac lectus nunc. Fusce egestas eros ac mauris suscipit lobortis vel eu justo. Ut et risus ac massa maximus accumsan sit amet eget dolor. Etiam tempus varius odio non mattis. Ut tellus tellus, consequat ac vestibulum sed, tristique non massa. Donec nec tincidunt est. Vivamus congue pretium lorem et maximus. Vestibulum tincidunt leo luctus felis viverra, non luctus dui tincidunt. Phasellus laoreet porttitor ex. Sed sit amet neque vitae lacus eleifend volutpat at ac leo. Sed euismod egestas rhoncus. Sed dapibus vitae lorem id placerat.</p>
							<p class="mb-0" style="text-indent:2.5%">Maecenas lacinia volutpat tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus quis facilisis justo, non porttitor risus. Nullam rhoncus nunc non consectetur facilisis. Phasellus interdum, nibh eget iaculis hendrerit, risus sem ullamcorper sapien, ac molestie purus sem id leo. Sed dapibus, urna id sodales condimentum, mi metus aliquet ipsum, ut vehicula libero nibh vitae odio. Sed a imperdiet ex. Vivamus a dolor venenatis, volutpat sapien quis, convallis leo. Morbi malesuada, lorem eu ultricies lacinia, est quam faucibus magna, mattis facilisis massa justo eget mi. Proin ut diam eget tellus dignissim sodales. Vivamus laoreet pretium dignissim. Vivamus et euismod erat. Maecenas at nisl et ligula mattis lobortis vestibulum suscipit felis. Maecenas consequat tincidunt elit, quis congue dolor accumsan sed.</p>
  						<p class="mb-0" style="text-indent:2.5%">
							Pellentesque nibh metus, suscipit vel porta egestas, venenatis vel nunc. Aenean ex massa, rhoncus pharetra scelerisque in, blandit vehicula massa. Donec eu orci a risus mattis facilisis. Proin vestibulum pellentesque aliquam. Maecenas a scelerisque turpis. Nullam ultricies purus eu metus facilisis, eget eleifend tellus tempor. Etiam posuere felis et purus pharetra, eget hendrerit ipsum hendrerit.</p>
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
</div>
</body>
</html>