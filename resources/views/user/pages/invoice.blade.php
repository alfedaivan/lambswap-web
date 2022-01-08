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
                        <div class="notice-area">
                            <p><span>IMPORTANT:</span>Send only BTC to this address, sending any other coin or
                                                                    token will result in losing your funds</p>

                        </div>

                        <div class="title">
                            <p>ISINYA QR CODE</p>
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
                                    0Xdg56528nhsfosf1098j2
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
                                        <li> 2.	Payment are procces on your behalf, which refers to your request in purchasing IDO. This invoice is printed by system.</li>

                                        <a href="{{route('send.email', $id)}}">
                                            <li>3.	Please confirm your Payment</li>
                                        </a>
                                    </ul>
                            </p>
                        </div>
					</div>
                </div>
			</div>
        </div>
    </div>
</secttion>

@endsection()
