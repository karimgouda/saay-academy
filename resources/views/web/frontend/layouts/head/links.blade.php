<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/font-awesome.css">

@if(app()->getLocale() == 'ar')
<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/rtl-style.css">
@else
<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/templatemo-softy-pinko.css">
@endif

@stack('head-links')