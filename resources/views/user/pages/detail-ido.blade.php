@extends('user.index')
@section('content')
<section class="breadcrumb-area raffles">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Detail IDO</h2>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area Start -->
<section class="header-ido">
    <div class="container">
        <div class="row">
            @foreach ($ido as $i)
            <div class="col-lg-12 mb-3">
                <div class="subscribe-box">
                    <img class="left" src="assets/images/vr.png" alt="">
                    <img class="right" src="assets/images/game controler_.png" alt="">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="heading-area ">
                                <h4 class="title mb-3">
                                    {{explode(" ", $i->name)[0]}} Round {{explode(" ", $i->name)[1]}}
                                </h4>
                                <h3 class="sub-title">
                                    Play, Create, Earn
                                </h3>
                                <h4 class="title2">
                                    virtual Metaverse made by players
                                </h4>
                                @if ($i->status == "Open")
                                <span class="label success">{{$i->status}}</span>
                                @elseif($i->status == "On Going")
                                <span class="label warning">{{$i->status}}</span>
                                @else
                                <span class="label danger">{{$i->status}}</span>
                                @endif
                                <div class="bottom-content mt-4">
                                    <a href="raffles-details.html" class="mybtn1">View On BSC</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="single-tikit">
                                <div class="content">
                                    <div class="content-area">
                                        <div class="title-card justify-content-center">
                                            <h4>Data Statistic {{explode(" ", $i->name)[0]}} Round
                                                {{explode(" ", $i->name)[1]}} Lamb Swap</h4>
                                        </div>
                                        <table>
                                            <tbody>

                                                <tr>
                                                    <td>Price</td>
                                                    <td>:</td>
                                                    <td>{{number_format($i->price, 6)}} BUSD</td>
                                                </tr>
                                                @foreach ($transaction as $t)
                                                @if ($i->id == $t->ido_id)
                                                <tr>
                                                    <td>Amount BUSD</td>
                                                    <td>:</td>
                                                    <td>{{$t->busd}}</td>
                                                </tr>
                                                @endif
                                                @endforeach

                                                @foreach ($count as $c)
                                                    @if ($i->id == $c->ido_id)
                                                    <tr>
                                                        <td>Total User Participated</td>
                                                        <td>:</td>
                                                        <td>{{$c->count - 1}}</td>
                                                    </tr>
                                                    @endif
                                                @endforeach


                                                <tr>
                                                    <td>Soft Cap</td>
                                                    <td>:</td>
                                                    <td>{{$i->soft_cap}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Hard Cap</td>
                                                    <td>:</td>
                                                    <td>{{$i->hard_cap}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Progress</td>
                                                    <td>:</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="top-area mt-2">
                                            <div class="top-bar">
                                                @foreach ($transaction as $t)
                                                @if ($i->id == $t->ido_id)
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: {{$t->busd/$i->hard_cap * 100}}%;" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                                <div class="main-bar"></div>
                                                <div class="numbers">
                                                    <span>0</span>
                                                    <span>100%</span>
                                                </div>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- @include('user.layouts.detail-ido-tab') -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>
</section>
<!-- Breadcrumb Area End -->
@endsection()
