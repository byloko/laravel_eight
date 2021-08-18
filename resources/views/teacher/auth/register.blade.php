<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Laravel Eight - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="{{ url('public/img/favicon.ico') }}" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{{ url('public/css/theme-default.css') }}"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                  @include('message')
                <div class="login-body">
                    <div class="login-title"><strong>Register Up</strong> to your account</div>
                    <form action="{{ url('teacher') }}" class="form-horizontal" method="post">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" value="{{ old('name') }}" required name="name" placeholder="Name"/>
                            <span style="color:red">{{  $errors->first('name') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control" value="{{ old('email') }}" required name="email" placeholder="E-mail"/>
                             <span style="color:red">{{  $errors->first('email') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" required name="password" class="form-control" placeholder="Password"/>
                               <span style="color:red">{{  $errors->first('password') }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password"/>
                              <span style="color:red">{{  $errors->first('password') }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            @php
                                $firstNumber_acc = mt_rand(0, 9);
                                $secondNumber_acc = mt_rand(0 ,9);
                                echo $firstNumber_acc . ' + ' . $secondNumber_acc .' = ?';
                            @endphp
                            <input type="hidden" name="current_captcha" value="{{ $firstNumber_acc + $secondNumber_acc }}">
                            <input type="text" name="CaptchaCode" class="form-control" placeholder="Verification code"/>
                            <span style="color:red">{{  $errors->first('CaptchaCode') }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="{{ url('login') }}" class="btn btn-link btn-block">Login In</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Register Up</button>
                        </div>
                    </div>
                   
                   
                    </form>
                </div>
                
            </div>
            
        </div>
        
    </body>
</html>






