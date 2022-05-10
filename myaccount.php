<!DOCTYPE html>
<html lang='pl'>

  <head>
    <meta charset="utf-8">
    <title>Moje konto - Cookie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="bar.css">
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
      function open_nav_user() {
        var x = document.getElementById("open_user");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }

      $(function() {
        $('#eye_account_1').click(function() {
          if ($(this).hasClass('fa-eye-slash')) {
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
            $('#password1').attr('type', 'text');
          } else {
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');
            $('#password1').attr('type', 'password');
          }
        });
        $('#eye_account_2').click(function() {
          if ($(this).hasClass('fa-eye-slash')) {
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
            $('#password2').attr('type', 'text');
          } else {
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');
            $('#password2').attr('type', 'password');
          }
        });
        $('#eye_account_3').click(function() {
          if ($(this).hasClass('fa-eye-slash')) {
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
            $('#password3').attr('type', 'text');
          } else {
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');
            $('#password3').attr('type', 'password');
          }
        });
      });

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
      </div>
      <div class="container">
        <div class="row pb-5 pt-4">
          <div class="col-12">
            <h3>Moje konto</h3>
            <div class="row pt-3">
              <div class="col-10 col-sm-12 col-md-10 col-lg-2 mb-4 mx-auto">
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
                  <a class="btn btn-list mb-2 list-group-item-action disabled" id="list-ankieta-list" data-toggle="list" href="#list-ankieta" role="tab" aria-controls="ankieta">
                    <i class="fas fa-clipboard-list mx-2"></i>
                    Ankieta
                  </a>
                  <a class="btn btn-list list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="ustawienia">
                    <i class="fas fa-cog mx-2"></i>
                    Ustawienia
                  </a>
                </div>
              </div>
              <div class="col-10 col-sm-12 col-md-10 col-lg-10  mx-auto">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="row">
                      <div class="col-12 mb-3">
                        <h4>Profil</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 mb-2">
                        <h5>Informacje osobiste</h5>
                      </div>
                    </div>
                    <hr style="margin-top: 0px;">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 pb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut metus viverra, accumsan odio vitae, scelerisque leo. Sed efficitur congue odio et maximus.
                      </div>
                      <div class="col-10 col-sm-8 col-md-4 pb-3 mx-auto">
                        <label for="InputName">Imię</label>
                        <input type="text" class="form-control input-user" value="Imię">
                      </div>
                      <div class="col-10 col-sm-8 col-md-4 pb-3 mx-auto">
                        <label for="InputLastName">Nazwisko</label>
                        <input type="text" class="form-control input-user" value="Nazwisko">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-0 col-sm-0 col-md-4"></div>
                      <div class="col-10 col-sm-8 col-md-4 mx-auto pb-3">
                        <label for="InputBirth">Data urodzenia</label>
                        <div class="input-group input-user wrapper-2" style="border-radius: 0.25rem;">
                          <input type="text" class="datepicker_input form-control" id="datepicker1" style="box-shadow: none; border: none; height: 34px !important; cursor: pointer;" value="getData()">
                          <div class="input-group-append" style="cursor:pointer;">
                            <span class="input-group-text" id="basic-addon2" style="background: none; border: none;">
                              <i class="fas fa-calendar" style="cursor: pointer; color: rgba(124,97,82,1);"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-0 col-sm-0 col-md-4"></div>
                    </div>
                    <div class="row">
                      <div class="col-0 col-sm-0 col-md-4"></div>
                      <div class="col-10 col-sm-8 col-md-4 mx-auto pb-3">
                        <div class="form-group mb-0">
                          <label for="ImputPhone">Numer telefonu</label>
                          <input class="form-control input-user" type="tel" id="phone" name="phone" pattern="[0-9]{9}" value="123456789">
                          <small id="telhelp" class="form-text text-muted">Numer telefonu musi składać się z 9 cyfr</small>
                        </div>
                      </div>
                      <div class="col-0 col-sm-0 col-md-4"></div>
                    </div>
                    <div class="row">
                      <div class="col-12 d-flex justify-content-center pt-4">
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
                      <div class="col-12 col-sm-12 col-md-4 col-lg-4 pb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut metus viverra, accumsan odio vitae, scelerisque leo. Sed efficitur congue odio et maximus.
                      </div>
                      <div class="col-10 col-sm-8 col-md-6 col-lg-4 mx-auto pb-3">
                        <label for="InputEmailCurrent">Aktualny e-mail</label>
                        <input type="e-mail" class="form-control input-user" style="box-shadow: none; background-color: #ffffff;" value="example@example.com" readonly>
                      </div>
                      <div class="col-0 col-sm-0 col-md-2 col-lg-4"></div>
                    </div>
                    <div class="row">
                      <div class="col-0 col-sm-0 col-md-4 col-lg-4"></div>
                      <div class="col-10 col-sm-8 col-md-6 col-lg-4 mx-auto pb-3">
                        <label for="InputEmailNew">Nowy e-mail</label>
                        <input type="e-mail" class="form-control input-user" style="box-shadow: none;">
                      </div>
                      <div class="col-0 col-sm-0 col-md-2 col-lg-4"></div>
                    </div>
                    <div class="row">
                      <div class="col-0 col-sm-0 col-md-4 col-lg-4"></div>
                      <div class="col-10 col-sm-8 col-md-6 col-lg-4 mx-auto pb-3">
                        <label for="InputEmailNew2">Potwierdź nowy e-mail</label>
                        <input type="e-mail" class="form-control input-user" style="box-shadow: none;">
                      </div>
                      <div class="col-0 col-sm-0 col-md-2 col-lg-4"></div>
                    </div>
                    <div class="row">
                      <div class="col-12 pt-2 d-flex justify-content-center pt-4">
                        <button class="btn btn-add-cart">Zmień e-mail</button>
                      </div>
                    </div>
                    <div class="row pt-5">
                      <div class="col-12 mb-2">
                        <h5>Hasło</h5>
                      </div>
                    </div>
                    <hr style="margin-top: 0px;">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 col-lg-4 pb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut metus viverra, accumsan odio vitae, scelerisque leo. Sed efficitur congue odio et maximus.
                      </div>
                      <div class="col-10 col-sm-8 col-md-6 col-lg-4 mx-auto pb-3">
                        <label for="InputPasswordCurrent">Aktualne hasło</label>
                        <div class="input-group input-user wrapper-1" style="border-radius: 0.25rem;">
                          <input type="password" id="password1" class="form-control" style="box-shadow: none; border: none; height: 34px !important;">
                          <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2" style="background: none; border: none">
                              <i class="fas fa-eye-slash" id="eye_account_1" style="cursor: pointer; width: 20px; color: rgba(124,97,82,1);"></i>
                            </span>
                          </div>
                        </div>
                        <small id="telhelp" class="float-right form-text text-muted">
                          <a href="password_reset_login.php" style="text-decoration: none; color: rgb(108,117,125);">
                            Nie pamiętasz hasła?
                          </a>
                        </small>
                      </div>
                      <div class="col-0 col-sm-0 col-md-2 col-lg-4"></div>
                    </div>
                    <div class="row">
                      <div class="col-0 col-sm-0 col-md-4 col-lg-4"></div>
                      <div class="col-10 col-sm-8 col-md-6 col-lg-4 mx-auto pb-3">
                        <label for="InputPasswordNew">Nowe hasło</label>
                        <div class="input-group input-user wrapper-2" style="border-radius: 0.25rem;">
                          <input type="password" id="password2" class="form-control" autocomplete="new-password" style="box-shadow: none; border: none; height: 34px !important;">
                          <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2" style="background: none; border: none;">
                              <i class="fas fa-eye-slash" id="eye_account_2" style="cursor: pointer; color: rgba(124,97,82,1);"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-0 col-sm-0 col-md-2 col-lg-4"></div>
                    </div>
                    <div class="row">
                      <div class="col-0 col-sm-0 col-md-4 col-lg-4"></div>
                      <div class="col-10 col-sm-8 col-md-6 col-lg-4 mx-auto pb-3">
                        <label for="InputPasswordNew">Potierdź nowe hasło</label>
                        <div class="input-group mb-3 input-user wrapper-3" style="border-radius: 0.25rem;">
                          <input type="password" id="password3" class="form-control" autocomplete="new-password" style="box-shadow: none; border: none; height: 34px !important;">
                          <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2" style="background: none; border: none;">
                              <i class="fas fa-eye-slash" id="eye_account_3" style="cursor: pointer; color: rgba(124,97,82,1);"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-0 col-sm-0 col-md-2 col-lg-4"></div>
                    </div>
                    <div class="row pt-4">
                      <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-add-cart">Zmień hasło</button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="row">
                      <div class="col-12 mb-3">
                        <h4>Adres</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 mb-2">
                        <h5>Adres do wysyłki</h5>
                      </div>
                    </div>
                    <hr style="margin-top: 0px;">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 pb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut metus viverra, accumsan odio vitae, scelerisque leo. Sed efficitur congue odio et maximus.
                      </div>
                      <div class="col-8 col-sm-8 col-md-4 pb-3 mx-auto">
                        <label for="InputNameDelivery">Imię</label>
                        <input type="text" class="form-control input-user">
                      </div>
                      <div class="col-8 col-sm-8 col-md-4 pb-3 mx-auto">
                        <label for="InputLastNameDelivery">Nazwisko</label>
                        <input type="text" class="form-control input-user">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-0 col-sm-0 col-md-4"></div>
                      <div class="col-8 col-sm-8 col-md-4 pb-3 mx-auto">
                        <div class="form-group mb-0">
                          <label for="ImputCompanyDelivery">Firma</label>
                          <input type="text" class="form-control input-user">
                          <small id="telhelp" class="form-text text-muted">Opcjonalnie</small>
                        </div>
                      </div>
                      <div class="col-0 col-sm-0 col-md-4"></div>
                    </div>
                    <div class="row">
                      <div class="col-0 col-sm-0 col-md-4"></div>
                      <div class="col-8 col-sm-8 col-md-4 pb-3 mx-auto">
                        <div class="form-group mb-0">
                          <label for="ImputPhoneDelivery">Numer telefonu</label>
                          <input class="form-control input-user" type="tel" id="phone" name="phone" pattern="[0-9]{9}">
                          <small id="telhelp" class="form-text text-muted">Numer telefonu musi składać się z 9 cyfr</small>
                        </div>
                      </div>
                      <div class="col-0 col-sm-0 col-md-4"></div>
                    </div>
                    <div class="row">
                      <div class="col-0 col-sm-0 col-md-4"></div>
                      <div class="col-8 col-sm-8 col-md-4 mx-auto pb-3">
                        <label for="ImputStreetDelivery">Ulica i numer</label>
                        <input class="form-control input-user">
                      </div>
                      <div class="col-0 col-sm-0 col-md-4">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-0 col-sm-0 col-md-4"></div>
                      <div class="col-8 col-sm-8 col-md-4 mx-auto pb-3">
                        <label for="ImputZipDelivery">Kod pocztowy</label>
                        <input class="form-control input-user">
                      </div>
                      <div class="col-8 col-sm-8 col-md-4 mx-auto pb-3">
                        <label for="ImputCityDelivery">Miasto</label>
                        <input class="form-control input-user">
                      </div>
                    </div>
                    <div class="row pt-4">
                      <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-add-cart"> Zapisz zmiany</button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class="row">
                      <div class="col-12 mb-3">
                        <h4>Zamówienia</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 mb-2">
                        <h5>Historia zamówień</h5>
                      </div>
                    </div>
                    <hr style="margin-top: 0px;">
                    <div id="accordion">
                      <div class="card mb-2" style="border: 1px solid rgba(0, 0, 0, 0.08) !important;">
                        <div class="card-header p-0" id="heading1">
                          <h5 class="mb-0">
                            <button class="w-100 h100 btn btn-collapse" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1" style="text-decoration: none">
                              <div class="row m-0">
                                <div class="col-1 py-2">
                                  <i class="fas fa-box fa-lg" style="color: #53c58f"></i>
                                </div>
                                <div class="col-8 py-2 d-flex justify-content-start">
                                  Zamówienie #123456
                                </div>
                                <div class="col-3 py-2 d-flex justify-content-end" style="color: #53c58f; text-align: right;">
                                  Zakup opłacony
                                </div>
                              </div>
                            </button>
                          </h5>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion" style="border-top: 1px solid rgba(0, 0, 0, 0.08) !important;">
                          <div class="card-body">
                            <div class="col-12">
                              <ul id="progressbar" class="text-center">
                                <li class="active step0"></li>
                                <li class="step0"></li>
                                <li class="step0"></li>
                                <li class="step0"></li>
                                <li class="step0"></li>
                              </ul>
                            </div>
                          </div>
                          <div class="row justify-content-between top">
                            <div class="row d-flex icon-content-1">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">Zakup opłacony</p>
                                <small>22 kwi. 2022, 13:55</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-2">
                              <div class="d-flex flex-column">
                                <p class="bar-text mb-0">Oczekuje na nadanie</p>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-3">
                              <div class="d-flex flex-column">
                                <p class="bar-text mb-0">W drodze</p>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-4">
                              <div class="d-flex flex-column">
                                <p class="bar-text mb-0">Odbierz przesyłkę</p>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-5">
                              <div class="bar-text d-flex flex-column">
                                <p class="bar-text mb-0">Przesyłka odebrana</p>
                              </div>
                            </div>
                          </div>
                          <hr style="margin-top: 0px; margin-bottom: 20px;">
                          <div class="row">
												    <div class="col-12 col-sm-6 col-md-4" style="margin-bottom: 20px;">
												    	<div class="px-4">
												    	<div class="row">
												    		<div class="col">
														      <p class="font-weight-bold mb-1">Sposób dostawy</p>
																	<div style="font-size: 14px">Odbiór w punkcie</div>
														      <div style="font-size: 14px">Paczkomat InPost</div>
													      </div>
													      <div class="w-100"></div>
													      <div class="col pt-3">
														      <p class="font-weight-bold mb-1">Przewoźnik i numer przesyłki</p>
																	<div style="font-size: 14px">InPost</div>
														      <div style="font-size: 14px">666000888222666111666999</div>
														      <div> 
														      	<a class="register-line" href="https://inpost.pl/sledzenie-przesylek?number=666000888222666111666999" target="_blank" style="text-decoration: none; font-size: 14px; color: #212529;">Pełna historia przesyłki</a>
														      </div>
													      </div>
												      </div>
												      </div>
												    </div>
												    <div class="col-12 col-sm-6 col-md-4" style="margin-bottom: 20px;">
												    	<div class="px-4">
												      <p class="font-weight-bold mb-1">Punkt odbioru</p>
															<div style="font-size: 14px">Paczkomat OLS40M</div>
												      <div style="font-size: 14px">Stawigudzka 9</div>
												      <div style="font-size: 14px">10-687 Olsztyn</div>
												      <div style="font-size: 14px">przy posesji stawigudzka 9</div>
												      </div>
												    </div>
												    <div class="col-12 col-sm-6 col-md-4" style="margin-bottom: 20px;">
												    	<div class="px-4">
												      <p class="font-weight-bold mb-1">Dane odbiorcy</p>
															<div style="font-size: 14px">Jan Nowak</div>
												      <div style="font-size: 14px">Józefa Piłsudzkiego 1/1</div>
												      <div style="font-size: 14px">10-575 Olsztyn</div>
												      <div style="font-size: 14px">123456789</div>
												      </div>
												    </div>
												  </div>
												  <hr style="margin-top: 0px; margin-bottom: 20px;">
												  <div class="row m-0">
												    <div class="col-1 p-0 ml-5">
												    	<div class="row">
												    		<div class="col" style="max-height: 50px;">
												    			<img src="113.svg" style="max-height: 50px;" class="align-left photo">
												    		</div>
												      </div>
												    </div>
												    <div class="col">
												    	<div class="row">
												    		<div class="col" style="line-height: 50px;"> 
												    			<a class="product_order_history" data-toggle="modal" data-target="#order_product_1">Owocowe ciasteczka</a>
												    		</div>
												      </div>
												    </div>
												    <div class="col-2">
												    	<div class="row">
												    		<small class="col p-0 d-flex justify-content-end" style="line-height: 50px; color: #6c757d;"> 
												    			1 × 19,90 zł	
												    		</small>
												      </div>
												    </div>
												    <div class="col-2 mr-5">
												    	<div class="row">
												    		<div class="col p-0 d-flex justify-content-end" style="line-height: 50px;">
												    			19,90 zł
												    		</div>
												      </div>
												    </div>
												  </div>
												  <div style="padding-bottom: 20px;"></div>
												  <div class="row m-0">
												    <div class="col-1 p-0 ml-5">
												    	<div class="row">
												    		<div class="col" style="max-height: 50px;">
												    			<img src="113.svg" style="max-height: 50px;" class="align-left photo">
												    		</div>
												      </div>
												    </div>
												    <div class="col">
												    	<div class="row">
												    		<div class="col" style="line-height: 50px;"> 
												    			<a class="product_order_history" data-toggle="modal" data-target="#order_product_1">Karmelowe ciacha</a> 
												    		</div>
												      </div>
												    </div>
												    <div class="col-2">
												    	<div class="row">
												    		<small class="col p-0 d-flex justify-content-end" style="line-height: 50px; color: #6c757d;"> 
												    			1 × 24,90 zł	
												    		</small>
												      </div>
												    </div>
												    <div class="col-2 mr-5">
												    	<div class="row">
												    		<div class="col p-0 d-flex justify-content-end" style="line-height: 50px;">
												    			24,90 zł
												    		</div>
												      </div>
												    </div>
												  </div>
												  <div style="padding-bottom: 20px;"></div>
												  <div class="row m-0">
												    <div class="col-1 p-0 ml-5">
												    	<div class="row">
												    		<div class="col" style="max-height: 50px;">
												    			<img src="113.svg" style="max-height: 50px;" class="align-left photo">
												    		</div>
												      </div>
												    </div>
												    <div class="col">
												    	<div class="row">
												    		<div class="col" style="line-height: 50px;">
												    			<a class="product_order_history" data-toggle="modal" data-target="#order_product_1">Ulica sezamkowa</a>
												    		</div>
												      </div>
												    </div>
												    <div class="col-2">
												    	<div class="row">
												    		<small class="col p-0 d-flex justify-content-end" style="line-height: 50px; color: #6c757d;"> 
												    			1 × 44,90 zł	
												    		</small>
												      </div>
												    </div>
												    <div class="col-2 mr-5">
												    	<div class="row">
												    		<div class="col p-0 d-flex justify-content-end" style="line-height: 50px;">
												    			44,90 zł
												    		</div>
												      </div>
												    </div>
												  </div>
												  <div style="padding-bottom: 20px;"></div>
												  <div class="row m-0">
												    <div class="col-1 ml-5">
												    	<div class="row">
												    		<div class="col" style="max-height: 30px;">
												    			<div class="row">
												    				<div class="col p-0 d-flex justify-content-start" style="line-height: 30px;">
												    					Dostawa
												    				</div>
												      		</div>
												    		</div>
												      </div>
												    </div>
												    <div class="col">
												    	<div class="row">
												      </div>
												    </div>
												    <div class="col-2">
												    	<div class="row">
												      </div>
												    </div>
												    <div class="col-2 mr-5">
												    	<div class="row">
												    		<div class="col p-0 d-flex justify-content-end" style="line-height: 30px;">
												    			9,90 zł
												    		</div>
												      </div>
												    </div>
												  </div>
												  <div class="row m-0">
												    <div class="col-1 ml-5">
												    	<div class="row">
												    		<div class="col" style="max-height: 30px;">
												    			<div class="row">
												    				<div class="col p-0 d-flex justify-content-start" style="line-height: 30px;">
												    					Razem
												    				</div>
												      		</div>
												    		</div>
												      </div>
												    </div>
												    <div class="col">
												    	<div class="row">
												      </div>
												    </div>
												    <div class="col-2">
												    	<div class="row">
												      </div>
												    </div>
												    <div class="col-2 mr-5">
												    	<div class="row">
												    		<div class="col p-0 d-flex justify-content-end" style="line-height: 30px;">
												    			99,60 zł
												    		</div>
												      </div>
												    </div>
												  </div>
												  <div style="padding-bottom: 20px;"></div>
                        </div>
                      </div>
                      <div class="card mb-2" style="border: 1px solid rgba(0, 0, 0, 0.08) !important;">
                        <div class="card-header p-0" id="heading2">
                          <h5 class="mb-0">
                            <button class="w-100 h100 btn btn-collapse" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2" style="text-decoration: none">
                              <div class="row m-0">
                                <div class="col-1 py-2">
                                  <i class="fas fa-box fa-lg" style="color: #dfbe07;"></i>
                                </div>
                                <div class="col-8 py-2 d-flex justify-content-start">
                                  Zamówienie #234567
                                </div>
                                <div class="col-3 py-2 d-flex justify-content-end" style="color: #dfbe07; text-align: right;">
                                  Oczekuje na nadanie
                                </div>
                              </div>
                            </button>
                          </h5>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion" style="border-top: 1px solid rgba(0, 0, 0, 0.08) !important;">
                          <div class="card-body">
                            <div class="col-12">
                              <ul id="progressbar" class="text-center">
                                <li class="active step0"></li>
                                <li class="active step0"></li>
                                <li class="step0"></li>
                                <li class="step0"></li>
                                <li class="step0"></li>
                              </ul>
                            </div>
                          </div>
                          <div class="row justify-content-between top">
                            <div class="row d-flex icon-content-1">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">Zakup opłacony</p>
                                <small>22 kwi. 2022, 13:55</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-2">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">Oczekuje na nadanie</p>
                                <small>Od 22 kwi. 2022, 16:21</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-3">
                              <div class="d-flex flex-column">
                                <p class="bar-text mb-0">W drodze</p>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-4">
                              <div class="d-flex-column">
                                <p class="bar-text mb-0">Odbierz przesyłkę</p>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-5">
                              <div class="d-flex flex-column">
                                <p class="bar-text mb-0">Przesyłka odebrana</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2" style="border: 1px solid rgba(0, 0, 0, 0.08) !important;">
                        <div class="card-header p-0" id="heading3">
                          <h5 class="mb-0">
                            <button class="w-100 h100 btn btn-collapse" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3" style="text-decoration: none">
                              <div class="row m-0">
                                <div class="col-1 py-2">
                                  <i class="fas fa-paper-plane fa-lg" style="color: #0871d0"></i>
                                </div>
                                <div class="col-8 py-2 d-flex justify-content-start">
                                  Zamówienie #345678
                                </div>
                                <div class="col-3 py-2 d-flex justify-content-end" style="color: #0871d0; text-align: right;">
                                  W drodze
                                </div>
                              </div>
                            </button>
                          </h5>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion" style="border-top: 1px solid rgba(0, 0, 0, 0.08) !important;">
                          <div class="card-body">
                            <div class="col-12">
                              <ul id="progressbar" class="text-center">
                                <li class="active step0"></li>
                                <li class="active step0"></li>
                                <li class="active step0"></li>
                                <li class="step0"></li>
                                <li class="step0"></li>
                              </ul>
                            </div>
                          </div>
                          <div class="row justify-content-between top">
                            <div class="row d-flex icon-content-1">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">Zakup opłacony</p>
                                <small>22 kwi. 2022, 13:55</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-2">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">Oczekuje na nadanie</p>
                                <small>Od 22 kwi. 2022, 16:21</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-3">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">W drodze</p>
                                <small>Od 23 kwi. 2022, 04:34</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-4">
                              <div class="d-flex flex-column">
                                <p class="bar-text mb-0">Odbierz przesyłkę</p>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-5">
                              <div class="d-flex flex-column">
                                <p class="bar-text mb-0">Przesyłka odebrana</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2" style="border: 1px solid rgba(0, 0, 0, 0.08) !important;">
                        <div class="card-header p-0" id="heading4">
                          <h5 class="mb-0">
                            <button class="w-100 h100 btn btn-collapse" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4" style="text-decoration: none">
                              <div class="row m-0">
                                <div class="col-1 py-2">
                                 	<i class="fas fa-dolly fa-lg" style="color: #212529"></i>
                                </div>
                                <div class="col-8 py-2 d-flex justify-content-start">
                                  Zamówienie #456789
                                </div>
                                <div class="col-3 py-2 d-flex justify-content-end" style="color: #212529; text-align: right;">
                                  Odbierz przesyłkę
                                </div>
                              </div>
                            </button>
                          </h5>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion" style="border-top: 1px solid rgba(0, 0, 0, 0.08) !important;">
                          <div class="card-body">
                            <div class="col-12">
                              <ul id="progressbar" class="text-center">
                                <li class="active step0"></li>
                                <li class="active step0"></li>
                                <li class="active step0"></li>
                                <li class="active step0"></li>
                                <li class="step0"></li>
                              </ul>
                            </div>
                          </div>
                          <div class="row justify-content-between top">
                            <div class="row d-flex icon-content-1">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-1">Zakup opłacony</p>
                                <small>22 kwi. 2022, 13:55</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-2">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">Oczekuje na nadanie</p>
                                <small>Od 22 kwi. 2022, 16:21</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-3">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">W drodze</p>
                                <small>Od 23 kwi. 2022, 04:34</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-4">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">Odbierz przesyłkę</p>
                                <small>Od 23 kwi. 2022, 14:47</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-5">
                              <div class="d-flex flex-column">
                                <p class="bar-text mb-0">Przesyłka odebrana</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2" style="border: 1px solid rgba(0, 0, 0, 0.08) !important;">
                        <div class="card-header p-0" id="headingOne">
                          <h5 class="mb-0">
                            <button class="w-100 h100 btn btn-collapse" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none">
                              <div class="row m-0">
                                <div class="col-1 py-2">
                                  <i class="fas fa-box-open fa-lg" style="color: rgb(124, 97, 82);"></i>
                                </div>
                                <div class="col-8 py-2 d-flex justify-content-start">
                                  Zamówienie #567890
                                </div>
                                <div class="col-3 py-2 d-flex justify-content-end" style="color: rgb(124, 97, 82); text-align: right;">
                                  Przesyłka odebrana
                                </div>
                              </div>
                            </button>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="border-top: 1px solid rgba(0, 0, 0, 0.08) !important;">
                          <div class="card-body">
                            <!-- Jakąś strukturę tutaj dać na bazie tego co jest na allegro i na dribble. Skład, adres dostawy, kwota płatności i jej typ plus status zamówienia w formie jakiegoś paska z podpisami jak jest ss na mess bądź w pionowej ale to już do wyboru plus do tego właśnie ogółem dane od dostawie, gdzie, jaka, do kogo no i oczywiście info co jest zamówione i za ile itp.  <br><br>  Dobrze jakby był przycisk przeniesienia danyego ciastka do koszyka. Po kliknięciu w ciastko otwiera się popup ze składnikami, składem, właściwościami, opisem, nazwą i co tam jeszcze jest przypisane do produktu <br><br> Od statusu zamówenia ma zależeć ikona, zrobić to js <br><br> Zmienić też styl tego okna i przycisku co go otwiera w stylu raczej takim jakim dzisiaj działałem -->
                            <div class="col-12">
                              <ul id="progressbar" class="text-center">
                                <li class="active step0"></li>
                                <li class="active step0"></li>
                                <li class="active step0"></li>
                                <li class="active step0"></li>
                                <li class="active step0"></li>
                              </ul>
                            </div>
                          </div>
                          <div class="row justify-content-between top">
                            <div class="row d-flex icon-content-1">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-1">Zakup opłacony</p>
                                <small>22 kwi. 2022, 13:55</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-2">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">Oczekuje na nadanie</p>
                                <small>Od 22 kwi. 2022, 16:21</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-3">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">W drodze</p>
                                <small>Od 23 kwi. 2022, 04:34</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-4">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">Odbierz przesyłkę</p>
                                <small>Od 23 kwi. 2022, 14:47</small>
                              </div>
                            </div>
                            <div class="row d-flex icon-content-5">
                              <div class="d-flex flex-column">
                                <p class="bar-text font-weight-bold mb-0">Przesyłka odebrana</p>
                                <small>23 kwi. 2022, 16:14</small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-ankieta" role="tabpanel" aria-labelledby="list-ankieta-list">
                    <div class="row">
                      <div class="col-12 mb-3">
                        <h4>Ankieta</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 mb-2">
                        <h5>Wyniki ankiety</h5>
                      </div>
                    </div>
                    <hr style="margin-top: 0px;">
                  </div>
                  <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="row">
                      <div class="col-12 mb-3">
                        <h4>Ustawienia</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 mb-2">
                        <h5>Powiadomienia e-mail</h5>
                      </div>
                    </div>
                    <hr style="margin-top: 0px;">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 pb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu odio odio. Vivamus gravida eget magna eu bibendum.
                      </div>
                      <div class="col-10 col-sm-10 col-md-8 pb-3 mx-auto">
                        <div class="custom-control custom-switch custom-switch-lg">
                          <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                          <label class="custom-control-label" for="customSwitch1">E-maile z opiniami</label>
                          <small id="email_opinion_help" class="form-text text-muted" style="margin-top: -0.5rem;margin-left: 3rem;">Przekaż opinię na temat Cookie</small>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 pb-4">
                        Suspendisse potenti. Donec aliquam scelerisque nunc, in blandit augue eleifend eget. Proin finibus lorem tortor, id dapibus metus venenatis vel.
                      </div>
                      <div class="col-10 col-sm-10 col-md-8 pb-3 mx-auto">
                        <div class="custom-control custom-switch custom-switch-lg">
                          <input type="checkbox" class="custom-control-input" id="customSwitch2" checked>
                          <label class="custom-control-label" for="customSwitch2">E-maile z przypomnieniami</label>
                          <small id="email_opinion_help" class="form-text text-muted" style="margin-top: -0.5rem;margin-left: 3rem;">Otrzymuj powiadomienia, które mogły zostać przeoczone.</small>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 pb-4">
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In quis pulvinar eros. Morbi at diam in leo interdum tempor eu molestie lacus. Vestibulum in porta risus.
                      </div>
                      <div class="col-10 col-sm-10 col-md-8 pb-3 mx-auto">
                        <div class="custom-control custom-switch custom-switch-lg">
                          <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                          <label class="custom-control-label" for="customSwitch3">E-maile o produktach</label>
                          <small id="email_opinion_help" class="form-text text-muted" style="margin-top: -0.5rem;margin-left: 3rem;">Uzyskaj wskazówki dotyczące produktów Cookie.</small>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 pb-4">
                        Suspendisse lectus urna, venenatis in vestibulum quis, accumsan sed sapien. Nullam aliquam iaculis varius. Nulla id mattis felis.
                      </div>
                      <div class="col-10 col-sm-10 col-md-8 pb-3 mx-auto">
                        <div class="custom-control custom-switch custom-switch-lg">
                          <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                          <label class="custom-control-label" for="customSwitch4">E-maile z aktualnościami</label>
                          <small id="email_opinion_help" class="form-text text-muted" style="margin-top: -0.5rem;margin-left: 3rem;">Poznaj nowe funkcje Cookie.</small>
                        </div>
                      </div>
                    </div>
                    <div class="row pt-5">
                      <div class="col-12 mb-2">
                        <h5>Język</h5>
                      </div>
                    </div>
                    <hr style="margin-top: 0px;">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 pb-4">
                        Vestibulum consectetur metus volutpat bibendum consectetur. Sed congue neque in venenatis semper. Suspendisse facilisis egestas eros et tristique.
                      </div>
                      <div class="col-8 col-sm-8 col-md-4 pb-3 mx-auto">
                        <label for="ImputLanguage">Język</label>
                        <select class="custom-select input-user-select" disabled style="box-shadow: none;background-color: #ffffff;">
                          <option value="1" selected="selected">Polski</option>
                          <option value="2">Angielski</option>
                          <option value="3">Niemiecki</option>
                          <option value="4">Francuski</option>
                        </select>
                      </div>
                      <div class="col-0 col-sm-0 col-md-4"></div>
                    </div>
                    <div class="row pt-5">
                      <div class="col-12 mb-2">
                        <h5>Region</h5>
                      </div>
                    </div>
                    <hr style="margin-top: 0px;">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 pb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque mi non ex efficitur, at luctus nibh mollis.
                      </div>
                      <div class="col-8 col-sm-8 col-md-4 pb-3 mx-auto">
                        <label for="ImputCoutry">Region</label>
                        <select class="custom-select input-user-select" disabled style="box-shadow: none;background-color: #ffffff;">
                          <option value="1" selected="selected">Polska</option>
                          <option value="2">Wielka Brytania</option>
                          <option value="3">Niemcy</option>
                          <option value="4">Francja</option>
                        </select>
                      </div>
                      <div class="col-0 col-sm-0 col-md-4"></div>
                    </div>
                    <div class="row pt-5">
                      <div class="col-12 mb-2">
                        <h5>Cookie</h5>
                      </div>
                    </div>
                    <hr style="margin-top: 0px;">
                    <div class="row">
                      <div class="col-12 pb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ipsum sit amet risus commodo efficitur eget vel leo. Nam at lectus quis metus fermentum tristique eu at ligula. Nam eget rutrum nunc. Quisque dapibus enim sit amet ipsum mattis dapibus. Sed aliquet eros ut metus hendrerit finibus. Etiam placerat commodo neque, ut consequat ipsum sollicitudin eu. Vivamus a egestas neque, eu vestibulum mi. Aliquam erat volutpat. Cras id lectus nec dolor tincidunt lobortis. Mauris quis turpis metus. Aenean imperdiet blandit elit eu lobortis. Vivamus porta magna ac malesuada accumsan.
                      </div>
                      <div class="col-12 col-sm-12 col-md-4 pb-4">
                        Suspendisse lectus urna, venenatis in vestibulum quis, accumsan sed sapien. Nullam aliquam iaculis varius. Nulla id mattis felis.
                      </div>
                      <div class="col-10 col-sm-10 col-md-8 pb-3 mx-auto">
                        <div class="custom-control custom-switch custom-switch-lg">
                          <input type="checkbox" class="custom-control-input" id="customSwitch5" checked disabled>
                          <label class="custom-control-label" for="customSwitch5">Niezbędne pliki cookie</label>
                          <small id="email_opinion_help" class="form-text text-muted" style="margin-top: -0.5rem;margin-left: 3rem;">Pliki cookie są wymagane do korzystania z Produktów firmy Cookie. Są one niezbędne i zapewniają prawidłowe działanie tych witryn.</small>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 pb-4">
                        Vestibulum consectetur metus volutpat bibendum consectetur. Sed congue neque in venenatis semper. Suspendisse facilisis egestas eros et tristique.
                      </div>
                      <div class="col-10 col-sm-10 col-md-8 pb-3 mx-auto">
                        <div class="custom-control custom-switch custom-switch-lg">
                          <input type="checkbox" class="custom-control-input" id="customSwitch6">
                          <label class="custom-control-label" for="customSwitch6">Wszystkie pliki cookie</label>
                          <small id="email_opinion_help" class="form-text text-muted" style="margin-top: -0.5rem;margin-left: 3rem;">Ut eu leo nec nunc consectetur condimentum vel sit amet mi.</small>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 pb-4">
                        Fusce vitae nunc enim. Integer sed lobortis augue. Aenean a ornare massa. Vivamus rutrum auctor elit et laoreet.
                      </div>
                      <div class="col-10 col-sm-10 col-md-8 pb-3 mx-auto">
                        <div class="custom-control custom-switch custom-switch-lg">
                          <input type="checkbox" class="custom-control-input" id="customSwitch6">
                          <label class="custom-control-label" for="customSwitch6">Personalizacja plików cookie</label>
                          <small id="email_opinion_help" class="form-text text-muted" style="margin-top: -0.5rem;margin-left: 3rem;">Morbi sed justo ac massa euismod fringilla a semper lectus.</small>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-4 pb-4">
                        Nulla fringilla turpis quis sapien iaculis, eu placerat nibh tempus. Nam tortor lacus, tempus non congue eu, viverra et justo.
                      </div>
                      <div class="col-10 col-sm-10 col-md-8 pb-3 mx-auto">
                        <div class="custom-control custom-switch custom-switch-lg">
                          <input type="checkbox" class="custom-control-input" id="customSwitch7">
                          <label class="custom-control-label" for="customSwitch7">Dane marketingowe</label>
                          <small id="email_opinion_help" class="form-text text-muted" style="margin-top: -0.5rem;margin-left: 3rem;">Aliquam accumsan nulla elit, et laoreet lectus consequat ut.</small>
                        </div>
                      </div>
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
    <div id="message" class="messege_error-1 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-danger" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close fas fa-times"></i>
        </button>
        Stare hasło zostało wprowadzone nieprawidłowo. Wprowadź je ponownie.
      </div>
    </div>
    <div id="message" class="messege_error-2 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-danger" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close fas fa-times"></i>
        </button>
        Hasło jest zbyt łatwe do odgadnięcia. Utwórz nowe hasło.
      </div>
    </div>
    <div id="message" class="messege_error-3 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-danger" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close fas fa-times"></i>
        </button>
        Utwórz nowe dotychczas niestosowane hasło.
      </div>
    </div>
    <div id="message" class="messege_ok-1 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-ok" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close-ok fas fa-times"></i>
        </button>
        Hasło zostało zmienione.
      </div>
    </div>
    <div id="message" class="messege_error-4 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-danger" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close fas fa-times"></i>
        </button>
        E-mail jest już używany. Wprowadź inny e-mail.
      </div>
    </div>
    <div id="message" class="messege_error-5 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-danger" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close fas fa-times"></i>
        </button>
        E-mail jest niepoprawny. Wprowadź inny e-mail.
      </div>
    </div>
    <div id="message" class="messege_ok-2 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-ok" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close-ok fas fa-times"></i>
        </button>
        E-mail został zmieniony.
      </div>
    </div>
    <div id="message" class="messege_error-6 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-danger" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close fas fa-times"></i>
        </button>
        Imię jest niepoprawne. Wprowadź inne imię.
      </div>
    </div>
    <div id="message" class="messege_error-7 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-danger" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close fas fa-times"></i>
        </button>
        Nazwisko jest niepoprawne. Wprowadź inne nazwisko.
      </div>
    </div>
    <div id="message" class="messege_error-8 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-danger" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close fas fa-times"></i>
        </button>
        Data urodzenia jest niepoprawna. Wprowadź inną datę urodzenia.
      </div>
    </div>
    <div id="message" class="messege_error-9 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-danger" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close fas fa-times"></i>
        </button>
        Numer telefonu jest niepoprawny. Wprowadź inny numer telefonu.
      </div>
    </div>
    <div id="message" class="messege_ok-3 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-ok" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close-ok fas fa-times"></i>
        </button>
        Informacje osobiste zostały zmienione.
      </div>
    </div>
    <div id="message" class="messege_error-10 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-danger" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close fas fa-times"></i>
        </button>
        Kod pocztowy jest niepoprawny. Wprowadź inny kod pocztowy.
      </div>
    </div>
    <div id="message" class="messege_error-11 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-danger" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close fas fa-times"></i>
        </button>
        Miasto jest nieporawne. Wprowadź inne miasto.
      </div>
    </div>
    <div id="message" class="messege_ok-4 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-ok" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close-ok fas fa-times"></i>
        </button>
        Adres do wysyłki został zmieniony.
      </div>
    </div>
    <div id="message" class="messege_ok-5 zamniecie d-flex justify-content-center">
      <div id="inner-message" class="alert alert-ok" style="min-width: 100%;">
        <button type="button" class="btn-close float-right pl-3" data-dismiss="alert" style="background: none; border: none">
          <i class="btn-alert-close-ok fas fa-times"></i>
        </button>
        Adres do wysyłki został zmieniony.
      </div>
    </div>
    <div class="modal fade" id="order_product_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Nazwa ciastka</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
          	<div class="container">
    					<div class="row">
        				<div class="col">
        					<div class="col-12 p-0">
            				<form>
              				<div class="form-group">
                				<label for="InputCookieText">Opis</label>
                				<textarea class="form-control input-user" id="exampleFormControlTextarea1" rows="5" disabled style="box-shadow: none; background-color: #ffffff; color: #000000;">Opis ciastka
                				</textarea>
              				</div>
            				</form>
          				</div>
          				<div class="col-12 p-0 pb-3">
           					<label for="InputCookieText">Składniki</label>
                      <div class="col mx-2">
                        <div class="row border pt-1 pb-1" id="mainComponent" style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.08); border: 1px solid rgba(0, 0, 0, 0.08) !important; border-radius: 0.25rem !important;">
                          <div class="col-2 my-auto">
                            Icon
                          </div>
                          <div class="col my-auto">
                            Składnik
                          </div>
                          <div class="col-2 my-auto d-flex justify-content-end">
                            Number
                          </div>
                        </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col pt-1 m-1">
                        <div class="row">
                          <div class="col-2 my-auto">
                            Icon
                          </div>
                          <div class="col my-auto">
                            Składnik
                          </div>
                          <div class="col-2 my-auto d-flex justify-content-end">
                            Number
                          </div>
                        </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col pt-1 m-1">
                        <div class="row pb-1">
                          <div class="col-2 my-auto">
                            Icon
                          </div>
                          <div class="col my-auto">
                            Składnik
                          </div>
                          <div class="col-2 my-auto d-flex justify-content-end">
                            Number
                          </div>
                        </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col mx-2 mb-2 p-1 border rounded" style="display: none; border-color: rgba(0, 0, 0, 0.08) !important" id="myDIV2">
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
          				</div>
        				</div>
    					</div>
						</div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
          	<div class="container">
    					<div class="row">
        				<div class="col">
        					<div class="col-12 p-0">
        						<ul class="list-group list-group-flush">
          		          	<label>Wartośći odżywcze na 100g</label>
                                <li class="list-group-item nutritional">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-8">Wartość energetyczna</div>
                                      <div class="col-4 d-flex justify-content-end">Number</div>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-group-item nutritional">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-8">Tłuszcz</div>
                                      <div class="col-4 d-flex justify-content-end">Number</div>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-group-item nutritional">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-8">
                                      	<div style="margin-left: 8%">w tym kwasy tłuszczowe nasycone</div>
                                      </div>
                                      <div class="col-4 d-flex justify-content-end">Number</div>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-group-item nutritional">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-8">Węglowodany</div>
                                      <div class="col-4 d-flex justify-content-end">Number</div>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-group-item nutritional">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-8">
                                      	<div style="margin-left: 8%">w tym cukry</div>
                                      </div>
                                      <div class="col-4 d-flex justify-content-end">Number</div>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-group-item nutritional">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-8">Błonnik</div>
                                      <div class="col-4 d-flex justify-content-end">Number</div>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-group-item nutritional">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-8">Białko</div>
                                      <div class="col-4 d-flex justify-content-end">Number</div>
                                    </div>
                                  </div>
                                </li>
                                <li class="list-group-item nutritional">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-8">Sól</div>
                                      <div class="col-4 d-flex justify-content-end">Number</div>
                                    </div>
                                  </div>
                                </li>
                              </ul>
          				</div>
        				</div>
    					</div>
						</div>
          </div>
        </div>                
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-more" data-dismiss="modal" style="min-width: 166px;">Anuluj</button>
        <button type="button" class="btn btn-add-cart-modal" style="min-width: 166px;" onclick="location.href='cart.php'">Dodaj do koszyka</button>
      </div>
    </div>
  </div>
</div>



  </body>

</html>
<script type="text/javascript">
  window.setTimeout(function() {
    $(".zamniecie").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 5000);

  const validateEmail = (email) => {
    return email.match(
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
  };

  const getDatePickerTitle = elem => {
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
      'format': 'dd.mm.yyyy',
      'autohide': 'True',
      'language': 'pl',
      title: getDatePickerTitle(elem),
    });
  }

  $('.wrapper-1 input').focus(function() {
    $('.wrapper-1').addClass('input-user-2');
  }).blur(function() {
    $('.wrapper-1').removeClass('input-user-2');
  });

  $('.wrapper-2 input').focus(function() {
    $('.wrapper-2').addClass('input-user-2');
  }).blur(function() {
    $('.wrapper-2').removeClass('input-user-2');
  });

  $('.wrapper input-3').focus(function() {
    $('.wrapper').addClass('input-user-2');
  }).blur(function() {
    $('.wrapper-3').removeClass('input-user-2');
  });

</script>
