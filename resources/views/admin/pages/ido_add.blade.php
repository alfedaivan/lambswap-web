@extends('admin.index')
@section('content')
{{-- @include('admin.dashboard.sidebarDashboard') --}}
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Edit IDO</h1>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <form  method="POST" action="{{route('action.ido', $ido->id)}}">
                @csrf
                @method('PUT')
                  <div class="card-header">
                    <h4>IDO Information</h4>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" required value="{{$ido->name}}">
                    </div>


                    <div class="form-group">
                      <label>Price</label>
                      <input type="number" name="price" class="form-control" required value="{{$ido->price}}">
                    </div>


                    <div class="form-group">
                      <label>Amount</label>
                      <input type="number" name="amount" class="form-control" required value="{{$ido->amount}}">
                    </div>


                    <div class="form-group">
                      <label>Soft Cap</label>
                      <input type="number" name="soft_cap" class="form-control" required value="{{$ido->soft_cap}}">
                    </div>

                    <div class="form-group">
                      <label>Hard Cap</label>
                      <input type="text" name="hard_cap" class="form-control" required value="{{$ido->hard_cap}}">
                    </div>

                  </div>
                  <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary" style="width: 100%;" >Submit</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </section>
      </div>



        </section>
      </div>
@endsection()
