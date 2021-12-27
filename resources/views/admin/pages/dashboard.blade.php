@extends('admin.index')
@section('content')
{{-- @include('admin.dashboard.sidebarDashboard') --}}
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary pt-1">
                        <i class="fas fa-cube" style="font-size: 2rem;"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Users</h4>
                        </div>
                        <div class="card-body">
                            {{$user->count()}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning pt-1">
                        <i class="fas fa-shopping-cart" style="font-size: 2rem;"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Transaksi</h4>
                        </div>
                        <div class="card-body">
                            {{-- {{$histories->count()}} --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ol-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success pt-1">
                        <i class="fas fa-dollar-sign" style="font-size: 2rem;"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pendapatan</h4>
                        </div>
                        <div class="card-body">
                            {{-- Rp. {{$total}} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ $message }}
            </div>
        </div>
      @endif --}}

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
                            <button href="{{url('/dashboard/history')}}" class="btn btn-danger ml-1">
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
                    <th>Pelanggan</th>
                    <th>Alamat</th>
                    <th>Catatan</th>
                    <th>Total</th>
                    <th>Waktu Pemesanan</th>
                    <th>Aksi</th>
                  </tr>

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
