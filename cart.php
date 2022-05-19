<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>Koszyk - Cookie</title>
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
	<script src="src/bootstrap-input-spinner.js"></script>
	<script type="text/javascript">
		$("input[type='number']").inputSpinner();
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
	</div>  
  <div class="container">
   	<div class="row py-5">
   		<div class="col-12">
   			<div class="row">
   				<div class="col-10 col-sm-10 col-md-10 col-lg-8 p-0 mb-4 mx-auto" >
   					<div class="row m-0 p-3 border rounded mb-4" style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.08); border-color: rgba(0, 0, 0, 0.08) !important">
							<div class="container">
						    <div class="row">
					        <div class="col-2 col-sm-2 col-lg-1 py-0 pr-0">
					        	<img src="113.svg" class="float-left" alt="..." style="max-height: 40px; max-width: 40px">
					        </div>
					        <a class="col-10 col-sm-10 col-lg-5 product_order_history" style="line-height: 40px" data-toggle="modal" data-target="#order_product_1">Owocowe ciasteczka</a>
					        <div class="col-2 col-sm-2 col-lg-0 py-0 pr-0 d-lg-none d-xl-none"></div>
						      <div class="col-4 col-sm-4 col-lg-2 pr-0" style="line-height: 40px">
						      	<div class="num-block skin-2">
										  <div class="num-in">
										    <span class="minus dis" style="cursor: pointer;"></span>
										    <input type="text" class="in-num1" value="1" readonly="" style="border-bottom-color: rgba(0, 0, 0, 0.08) !important; border-bottom-style: solid !important; border-bottom-width: 1px !important; height: 39px !important;">
										    <span class="plus" style="cursor: pointer;"></span>
										  </div>
										</div>
						      </div>
						      <div class="col-3 col-sm-3 col-lg-3 d-flex justify-content-end" style="line-height: 40px">
						      	<div class="container p-0">
										    <div class="row">
										        <div class="col pl-0 d-flex justify-content-end">
										        	<div id="cost_e1">19.99</div>
                    					<div>&nbsp;zł</div>
										        </div>
										    </div>
										    <div class="row" id="dd" style="display: none">
										        <small class="col pl-0 text-muted d-flex justify-content-end" style="font-size: 12px; line-height: 12px;">za sztukę 19.99 zł</small>
										    </div>
										</div>
						      </div>
						      <div class="col-3 col-sm-3 col-lg-1 p-0">
						      	<button class="btn btn-trash btn-block fas fa-trash fa-lg py-0 border rounded" style="line-height: 38px; padding-left: 0; padding-right: 0px; border-color: rgba(0, 0, 0, 0.08) !important; box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.08);"></button>
						      </div>
						    </div>
							</div>
							<div class="container pt-3">
						    <div class="row">
					        <div class="col-2 col-sm-2 col-lg-1 py-0 pr-0">
					        	<img src="113.svg" class="float-left" alt="..." style="max-height: 40px; max-width: 40px">
					        </div>
					        <a class="col-10 col-sm-10 col-lg-5 product_order_history" style="line-height: 40px" data-toggle="modal" data-target="#order_product_1">Owocowe ciasteczka</a>
					        <div class="col-2 col-sm-2 col-lg-0 py-0 pr-0 d-lg-none d-xl-none"></div>
						      <div class="col-4 col-sm-4 col-lg-2 pr-0" style="line-height: 40px">
						      	<div class="num-block skin-2">
										  <div class="num-in">
										    <span class="minus dis" style="cursor: pointer;"></span>
										    <input type="text" class="in-num2" value="1" readonly="" style="border-bottom-color: rgba(0, 0, 0, 0.08) !important; border-bottom-style: solid !important; border-bottom-width: 1px !important; height: 39px !important;">
										    <span class="plus" style="cursor: pointer;"></span>
										  </div>
										</div>
						      </div>
						      <div class="col-3 col-sm-3 col-lg-3 d-flex justify-content-end" style="line-height: 40px">
						      	<div class="container p-0">
										    <div class="row">
										        <div class="col pl-0 d-flex justify-content-end">
										        		<div id="cost_e2">19.99</div>
                    						<div>&nbsp;zł</div>
										        </div>
										    </div>
										    <div class="row" id="d" style="display: none">
										        <small class="col pl-0 text-muted d-flex justify-content-end" style="font-size: 12px; line-height: 12px;">za sztukę 19.99 zł</small>
										    </div>
										</div>
						      </div>
						      <div class="col-3 col-sm-3 col-lg-1 p-0">
						      	<button class="btn btn-trash btn-block fas fa-trash fa-lg py-0 border rounded" style="line-height: 38px; padding-left: 0; padding-right: 0px; border-color: rgba(0, 0, 0, 0.08) !important; box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.08);"></button>
						      </div>
						    </div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4 mx-auto rounded border p-3" id="free_delivery" style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.08); border-color: rgba(0, 0, 0, 0.08) !important">
   					<div class="progress">
						  <div class="progress-bar" role="progressbar" id="progress-bar" style="width: 0%; background-color: rgb(42, 80, 166);" aria-valuenow="0" aria-valuemin="0" aria-valuemax="40"></div>
						</div>
						<div class="pt-1 pl-1">
							<small class="text-muted" id="delivery_free_rest"></small>
						</div>
						<div class="pt-2">
							<a href="index.php" class="btn btn-bottom">Dobierz produkty</a>
						</div>
   				</div>
   				</div>
   				<div class="col-10 col-sm-10 col-md-10 col-lg-3 mb-4 mx-auto" id="order">
   					<div class="row rounded border py-3" style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.08); border-color: rgba(0, 0, 0, 0.08) !important">
   						<div class="col-12">
   							<div class="row">
   								<div class="col-6">Do zapłaty</div>
   								<div class="col-6 d-flex justify-content-end" style="font-size: 23px">
   									<div id="cost">39.98</div>
                    <div>&nbsp;zł</div>
   								</div>
   							</div>
   							<small id="delivery1" class="col-12 text-muted pr-0" align="right">darmowa dostawa</small>
   							<small id="delivery2" class="col-12 text-muted pr-0" align="right">+ dostawa</small>
   						</div>
   						<div class="col-12 py-3">
   							<button class="btn btn-add-cart rounded btn-block" onclick="location.href='bar.php'">Dostawa i płatność</button>
   						</div>
   						<div class="col-12">
   							<a href="index.php" class="btn btn-block btn-bottom">Kontynuuj zakupy</a>
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
</body>
</html>
<script type="text/javascript">
	var value2 = document.getElementById("cost_e2").innerHTML;
	var value1 = document.getElementById("cost_e1").innerHTML;
$(document).ready(function() {
  $('.num-in span').click(function () {
      var $input = $(this).parents('.num-block').find('input.in-num2');
    if($(this).hasClass('minus')) {
      var count = parseFloat($input.val()) - 1;
      count = count < 1 ? 1 : count;
      if (count < 2) {
        $(this).addClass('dis');
      }
      else {
        $(this).removeClass('dis');
      }
      $input.val(count);
    }
    else {
      var count = parseFloat($input.val()) + 1
      $input.val(count);
      if (count > 1) {
        $(this).parents('.num-block').find(('.minus')).removeClass('dis');
      }
    }
   	if (count > 1) {
   		document.getElementById("d").style.display = "";
   		document.getElementById("cost_e2").innerHTML = (count * value2).toFixed(2);
   	} else if (count == 1) {
      document.getElementById("cost_e2").innerHTML = value2;
   		document.getElementById("d").style.display = "none";
   	}
    
    $input.change();
    return false;
  });
	
  $('.num-in span').click(function () {
       var $input = $(this).parents('.num-block').find('input.in-num1');
    if($(this).hasClass('minus')) {
      var count = parseFloat($input.val()) - 1;
      count = count < 1 ? 1 : count;
      if (count < 2) {
        $(this).addClass('dis');
      }
      else {
        $(this).removeClass('dis');
      }
      $input.val(count);
    }
    else {
      var count = parseFloat($input.val()) + 1
      $input.val(count);
      if (count > 1) {
        $(this).parents('.num-block').find(('.minus')).removeClass('dis');
      }
    }
   	if (count > 1) {
   		document.getElementById("dd").style.display = "";
   		document.getElementById("cost_e1").innerHTML = (count * value1).toFixed(2);
   	} else if (count == 1) {
      document.getElementById("cost_e1").innerHTML = value1;
   		document.getElementById("dd").style.display = "none";
   	}
    
    $input.change();
    return false;
  });
});
// product +/-

	(function() {
  window.onresize = displayWindowSize;
  window.onload = displayWindowSize;

  function displayWindowSize() {
    let myWidth = window.innerWidth;
     if (myWidth >= 992) {
        	document.getElementById("order").classList.remove("order-last");
        } else {
        	document.getElementById("order").classList.add("order-last");
        }
  };


})();

	function deliveryCost() {
        var cost = document.getElementById("cost").innerHTML;
        if (cost >= 40) {
          document.getElementById("delivery1").style.display = "block";
          document.getElementById("delivery2").style.display = "none";
          document.getElementById("free_delivery").style.display = "none";
        } else {
        	document.getElementById("free_delivery").style.display = "block";
        	var cost_delivery = 40 - cost;
        	cost =  cost / 40 * 100;
        	cost = cost.toFixed(2);
        	cost = String(cost).concat('%');
        	var string1 = 'Brakuje ';
        	string1 = string1.concat(cost_delivery.toFixed(2));
        	var string2 = ' zł do dostawy za 0 zł'
        	string2 = string1.concat(string2);
        	document.getElementById("delivery_free_rest").innerHTML = string2;
					document.getElementById("progress-bar").style.width = cost;
          document.getElementById("delivery2").style.display = "block";
          document.getElementById("delivery1").style.display = "none";
        }
      }

    window.onload = deliveryCost;
</script>