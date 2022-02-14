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
                        <div class="col-lg-6 col-12 mb-3">
                            <div class="heading-area ">
                                <h4 class="title mb-3">
                                    @if ($i->name != "IDO ON PinkSale")
                                        {{explode(" ", $i->name)[0]}} Round {{explode(" ", $i->name)[1]}}
                                    @else
                                        {{$i->name}}
                                    @endif
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
                                    <a href="https://bscscan.com/address/0x4dc1a22a137cacabbdbeb47f2724b94770503795#tokentxns" class="mybtn1">View On BSC</a>
                                    @if ($i->name == "IDO ON PinkSale")
                                        <a href="{{url('/IDO')}}" class="mybtn1">Buy IDO</a>
                                    @else
                                        <a href="https://www.pinksale.finance/#/launchpad/0xDC7f015c8b1A39a6741bAe31D675b41E5fE7fb0F?chain=BSC" class="mybtn1">Buy IDO</a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="single-tikit">
                                <div class="content">
                                    <div class="content-area">
                                        <div class="title-card justify-content-center">
                                            @if ($i->name != "IDO ON PinkSale")
                                                <h4>Data Statistic {{explode(" ", $i->name)[0]}} Round
                                                {{explode(" ", $i->name)[1]}} Lamb Swap</h4>
                                            @else
                                                <h4>Data Statistic {{$i->name}} </h4>
                                            @endif
                                        </div>
                                        <table class="detail">
                                            <tbody>

                                                <tr>
                                                    <td>Price</td>
                                                    <td>:</td>
                                                    <td>{{number_format($i->price, 7)}} BUSD</td>
                                                </tr>
                                                @if ($i->name != "IDO ON PinkSale")
                                                    @foreach ($transaction as $t)
                                                        @if ($i->id == $t->ido_id)
                                                        <tr>
                                                            <td>Total Raise</td>
                                                            <td>:</td>
                                                            <td>{{$t->busd}}</td>
                                                        </tr>
                                                        @endif
                                                    @endforeach
                                                @else
                                                        <tr>
                                                            <td>Start Date</td>
                                                            <td>:</td>
                                                            <td>{{$i->openAt}}</td>
                                                        </tr>
                                                @endif

                                                @if ($i->name != "IDO ON PinkSale")
                                                    @foreach ($count as $c)
                                                        @if ($i->id == $c->ido_id)
                                                        <tr>
                                                            <td>Total User Participated</td>
                                                            <td>:</td>
                                                            <td>{{$c->count - 1}}</td>
                                                        </tr>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>End Date</td>
                                                        <td>:</td>
                                                        <td>{{$i->closeAt}}</td>
                                                    </tr>
                                                @endif

                                                <tr>
                                                    <td>Min Buy</td>
                                                    <td>:</td>
                                                    <td>{{$i->min}} {{$i->name == "IDO ON PinkSale" ? " BNB" : 'BUSD'}}</td>
                                                </tr><tr>
                                                    <td>Max Buy</td>
                                                    <td>:</td>
                                                    <td>{{$i->max}} {{$i->name == "IDO ON PinkSale" ? " BNB" : 'BUSD'}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Soft Cap</td>
                                                    <td>:</td>
                                                    <td>{{$i->soft_cap}} {{$i->name == "IDO ON PinkSale" ? " BNB" : 'BUSD'}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Hard Cap</td>
                                                    <td>:</td>
                                                    <td>{{$i->hard_cap}} {{$i->name == "IDO ON PinkSale" ? " BNB" : 'BUSD'}}</td>
                                                </tr>
                                                @if ($i->name != "IDO ON PinkSale")
                                                <tr>
                                                    <td>Progress</td>
                                                    <td>:</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                        @if ($i->name != "IDO ON PinkSale")
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
                                        @endif
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
