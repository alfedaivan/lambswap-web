@extends('user.index')
@section('content')


	<!-- Breadcrumb Area Start -->
	<section class="breadcrumb-area gamer-profile">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="bc-content">
						<div class="left">
							<h3>LambSwap</h3>
							<p>Since 08 JAN 2021</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Area End -->

	<!-- Gamer Profile area Start -->
	<section class="gamer-profile-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="gamer-profile-top-inner">
						<div class="profile-photo">
							<div class="img">
								<img src="{{url('assets/images/ch8.png')}}" alt="">
							</div>
							<div class="mybadge">
								<img src="{{url('assets/template/tuser/images/gamer/badge.png')}}" alt="">
								<!-- <span>12</span> -->
							</div>
						</div>
						<!-- <div class="g-p-t-counters">
							<div class="g-p-t-single-counter">
								<div class="img">
									<img src="{{url('assets/template/tuser/images/gamer/c1.png')}}" alt="">
								</div>
								<div class="content">
									<h4>687</h4>
									<span>Total Match</span>
								</div>
							</div>
							<div class="g-p-t-single-counter">
								<div class="img">
									<img src="{{url('assets/template/tuser/images/gamer/c2.png')}}" alt="">
								</div>
								<div class="content">
									<h4>687</h4>
									<span>Win Ratio</span>
								</div>
							</div>
							<div class="g-p-t-single-counter">
								<div class="img">
									<img src="{{url('assets/template/tuser/images/gamer/c3.png')}}" alt="">
								</div>
								<div class="content">
									<h4>687</h4>
									<span>Achievements</span>
								</div>
							</div>
						</div> -->
						<div class="msg-btn-wrapper">
							<a href="#" class="msg-btn"  data-toggle="modal" data-target="#gamer-chat">
								<span>Enter SWAP</span>
							</a>
                            <a href="#" class="msg-btn ml-4"  data-toggle="modal" data-target="#gamer-chat">
								<span>Enter SWAP</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Gamer Profile  area End -->

	<!-- User Menu Area Start -->
	<div class="usermenu-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="usermenu-inner">
						<div class="left-area">
							<ul class="nav"  role="tablist">
								<li class="nav-item" role="presentation">
									<!-- <a class="nav-link" id="tes-1"
                                        data-toggle="tes" href="#tes-1" role="tab"
                                        aria-controls="tes-1" aria-selected="false">Test 1</a> -->
                                    <a href="gamer-profile2.html">Friends</a>
								</li>
								<li>
									<a href="gamer-profile2.html">Friends</a>
								</li>
								<li>
									<a href="gamer-profile3.html">statistics</a>
								</li>
								<li>
									<a href="gamer-profile4.html">play history</a>
								</li>
								<li>
									<a href="gamer-profile5.html">achievement</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- User Menu Area End -->

	<!-- User Main Content Area Start -->
	<section class="user-main-dashboard">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-4">
					<aside>
						<div class="about">
							<h4>About Me</h4>
							<p>
								Nothing Interesting hasn't been written here, what a pity it is quite a nice field
							</p>
							<ul>
								<li>
									<p><i class="fas fa-map-marked-alt"></i> Bern Switzerland</p>
								</li>
								<li>
									<p> <i class="fas fa-calendar-alt"></i> Member Since 08 Jan 2021</p>
								</li>
							</ul>
						</div>
						<div class="rank-area">
							<div class="top-area">
								<div class="left">
									<img src="assets/images/gamer/lavel.png" alt="">
								</div>
								<div class="right">
									<p>Rank: <span>12</span></p>
								</div>
							</div>
							<div class="bottom-area">
								<div class="progress">
									<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
								  </div>
								<a href="#">View all Ranks <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
						<div class="achievment-area">
							<div class="header-area">
								<h4>Achievements</h4>
								<a href="#">All Rewards <i class="fas fa-chevron-right"></i></a>
							</div>
							<ul>
								<li>
									<div class="s-a">
										<img src="assets/images/gamer/a1.png" alt="">
										<span>Tournaments <br>
											Joined</span>
									</div>
								</li>
								<li>
									<div class="s-a">
										<img src="assets/images/gamer/a2.png" alt="">
										<span>Sets of <br>
											Missions</span>
									</div>
								</li>
								<li>
									<div class="s-a">
										<img src="assets/images/gamer/a3.png" alt="">
										<span>Game <br>
											plays</span>
									</div>
								</li>
								<li>
									<div class="s-a">
										<img src="assets/images/gamer/a4.png" alt="">
										<span>Active <br>
											Days</span>
									</div>
								</li>
								<li>
									<div class="s-a">
										<img src="assets/images/gamer/a5.png" alt="">
										<span>Tournaments <br>
											Won</span>
									</div>
								</li>
								<li>
									<div class="s-a">
										<img src="assets/images/gamer/a6.png" alt="">
										<span>Friends <br>
											Referred</span>
									</div>
								</li>
							</ul>
						</div>
					</aside>
				</div>
				<div class="col-xl-9 col-lg-8">
					<main>
						<div class="main-box">
							<div class="header-area">
								<h4>Games Playing</h4>
							</div>
							<div class="table-responsive">
								<table class="table table-borderless">
									<tbody>
									  <tr>
										<td>
											<div class="game-info">
												<img src="assets/images/gamer/g1.png" alt="">
												<div class="content">
													<h6>Fortnite</h6>
													<span>Wager Challenge</span>
												</div>
											</div>
										</td>
										<td>
											<div class="players">
												<ul>
													<li>
														<a href="#">
															<img src="assets/images/player/sm1.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm2.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm3.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm4.png" alt="">
														</a>
													</li>
													<li>
														<span>
															32+
														</span>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Win Ratio</span>
												<h4>63%</h4>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Elo Ratings </span>
												<h4>2368</h4>
											</div>
										</td>
										<td>
											<a href="#" class="mybtn2">Challenge</a>
										</td>
									  </tr>
									  <tr>
										<td>
											<div class="game-info">
												<img src="assets/images/gamer/g2.png" alt="">
												<div class="content">
													<h6>Fortnite</h6>
													<span>Wager Challenge</span>
												</div>
											</div>
										</td>
										<td>
											<div class="players">
												<ul>
													<li>
														<a href="#">
															<img src="assets/images/player/sm1.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm2.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm3.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm4.png" alt="">
														</a>
													</li>
													<li>
														<span>
															32+
														</span>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Win Ratio</span>
												<h4>63%</h4>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Elo Ratings </span>
												<h4>2368</h4>
											</div>
										</td>
										<td>
											<a href="#" class="mybtn2">Challenge</a>
										</td>
									  </tr>
									  <tr>
										<td>
											<div class="game-info">
												<img src="assets/images/gamer/g3.png" alt="">
												<div class="content">
													<h6>Fortnite</h6>
													<span>Wager Challenge</span>
												</div>
											</div>
										</td>
										<td>
											<div class="players">
												<ul>
													<li>
														<a href="#">
															<img src="assets/images/player/sm1.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm2.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm3.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm4.png" alt="">
														</a>
													</li>
													<li>
														<span>
															32+
														</span>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Win Ratio</span>
												<h4>63%</h4>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Elo Ratings </span>
												<h4>2368</h4>
											</div>
										</td>
										<td>
											<a href="#" class="mybtn2">Challenge</a>
										</td>
									  </tr>
									  <tr>
										<td>
											<div class="game-info">
												<img src="assets/images/gamer/g4.png" alt="">
												<div class="content">
													<h6>Fortnite</h6>
													<span>Wager Challenge</span>
												</div>
											</div>
										</td>
										<td>
											<div class="players">
												<ul>
													<li>
														<a href="#">
															<img src="assets/images/player/sm1.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm2.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm3.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm4.png" alt="">
														</a>
													</li>
													<li>
														<span>
															32+
														</span>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Win Ratio</span>
												<h4>63%</h4>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Elo Ratings </span>
												<h4>2368</h4>
											</div>
										</td>
										<td>
											<a href="#" class="mybtn2">Challenge</a>
										</td>
									  </tr>
									  <tr>
										<td>
											<div class="game-info">
												<img src="assets/images/gamer/g5.png" alt="">
												<div class="content">
													<h6>Fortnite</h6>
													<span>Wager Challenge</span>
												</div>
											</div>
										</td>
										<td>
											<div class="players">
												<ul>
													<li>
														<a href="#">
															<img src="assets/images/player/sm1.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm2.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm3.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm4.png" alt="">
														</a>
													</li>
													<li>
														<span>
															32+
														</span>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Win Ratio</span>
												<h4>63%</h4>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Elo Ratings </span>
												<h4>2368</h4>
											</div>
										</td>
										<td>
											<a href="#" class="mybtn2">Challenge</a>
										</td>
									  </tr>
									  <tr>
										<td>
											<div class="game-info">
												<img src="assets/images/gamer/g6.png" alt="">
												<div class="content">
													<h6>Fortnite</h6>
													<span>Wager Challenge</span>
												</div>
											</div>
										</td>
										<td>
											<div class="players">
												<ul>
													<li>
														<a href="#">
															<img src="assets/images/player/sm1.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm2.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm3.png" alt="">
														</a>
													</li>
													<li>
														<a href="#">
															<img src="assets/images/player/sm4.png" alt="">
														</a>
													</li>
													<li>
														<span>
															32+
														</span>
													</li>
												</ul>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Win Ratio</span>
												<h4>63%</h4>
											</div>
										</td>
										<td>
											<div class="ratio">
												<span>Elo Ratings </span>
												<h4>2368</h4>
											</div>
										</td>
										<td>
											<a href="#" class="mybtn2">Challenge</a>
										</td>
									  </tr>

									</tbody>
								  </table>
							</div>
						</div>
					</main>
				</div>
			</div>
		</div>
	</section>
	<!-- User Main Content Area End -->

    <!-- <div class="tab-content l-a-nav" id="pills-tabContent">

        <div class="tab-pane fade" id="tes-1" role="tabpanel"
        aria-labelledby="tes-1">
        <div class="row">
            Tes1
        </div>
	</div> -->



	</div>

























@endsection()
