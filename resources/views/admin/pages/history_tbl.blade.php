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
        <div class="card-header">
            <h4>
                <form action="#">
                <div class="input-group">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search" >
                    <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    <button href="{{url('/history')}}" class="btn btn-danger ml-1">
                        <i class="fa fa-sync-alt" style="font-size: 13px !important;"></i>
                    </button>
                    </div>
                </div>
                </form>
            </h4>
        </div>
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
                        <th>Action</th>
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
                        <td> <a href="{{route('reject.trans', ['id' => $t->id])}}" type="button" class="btn btn-danger">Reject</a></td>
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
