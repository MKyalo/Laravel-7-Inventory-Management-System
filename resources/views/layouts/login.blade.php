<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- START GLOBAL CSS -->
    <link href="{{asset('public/assets/global/plugins/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet"/>
    <link href="{{asset('public/assets/global/plugins/Waves/dist/waves.min.css')}}" type="text/css" rel="stylesheet"/>
    <!-- END GLOBAL CSS -->

    <!-- START PAGE PLUG-IN CSS -->
    <link rel="stylesheet" href="{{asset('public/assets/icons_fonts/font-awesome/css/font-awesome.min.css')}}"/>
    <!-- END PAGE PLUG-IN CSS -->

    <!-- START TEMPLATE GLOBAL CSS -->
    <link href="{{asset('public/assets/pages/login/css/user_login_v2.css')}}" type="text/css" rel="stylesheet"/>
    <!-- END TEMPLATE GLOBAL CSS -->

    <!-- Start favicon ico -->
    <link rel="icon" href="{{asset('public/assets/favicon/prince.ico')}}" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('public/assets/favicon/prince-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/assets/favicon/prince-180x180.png')}}">
    <!-- End favicon ico -->

</head>
<body>
    <div class="login-background">
    <div class="login-left-section">
        <img src="{{asset('public/assets/global/images/prince_logo.png')}}" alt="logo-image">
        <h2>Welcome to the Prince</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.</p>
    </div>

   @yield('content')
  
</body>
</html>