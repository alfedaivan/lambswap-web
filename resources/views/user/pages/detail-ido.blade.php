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
                                            <h4 class="title mb-3">
                                                LambSwap – IDO Round 1
                                            </h4>
                                            <h3 class="sub-title">
                                                Play, Create, Earn
                                            </h3>
                                            <h4 class="title2">
                                                virtual Metaverse made by players
                                            </h4>
                                            <span class="label success">Open</span>
                                            <div class="bottom-content mt-4">
                                                <a href="raffles-details.html" class="mybtn1">View Detail</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="single-tikit">
                                            <div class="content">
                                                <div class="content-area">
                                                    <div class="title-card justify-content-center">
                                                        <h4>Data Statistic IDO Raound 1 Lamb Swap</h4>
                                                    </div>

                                                    <ul>
                                                        <li>Price <span>:</span></li>
                                                        <li>Amount BUSD <span>:</span></li>
                                                        <li>Amount LST <span>:</span></li>
                                                        <li>Total User Participated <span>:</span></li>
                                                        <li>Soft Cap <span>:</span></li>
                                                        <li>Hard Cap <span>:</span></li>
                                                        <li>IDO Progress
                                                            <div class="top-area mt-2">
                                                                <div class="top-bar">
                                                                    <div class="progress-bar"></div>
                                                                    <div class="main-bar"></div>
                                                                    <div class="numbers">
                                                                        <span>0</span>
                                                                        <span>100%</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @include('user.layouts.detail-ido-tab')
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<!-- Breadcrumb Area End -->
@endsection()
