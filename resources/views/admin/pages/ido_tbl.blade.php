@extends('admin.index')
@section('content')
{{-- @include('admin.dashboard.sidebarDashboard') --}}
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>IDO Table</h1>
        </div>
        <div class="row">
            <div class="col-12">
        <div class="card">

            <!-- <div class="card-header">
                <div class="card-header-form">
                    <div class="buttons mt-1">
                    <a href="{{url('/dashboard/ido/add')}}" class="btn btn-icon icon-left btn-success"><i
                        class="fas fa-plus"></i> Add IDO</a>
                </div>
            </div> -->


        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Soft Cap</th>
                        <th>Hard Cap</th>
                        <th>Open Date</th>
                        <th>Close Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1 ?>
                    @foreach ($ido as $index => $d)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{number_format($d->price, 7)}}</td>
                        <td>{{$d->amount}}</td>
                        <td>{{$d->soft_cap}}</td>
                        <td>{{$d->hard_cap}}</td>
                        <td>{{$d->openAt}}</td>
                        <td>{{$d->closeAt}}</td>
                        <td>{{$d->status}}</td>
                        <td><a href="{{route('edit.ido', $d->id)}}" class="btn btn-icon btn-warning mr-1"><i
                                    class="fas fa-edit"></i></a></td>
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
