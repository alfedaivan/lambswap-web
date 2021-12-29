@extends('admin.index')
@section('content')
{{-- @include('admin.dashboard.sidebarDashboard') --}}
<div class="main-content">
    <section class="section">
      <div class="row">
        <div class="col-12">
          <div class="card">

          <div class="card-header">
                        <h4>
                            <!-- <form action="/dashboard/category" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search" >
                                <div class="input-group-btn">
                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                <button href="{{url('/dashboard/category')}}" class="btn btn-danger ml-1">
                                    <i class="fa fa-sync-alt" style="font-size: 13px !important;"></i>
                                </button>
                                </div>
                            </div>
                            </form> -->
                        </h4>
                        <div class="card-header-form">
                            <div class="buttons mt-1">
                            <a href="{{url('/dashboard/ido/add')}}" class="btn btn-icon icon-left btn-success"><i class="fas fa-plus"></i> Add IDO</a>
                            </div>
                        </div>
                    </div>


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
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                        <tr>
                            <td>1</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>
                            <td>aaaa</td>

                            <td>
                            <a href="#" class="btn btn-icon btn-warning mr-1"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-icon btn-danger" ><i class="fas fa-trash"></i></a>
                            </td>
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
