
@extends('layouts/contentLayoutMaster')


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
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#password" aria-controls="social" role="tab" aria-selected="false">
                                <i class="feather icon-lock mr-25"></i>
                                <span class="d-none d-sm-block">Change Password</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                            <!-- users edit media object start -->
                            <div class="media mb-2">
                                <a class="mr-2 my-25" href="#">

                                    <form runat="server">
                                      <img id="avatar" src="" alt="users avatar" class="users-avatar-shadow rounded" height="90" width="90">

                                      <label class="btn btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light" for="imgInp">Upload new photo</label>
                                      <input type="file" id="imgInp" hidden>

                                    </form>
                                </a>
                                <div class="media-body mt-50">
                                    <h5 id="userid" hidden>{{$id}}</h5>
                                    {{-- <h4 class="media-heading">Angelo Sashington</h4> --}}
                                    {{-- <div class="col-12 d-flex mt-1 px-0">
                                        <a href="#" class="btn btn-primary d-none d-sm-block mr-75"><i class="feather icon-edit-1"></i>Change</a>
                                        <a href="#" class="btn btn-outline-danger d-none d-sm-block"><i class="feather icon-trash-2"></i>Remove</a>
                                    </div> --}}
                                </div>
                            </div>
                            <!-- users edit media object ends -->
                            <!-- users edit account form start -->
                            <form method="POST" action="/users">
                              @csrf
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>First name</label>
                                                <input id="first_name" type="text" class="form-control" placeholder="First name*" required data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Last Name</label>
                                                <input id="last_name" type="text" class="form-control" placeholder="Last Name*" required data-validation-required-message="This name field is required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>E-mail</label>
                                                <input id="email" type="email" class="form-control" placeholder="Email*" required data-validation-required-message="This email field is required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Phone</label>
                                                <input id="phone" type="text" class="form-control" placeholder="Phone*" data-validation-required-message="This mobile number is required">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Company</label>
                                            <select id="company_id" class="form-control">
                                                <option value="1" selected>Green View</option>
                                                <option value="2">CNH</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>User Type</label>
                                            <select id="user_type" class="form-control">
                                                <option>Realtor</option>
                                                <option>CompanyAdmin</option>
                                                <option>PropertyManager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Organization</label>
                                                <input id="organization" type="text" class="form-control" placeholder="Organization*" data-validation-required-message="This organization is required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <div class="input-group mb-75">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                                </div>
                                                <input id="facebook" type="text" class="form-control" placeholder="Facebook*" aria-describedby="basic-addon4">
                                            </div>
                                          </div>
                                        <div class="form-group">
                                          <label>Twitter</label>
                                          <div class="input-group mb-75">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                                              </div>
                                              <input id="twitter" type="text" class="form-control" placeholder="Twitter*" aria-describedby="basic-addon3">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Linkedin</label>
                                            <div class="input-group mb-75">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text feather icon-linkedin" id="basic-addon9"></span>
                                                </div>
                                                <input id="linkedin" type="text" class="form-control" placeholder="Linkedin*" aria-describedby="basic-addon9">
                                            </div>
                                          </div>
                                        <div class="form-group">
                                          <label>Instagram</label>
                                          <div class="input-group mb-75">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                                              </div>
                                              <input id="instagram" type="text" class="form-control" placeholder="Instagram*" aria-describedby="basic-addon5">
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label>Website</label>
                                          <div class="input-group mb-75">
                                              <div class="input-group-prepend">
                                                  <span class="input-group-text feather icon-globe" id="basic-addon11"></span>
                                              </div>
                                              <input id="website" type="text" class="form-control" placeholder="Website*" aria-describedby="basic-addon11">
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                        <button id="acc_save" type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
                                        <button type="button" class="btn btn-outline-warning btn-cancel">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <!-- users edit account form ends -->
                        </div>
                        <div class="tab-pane" id="password" aria-labelledby="password-tab" role="tabpanel">
                            <!-- users edit socail form start -->
                            <form novalidate>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-new-password">New Password</label>
                                                <input id="newPwd" type="password" name="password" id="account-new-password" class="form-control" placeholder="New Password*" required data-validation-required-message="The password field is required" minlength="6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-retype-new-password">Retype New Password</label>
                                                <input type="password" name="con-password" class="form-control" required id="account-retype-new-password" data-validation-match-match="password" placeholder="New Password*" data-validation-required-message="The Confirm password field is required" minlength="6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button id="pwd_save" type="button" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save changes</button>
                                        <button class="btn btn-outline-warning btn-cancel">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <!-- users edit socail form ends -->
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pages/user-edit.js')) }}"></script>
@endsection
