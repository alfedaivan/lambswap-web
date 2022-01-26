@extends('user.index')
@section('content')

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area2 games">
		<div class="content">
			<img src="{{url('assets/template/tuser/images/contest/top-icon_.png')}}" alt="">
			@auth
                <a href="#" class="mybtn1">Buy GameFi</a>
            @endauth
            @guest
                <a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> Join Now!</a>
            @endguest
		</div>
	</section>
	<!-- Breadcrumb Area End -->

    <!-- Games Filter Area Start -->
	<section class="games-filter">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="filter-wrapp">
						<div class="left-area">
							<a href="#" class="mybtn2"><i class="far fa-sun"></i>Select For you</a>
							<a href="#" class="mybtn2"><i class="fas fa-dice-five"></i>New Games</a>
							<a href="#" class="mybtn2"><i class="far fa-heart"></i>Most Popular</a>
						</div>
						<div class="right-area">
							<form action="#">
								<input type="text" placeholder="Search Games">
								<button type="submit"><i class="fas fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Games Filter Area End -->

    <!-- Game play area start -->
	<section class="game-play-section game-play-section2">
		<div class="container">
		<div class="row">
				<div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="single-play">
                            <div class="image">
                                <img src="{{url('assets/images/Pose-1.png')}}" alt="">
                            </div>
                        </div>
                    </a>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="single-play">
                            <div class="image">
                                <img src="{{url('assets/images/Pose-2.png')}}" alt="">
                            </div>
                        </div>
                    </a>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="single-play">
                            <div class="image">
                                <img src="{{url('assets/images/Pose-3.png')}}" alt="">
                            </div>
                        </div>
                    </a>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="single-play">
                            <div class="image">
                                <img src="{{url('assets/images/Pose-4.png')}}" alt="">
                            </div>
                        </div>
                    </a>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="single-play">
                            <div class="image">
                                <img src="{{url('assets/images/Pose-5.png')}}" alt="">
                            </div>
                        </div>
                    </a>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="single-play">
                            <div class="image">
                                <img src="{{url('assets/images/Pose-6.png')}}" alt="">
                            </div>
                        </div>
                    </a>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="single-play">
                            <div class="image">
                                <img src="{{url('assets/images/Pose-7.png')}}" alt="">
                            </div>
                        </div>
                    </a>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="single-play">
                            <div class="image">
                                <img src="{{url('assets/images/Pose-8.png')}}" alt="">
                            </div>
                        </div>
                    </a>
				</div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <a href="#">
                        <div class="single-play">
                            <div class="image">
                                <img src="{{url('assets/images/Pose-9.png')}}" alt="">
                            </div>
                        </div>
                    </a>
				</div>
		    </div>

        <!-- <div class="row">
						<div class="col-lg-12">
							<nav class="page-pagination">
								<ul class="pagination justify-content-center mb-4 mt-4">
								  <li class="page-item">
									<a class="page-link prev" href="#" tabindex="-1">Previous</a>
								  </li>
								  <li class="page-item"><a class="page-link num" href="#">1</a></li>
								  <li class="page-item"><a class="page-link num" href="#">2</a></li>
								  <li class="page-item"><a class="page-link num active" href="#">3</a></li>
								  <li class="page-item"><a class="page-link num" href="#">4</a></li>
								  <li class="page-item"><a class="page-link num" href="#">5</a></li>
								  <li class="page-item">
									<a class="page-link next" href="#">Next</a>
								  </li>
								</ul>
							</nav>
						</div>
					</div> -->
	</section>
	<!-- Game play area end -->

@endsection()
