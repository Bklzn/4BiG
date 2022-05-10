<!DOCTYPE html>
<html lang='pl'>

  <head>
    <meta charset="utf-8">
    <title>Kontakt - Cookie</title>
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
              <button class="btn btn-hamburger p-0" type="button" onclick="myFunction3()"><i class="fas fa-bars" style="color: #ffffff; font-size: 36px;"></i></button>
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
            <div class="col-8 col-sm-8 col-md-6 col-lg-4 pb-3">
              <div class="display-4 d-flex justify-content-center pt-5 pb-2 ">
                <i class="fas fa-question" style="color: #49403f;"></i>
              </div>
              <div class="col d-flex justify-content-center text-capitalize font-weight-bold" style="color: #49403f; font-size: 20px;">
                Jak możemy pomóc?
              </div>
              <hr class="my-3" style="border-top: 1px solid #e0e0e0">
            </div>
            <div class="col"></div>
          </div>
          <div class="row">
            <div class="col-6 pb-5 mb-3">
              <div class="row">
                <div class="col-12">
                  <div class="col-10 col-sm-10 col-md-8 col-lg-8 mx-auto pb-3">
                    <label for="InputNameForm">Imię</label>
                    <input type="text" class="form-control input-user" style="box-shadow: none;">
                  </div>
                  <div class="col-10 col-sm-10 col-md-8 col-lg-8 mx-auto pb-3">
                    <label for="InputLastNameForm">Nazwisko</label>
                    <input type="text" class="form-control input-user" style="box-shadow: none;">
                  </div>
                  <div class="col-10 col-sm-10 col-md-8 col-lg-8 mx-auto pb-3">
                    <label for="InputMailForm">E-mail</label>
                    <input type="mail" class="form-control input-user" style="box-shadow: none;">
                  </div>
                  <div class="col-10 col-sm-10 col-md-8 col-lg-8 mx-auto pb-3">
                    <label for="InputCookieText">Opis</label>
                    <textarea class="form-control input-user" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="col-10 col-sm-10 col-md-8 col-lg-8 mx-auto pb-3">
                    <button class="btn btn-delete btn-block rounded" type="button">Wyślij wiadomość</button>
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-12">
                  <hr class="my-3" style="border-top: 1px solid #e0e0e0">
                  <div class="font-weight-bold">Informacje kontaktowe</div>
                  <div class="row pt-2">
                    <div class="col-1 pl-5" style="text-align: right; display: flex; justify-content: center; align-items: center;">
                      <i class="fas fa-map-marker-alt fa-2x" style="color: #49403f;"></i>
                    </div>
                    <div class="col"><small>Cookie sp. z o.o.</small><br>Piłsudzkiego 1/46 10-546 Olsztyn</div>
                  </div>
                  <div class="row pt-3">
                    <div class="col-1 pl-5" style="text-align: right; display: flex; justify-content: center; align-items: center;">
                      <i class="fas fa-phone-alt fa-2x" style="color: #49403f;"></i>
                    </div>
                    <div class="col" style="text-align: right; display: flex; align-items: center;">
                      <a href="tel:123456789" style="text-decoration:none; color: black;">+48 123 456 789</a>
                    </div>
                  </div>
                  <div class="row pt-3">
                    <div class="col-1 pl-5" style="text-align: right; display: flex; justify-content: center; align-items: center;">
                      <i class="fas fa-envelope fa-2x" style="color: #49403f;"></i>
                    </div>
                    <div class="col" style="text-align: right; display: flex; align-items: center; word-break: break-all;">
                      <a href="mailto:example@example.com" style="text-decoration:none; color: black;">example@example.com</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 pb-5 mb-3">
            	<div class="pb-3">
            		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lobortis condimentum tortor, ut dignissim mi.
            	</div>
              <div class="accordion" id="accordionExample">
                <div class="card border-0" id="rot">
                  <div class="card-header p-0" id="heading1" style="background-color: white; !important;">
                          <h5 class="mb-0">
                            <button class="w-100 h100 btn btn-collapse" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none">
                              <div class="row m-0">
                                <div class="col-10 p-0">
                                	<div class="row">
                                		<div class="col p-0 px-2 text-left">
                                			Integer rhoncus semper mauris
                                		</div>
                                		<div class="w-100"></div>
                                		<div class="col p-0 px-2 text-left">
                                			<small>
                                				Orci varius natoque penatibus et magnis dis parturient montes
                                			</small>
                                		</div>
                                	</div>
                                </div>
                                <div class="col-2 py-2 " style="text-align: right; display: flex; justify-content: center; align-items: center;">
                                  <i class="fas fa-angle-right fa-2x" id="arrow" style="color: #49403f;"></i>
                                </div>
                              </div>
                            </button>
                          </h5>
                        </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" >
                    <div class="card-body pt-0 px-2">
                    	<div style="padding-top: 20px !important; border-top-width: 1px !important; border-top-style: solid !important; border-top-color: rgba(0, 0, 0, 0.08) !important;"></div>
                      Nunc hendrerit, eros id elementum tincidunt, mauris lorem vehicula justo, sit amet varius libero ex nec tortor. Phasellus porttitor vehicula nisl vitae faucibus. In vulputate iaculis dignissim.
                    </div>
                  </div>
                </div>
                <div class="card border-0" id="rot2">
                  <div class="card-header p-0" id="heading2" style="background-color: white; !important;">
                          <h5 class="mb-0">
                            <button class="w-100 h100 btn btn-collapse" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2" style="text-decoration: none">
                              <div class="row m-0">
                                <div class="col-10 p-0">
                                  <div class="row">
                                    <div class="col p-0 px-2 text-left">
                                      Sed purus enim, molestie non.
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col p-0 px-2 text-left">
                                      <small>
                                        Sed molestie quis mi at accumsan. In ac nibh ut est molestie tincidunt.
                                      </small>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-2 py-2 " style="text-align: right; display: flex; justify-content: center; align-items: center;">
                                  <i class="fas fa-angle-right fa-2x" id="arrow2" style="color: #49403f;"></i>
                                </div>
                              </div>
                            </button>
                          </h5>
                        </div>
                  <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample" >
                    <div class="card-body pt-0 px-2">
                      <div style="padding-top: 20px !important; border-top-width: 1px !important; border-top-style: solid !important; border-top-color: rgba(0, 0, 0, 0.08) !important;"></div>
                      Quisque arcu urna, convallis sit amet sapien quis, auctor interdum turpis. Suspendisse a vestibulum augue. Donec et nisl efficitur, gravida ante sed, tempor leo.
                    </div>
                  </div>
                </div>
                <div class="card border-0" id="rot3">
                  <div class="card-header p-0" id="heading3" style="background-color: white; !important;">
                          <h5 class="mb-0">
                            <button class="w-100 h100 btn btn-collapse" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3" style="text-decoration: none">
                              <div class="row m-0">
                                <div class="col-10 p-0">
                                  <div class="row">
                                    <div class="col p-0 px-2 text-left">
                                      Nunc malesuada rutrum lacus, sit amet elementum orci.
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col p-0 px-2 text-left">
                                      <small>
                                        Integer rhoncus semper mauris vitae dapibus. Orci varius natoque penatibus et.
                                      </small>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-2 py-2" style="text-align: right; display: flex; justify-content: center; align-items: center;">
                                  <i class="fas fa-angle-right fa-2x" id="arrow3" style="color: #49403f;"></i>
                                </div>
                              </div>
                            </button>
                          </h5>
                        </div>
                  <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample" >
                    <div class="card-body pt-0 px-2">
                      <div style="padding-top: 20px !important; border-top-width: 1px !important; border-top-style: solid !important; border-top-color: rgba(0, 0, 0, 0.08) !important;"></div>
                      Nulla laoreet, lacus in congue volutpat, est nunc ornare purus, id dictum nisi libero ut ipsum. Vestibulum ac fermentum elit. Aliquam cursus cursus tellus ut feugiat. Integer eget orci lectus.
                    </div>
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

