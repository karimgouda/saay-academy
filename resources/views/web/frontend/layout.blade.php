<!DOCTYPE html>
<html @if (app()->getLocale() == 'ar') lang="ar" dir="rtl" @endif>

@include('web.frontend.layouts.head')

<body>

    

    @include('web.frontend.layouts.partials._loader')

    @include('web.frontend.layouts.header')

    @yield('content')

    @include('web.frontend.layouts.footer')

    {!! settings('body_manager_script') !!}

</body>

</html>
