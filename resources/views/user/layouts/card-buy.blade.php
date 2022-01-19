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
                        <option value="LST">LST</option>
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
                <h5>{{number_format($onGoing->price, 6)}} <span>LST</span></h5>
            </div>
            <form action="{{route('transaction')}}" method="POST">
                @csrf
                <input class="form-control" type="hidden" id='setLST' name="amountLST">
                <input class="form-control" type="hidden" id="setBUSD" name="amountBUSD">
                <div class="button-area">
                    @if (Auth::check() && $cek != null)
                        <button class="mybtn1" type="submit">Buy Tickets</button>
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













<!-- card jika sukses buy -->
