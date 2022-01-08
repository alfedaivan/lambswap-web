<!-- Ex-lottery Area Start -->
<section class="ex-lottery">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-heading">
						<h5 class="subtitle">
                        {{ __('home.news_sub-title') }}
						</h5>
						<h2 class="title ">
                        {{ __('home.news_title') }}
						</h2>
						<h6 class="text">
                        {{ __('home.news_text') }}
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
                                <div class="single-tikit">
                                    <div class="image">
                                        <span class="tag">{{ __('home.news_span') }}</span>
                                        <img src="{{url('assets/template/tuser/images/product/1.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="content-area">
                                            <a href="{{$i->link}}"><h3>{{$i->title}}</h3></a>
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
