@extends('layouts.app')
@section('title', 'Account Settings')

@section('section')

@include('layouts.crumbs')

  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-3 mb-3">
        <ul class="nav nav-tabs flex-lg-column" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Your Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab" aria-controls="notifications" aria-selected="false">Email Notifications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="billing-tab" data-toggle="tab" href="#billing" role="tab" aria-controls="billing" aria-selected="false">Billing Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="integrations-tab" data-toggle="tab" href="#integrations" role="tab" aria-controls="integrations" aria-selected="false">Integrations</a>
          </li>
        </ul>
      </div>
      <div class="col-xl-8 col-lg-9">
        <div class="card">
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane fade show active" role="tabpanel" id="profile">
                <div class="media mb-4">
                  <img alt="Image" src="assets\img\avatar-male-4.jpg" class="avatar avatar-lg">
                  <div class="media-body ml-3">
                    <div class="custom-file custom-file-naked d-block mb-1">
                      <input type="file" class="custom-file-input d-none" id="avatar-file">
                      <label class="custom-file-label position-relative" for="avatar-file">
                        <span class="btn btn-primary">
                          Upload avatar
                        </span>
                      </label>
                    </div>
                    <small>For best results </small>
                  </div>
                </div>
                <!--end of avatar-->


                {{ Form::open(array('url' => Request::url() ,'role'=>'form',  'files' => true)) }}

                @csrf

                  <div class="form-group row align-items-center">
                    <label class="col-3">Your Name</label>
                    <div class="col">
                        {!!
                        Form::text('name',@old('name',$data->name),array('class' => 'form-control','id'=>'name','placeholder'=>__('Your Name')))
                        !!}
                    </div>
                  </div>
                  <div class="form-group row align-items-center">
                    <label class="col-3">Email</label>
                    <div class="col">
                        {!!
                            Form::text('email',@old('email',$data->email),array('class' => 'form-control','id'=>'email','placeholder'=>__('Email Address')))
                        !!}
                    </div>
                  </div>
                  <div class="form-group row align-items-center">
                    <label class="col-3">Job Title</label>
                    <div class="col">
                        <select class="form-control" id="job" name="job">
                            <option value="" selected>{{ Auth::user()->job }}</option>
                            <option>UI/UX designer</option>
                            <option>Frontend Developer</option>
                            <option>Backend Developer</option>
                            <option>Cloud Engineer</option>
                            <option>Smart contract Developer</option>
                            <option>Blockchain developer</option>
                            <option>System Administrator</option>
                            <option>Database Engineer</option>
                            <option>iOS developer</option>
                            <option>Android Developer</option>
                            <option>Product Manager</option>
                            <option>QA Engineer</option>
                            <option>CyberSecurity Analyst</option>
                            <option>Data Scientist</option>
                            <option>AI developer</option>
                            <option>AI researcher</option>
                          </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-3">Bio</label>
                    <div class="col">
                        {!!
                            Form::textarea('bio', @old('bio',$data->bio),array('class' => 'form-control','id'=>'bio', 'rows' => '4','placeholder'=>__('Tell us a little about yourself')))
                        !!}
                      <small>This will be displayed on your public profile</small>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end">
                    {!! Form::submit('Save', array('class'=>'btn btn-primary')) !!}
                  </div>

                {{ Form::close() }}
              </div>
              <div class="tab-pane fade" role="tabpanel" id="password">

                <form method="POST" action="{{ route('settings') }}">
                    @csrf

                  <div class="form-group row align-items-center">
                    <label class="col-3">Current Password</label>
                    <div class="col">
                      <input type="password" placeholder="Enter your current password" id="password" name="password" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row align-items-center">
                    <label class="col-3">New Password</label>
                    <div class="col">
                      <input type="password" placeholder="Enter a new password" id="new_password" name="password-new" class="form-control">
                      <small>Password must be at least 8 characters long</small>
                    </div>
                  </div>
                  <div class="form-group row align-items-center">
                    <label class="col-3">Confirm Password</label>
                    <div class="col">
                      <input type="password" placeholder="Confirm your new password" id="new_confirm_password" name="password-new-confirm" class="form-control">
                    </div>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" role="tabpanel" id="notifications">
                <form>
                  <h6>Activity Notifications</h6>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox custom-checkbox-switch">
                      <input type="checkbox" class="custom-control-input" id="notify-1" checked="">
                      <label class="custom-control-label" for="notify-1">Someone assigns me to a task</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox custom-checkbox-switch">
                      <input type="checkbox" class="custom-control-input" id="notify-2" checked="">
                      <label class="custom-control-label" for="notify-2">Someone mentions me in a conversation</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox custom-checkbox-switch">
                      <input type="checkbox" class="custom-control-input" id="notify-3" checked="">
                      <label class="custom-control-label" for="notify-3">Someone adds me to a project</label>
                    </div>
                  </div>
                  <div class="form-group mb-md-4">
                    <div class="custom-control custom-checkbox custom-checkbox-switch">
                      <input type="checkbox" class="custom-control-input" id="notify-4">
                      <label class="custom-control-label" for="notify-4">Activity on a project I am a member of</label>
                    </div>
                  </div>
                  <h6>Service Notifications</h6>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox custom-checkbox-switch">
                      <input type="checkbox" class="custom-control-input" id="notify-5">
                      <label class="custom-control-label" for="notify-5">Monthly newsletter</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox custom-checkbox-switch">
                      <input type="checkbox" class="custom-control-input" id="notify-6" checked="">
                      <label class="custom-control-label" for="notify-6">Major feature enhancements</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox custom-checkbox-switch">
                      <input type="checkbox" class="custom-control-input" id="notify-7">
                      <label class="custom-control-label" for="notify-7">Minor updates and bug fixes</label>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save preferences</button>
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" role="tabpanel" id="billing">
                <form>
                  <h6>Plan Details</h6>
                  <div class="card text-center">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-4">
                            <h6>Free</h6>
                            <h5 class="display-4 d-block mb-2 font-weight-normal">$0</h5>
                            <span class="text-muted text-small">Per User / Per Month</span>
                          </div>
                          <ul class="list-unstyled">
                            <li>
                              Unlimited projects
                            </li>
                            <li>
                              1 team
                            </li>
                            <li>
                              4 team members
                            </li>
                          </ul>
                          <div class="custom-control custom-radio d-inline-block">
                            <input type="radio" id="plan-radio-1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="plan-radio-1"></label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-4">
                            <h6>Pro</h6>
                            <h5 class="display-4 d-block mb-2 font-weight-normal">$10</h5>
                            <span class="text-muted text-small">Per User / Per Month</span>
                          </div>
                          <ul class="list-unstyled">
                            <li>
                              Unlimited projects
                            </li>
                            <li>
                              Unlmited teams
                            </li>
                            <li>
                              Unlimited team members
                            </li>
                          </ul>
                          <div class="custom-control custom-radio d-inline-block">
                            <input type="radio" id="plan-radio-2" name="customRadio" class="custom-control-input" checked="">
                            <label class="custom-control-label" for="plan-radio-2"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form class="mt-4">
                  <h6>Payment Method</h6>

                  <div class="card">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <div class="custom-control custom-radio d-inline-block">
                            <input type="radio" id="method-radio-1" name="payment-method" class="custom-control-input" checked="">
                            <label class="custom-control-label" for="method-radio-1"></label>
                          </div>
                        </div>
                        <div class="col-auto">
                          <img alt="Image" src="assets\img\logo-payment-visa.svg" class="avatar rounded-0">
                        </div>
                        <div class="col d-flex align-items-center">
                          <span>•••• •••• •••• 8372</span>
                          <small class="ml-2">Exp: 06/21</small>
                        </div>
                        <div class="col-auto">
                          <button class="btn btn-sm btn-danger">
                            Remove Card
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <div class="custom-control custom-radio d-inline-block">
                            <input type="radio" id="method-radio-2" name="payment-method" class="custom-control-input">
                            <label class="custom-control-label" for="method-radio-2"></label>
                          </div>
                        </div>
                        <div class="col-auto">
                          <img alt="Image" src="assets\img\logo-payment-amex.svg" class="avatar rounded-0">
                        </div>
                        <div class="col d-flex align-items-center">
                          <span>•••• •••• •••• 9918</span>
                          <small class="ml-2">Exp: 02/20</small>
                        </div>
                        <div class="col-auto">
                          <button class="btn btn-sm btn-danger">
                            Remove Card
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <div class="custom-control custom-radio d-inline-block">
                            <input type="radio" id="method-radio-3" name="payment-method" class="custom-control-input">
                            <label class="custom-control-label" for="method-radio-3"></label>
                          </div>
                        </div>
                        <div class="col-auto">
                          <img alt="Image" src="assets\img\logo-payment-paypal.svg" class="avatar rounded-0">
                        </div>
                        <div class="col d-flex align-items-center">
                          <span>david.w@pipeline.io</span>

                        </div>
                        <div class="col-auto">
                          <button class="btn btn-sm btn-primary">
                            Manage
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
              <div class="tab-pane fade" role="tabpanel" id="integrations">

                <div class="card">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="media align-items-center">
                          <img alt="Image" src="assets\img\logo-integration-slack.svg">
                          <div class="media-body ml-2">
                            <span class="h6 mb-0 d-block">Slack</span>
                            <span class="text-small text-muted">Permissions: Read, Write, Comment</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-danger">
                          Revoke
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="media align-items-center">
                          <img alt="Image" src="assets\img\logo-integration-dropbox.svg">
                          <div class="media-body ml-2">
                            <span class="h6 mb-0 d-block">Dropbox</span>
                            <span class="text-small text-muted">Permissions: Read, Write, Upload</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-danger">
                          Revoke
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="media align-items-center">
                          <img alt="Image" src="assets\img\logo-integration-drive.svg">
                          <div class="media-body ml-2">
                            <span class="h6 mb-0 d-block">Google Drive</span>
                            <span class="text-small text-muted">Permissions: Read, Write</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-danger">
                          Revoke
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <div class="media align-items-center">
                          <img alt="Image" src="assets\img\logo-integration-trello.svg">
                          <div class="media-body ml-2">
                            <span class="h6 mb-0 d-block">Trello</span>
                            <span class="text-small text-muted">Permissions: Read, Write</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <button class="btn btn-sm btn-danger">
                          Revoke
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
