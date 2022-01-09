<section class="latest-arcive2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
                    <ul class="nav"  role="tablist">

						<li class="nav-item" role="presentation">
						  <a class="nav-link active mybtn2" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Information</a>
						</li>
						<li class="nav-item" role="presentation">
						  <a class="nav-link mybtn2" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Buy IDO</a>
						</li>
					</ul>

					<div class="tab-content l-a-nav" id="pills-tabContent">



                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="row card-ido">
                            <div class="col-lg-12">
									<div class="left-content">

                                        <div class="accordion" id="accordion">
                                            <div class="card">
                                                <button class="btn btn-expand" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                    <h5 class="card-title">$LST tokenomics and IDO metrics</h5>
                                                    <div class="arrow-down mr-3">
                                                        <i class="fas fa-chevron-down"></i>
                                                    </div>
                                                </button>
                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="row card-ido-content">
                                                            @foreach ($ido as $i)
                                                            <div class="col-lg-6">
                                                                <div class="single-tikit">
                                                                    <div class="card content">
                                                                        <div class="card-header">
                                                                            <h4>{{$i -> name}}</h4>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="content">
                                                                                <div class="top-area">
                                                                                    <div class="top-content">
                                                                                        <h5 class="title">1 LST = {{$i -> price}} BUSD</h5>
                                                                                        <h5>Total raise</h5>
                                                                                        <h3 class="value">
                                                                                            40000 BUSD
                                                                                        </h3>
                                                                                        <h5>Progress</h5>
                                                                                    </div>
                                                                                    <div class="top-bar">
                                                                                        <div class="progress-bar"></div>
                                                                                        <div class="main-bar"></div>
                                                                                        <div class="numbers">
                                                                                            <span>0</span>
                                                                                            <span>100%</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="bottom-content justify-content-between">
                                                                                    <div class="timecounter">
                                                                                        <i class="fas fa-clock"></i>
                                                                                        <p data-countdown="2022/01/01"></p>
                                                                                    </div>
                                                                                    <a href="{{url('/IDO/detail')}}" class="mybtn1">View Detail</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

									</div>
								</div>
							</div>
						</div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row justify-content-center card-buy">
                                @include('user.layouts.card-buy')
                            </div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
