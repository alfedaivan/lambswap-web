@extends('user.index')
@section('content')
    <section class="breadcrumb-area raffles">
        <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Raffles </h2>
					<ul class="breadcrumb-list">
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Pages</a>
						</li>
						<li>
							<a href="#">Raffles</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
    </section>
    <!-- Breadcrumb Area Start -->
    <section class="header-ido">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="subscribe-box">
                            <img class="left" src="assets/images/vr.png" alt="">
                            <img class="right" src="assets/images/game controler_.png" alt="">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="heading-area ">
                                            <h4 class="sub-title">
                                                Play, Create, Earn
                                            </h4>
                                            <h4 class="title">
                                                virtual Metaverse made by players
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="single-tikit">
                                            <div class="content">
                                                <div class="content-area">
                                                    <h3>Wallet Address :</h3>
                                                    <ul>
                                                        <li>Balance <span>:</span></li>
                                                        <li>IDO <span>:</span></li>
                                                        <li>IDO <span>:</span></li>
                                                        <li>IDO <span>:</span></li>
                                                    </ul>
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
	</section>
	<!-- Breadcrumb Area End -->


    <!-- Latest arcive area start -->
	@include('user.layouts.ido-content')
	<!-- Latest arcive area End -->
@endsection()
