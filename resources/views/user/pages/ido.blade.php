@extends('user.index')
@section('content')

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
                                                    @if (Auth::check())
                                                    <h3>Wallet Address : {{$wallet}}</h3>
                                                    <ul>
                                                        @if ($total->total == null)
                                                            <li>Balance <span>  : 0 LST</span></li>
                                                            <li>IDO 1<span>: 0 LST</span></li>
                                                            <li>IDO 2<span>: 0 LST</span></li>
                                                            <li>IDO 3<span>: 0 LST</span></li>
                                                        @else
                                                            <li>Balance <span>: {{$total->total}} LST</span></li>
                                                        @endif
                                                        @foreach ($perIdo as $p)
                                                            @if ($p->ido_id == 1)
                                                                <li>IDO 1<span>: {{$p->lst}} LST</span></li>
                                                            @elseif ($p->ido_id == 2)
                                                                <li>IDO 2<span>: {{$p->lst}} LST</span></li>
                                                            @else
                                                                <li>IDO 3<span>: {{$p->lst}} LST</span></li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                    @else
                                                        <a href="#" data-toggle="modal" data-target="#signin">LOGIN FIRST!</a>
                                                        {{-- <h3>Wallet Address : <a href="#" class="mybtn1"  data-toggle="modal" data-target="#signin"> Login</a></h3> --}}
                                                    @endif

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


