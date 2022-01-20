@extends('user.index')
@section('content')
<secttion class="invoice-card">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 col-sm-12">
                <div class="ticket-page invoicee-card">
                    <div class="ticket-cart-box">
                        <div class="title">
                            <h5 >Warning</h5>
                            <p>Selected Network BSC / BEP-20</p>
                        </div>
                        <!-- <div class="notice-area">
                            <p><span>IMPORTANT:</span>Send only BTC to this address, sending any other coin or
                                                                    token will result in losing your funds</p>

                        </div> -->

                        <div class="title">
                            <img src="{{url('assets/images/qrcode.jpeg')}}" alt="">
                        </div>

                        <div class="total">
                            <div class="amount">
                                <div class="title-total">
                                    Amount BUSD :
                                </div>
                                <div class="value">
                                {{$busd}}
                                </div>
                                <div class="unit">
                                    c
                                </div>
                            </div>
                            <div class="busd">
                                <div class="title-total">
                                    <i class="fas fa-wallet"></i> Wallet :
                                </div>
                                <div class="value">
                                0x4dc1a22a137CACABBDBeB47f2724b94770503795
                                </div>
                                <div class="unit">
                                    c
                                </div>
                            </div>
                        </div>


                        <div class="notice-area">
                            <p>
                            <span> Information :</span>
                                    <ul>
                                        <li>1.	Your Payment will confirmed after it is full confirmed on BSC Network</li>
                                        <li>2.	Payment are procces on your behalf, which refers to your request in purchasing IDO. This invoice is printed by system.</li>
                                        <li>3.	Please confirm your Payment</li>

                                    </ul>
                            </p>
                            <div class="btn-confirm">
                                <a href="{{route('send.email', $id)}}" class="mybtn1">Confirm Now!</a>
                            </div>
                        </div>


					</div>
                </div>
			</div>
        </div>
    </div>
</secttion>

@endsection()
