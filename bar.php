<!DOCTYPE html>
<html lang='pl'>
<head>
  <meta charset="utf-8">
  <title>Potwierdzenie zamówienia - Cookie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="login1.css">
  <link rel="stylesheet" href="bar1.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
  <script type="text/javascript">
    function hoverDiv1(x) {
      var x = document.getElementById("sklad1");
      x.style.borderBottom = "1px solid #6c757d";
    }

    function outDiv1(x) {
      var x = document.getElementById("sklad1");
      x.style.borderBottom = "1px solid white";
    }

    function hoverDiv2(x) {
      var x = document.getElementById("sklad2");
      x.style.borderBottom = "1px solid #6c757d";
    }

    function outDiv2(x) {
      var x = document.getElementById("sklad2");
      x.style.borderBottom = "1px solid white";
    }

    function myFunction3() {
      var x = document.getElementById("myLinks");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }

    function display() {
      if(document.getElementById('option1').checked) {
        document.getElementById("newadress").style.display = "";
        document.getElementById("oldadress").style.display = "none";
      } else if(document.getElementById('option2').checked) {
        document.getElementById("newadress").style.display = "none";
        document.getElementById("oldadress").style.display = "";
      }

      if(document.getElementById('option3').checked || document.getElementById('option4').checked) {
        document.getElementById("payu").style.display = "none";
        document.getElementById("payu_no").style.display = "";
      } else if(document.getElementById('option5').checked || document.getElementById('option6').checked) {
        document.getElementById("payu").style.display = "";
        document.getElementById("payu_no").style.display = "none";
      }
    };


    $(function() {
        $('#go1').click(function() {
          if ($("#krok1").hasClass('current')) {
            $("#krok1").removeClass('current');
            $("#krok1").addClass('active step0');
            $("#krok2").addClass('current active');
            document.getElementById("display1").style.display = "none";
            document.getElementById("display2").style.display = "";
          }
        });

        $('#back1').click(function() {
          if ($("#krok1").hasClass('current')) {
            window.location.href="cart.php";
          }
        });

        $('#go2').click(function() {
          if ($("#krok2").hasClass('current')) {
            $("#krok2").removeClass('current');
            $("#krok2").addClass('active step0');
            $("#krok3").addClass('current active');
            document.getElementById("display2").style.display = "none";
            document.getElementById("display3").style.display = "";
          }
        });

        $('#back2').click(function() {
          if ($("#krok2").hasClass('current')) {
            $("#krok2").removeClass('current active');
            $("#krok1").removeClass('active step0');
            $("#krok1").addClass('current step0');
            document.getElementById("display1").style.display = "";
            document.getElementById("display2").style.display = "none";
          }
        });

        $('#go3').click(function() {
          if ($("#krok3").hasClass('current')) {
            window.location.href="index.php";
          }
        });

        $('#back3').click(function() {
          if ($("#krok3").hasClass('current')) {
            $("#krok3").removeClass('current active');
            $("#krok2").removeClass('active step0');
            $("#krok2").addClass('current active step0');
            document.getElementById("display2").style.display = "";
            document.getElementById("display3").style.display = "none";
          }
        });
      });

      function codeAddress() {
        var text = document.getElementById("num").innerHTML;
        var delivery = document.getElementById("num_delivery").innerHTML;
        var val = Number(text) + Number(delivery);
        val = val.toFixed(2);
        document.getElementById("order_price").innerHTML = val;
        document.getElementById("order_price2").innerHTML = val;
        if (text >= 40) {
          document.getElementById("aaa").style.textDecoration = "line-through";
          document.getElementById("aa").style.textDecoration = "line-through";
          $("#aaa").addClass('text-muted');
          $("#aa").addClass('text-muted');
          document.getElementById("a").style.display = "";
          document.getElementById("aa").style.display = "";
          document.getElementById("order_sum").innerHTML = text;

          document.getElementById("aaa2").style.textDecoration = "line-through";
          document.getElementById("aa2").style.textDecoration = "line-through";
          $("#aaa2").addClass('text-muted');
          $("#aa2").addClass('text-muted');
          document.getElementById("a2").style.display = "";
          document.getElementById("aa2").style.display = "";
          document.getElementById("order_sum2").innerHTML = text;
        } else {
          document.getElementById("order_sum").innerHTML = val;
          document.getElementById("order_sum2").innerHTML = val;
        }
      }

      window.onload = codeAddress;

      $(document).ready(function(){
    $(":input").inputmask();
    
    $("#zip").inputmask({
  mask: '99-999',
  placeholder: ' ',
  showMaskOnHover: false,
  showMaskOnFocus: false,
});
    
    $("#phone").inputmask({
  mask: '+48 999 999 999',
  placeholder: ' ',
  showMaskOnHover: false,
  showMaskOnFocus: false,
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
    <div class="row pt-2 pb-5">
      <div class="col-12">
    <ul id="progressbar" class="text-center">
      <li class="current step0" id="krok1" style="transition: 0.3s;">Adres do wysyłki</li>
      <li class="step0" id="krok2" style="transition: 0.3s;">Płatność</li>
      <li class="step0" id="krok3" style="transition: 0.3s;">Sukces</li>
    </ul>

    <div class="row pt-3" id="display1" >
      <div class="col-12 pt-3">
        <div class="row">
          <div class="col-10 col-sm-10 col-md-6 col-lg-4 pb-3 mx-auto">
            <div class="btn-group btn-group-toggle pb-3 d-flex justify-content-center" data-toggle="buttons">
          <label class="btn btn-radio mr-1">
            <input type="radio" name="options" id="option1" autocomplete="on" checked onclick="display()">Nowy adres
          </label>
          <label class="btn btn-radio ml-1">
            <input type="radio" name="options" id="option2" autocomplete="off" onclick="display()">Zapisany adres
          </label>
        </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 px-0 mx-auto" id="newadress">
            <label for="InputNameCart">Imię</label>
            <input type="text" id="first_name" class="form-control input-user" onfocus="document.getElementById('result5').style.display='none'; document.getElementById('result6').style.display='block'" onblur="document.getElementById('result5').style.display='block'; document.getElementById('result6').style.display='none'">

            <div class="pt-2 d-flex justify-content-center">
              <h2 id="result5"></h2>
              <h2 id="result6"></h2>
            </div>

            <label class="pt-3" for="InputLastNameCart">Nazwisko</label>
            <input type="text" id="last_name" class="form-control input-user" onfocus="document.getElementById('result9').style.display='none'; document.getElementById('result10').style.display='block'" onblur="document.getElementById('result9').style.display='block'; document.getElementById('result10').style.display='none'">

            <div class="pt-2 d-flex justify-content-center">
              <h2 id="result9"></h2>
              <h2 id="result10"></h2>
            </div>

            <label class="pt-3" for="ImputCompanyCarty">Firma</label>
            <input type="text" class="form-control input-user">
            <small class="form-text text-muted">Opcjonalnie</small>

            <label class="pt-3" for="ImputPhoneCart">Numer telefonu</label>
            <input class="form-control input-user" id="phone" data-inputmask="'alias': 'phonebe'" onfocus="document.getElementById('result11').style.display='none'; document.getElementById('result12').style.display='block'" onblur="document.getElementById('result11').style.display='block'; document.getElementById('result12').style.display='none'">
            <small id="telhelp" class="form-text text-muted">Numer telefonu musi składać się z 9 cyfr</small>

            <div class="pt-2 d-flex justify-content-center">
              <h2 id="result11"></h2>
              <h2 id="result12"></h2>
            </div>

            <div class="row">
              <div class="col-8 pr-1">
                <label class="pt-3" for="ImputStreetCart">Ulica</label>
                <input id="email" class="form-control input-user" data-inputmask="'alias': 'email'" onfocus="document.getElementById('result13').style.display='none'; document.getElementById('result14').style.display='block'" onblur="document.getElementById('result13').style.display='block'; document.getElementById('result14').style.display='none'">
              </div>
              <div class="col-4 pl-1">
                <label class="pt-3" for="ImputNumCart">Numer</label>
                  <input id="number" class="form-control input-user" onfocus="document.getElementById('result3').style.display='none'; document.getElementById('result4').style.display='block'" onblur="document.getElementById('result3').style.display='block'; document.getElementById('result4').style.display='none'">
              </div>
            </div>
            <div class="pt-2 d-flex justify-content-center">
              <h2 id="result13"></h2>
              <h2 id="result14"></h2>
            </div>
            <div class="pt-0 d-flex justify-content-center">
              <h2 id="result3"></h2>
              <h2 id="result4"></h2>
            </div>

            <div class="row">
              <div class="col-4 pr-1">
                  <label class="pt-3" for="ImputZipCart">Kod</label>
                  <input id="zip" class="form-control input-user" onfocus="document.getElementById('result').style.display='none'; document.getElementById('result2').style.display='block'" onblur="document.getElementById('result').style.display='block'; document.getElementById('result2').style.display='none'">
              </div>
              <div class="col-8 pl-1">
                <label class="pt-3" for="ImputStreetCart">Miasto</label>
                <input id="city" class="form-control input-user" onfocus="document.getElementById('result7').style.display='none'; document.getElementById('result8').style.display='block'" onblur="document.getElementById('result7').style.display='block'; document.getElementById('result8').style.display='none'">
              </div>
            </div>
            <div class="pt-2 d-flex justify-content-center">
              <h2 id="result"></h2>
              <h2 id="result2"></h2>
            </div>
            <div class="pt-0 d-flex justify-content-center">
              <h2 id="result7"></h2>
              <h2 id="result8"></h2>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 px-0 mx-auto" id="oldadress" style="display: none;">
            <label for="InputNameCart">Imię</label>
            <input type="text" class="form-control input-user" value="..." readonly style="box-shadow: none;background-color: #ffffff;">
            <div class="pt-2 d-flex justify-content-center">
              <h2 id="result"></h2>
              <h2 id="result"></h2>
            </div>

            <label class="pt-3" for="InputLastNameCart">Nazwisko</label>
            <input type="text" class="form-control input-user" value="..." readonly style="box-shadow: none;background-color: #ffffff;">

            <div class="pt-2 d-flex justify-content-center">
              <h2 id="result"></h2>
              <h2 id="result"></h2>
            </div>

            <label class="pt-3" for="ImputCompanyCarty">Firma</label>
            <input type="text" class="form-control input-user" value="..." readonly style="box-shadow: none;background-color: #ffffff;">

            <div class="pt-2 d-flex justify-content-center">
              <h2 id="result"></h2>
              <h2 id="result"></h2>
            </div>

            <label class="pt-3" for="ImputPhoneCart">Numer telefonu</label>
            <input class="form-control input-user" type="tel" id="phone" name="phone" pattern="[0-9]{9}" value="..." readonly style="box-shadow: none;background-color: #ffffff;">

            <div class="pt-2 d-flex justify-content-center">
              <h2 id="result"></h2>
              <h2 id="result"></h2>
            </div>

            <div class="row">
              <div class="col-8 pr-1">
                <label class="pt-3" for="ImputStreetCart">Ulica</label>
                <input class="form-control input-user" value="..." readonly style="box-shadow: none;background-color: #ffffff;">
              </div>
              <div class="col-4 pl-1">
                <label class="pt-3" for="ImputStrNumCart">Numer</label>
                <input class="form-control input-user" value="..." readonly style="box-shadow: none;background-color: #ffffff;">
              </div>
            </div>

            <div class="pt-2 d-flex justify-content-center">
              <h2 id="result"></h2>
              <h2 id="result"></h2>
            </div>

            <div class="pt-0 d-flex justify-content-center">
              <h2 id="result"></h2>
              <h2 id="result"></h2>
            </div>

            <div class="row pb-4">
              <div class="col-4 pr-1">
                <label class="pt-3" for="ImputZipCart">Kod</label>
                <input class="form-control input-user" value="..." readonly style="box-shadow: none;background-color: #ffffff;">
              </div>
              <div class="col-8 pl-1">
                <label class="pt-3" for="ImputCityCart">Miasto</label>
                <input class="form-control input-user" value="..." readonly style="box-shadow: none;background-color: #ffffff;">
              </div>
            </div>

            <div class="pt-2 d-flex justify-content-center">
              <h2 id="result"></h2>
              <h2 id="result"></h2>
            </div>

            <div class="pt-0 d-flex justify-content-center">
              <h2 id="result"></h2>
              <h2 id="result"></h2>
            </div>

          </div>
          </div>
          <div class="col-10 col-sm-10 col-md-5 col-lg-4 pb-5 mx-auto">
            <div class="row" style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.08);">
              <div class="col">
                <div class="row rounded-top p-2" style="border: 1px solid rgba(0, 0, 0, 0.08) !important; padding: 12px 8px !important;">
                  <div class="col-6 d-flex justify-content-start">Produkt</div>
                  <div class="col-3 d-flex justify-content-end">Ilość</div>
                  <div class="col-3 d-flex justify-content-end">Cena</div>
                </div>
                <div class="row border px-2 border-top-0" style="border-color: rgba(0, 0, 0, 0.08) !important;">
                  <div class="col-12">
                    <div class="row my-3" id="cart1" onmouseover="hoverDiv1(this)" onmouseout="outDiv1(this)" data-toggle="modal" data-target="#order_product_1" style="cursor: pointer;">
                      <div class="col-2 px-2">
                        <img src="113.svg" class="align-middle photo" alt="...">
                      </div>
                      <div class="col-5 pr-0 pl-2">
                        <div class="row">
                          <div class="col-12">
                            Ciastko owsiane
                          </div>
                          <div class="w-100"></div>
                          <div class="col-12">
                            <small class="text-muted" id="sklad1" style="border-bottom: 1px solid white; transition: 0.3s">Skład</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-2 d-flex justify-content-end">1</div>
                      <div class="col-3 d-flex justify-content-end">19.00 zł</div>
                    </div>

                    <div class="row mb-3" id="cart2" onmouseover="hoverDiv2(this)" onmouseout="outDiv2(this)" data-toggle="modal" data-target="#order_product_2" style="cursor: pointer;">
                      <div class="col-2 px-2">
                        <img src="168.svg" class="align-middle photo" alt="...">
                      </div>
                      <div class="col-5 pr-0 pl-2">
                        <div class="row">
                          <div class="col-12">
                            Ciastko granola
                          </div>
                          <div class="w-100"></div>
                          <div class="col-12">
                            <small class="text-muted" id="sklad2" style="border-bottom: 1px solid white; transition: 0.3s">Skład</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-2 d-flex justify-content-end">1</div>
                      <div class="col-3 d-flex justify-content-end">25.00 zł</div>
                    </div>  </div>
                </div>
                <div class="row border border-top-0" style="border-color: rgba(0, 0, 0, 0.08) !important; padding: 12px 8px !important;">
                  <div class="col-12 mb-2">
                    <div class="row">
                    <div class="col-8 d-flex justify-content-start">
                      Wartość przedmiotów&nbsp;
                      <div class="text-muted">
                        (2)
                      </div>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                      <div id="num">44.00</div>
                      <div>&nbsp;zł</div>
                    </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-8 d-flex justify-content-start">
                        Dostawa
                      </div>
                      <div class="col-4 d-flex justify-content-end" id="aaa">
                        <div id="num_delivery">8.99</div>
                        <div>&nbsp;zł</div>
                      </div>
                    </div>
                    <div class="row" id="a" style="display: none">
                      <div class="col-8 d-flex justify-content-start"></div>
                      <div class="col-4 d-flex justify-content-end">0.00 zł</div>
                    </div>
                  </div>
                </div>
                <div class="row rounded-bottom border p-2 border-top-0" style="border-color: rgba(0, 0, 0, 0.08) !important; padding: 12px 8px !important;">
                  <div class="col-12">
                    <div class="row" id="aa" style="display: none">
                      <div class="col-8 d-flex justify-content-start"></div>
                      <div class="col-4 d-flex justify-content-end">
                        <div id="order_price"></div>
                        <div>&nbsp;zł</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-8 d-flex justify-content-start">
                        Do zapłaty
                      </div>
                      <div class="col-4 d-flex justify-content-end">
                        <div id="order_sum"></div>
                        <div>&nbsp;zł</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
            <div class="col-12 px-0 pt-4">
                  <div class="font-weight-bold d-flex justify-content-center pb-2" style="white-space: nowrap;">    Potrzebujesz pomocy?&nbsp;
                    <a class="contact-line register-line" href="contact.php" style="text-decoration: none;">Skontaktuj się z nami</a>
                  </div>
                  <!-- <div class="row">
                    <div class="col">
                      <small>Napisz:</small>
                      <br>
                      <a href="mailto:example@example.com" style="text-decoration:none; color: black; font-size: 18px">example@example.com</a>
                    </div>
                  </div>
                  <div class="row pt-2">
                    <div class="col">
                      <small>Zadzwoń:</small>
                      <br>
                      <a href="tel:123456789" style="text-decoration:none; color: black; font-size: 18px;">+48 123 456 789</a>
                    </div>
                  </div> -->
                </div>
          </div>
        </div>
      </div>
      <div class="w-100"></div>
      <div class="col-12">
        <div class="row">
          <div class="col-1 col-sm-1 col-md-3 col-lg-4"></div>
          <div class="col-5 col-sm-5 col-md-3 col-lg-2 pb-2">
            <button class="btn btn-more rounded btn-block" id="back1">Powrót</button>
          </div>
          <div class="col-5 col-sm-5 col-md-3 col-lg-2">
            <button class="btn btn-add rounded btn-block" id="go1">Płatność</button>
          </div>
          <div class="col-1 col-sm-1 col-md-3 col-lg-4"></div>
        </div>
      </div>
    </div>
 

    <div class="row pt-3" id="display2" style="display: none">
      <div class="col-12 pt-3">

          <div class="row">
            <div class="col-10 col-sm-10 col-md-6 col-lg-4 pb-3 mx-auto">
              <div class="btn-group btn-group-toggle pb-3 d-flex justify-content-center">
          <label class="btn btn-radio mr-1 active" style="cursor: auto;">
            Metoda płatności
          </label>
        </div>
              <div class="btn-group-vertical btn-group-toggle pb-3 d-flex justify-content-center" data-toggle="buttons">
                <label class="btn btn-radio-v border mt-1 mb-2">
                  <div class="row">
                    <div class="col-4 px-3 d-flex justify-content-center">
                      <img src="credit-card-solid.svg" style="max-height: 24px;">
                    </div>
                    <div class="col-8 pl-0 d-flex justify-content-start">
                      <input  type="radio" name="options" id="option3" autocomplete="on" checked onclick="display()">Karta płatnicza
                    </div>
                  </div>
                </label>
                <label class="btn btn-radio-v border mt-1 mb-2">
                  <div class="row">
                    <div class="col-4 px-3 d-flex justify-content-center">
                      <img src="blik.svg" style="max-height: 24px;">
                    </div>
                    <div class="col-8 pl-0 d-flex justify-content-start">
                      <input type="radio" name="options" id="option4" autocomplete="off" onclick="display()">BLIK
                    </div>
                  </div>
                </label>
                <label class="btn btn-radio-v border mt-1 mb-2">
                  <div class="row">
                    <div class="col-4 px-3 d-flex justify-content-center">
                      <img src="google-pay-brands.svg" style="max-height: 24px;">
                    </div>
                    <div class="col-8 pl-0 d-flex justify-content-start">
                      <input  type="radio" name="options" id="option5" autocomplete="off" onclick="display()">Google Pay
                    </div>
                  </div>
                </label>
                <label class="btn btn-radio-v border mt-1 mb-2">
                  <div class="row">
                    <div class="col-4 px-3 d-flex justify-content-center">
                      <img src="wallet-solid.svg" style="max-height: 24px;">
                    </div>
                    <div class="col-8 pl-0 d-flex justify-content-start">
                      <input  type="radio" name="options" id="option6" autocomplete="off" onclick="display()">Przelew
                    </div>
                  </div>
                </label>
                <small class="text-muted" id="payu" style="display: none">Płatność obsługiwana przez PayU.</small>
                <small class="text-muted" id="payu_no" style="min-height: 19px;"></small>
              </div>
            </div>
            <div class="col-10 col-sm-10 col-md-5 col-lg-4 pb-5 mx-auto">
              <div class="row" style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.08);">
                <div class="col">
                  <div class="row rounded-top p-2" style="border: 1px solid rgba(0, 0, 0, 0.08) !important; padding: 12px 8px !important;">
                    <div class="col-6 d-flex justify-content-start">Produkt</div>
                    <div class="col-3 d-flex justify-content-end">Ilość</div>
                    <div class="col-3 d-flex justify-content-end">Cena</div>
                  </div>
                  <div class="row border px-2 border-top-0" style="border-color: rgba(0, 0, 0, 0.08) !important;">
                    <div class="col-12">
                      <div class="row my-3" id="cart1" onmouseover="hoverDiv1(this)" onmouseout="outDiv1(this)" data-toggle="modal" data-target="#order_product_1" style="cursor: pointer;">
                        <div class="col-2 px-2">
                          <img src="113.svg" class="align-middle photo" alt="...">
                        </div>
                        <div class="col-5 pr-0 pl-2">
                          <div class="row">
                            <div class="col-12">
                              Ciastko owsiane
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12">
                              <small class="text-muted" id="sklad1" style="border-bottom: 1px solid white; transition: 0.3s">Skład</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-2 d-flex justify-content-end">1</div>
                        <div class="col-3 d-flex justify-content-end">19.00 zł</div>
                      </div>

                      <div class="row mb-3" id="cart2" onmouseover="hoverDiv2(this)" onmouseout="outDiv2(this)" data-toggle="modal" data-target="#order_product_2" style="cursor: pointer;">
                        <div class="col-2 px-2">
                          <img src="168.svg" class="align-middle photo" alt="...">
                        </div>
                        <div class="col-5 pr-0 pl-2">
                          <div class="row">
                            <div class="col-12">
                              Ciastko granola
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12">
                              <small class="text-muted" id="sklad2" style="border-bottom: 1px solid white; transition: 0.3s">Skład</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-2 d-flex justify-content-end">1</div>
                        <div class="col-3 d-flex justify-content-end">25.00 zł</div>
                      </div>  </div>
                  </div>
                  <div class="row border border-top-0" style="border-color: rgba(0, 0, 0, 0.08) !important; padding: 12px 8px !important;">
                    <div class="col-12 mb-2">
                      <div class="row">
                      <div class="col-8 d-flex justify-content-start">
                        Wartość przedmiotów&nbsp;
                        <div class="text-muted">
                          (2)
                        </div>
                      </div>
                      <div class="col-4 d-flex justify-content-end">
                        <div id="num">44.00</div>
                        <div>&nbsp;zł</div>
                      </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="row">
                        <div class="col-8 d-flex justify-content-start">
                          Dostawa
                        </div>
                        <div class="col-4 d-flex justify-content-end" id="aaa2">
                          <div id="num_delivery">8.99</div>
                          <div>&nbsp;zł</div>
                        </div>
                      </div>
                      <div class="row" id="a2" style="display: none">
                        <div class="col-8 d-flex justify-content-start"></div>
                        <div class="col-4 d-flex justify-content-end">0.00 zł</div>
                      </div>
                    </div>
                  </div>
                  <div class="row rounded-bottom border p-2 border-top-0" style="border-color: rgba(0, 0, 0, 0.08) !important; padding: 12px 8px !important;">
                    <div class="col-12">
                      <div class="row" id="aa2" style="display: none">
                        <div class="col-8 d-flex justify-content-start"></div>
                        <div class="col-4 d-flex justify-content-end">
                          <div id="order_price2"></div>
                          <div>&nbsp;zł</div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-8 d-flex justify-content-start">
                          Do zapłaty
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                          <div id="order_sum2"></div>
                          <div>&nbsp;zł</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
          </div>
          </div>
     
      <div class="w-100"></div>
      <div class="col-12">
        <div class="row">
          <div class="col-1 col-sm-1 col-md-3 col-lg-4"></div>
          <div class="col-5 col-sm-5 col-md-3 col-lg-2 pb-2">
            <button class="btn btn-more rounded btn-block" id="back2">Powrót</button>
          </div>
          <div class="col-5 col-sm-5 col-md-3 col-lg-2">
            <button class="btn btn-add rounded btn-block" id="go2">Kupuję i płacę</button>
          </div>
          <div class="col-1 col-sm-1 col-md-3 col-lg-4"></div>
        </div>
      </div>
    </div>
  </div>

    <div class="row pt-3" id="display3" style="display:none;">
      <div class="col-12 pt-3">
        <div class="row">
          <div class="col">
            <i class="fas fa-check-circle fa-4x d-flex justify-content-center pb-3" style="color: rgba(124,97,82,1)"></i>
            <div class="lead d-flex justify-content-center font-weight-bold pb-0">Dziękujemy za zakupy!</div>
            <small class="d-flex justify-content-center pb-3" style="color: #53c58f; font-size: 16px;">Zakup opłacony</small>
            <div class="d-flex justify-content-start py-1" style="font-size: 16px;">Teraz my zajmiemy się resztą</div>
            <div class="d-flex justify-content-start pb-5 border-bottom" style="border-color: rgba(235,235,235,1)">
              <div class="text-muted">
                Przewidywana dostawa: &nbsp;
              </div>
              <div class="row">
                <div class="col" id="data_delivery"></div>
                <div id="delivery_data_small">
                  <div class="col" id="data_delivery1"></div>
                  <div class="w-100"></div>
                  <div class="col" id="data_delivery2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-100"></div>
      <div class="col-12">
        <div class="row pt-5">
          <div class="col"></div>
          <div class="col-5 col-sm-5 col-md-4 col-lg-3 pb-2 d-flex justify-content-center">
            <button class="btn btn-more rounded btn-block" id="go3">Kontynuuj zakupy</button>
          </div>
          <div class="col"></div>
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
<link rel="stylesheet" href="cookie.css">

<div class="modal fade" id="order_product_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Ciastko owsiane</h5>
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
                        <textarea class="form-control input-user" id="exampleFormControlTextarea1" rows="5" disabled style="box-shadow: none; background-color: #ffffff; color: #000000;">Opis ciastka</textarea>
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
      <div class="modal-footer d-flex justify-content-end">
        <button type="button" class="btn btn-more" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="order_product_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Ciastko granola</h5>
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
                        <textarea class="form-control input-user" id="exampleFormControlTextarea1" rows="5" disabled style="box-shadow: none; background-color: #ffffff; color: #000000;">Opis ciastka</textarea>
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
      <div class="modal-footer d-flex justify-content-end">
        <button type="button" class="btn btn-more" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
const validateFirs = (first_) => {
  return first_.match(
    /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð -]+$/u
  );
};

const validate4 = () => {
  const $result4 = $('#result7');
  const first_ = $('#city').val();
  $result4.text('');

  if (!validateFirs(first_)) {
    $result4.text('Wprowadź prawidłowe miasto.');
    $result4.css('background', '#f8d7da');
    $result4.css('color', '#842029');
    $result4.css('border', '1px solid #f5c2c7');
    $result4.css('border-radius', '.25rem');
    $result4.css('padding', '.5rem');
    $result4.css('font-size', '16px');
    $result4.css('width', '4000px');
  } else {
    $result4.css('padding', '0rem');
    $result4.css('border', 'none');
  }
  return false;
}

$('#city').on('input', validate4);

const validateFirstName = (first) => {
  return first.match(
    /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u
  );
};

const validate2 = () => {
  const $result2 = $('#result5');
  const first = $('#first_name').val();
  $result2.text('');

  if (!validateFirstName(first)) {
    $result2.text('Wprowadź prawidłowe imię.');
    $result2.css('background', '#f8d7da');
    $result2.css('color', '#842029');
    $result2.css('border', '1px solid #f5c2c7');
    $result2.css('border-radius', '.25rem');
    $result2.css('padding', '.5rem');
    $result2.css('font-size', '16px');
    $result2.css('width', '4000px');
  } else {
    $result2.css('padding', '0rem');
    $result2.css('border', 'none');
  }
  return false;
}

$('#first_name').on('input', validate2);

const validateLastName = (last) => {
  return last.match(
    /^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u
  );
};

const validateLast = () => {
  const $result6 = $('#result9');
  const last = $('#last_name').val();
  $result6.text('');

  if (!validateLastName(last)) {
    $result6.text('Wprowadź prawidłowe nazwisko.');
    $result6.css('background', '#f8d7da');
    $result6.css('color', '#842029');
    $result6.css('border', '1px solid #f5c2c7');
    $result6.css('border-radius', '.25rem');
    $result6.css('padding', '.5rem');
    $result6.css('font-size', '16px');
    $result6.css('width', '4000px');
  } else {
    $result6.css('padding', '0rem');
    $result6.css('border', 'none');
  }
  return false;
}

$('#last_name').on('input', validateLast);

const validateNumber = (number) => {
  return number.match(
    /^[1-9]/
  );
};

const validate1 = () => {
  const $result1 = $('#result3');
  const number = $('#number').val();
  $result1.text('');

  if (!validateNumber(number)) {
    $result1.text('Wprowadź prawidłowy numer.');
    $result1.css('background', '#f8d7da');
    $result1.css('color', '#842029');
    $result1.css('border', '1px solid #f5c2c7');
    $result1.css('border-radius', '.25rem');
    $result1.css('padding', '.5rem');
    $result1.css('font-size', '16px');
    $result1.css('width', '4000px');
  } else {
    $result1.css('padding', '0rem');
    $result1.css('border', 'none');
  }
  return false;
}

$('#number').on('input', validate1);


const validateZip = (zip) => {
  return zip.match(
    /^[0-9]{2}[-][0-9]{3}$/
  );
};

const validate = () => {
  const $result = $('#result');
  const zip = $('#zip').val();
  $result.text('');

  if (!validateZip(zip)) {
    $result.text('Wprowadź prawidłowy kod.');
    $result.css('background', '#f8d7da');
    $result.css('color', '#842029');
    $result.css('border', '1px solid #f5c2c7');
    $result.css('border-radius', '.25rem');
    $result.css('padding', '.5rem');
    $result.css('font-size', '16px');
    $result.css('width', '4000px');
  } else {
    $result.css('padding', '0rem');
    $result.css('border', 'none');
  }
  return false;
}

$('#zip').on('input', validate);

const validatePhone = (phone) => {
  return phone.match(
    /^[+]{1}[4]{1}[8]{1}[ ][0-9]{3}[ ][0-9]{3}[ ][0-9]{3}$/
  );
};

const validateP = () => {
  const $resultP = $('#result11');
  const phone = $('#phone').val();
  $resultP.text('');

  if (!validatePhone(phone)) {
    $resultP.text('Wprowadź prawidłowy numer telfonu.');
    $resultP.css('background', '#f8d7da');
    $resultP.css('color', '#842029');
    $resultP.css('border', '1px solid #f5c2c7');
    $resultP.css('border-radius', '.25rem');
    $resultP.css('padding', '.5rem');
    $resultP.css('font-size', '16px');
    $resultP.css('width', '4000px');
  } else {
    $resultP.css('padding', '0rem');
    $resultP.css('border', 'none');
  }
  return false;
}


$('#phone').on('input', validateP);

const validateEmail = (email) => {
  return email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
};

const validate13 = () => {
  const $result13 = $('#result13');
  const email = $('#email').val();
  $result13.text('');

  if (!validateEmail(email)) {
    $result13.text('Wprowadź prawidłowy adres e-mail.');
    $result13.css('background', '#f8d7da');
    $result13.css('color', '#842029');
    $result13.css('border', '1px solid #f5c2c7');
    $result13.css('border-radius', '.25rem');
    $result13.css('padding', '.5rem');
    $result13.css('font-size', '16px');
    $result13.css('width', '4000px');
  } else {
    $result13.css('padding', '0rem');
    $result13.css('border', 'none');
  }
  return false;
}

$('#email').on('input', validate13);

const today = new Date()
    const day1 = new Date(today)
    const day2 = new Date(today)

    day1.setDate(day1.getDate() + 2)
    let date1 = new Date(day1);
    let dayweek = date1.toLocaleString('pl-PL', {
      weekday: 'long'
    });
    let d1 = date1.getDate(day1);
    let month1 = date1.toLocaleString('pl-Pl', {
      month: 'long'
    });
    let days1 = dayweek.concat(", " + d1 + " " + month1)

    day2.setDate(day2.getDate() + 7)
    let date2 = new Date(day2);
    let dayweek2 = date2.toLocaleString('pl-PL', {
      weekday: 'long'
    });
    let d2 = date2.getDate(day2);
    let month2 = date2.toLocaleString('pl-Pl', {
      month: 'long'
    });
    let days2 = dayweek2.concat(", " + d2 + " " + month2)
    let sum = days1.concat(" - " + days2)
    days1 = days1.concat(" - ")
    document.getElementById("data_delivery").innerHTML = sum;
    document.getElementById("data_delivery1").innerHTML = days1;
    document.getElementById("data_delivery2").innerHTML = days2;
</script>