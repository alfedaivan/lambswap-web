<section class="latest-arcive2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
                    <ul class="nav"  role="tablist">
						<li class="nav-item" role="presentation">
						  <a class="nav-link mybtn2 active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">How To Take a Part</a>
						</li>
						<li class="nav-item" role="presentation">
						  <a class="nav-link mybtn2" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Information</a>
						</li>
						<li class="nav-item" role="presentation">
						  <a class="nav-link mybtn2" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Buy IDO</a>
						</li>
					</ul>

					<div class="tab-content l-a-nav" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-heading">
                                            <h4 class="title ">
                                                How To Take A Part
                                            </h4>
                                        </div>
                                        @include('user.layouts.how-to')
                                    </div>
                                </div>
                            </div>
						</div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="row">
                                <div class="col-lg-12">
                                    @include('user.layouts.information-ido')
                                </div>
                            </div>
						</div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row justify-content-center">
                                @include('user.layouts.card-buy')
                            </div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
