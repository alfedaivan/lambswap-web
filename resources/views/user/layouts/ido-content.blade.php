<section class="latest-arcive2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav" role="tablist">

                    <li class="nav-item" role="presentation">
                        <a class="nav-link active mybtn2" id="pills-profile-tab" data-toggle="pill"
                            href="#pills-profile" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Information</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mybtn2" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                            role="tab" aria-controls="pills-contact" aria-selected="false">Buy IDO</a>
                    </li>
                </ul>

                <div class="tab-content l-a-nav" id="pills-tabContent">



                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
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
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="row card-ido-content">
                                                        @foreach ($ido as $i)
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="single-tikit">
                                                                <div class="card content">
                                                                    <div class="card-header">
                                                                        <h4>{{$i -> name}}</h4>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="content">
                                                                            <div class="top-area">
                                                                                <div class="top-content">
                                                                                    <h5 class="title">1 LST =
                                                                                        {{number_format($i -> price, 6)}}
                                                                                        BUSD</h5>
                                                                                    @foreach ($transaction as $t)
                                                                                    @if ($i ->id == $t->ido_id)
                                                                                    <h5>Total raise</h5>
                                                                                    <h3 class="value">
                                                                                        {{$t->busd}} BUSD

                                                                                    </h3>
                                                                                    <h5>Progress</h5>
                                                                                    @endif
                                                                                    @endforeach
                                                                                </div>
                                                                                <div class="top-bar">
                                                                                    @foreach ($transaction as $t)
                                                                                    @if ($i->id == $t->ido_id)
                                                                                        <div class="progress-bar" role="progressbar" style="width: {{$t->busd/$i->hard_cap * 100}}%;" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                    <div class="main-bar"></div>
                                                                                    <div class="numbers">
                                                                                        <span>0</span>
                                                                                        <span>100</span>
                                                                                    </div>
                                                                                    @endif
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                            <div class="bottom-content">
                                                                                <div class="timecounter">
                                                                                    <i class="fas fa-clock"></i>
                                                                                    <p data-countdown="{{$i->closeAt}}"></p>
                                                                                </div>
                                                                                <a href="{{url('/IDO/detail')}}"
                                                                                    class="mybtn1">Detail</a>
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
