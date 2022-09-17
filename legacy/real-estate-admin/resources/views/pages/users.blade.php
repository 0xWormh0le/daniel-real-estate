
@extends('layouts/contentLayoutMaster')


@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> --}}
@endsection

@section('page-style')
        <!-- Page css files -->

@endsection

  @section('content')
    {{-- Dashboard Analytics Start --}}
    <section>
      <div class="row match-height">
          <div class="col">
            <div class="card">
              <div class="card-header d-flex justify-content-between pb-0">
                  <h4>Users</h4>
              </div>

              <div class="card-content">
                  <div class="card-body">
                    <a href='/user-edit/0' id="addUser" class="btn btn-primary mb-2"><i class="feather icon-plus"></i>&nbsp; Add User</a>
                      <button id="deleteRow" class="btn btn-primary mb-2 collapse"><i class="feather icon-delete"></i>&nbsp; Delete selected user</button>
                      <table class="table" id="table">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Email</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Type</th>
                            <th>Company</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                  </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  <!-- Dashboard Analytics end -->
  @endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
@endsection

@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pages/users.js')) }}"></script>


@endsection
