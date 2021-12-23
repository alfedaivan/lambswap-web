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
										<a class="nav-link {{ (request()->is('/*')) ? 'active' : '' }}" href="{{url('/')}}">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ (request()->is('/product*')) ? 'active' : '' }}" href="{{url('/product')}}">Products</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link {{ (request()->is('/game*')) ? 'active' : '' }}" href="{{url('/game')}}">Games</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ (request()->is('/bounty*')) ? 'active' : '' }}" href="{{url('/bounty')}}">Bounty</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ (request()->is('/help*')) ? 'active' : '' }}" href="{{url('/help')}}">Help</a>
									</li>
                                    <li class="nav-item">
										<a class="nav-link " href="contact.html">Document</a>
									</li>
								</ul>
								<a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> Join us</a>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!--Main-Menu Area Start-->
	</header>
