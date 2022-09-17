
@extends('layouts/app')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
@endsection

@section('page-style')
        <!-- Page css files -->

@endsection

  @section('content')
    {{-- Dashboard Analytics Start --}}
    <section class="users-edit">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                        <!-- users edit Info form start -->
                        <form method="POST" action="/companies">
                            <div class="row mt-1">
                                <div class="col-12 col-sm-6">
                                    <h5 class="mb-1"><i class="feather icon-user mr-25"></i>Company Information</h5>
                                    <h5 id="companyid" hidden>{{$companyid}}</h5>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Company Name</label>
                                                    <input id="name" type="text" class="form-control birthdate-picker" required placeholder="Company Name*" data-validation-required-message="This birthdate field is required">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Phone1</label>
                                            <input id="phone1" type="text" class="form-control" placeholder="Phone1*" data-validation-required-message="This mobile number is required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Phone2</label>
                                            <input id="phone2" type="text" class="form-control" placeholder="Phone2*" data-validation-required-message="This Website field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Fax</label>
                                            <input id="fax" type="text" class="form-control" placeholder="Fax*" data-validation-required-message="This Website field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Email</label>
                                            <input id="email" type="text" class="form-control" placeholder="Email*" data-validation-required-message="This Website field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Description</label>
                                            <input id="description" type="text" class="form-control" placeholder="Description*" data-validation-required-message="This Website field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>About us</label>
                                            <input id="about_us" type="text" class="form-control" placeholder="About us*" data-validation-required-message="This Website field is required">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-sm-6">
                                    <h5 class="mb-1 mt-2 mt-sm-0"><i class="feather icon-map-pin mr-25"></i>Address</h5>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Address 1</label>
                                            <input id="address1" type="text" class="form-control" required placeholder="Address 1*" data-validation-required-message="This Address field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Address 2</label>
                                            <input id="address2" type="text" class="form-control" placeholder="Address 2*" data-validation-required-message="This Address field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Logo</label>
                                            <form runat="server">
                                              <img id="logo" src="" alt="company avatar" class="users-avatar-shadow rounded" height="90" width="90">

                                              <input type="file" id="imgInp"/>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>City</label>
                                            <input id="city" type="text" class="form-control" required placeholder="City*" data-validation-required-message="This Time Zone field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>State</label>
                                            <input id="state" type="text" class="form-control" placeholder="State*" data-validation-required-message="This Time Zone field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Zip</label>
                                            <input id="zip" type="text" class="form-control" placeholder="Zipcode*"  data-validation-required-message="This Postcode field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" id="save" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
                                    <button type="button" class="btn btn-outline-warning btn-cancel">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit Info form ends -->
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@endsection

@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pages/company-edit.js')) }}"></script>

@endsection
