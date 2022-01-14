<!-- Ex-lottery Area Start -->
<section class="ex-lottery">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h5 class="subtitle">
							Exclusive News
						</h5>
						<h2 class="title ">
							News From Medium
						</h2>
						<h6 class="text">
                            Now's you can see our news from medium
						</h6>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="ex-lottery-slider">
                        @foreach ($responseBody as $i)
						<div class="slider-item">
                            <a href="{{$i->link}}">
                                <div class="single-tikit news">
                                    <div class="image">
                                        <!-- <span class="tag">News</span> -->
                                        <img src="{{$i->thumbnail}}" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="content-area">
                                            <a href="{{$i->link}}"><h4>{{Illuminate\Support\Str::limit($i->title, 65) }}</h4></a>
                                            <div class="c-bottom">
                                                <span>{{$i->pubDate}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
						</div>
                        @endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Ex-lottery Area End -->
