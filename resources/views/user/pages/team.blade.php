@extends('user.index')
@section('content')
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area help">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>About</h2>
					<!-- <ul class="breadcrumb-list">
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Pages</a>
						</li>
						<li>
							<a href="#">Help</a>
						</li>
					</ul> -->
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Area End -->

    <!-- Help Section Start -->
	<section class="help-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<aside>
						<ul>
							<li>
								<a href="{{url('/about')}}" ><i class="fas fa-chevron-right"></i>What is Lambswap?</a>
							</li>
                            <li>
								<a href="{{url('/about/team')}}" class="active"><i class="fas fa-chevron-right"></i>Our Team</a>
							</li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-8">
					<div class="help-content">
						<h2 class="heading-title">
                            Our Team
						</h2>
						<div class="h-inner-content">
                            <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card team-card">
                                            <img class="card-img-top" src="{{url('assets/images/CEO.jpeg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    Darrel Gerwyn
                                                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                </h4>
                                                <h5 class="card-subtitle">Founder & CEO</h5>
                                                <!-- <p class="card-text mt-2">
                                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                                    <span id="dots">...</span><span id="more">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est sequi sapiente natus nemo odit voluptas quasi modi laudantium ratione, neque soluta itaque perspiciatis pariatur esse ut dolorum in consequatur!
                                                </p> -->
                                                <!-- <button class="btnRead" onclick="myFunction()" id="myBtnCol">Read more</button> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card team-card">
                                            <img class="card-img-top" src="{{url('assets/images/cto.jpeg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    Robin
                                                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                </h4>
                                                <h5 class="card-subtitle">Co-founder & CTO</h5>
                                                <!-- <p class="card-text mt-2">
                                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                                    <span id="dots2">...</span><span id="more2">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est sequi sapiente natus nemo odit voluptas quasi modi laudantium ratione, neque soluta itaque perspiciatis pariatur esse ut dolorum in consequatur!
                                                </p>
                                                <button class="btnRead" onclick="myFunction2()" id="myBtnCol2">Read more</button> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card team-card">
                                            <img class="card-img-top" src="{{url('assets/images/coo.jpeg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    Lethicia
                                                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                </h4>
                                                <h5 class="card-subtitle">COO</h5>
                                                <!-- <p class="card-text mt-2">
                                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                                    <span id="dots3">...</span><span id="more3">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est sequi sapiente natus nemo odit voluptas quasi modi laudantium ratione, neque soluta itaque perspiciatis pariatur esse ut dolorum in consequatur!
                                                </p>
                                                <button class="btnRead" onclick="myFunction3()" id="myBtnCol3">Read more</button> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card team-card">
                                            <img class="card-img-top" src="{{url('assets/images/bd.jpeg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    Charlotte
                                                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>

                                                </h4>
                                                <h5 class="card-subtitle">Blockchain Developer</h5>
                                                <!-- <p class="card-text mt-2">
                                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                                    <span id="dots4">...</span><span id="more4">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est sequi sapiente natus nemo odit voluptas quasi modi laudantium ratione, neque soluta itaque perspiciatis pariatur esse ut dolorum in consequatur!
                                                </p>
                                                <button class="btnRead" onclick="myFunction4()" id="myBtnCol4">Read more</button> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card team-card">
                                            <img class="card-img-top" src="{{url('assets/images/coba.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    Arnold
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                </h4>
                                                <h5 class="card-subtitle">Art director</h5>
                                                <p class="card-text mt-2">
                                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                                    <span id="dots5">...</span><span id="more5">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est sequi sapiente natus nemo odit voluptas quasi modi laudantium ratione, neque soluta itaque perspiciatis pariatur esse ut dolorum in consequatur!
                                                </p>
                                                <button class="btnRead" onclick="myFunction5()" id="myBtnCol5">Read more</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card team-card">
                                            <img class="card-img-top" src="{{url('assets/images/coba.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    Arnold
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                </h4>
                                                <h5 class="card-subtitle">Art director</h5>
                                                <p class="card-text mt-2">
                                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                                    <span id="dots6">...</span><span id="more6">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est sequi sapiente natus nemo odit voluptas quasi modi laudantium ratione, neque soluta itaque perspiciatis pariatur esse ut dolorum in consequatur!
                                                </p>
                                                <button class="btnRead" onclick="myFunction6()" id="myBtnCol6">Read more</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card team-card">
                                            <img class="card-img-top" src="{{url('assets/images/coba.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    Arnold
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                </h4>
                                                <h5 class="card-subtitle">Art director</h5>
                                                <p class="card-text mt-2">
                                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                                    <span id="dots7">...</span><span id="more7">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est sequi sapiente natus nemo odit voluptas quasi modi laudantium ratione, neque soluta itaque perspiciatis pariatur esse ut dolorum in consequatur!
                                                </p>
                                                <button class="btnRead" onclick="myFunction7()" id="myBtnCol7">Read more</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card team-card">
                                            <img class="card-img-top" src="{{url('assets/images/coba.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    Arnold
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                </h4>
                                                <h5 class="card-subtitle">Art director</h5>
                                                <p class="card-text mt-2">
                                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                                    <span id="dots8">...</span><span id="more8">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est sequi sapiente natus nemo odit voluptas quasi modi laudantium ratione, neque soluta itaque perspiciatis pariatur esse ut dolorum in consequatur!
                                                </p>
                                                <button class="btnRead" onclick="myFunction8()" id="myBtnCol8">Read more</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card team-card">
                                            <img class="card-img-top" src="{{url('assets/images/coba.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    Arnold
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                </h4>
                                                <h5 class="card-subtitle">Art director</h5>
                                                <p class="card-text mt-2">
                                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                                    <span id="dots9">...</span><span id="more9">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est sequi sapiente natus nemo odit voluptas quasi modi laudantium ratione, neque soluta itaque perspiciatis pariatur esse ut dolorum in consequatur!
                                                </p>
                                                <button class="btnRead" onclick="myFunction9()" id="myBtnCol9">Read more</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card team-card">
                                            <img class="card-img-top" src="{{url('assets/images/coba.jpg')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    Arnold
                                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                                </h4>
                                                <h5 class="card-subtitle">Art director</h5>
                                                <p class="card-text mt-2">
                                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                                    <span id="dots10">...</span><span id="more10">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel est sequi sapiente natus nemo odit voluptas quasi modi laudantium ratione, neque soluta itaque perspiciatis pariatur esse ut dolorum in consequatur!
                                                </p>
                                                <button class="btnRead" onclick="myFunction10()" id="myBtnCol10">Read more</button>
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
	<!-- Help Section End -->
@endsection()
