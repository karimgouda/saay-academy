@extends('web.frontend.layout')

@section('title', __('site.shared.Home'))

@section('content')

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo m-0">
                        <img src="{{asset('frontend/assets/images/logo.jpeg')}}" height="80" width="60" class="" />
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav mt-0" style="margin-top: 0 !important;">
                        <li><a href="#welcome" class="active">{{__('site.shared.Home')}}</a></li>
                        <li><a href="#features">{{__('site.shared.About')}}</a></li>
                        <li><a href="#testimonials">{{__('site.shared.Testimonials')}}</a></li>
                        <li><a href="#pricing-plans">{{__('site.shared.Pricing Tables')}}</a></li>
                        <li><a href="#blog">{{__('site.shared.Blog Entries')}}</a></li>
                        <li><a href="#contact-us">{{__('site.shared.Contact Us')}}</a></li>
                        <li>
                            @php
                            $lang = app()->getLocale() === 'en' ? 'ar' : 'en';
                            @endphp
                            <a href="{{ LaravelLocalization::getLocalizedURL($lang) }}">
                                <img width="37" height="37"
                                    src="{{ $lang === 'en' ? asset('frontend/assets/images/en.webp') : asset('frontend/assets/images/ar.webp')}}"
                                    alt="en.svg" />
                            </a>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Welcome Area Start ***** -->
<div class="welcome-area" id="welcome">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="">
                <div class="m-auto col-xl-6 text-center col-lg-8 col-md-12 col-sm-12">
                    <h1>{{$features->title}}</h1>
                    <p>{{$features->description}}</p>
                    <a href="#features" class="main-button-slider">{{__('pages.Discover More')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Small Start ***** -->
<section class="section home-feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    @foreach($characteristics as $characteristic)
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                             data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="{{public_storage($characteristic->icon)}}" width="60" alt=""></i>
                                </div>
                                <h5 class="features-title">{{$characteristic->title}}</h5>
                                <p>{{$characteristic->description}}</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->

<!-- ***** Features Big Item Start ***** -->
<section class="section padding-top-70 padding-bottom-0" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center"
                data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="{{public_storage($about[0]->image)}}" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                <div class="left-heading">
                    <h2 class="section-title">{{$about[0]->title}}</h2>
                </div>
                <div class="left-text">
                    <p>{{$about[0]->description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->

<!-- ***** Features Big Item Start ***** -->
<section class="section padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                <div class="left-heading">
                    <h2 class="section-title">{{$about[1]->title}}</h2>
                </div>
                <div class="left-text">
                    <p>{{$about[1]->description}}</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big"
                data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="{{public_storage($about[1]->image)}}" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->

<!-- ***** Home Parallax Start ***** -->
<section class="mini" id="work-process">
    <div class="mini-content">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="info">
                        <h1>{{__('pages.Work Process')}}</h1>
                    </div>
                </div>
            </div>

            <!-- ***** Mini Box Start ***** -->
            <div class="row">
                @foreach($workers as $worker)
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="{{public_storage($worker->image)}}" width="60" alt=""></i>
                            <strong>{{$worker->name}}</strong>
                            <span>{{$worker->description}}</span>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- ***** Mini Box End ***** -->
        </div>
    </div>
</section>
<!-- ***** Home Parallax End ***** -->

<!-- ***** Testimonials Start ***** -->
<section class="section" id="testimonials">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">{{__('pages.What do they say?')}}</h2>
                </div>
            </div>
            <div class=" col-lg-6 m-auto">
                <div class="center-text">
                    <p>{{__('site.shared.Testimonials')}}</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            @foreach($testimonials as $testimonial)
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="{{public_storage($testimonial->image)}}" width="100" height="100" alt=""></i>
                            <p></p>

                            <div class="team-info">
                                <h3 class="user-name">{{$testimonial->title}}</h3>
                                <span>{{$testimonial->video}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
            @endforeach
        </div>
    </div>
</section>
<!-- ***** Testimonials End ***** -->

<!-- ***** Pricing Plans Start ***** -->
<section class="section colored" id="pricing-plans">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">{{__('pages.Pricing Plans')}}</h2>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">

            @foreach($packages as $package)
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">{{$package->title}}</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">{{$package->price}}</span>
                                <span class="period">{{$package->descripiton}}</span>
                            </div>
                            <ul class="list">
                                @foreach($package->points as $point)
                                    <li class="active">{{$point}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="#" class="main-button">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->
            @endforeach
        </div>
    </div>
</section>
<!-- ***** Pricing Plans End ***** -->


<!-- ***** Blog Start ***** -->
<section class="section" id="blog">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">{{__('pages.Blog Entries')}}</h2>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="{{public_storage($blog->image)}}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">{{$blog->title}}</a>
                            </h3>
                            <div class="text">
                                {{$blog->description}}
                            </div>
{{--                            <a href="#" class="main-button">Read More</a>--}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- ***** Blog End ***** -->

<!-- ***** Contact Us Start ***** -->
<section class="section colored" id="contact-us">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">{{__('pages.Talk To Us')}}</h2>
                </div>
            </div>
            <div class="m-auto col-lg-6">
                <div class="center-text">
                    <p>
                       {{__('pages.Contact Us')}}
                    </p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            <!-- ***** Contact Text Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h5 class="margin-bottom-30">{{__('pages.Keep in touch')}}</h5>
                <div class="contact-text">
                    <p>
                        {{settings('address_'.app()->getLocale())}}
                    </p>
                    <p>{{settings('site_description_'.app()->getLocale())}}</p>
                </div>
            </div>
            <!-- ***** Contact Text End ***** -->

            <!-- ***** Contact Form Start ***** -->
           @livewire('contact')
            <!-- ***** Contact Form End ***** -->
        </div>
    </div>
</section>
<!-- ***** Contact Us End ***** -->
@endsection
