<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>Cookie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="cookie.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script></head>

<body>
	<div id="page-container">
	   	<div id="content-wrap">
			<header></header>
			<nav>
			    <div class="navbar navbar-dark p-3" style="background: #7c6152;">
			        <a class="navbar-brand text-center" href="index.php" id="navbar">
			            <h3 class="left mb-0">Cookie</h3>
			        </a>
			        <form class="form-inline" id="navbar-button">
			            <button class="btn btn-login rounded mr-1" type="button" onclick="location.href='index_login.php'">Zaloguj się</button>
			            <button class="btn btn-register rounded" type="button" onclick="location.href='index_register_user.php'">Zarejestruj się</button>
			        </form>
			    </div>
			</nav>

			<div class="row">
	<div class="col"></div>
	<div class="col-10">
		<div id="nav-home" class="tab-pane fade show active bb-0" role="tabpanel" aria-labelledby="nav-home-tab">
  				<div class="row pt-3">
  					<div class="col-md-2 col-sm-4 col-4">
    					<div class="list-group" id="list-tab" role="tablist">
				      		<a class="list-group-item list-group-item-action active" id="list-1-list" data-toggle="list" href="#list-1" role="tab" aria-controls="home">Baza ciastka</a>
				      		<a class="list-group-item list-group-item-action" id="list-2-list" data-toggle="list" href="#list-2" role="tab" aria-controls="profile">Dodatki do bazy</a>
				      		<a class="list-group-item list-group-item-action" id="list-3-list" data-toggle="list" href="#list-3" role="tab" aria-controls="messages">Owoce</a>
				      		<a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list" href="#list-4" role="tab" aria-controls="settings">Orzechy i ziarna</a>
				      		<a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list" href="#list-5" role="tab" aria-controls="settings">Czekolada</a>
    					</div>
  					</div>
 					<div class="col-md-6 col-sm-8 col-8 border pt-3 pb-3">
    					<div class="tab-content" id="nav-tabContent">
      						<div class="tab-panel fade show active" id="list-1" role="tabpanel" aria-labelledby="list-1-list">
      							<div class="row border m-1">
									<div class="col-md-5 col-12 py-2">
										<img src="150x150.png" class="align-middle m-4" alt="...">
									</div>
									<div class="col-md-7 col-12 py-3">
										<div class="col font-weight-bold">Płatki owsiane</div>
										<div class="w-100"></div>
										<div class="col font-weight-light">Dla purystów i indywidaualistów</div>
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
										<div class="col pb-3">
											<div class="row">
										    	<div class="col-2">
										    		Icon
										   		</div>
										    	<div class="col">
										     		Text
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

										    	<!-- Button trigger modal -->
												<button class="btn btn-more rounded btn-size ml-3" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Więcej...</button>

												<!-- Modal -->
												<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
												  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <h5 class="modal-title font-weight-bold" id="exampleModalLongTitle">Płatki owsiane</h5>
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
												          <span aria-hidden="true">&times;</span>
												        </button>
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
																		   		Icon
																		 		</div>
																		   	<div class="col">
																	     		Text
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
												        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
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
  					<div class="col-md-4 col-sm-12 col-12 border pt-3 pb-3">
      					<div class="row border m-1">
							<div class="col pt-1">
								<div class="row">
									<div class="col-2">
										Icon
									</div>
									<div class="col">
										Składnik
									</div>
									<div class="col d-flex justify-content-end">
										Number
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col pt-1">
								<div class="row">
									<div class="col-2">
										Icon
									</div>
									<div class="col">
										Składnik
									</div>
									<div class="col d-flex justify-content-end">
										Number
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col pt-1">
								<div class="row">
									<div class="col-2">
										Icon
									</div>
									<div class="col">
										Składnik
									</div>
									<div class="col d-flex justify-content-end">
										Number
									</div>
								</div>
							</div>
      					</div>
      					<div class="row border m-1">
      						Wizualizacja
      					</div>
  					</div>
				</div>
  			</div>
		</div>

	<div class="col"></div>
</div>

		</div>
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
</body>
</html>