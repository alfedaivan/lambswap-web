<!-- <div class="container">
			<div class="row justify-content-center"> -->
<div class="col-lg-8 col-sm-12">
    <div class="ticket-page">
        <div class="ticket-cart-box">
            <h4 class="heading">Buy IDO</h4>
            <div class="desc-card mt-3">
                <h5>LambSwap Token</h5>
                <span>The first DEX Agrregator</span>
                <br>
                <span>Combines DeFi, NFT & GameFi</span>
                <br>
            </div>


            <div class="ticket-price-area">
                <div class="single-filter d-block">
                    <label for="">Currency</label> <br>
                    <select name="" id="select" class="input-field select">
                        <option value="BUSD">BUSD</option>
                    </select>
                    <input type="number" class="input-field mt-2" id="inputCrypt">
                </div>
            </div>

            <div class="button-area">
                <button href="#" class="mybtn1" id="exchange">
                    <i class="fas fa-arrow-down"></i>
                </button>
            </div>

            <div class="current-balance">
                <span class="mb-2">LST</span>
                <input type="number" id="current" disabled value='0'>

            </div>
            <div class="t-total-price">
                <h5>Price : </h5>
                <h5>{{number_format($onGoing->price, 7)}} <span>Per LST / BUSD</span></h5>
            </div>
            <form action="{{route('transaction')}}" method="POST">
                @csrf
                <input class="form-control" type="hidden" id='setLST' name="amountLST">
                <input class="form-control" type="hidden" id="setBUSD" name="amountBUSD">
                <div class="button-area">
                    @if (Auth::check() && $cek != null)
                        <button class="mybtn1" type="submit" id="btn_buy" disabled="disabled">Buy Tickets</button>
                    @elseif($cek != null)
                        <a href="#" data-toggle="modal" data-target="#signin">You Are Not Loged In, Please Login First!</a>
                        {{-- <button class="mybtn1" type="submit" disabled>Buy Tickets</button> --}}
                    @else
                        <button class="mybtn1" type="submit" style="cursor: not-allowed;" disabled>Coming Soon!</button>
                    @endif
                </div>
            </form>
        </div>

    </div>
</div>


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
                                    <input id="myInput2" type="text" class="form-control" placeholder="200000" value="200000" aria-label="200000"  disabled>
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

                            </div>
                        </div>


					</div>
                </div>
			</div>
        </div>
    </div>
</secttion>















<!-- card jika sukses buy -->
