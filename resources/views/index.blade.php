<!doctype html>
<html lang="{{ app()->getLocale() }}" class="text-gray-900 antialiased leading-tight">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <title>Flights</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;,
        height: 100 %;
            width: 100%;
            background-color: #FFF
        }

        #mute {
            position: absolute;
        }

        #mute.on {
            opacity: 0.7;
            z-index: 1000;
            background: white;
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body class="min-h-screen bg-gray-100">
<div class="container">
    <div id="mute" class="col-md-5"></div>
    <div id="app"></div>
</div>




    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>