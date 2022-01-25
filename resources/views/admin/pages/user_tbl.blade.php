@extends('admin.index')
@section('content')
{{-- @include('admin.dashboard.sidebarDashboard') --}}
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>User Table</h1>
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
                        <th>Wallet Adress</th>
                        <th>Username Telegram</th>
                        <th>Registered At</th>
                    </tr>
                    <?php $i = 1 ?>
                    @foreach ($user as $index => $u)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->wallet_address}}</td>
                        <td>{{$u->username_telegram}}</td>
                        <td>{{$u->created_at}}</td>
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
