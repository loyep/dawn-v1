<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <title>{{ $config['name'] }}</title>
    <link rel="icon" href="{{ asset('static/img/logo.png') }}" type="image/x-icon">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script>
      window.config = @json($config);
    </script>
    <style type="text/css">
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: #40a9ff;
            z-index: 9999;
            transition: opacity .65s
        }

        .preloader-hidden-add {
            opacity: 1;
            display: block
        }

        .preloader-hidden-add-active {
            opacity: 0
        }

        .preloader-hidden {
            display: none
        }

        .cs-loader {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%
        }

        .cs-loader-inner {
            transform: translateY(-50%);
            top: 50%;
            position: absolute;
            width: 100%;
            color: #fff;
            text-align: center
        }

        .cs-loader-inner label {
            font-size: 20px;
            opacity: 0;
            display: inline-block
        }

        @keyframes lol {
            0% {
                opacity: 0;
                transform: translateX(-300px)
            }
            33% {
                opacity: 1;
                transform: translateX(0)
            }
            66% {
                opacity: 1;
                transform: translateX(0)
            }
            100% {
                opacity: 0;
                transform: translateX(300px)
            }
        }

        .cs-loader-inner label:nth-child(6) {
            animation: lol 3s infinite ease-in-out
        }

        .cs-loader-inner label:nth-child(5) {
            animation: lol 3s .1s infinite ease-in-out
        }

        .cs-loader-inner label:nth-child(4) {
            animation: lol 3s .2s infinite ease-in-out
        }

        .cs-loader-inner label:nth-child(3) {
            animation: lol 3s .3s infinite ease-in-out
        }

        .cs-loader-inner label:nth-child(2) {
            animation: lol 3s .4s infinite ease-in-out
        }

        .cs-loader-inner label:nth-child(1) {
            animation: lol 3s .5s infinite ease-in-out
        }
    </style>
</head>
<body>
<noscript><strong>We're sorry but Prism doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
<div id="app"></div>
<div class="preloader">
    <div class="cs-loader">
        <div class="cs-loader-inner">
            <label> ●</label>
            <label> ●</label>
            <label> ●</label>
            <label> ●</label>
            <label> ●</label>
            <label> ●</label>
        </div>
    </div>
</div>
<script src="{{ asset('static/js/app.js')}}" type="text/javascript"></script>
<script src="{{ asset('static/js/chunk-vendors.js')}}" type="text/javascript"></script>
</body>
</html>
