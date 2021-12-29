<header class="header">
		<div class="overlay"></div>
		<!--Main-Menu Area Start-->
		<div class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="index.html">
								<img src="{{url('assets/images/Lambswap.png')}}" alt="">
							</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse fixed-height" id="main_menu">
								<ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
										<a class="nav-link" href="{{url('/home')}}">Home</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="{{url('/dex')}}">DEX</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('/product')}}">NFT</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="{{url('/game')}}">GameFi</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('/bounty')}}">Bounty</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="{{url('/IDO')}}">IDO</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="{{url('/help')}}">Help</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link" href="contact.html">Docs</a>
									</li>
                                    <!-- <li class="nav-item">
										<div class="nav-link language-selector">
                                            {{strtoupper(Lang::locale())}}
											<select name="language" class="language">
												<option value="1"><a href="lang/en">EN</a></option>
												<option value="2"><a href="lang/fr">FR</a></option>
											</select>
										</div>
									</li> -->

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{strtoupper(Lang::locale())}}
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="lang/en">EN</a></li>
                                            <li><a class="dropdown-item" href="lang/fr">FR</a></li>
                                        </ul>
                                    </li>
								</ul>

                                @auth
                                    <a href="{{route('auth.logout')}}" class="btn btn-danger">logout</a>
                                @endauth
                                @guest
								    <a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> Join us</a>
                                @endguest
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!--Main-Menu Area Start-->
	</header>
