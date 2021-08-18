<!DOCTYPE html>
<html lang="en">
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
        <div class="error-container">
            <div class="error-code" style="font-size: 60px;">Laravel Eight</div>
            
            <div class="error-actions">                                
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ url('teacher') }}" class="btn btn-info btn-block btn-lg">Teacher Register</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ url('school') }}" class="btn btn-primary btn-block btn-lg"> School Register</a>
                    </div>
                     <div class="col-md-4">
                        <a href="{{ url('login') }}" class="btn btn-success btn-block btn-lg"> Login</a>
                    </div>
                </div>                                
            </div>
        
        
        </div>                 
    </body>
</html>










