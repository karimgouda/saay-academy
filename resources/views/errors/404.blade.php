<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{ settings('site_name_' . app()->getLocale())}} {{ __('Not Found') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . settings('site_favicon')) }}" />

    <!-- END GLOBAL MANDATORY STYLES -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Alfa+Slab+One|Josefin+Slab');

        body {
            background-color: #aeb6bf;
        }

        @keyframes darken {
            0% {
                font-size: 100px;
                color: #566573;
            }

            50% {
                font-size: 200px;
                color: #273746
            }

            100% {
                font-size: 250px;
                color: #17202a
            }
        }


        h1 {
            font-family: 'Alfa Slab One', cursive;
            margin: 0 auto;
            inline: block;
            text-align: center;
            animation-name: darken;
            animation-duration: 5s;
            animation-iteration-count: infinite;
        }

        h3 {
            font-family: 'Josefin Slab', serif;
            margin: 0 auto;
            inline: block;
            text-align: center;
            font-size: 30px;
        }
    </style>

</head>

<body class="error text-center">
    <h1>404</h1>
    <h3>{{ __('errors.The page you are looking for cannot be found') }}</h3>
</body>

</html>
