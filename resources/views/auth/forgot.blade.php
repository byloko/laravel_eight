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
                    <div class="login-title"><strong>Forgot Password</strong> to your account</div>
                    <form action="{{ url('forgot') }}" class="form-horizontal" method="post">
                        {{ csrf_field() }}
                 
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control" value="{{ old('email') }}" required name="email" placeholder="E-mail"/>
                             <span style="color:red">{{  $errors->first('email') }}</span>
                        </div>
                    </div>
             
            

                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="{{ url('login') }}" class="btn btn-link btn-block">Login</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Forgot</button>
                        </div>
                    </div>
                   
                   
                    </form>
                </div>
                
            </div>
            
        </div>
        
    </body>
</html>



