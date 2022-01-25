@extends('admin.index')
@section('content')
{{-- @include('admin.dashboard.sidebarDashboard') --}}
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>History Table</h1>
        </div>
        <div class="row">
            <div class="col-12">
        <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Wallet</th>
                        <th>Amount LST</th>
                        <th>Amount BUSD</th>
                        <th>IDO</th>
                    </tr>
                    <?php $i = 1 ?>
                    @foreach ($trans as $index => $t)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$t->name}}</td>
                        {{-- <td>{{number_format($d->price, 7)}}</td> --}}
                        <td>{{$t->email}}</td>
                        <td>{{$t->wallet_address}}</td>
                        <td>{{$t->amountLST}}</td>
                        <td>{{$t->amountBUSD}}</td>
                        <td>{{$t->ido}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <!-- pagination -->
        {{-- {{ $histories->links('admin.pagination') }} --}}
</div>
</div>
</div>

</section>
</div>
@endsection()
