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

                        <div class="total mt-3">
                            <div class="amount">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" >Amount BUSD :</label>
                                    </div>
                                    <input id="myInput2" type="text" class="form-control" placeholder="{{$busd}}" value="{{$busd}}" aria-label="{{$busd}}"  disabled>
                                    <div class="input-group-append">
                                        <button onclick="copied2()" class="btn btn-outline-secondary" type="button">c</button>
                                    </div>
                                </div>
                            </div>
                            <div class="busd">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text wallet" ><i class="fas fa-wallet mr-2"></i> Wallet :</label>
                                    </div>
                                    <input id="myInput" type="text" class="form-control" value="0x4dc1a22a137CACABBDBeB47f2724b94770503795"
                                    aria-label="0x4dc1a22a137CACABBDBeB47f2724b94770503795" disabled>
                                    <div class="input-group-append">
                                        <button onclick="copied()" class="btn btn-outline-secondary" type="button">c</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="notice-area">
                            <p>
                            <span> Information :</span>
                                    <ol class="list">
                                        <li>Your Payment will confirmed after it is full confirmed on BSC Network</li>
                                        <li>Payment are procces on your behalf, which refers to your request in purchasing IDO. This invoice is printed by system.</li>
                                        <li>Please confirm your Payment</li>
                                    </ol>
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
