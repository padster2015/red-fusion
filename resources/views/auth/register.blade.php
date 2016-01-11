@extends('layouts.app-nocharts')


@section('content')
<div class="container">



<div class="steps" id="steps">  <span class="step_nb"></span>

        <p class="form_title">Please Fill The field Bellow</p>
        <form action="#" method="post" autocomplete="off">
            <ul>
                <li class="current_step">
                    <input type="text" class="text_field" id="name" name="name" placeholder="Enter You Name" />
                </li>
                <li>
                    <input type="text" class="text_field" id="email" name="email" placeholder="Enter You Email" />
                </li>
                <li>
                    <input type="text" class="text_field" id="age" name="age" placeholder="Enter You Age" />
                </li>
                <li>
                    <input type="text" class="text_field" id="country" name="country" placeholder="Enter You Country" />
                </li>
            </ul>
        </form> <span class="note">Note : you can hit "Enter" to move to next step</span>

    </div>










    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                <div class="registration-box">



    <!-- End Form Steps -->

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Business_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Business Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Business_name" value="{{ old('Business_name') }}">

                                @if ($errors->has('Business_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Business_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr>

                        <!-- api details -->

                                                <div class="form-group{{ $errors->has('Facebook_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Facebook api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Facebook_api" value="{{ old('Facebook_api') }}">

                                <button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with Facebook</button>
                              
                                @if ($errors->has('Facebook_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Facebook_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                                                                        <div class="form-group{{ $errors->has('Twitter_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Twitter api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Twitter_api" value="{{ old('Twitter_api') }}">
<button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with Twitter</button>
                              
                                @if ($errors->has('Twitter_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Twitter_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Googleplus_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Googleplus api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Googleplus_api" value="{{ old('Googleplus_api') }}">
<button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with Google+</button>
                              
                                @if ($errors->has('Googleplus_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Googleplus_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('linkedin_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">linkedin api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="linkedin_api" value="{{ old('linkedin_api') }}">
<button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with LinkedIn</button>
                              
                                @if ($errors->has('linkedin_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('linkedin_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                                <div class="form-group{{ $errors->has('SnapChat_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">SnapChat api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="SnapChat_api" value="{{ old('SnapChat_api') }}">
<button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with SnapChat</button>
                              
                                @if ($errors->has('SnapChat_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('SnapChat_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group{{ $errors->has('Pinterest_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Pinterest api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Pinterest_api" value="{{ old('Pinterest_api') }}">
<button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with Pinterest</button>
                              
                                @if ($errors->has('Pinterest_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Pinterest_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group{{ $errors->has('Email_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Email api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Email_api" value="{{ old('Email_api') }}">
<button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with Email</button>
                              
                                @if ($errors->has('Email_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Email_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('Affiliate_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Email api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Affiliate_api" value="{{ old('Affiliate_api') }}">
<button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with Affiliate</button>
                              
                                @if ($errors->has('Affiliate_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Affiliate_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('PaidSearch_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">PaidSearch api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="PaidSearch_api" value="{{ old('PaidSearch_api') }}">
<button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with PaidSearch</button>
                              
                                @if ($errors->has('PaidSearch_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PaidSearch_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('Youtube_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Youtube api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Youtube_api" value="{{ old('Youtube_api') }}">
<button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with Youtube</button>
                              
                                @if ($errors->has('Youtube_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Youtube_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('Deals_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Deals api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Deals_api" value="{{ old('Deals_api') }}">
<button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with Deal Provider</button>
                              
                                @if ($errors->has('Deals_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Deals_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                                                 <div class="form-group{{ $errors->has('GA_api') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">GA api</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="GA_api" value="{{ old('GA_api') }}">
<button class="btn-sta-med" data-tracking-origin="web.dashboard.add_social_network.tab_content"
                                 data-tracking-action="connect_with_facebook_clicked"><span class="icon-sn-16 facebook"></span>&nbsp;&nbsp;Connect with Google Analytics</button>
                              
                                @if ($errors->has('GA_api'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('GA_api') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>








                        <!-- end of api details -->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
