@extends('admin.index')
@section('content')
{{-- @include('admin.dashboard.sidebarDashboard') --}}
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Add IDO</h1>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <form  >

                  <div class="card-header">
                    <h4>IDO Information</h4>
                  </div>
                  <div class="card-body">

                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="category" class="form-control" required="">
                    </div>


                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" name="category" class="form-control" required="">
                    </div>


                    <div class="form-group">
                      <label>Amount</label>
                      <input type="text" name="category" class="form-control" required="">
                    </div>


                    <div class="form-group">
                      <label>Soft Cap</label>
                      <input type="text" name="category" class="form-control" required="">
                    </div>

                    <div class="form-group">
                      <label>Hard Cap</label>
                      <input type="text" name="category" class="form-control" required="">
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <input type="text" name="category" class="form-control" required="">
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
