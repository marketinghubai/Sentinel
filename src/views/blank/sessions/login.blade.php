@extends('app')

@section('content')

    <div class="login clearfix">
        <div class="left">
            <div class="login-box-wrap">
                <div class="login-box">
                    <div class="logo text-center general">
                        <span>mail4you</span>
                    </div>
                    <div class="inner">
                        <form method="POST" action="{{ route('sentinel.session.store') }}" accept-charset="UTF-8">
                            <label for="login_user">{{ trans('labels.user_name') }}</label>
                            <div class="input-wrapper">
                                <input type="text" name="email" id="login_user" value="{{ Input::old('email') }}">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <label for="login_pass">{{ trans('labels.password') }}</label>
                            <div class="input-wrapper">
                                <input type="password" name="password" value="" id="login_pass">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </div>
                            <input class="pull-right" type="submit" value="{{ trans('labels.login') }}">

                            <div class="clearfix remember">
                                <div class="checkbox checkbox-success pull-left">
                                    <input type="checkbox" name="rememberMe" value="rememberMe" id="login_checkbox">
                                    <label for="login_checkbox">{{ trans('labels.remember_me') }}</label>
                                </div>
                                <p class="forgot-pw general fs-12 pull-right">
                                    <a href="{{ route('sentinel.forgot.form') }}" class="forgot">{{ trans('labels.forgot_password') }}</a>
                                </p>
                                <input name="_token" value="{{ csrf_token() }}" type="hidden">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="login-footer fs-12 text-center">
                <span>Copyright © 2015-2016 – mail4you</span>
            </div>
        </div>
        <div class="right">
            <div class="right-inner">
                <div class="content-right white">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x general"></i>
                  <i class="fa fa-thumbs-o-up fa-stack-1x fa-inverse"></i>
                </span>
                    <span class="icon-text fs-15"><strong>{{ trans('labels.innovation_in_marketing') }}</strong></span>
                    <h1>{{ trans('labels.smart_items') }}</h1>
                    <p>{{ trans('labels.download_case_study') }}</p>
                    <a href="#" class="next-button">{{ trans('labels.i_download') }}</a>
                </div>
                <div class="bg-wrapper">
                    <img src="{{ asset('images/login_back.jpg')}}" alt="Background">
                </div>
            </div>
        </div>
    </div>


    <!--<div id="index-wrapper-1" class="index-wrapper">
        <div class="index-wrapper-inner container">
            <div class="col-md-6 wrapper-left">
                <div class="wrapper-bg"></div>
                <div class="wrapper-blur wrapper-blur-top">
                    <form method="POST" action="{{ route('sentinel.session.store') }}" accept-charset="UTF-8">
                        <label for="login_user">{{ trans('labels.user_name') }}</label>
                        <div>
                            <input type="text" name="email" id="login_user" value="{{ Input::old('email') }}">
                            <i class="fa fa-user"></i>
                            <i class="fa fa-asterisk"></i>
                        </div>
                        
                        <label for="login_pass">{{ trans('labels.password') }}</label>
                        <div>
                            <input type="password" name="password" value="" id="login_pass">
                            <i class="fa fa-lock"></i>
                            <i class="fa fa-asterisk"></i>
                        </div>
                        <div class="clearfix remember">
                            <div class="pull-left checkbox checkbox-success">
                                <input type="checkbox" name="rememberMe" value="rememberMe" id="login_checkbox">
                                <label for="login_checkbox">{{ trans('labels.remember_me') }}</label>
                            </div>
                            <input name="_token" value="{{ csrf_token() }}" type="hidden">
                            <input class="pull-right" type="submit" value="{{ trans('labels.login') }}">
                        </div>
                        <p class="forgot-pw"><a href="{{ route('sentinel.forgot.form') }}">{{ trans('labels.forgot_password') }}</a>
                        <br>
                        <a href="#">{{ trans('labels.contact_prixie') }}</a></p>
                    </form>
                </div>
            </div>
            <div class="col-md-6 wrapper-right-top hidden-sm hidden-xs"></div>
            <div class="col-md-6 wrapper-right hidden-sm hidden-xs">
                <div class="wrapper-bg"></div>
                <div class="wrapper-blur">
                    <h1 class="pull-left">Lorem - <br>lorem ipsum dolorem</h1>
                    <i class="fa fa-play-circle pull-right fa-5x"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="container index-wrapper-mobile visible-sm visible-xs">
        <div class="row">
            <div class="col-xs-12">
                <div class="wrapper-right-mobile">
                    <div class="col-xs-8">
                        <h1 class="nomargin">Lorem - <br>lorem ipsum dolorem</h1>
                    </div>
                    <div class="col-xs-4 text-center">
                        <i class="fa fa-play-circle fa-5x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="index-wrapper index-wrapper-mobile2">
        <div class="container visible-sm visible-xs text-left">
            <div class="row">
                <div class="col-sm-6 wrapper1 white">
                    <div>
                        <i class="fa fa-play fa-2x"></i>
                        <p>Nulla vitae libero pharetra augue. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="col-sm-6 wrapper2">
                    <div>
                        <div class="wrapper-top">
                            <h2><a href="#">B2B <i class="fa fa-angle-right pull-right"></i></a></h2>
                        </div>
                        <div class="wrapper-bottom">
                            <p>Nulla vitae elit libero, a pharetra augue</p>
                            <p>Lorem ipsum ></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 wrapper3">
                    <div>
                        <h2>Nulla vitae elit libero lorem ipsum</h2>
                        <p>Lorem ipsum ></p>
                    </div>
                </div>
                <div class="col-sm-6 wrapper4 white">
                    <div>
                        <h2>Lorem ipsum</h2>
                        <p>Nulla vitae elit libero, a pharetra augue.</p>
                        <ul>
                            <li>Lorem</li>
                            <li>Ipsum</li>
                            <li>Dolor</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="index-wrapper-8" class="index-wrapper pdf">
        <div class="index-wrapper-inner container">
            <div class="row">
                <div class="col-sm-12 left-wrapper">
                    <div class="col-sm-6 nopadding">
                        <div class="col-xs-12">
                            <h3>Porta Commodo Egestas</h3>
                            <p>Vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                            <div class="text-wrapper">
                                <strong><p class="green">Lorem</p><p class="green">Ipsum</p><p class="green">Dolor</p></strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 nopadding">
                        <div class="col-sm-12">
                            <h3>Porta Commodo Egestas</h3>
                            <p>Vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus. Nullam quis risus eget urna mollis ornare vel eu leo.</p>

                            <div class="col-lg-7 col-md-9 col-sm-11 col-xs-12 pdf-wrapper nopadding pull-right">
                                <div class="col-xs-12">
                                    <div class="col-xs-12 nopadding">
                                        <a href="#" class="download-pdf"></a>
                                        <p>
                                            Fringilla Cras<br>
                                            <span>Pharetra - Sem Parturient Vulputate</span><br>
                                            <span class="pdf-size">PDF - 123KB</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->


@endsection
