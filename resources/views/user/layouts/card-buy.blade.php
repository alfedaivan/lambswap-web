<!-- <div class="container">
			<div class="row justify-content-center"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<div class="col-lg-8 col-sm-12">
    <div class="ticket-page">
        <div class="ticket-cart-box">
            <h4 class="heading">Buy IDO LST /.BUSD</h4>
            <div class="desc-card mt-3">
                <h5>LambSwap Token</h5>
                <span>The first DEX Agrregator</span>
                <br>
                <span>Combines DeFi, NFT & GameFi</span>
                <br>
            </div>

            <form action="{{route('transaction')}}" method="POST">
                @csrf
                <div class="ticket-price-area">
                    <div class="single-filter d-block">
                        <label for="">Currency</label> <br>
                        <select id="select" class="input-field select">
                            <option value="BUSD">BUSD</option>
                        </select>
                        <input id='inputCrypt' type="number" class="input-field mt-2">
                    </div>
                </div>

                <div class="button-area">
                    <button type="button" class="mybtn1" id="exchange">
                        <i class="fas fa-arrow-down"></i>
                    </button>
                </div>

                <div class="current-balance">
                    <span id="crypto">BUSD</span>
                    <input type="number" id="current" disabled value='0'>
                </div>
                <div class="t-total-price">
                    <h5>Price : </h5>
                    <h5>0.000099 <span>Per LST / BUSD</span></h5>
                </div>
                <form action="{{route('transaction')}}" method="POST">
                    @csrf
                    <input class="form-control" type="hidden" id='setLST' name="amountLST">
                    <input  class="form-control" type="hidden" id="setBUSD" name="amountBUSD">
                    <div class="button-area">
                        <button class="mybtn1" type="submit">Buy Tickets</button>
                    </div>
                </form>

            </form>
        </div>

    </div>
</div>

<br>

<!-- card jika sukses buy -->
<div class="col-lg-8 col-sm-12">
    <div class="ticket-page">
        <div class="ticket-cart-box">
            <div class="title">
                <h5>Warning</h5>
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
                    <div class="value" id="valCrypt">
                        0
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
                        <li>1. Your Payment will confirmed after it is full confirmed on BSC Network</li>
                        <li> 2. Payment are procces on your behalf, which refers to your request in purchasing IDO. This
                            invoice is printed by system.</li>
                        <li>3. Please confirm your Payment</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>
