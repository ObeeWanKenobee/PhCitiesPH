<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>A modern REST API in Laravel 5</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.css">
        <style>
            a {color: #039;background-color: transparent;text-decoration: none;}
            a:hover{color:orangered;}
            img{display: block; margin: auto;}
        </style>
    </head>
    <body>
        <a href="https://github.com/halimus/laravel-rest-api"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
        <div class="container" style="padding-bottom: 100px;">
            <h2 style="text-align:center;"><u>A modern REST API in Laravel 5 for Philippine Places</u></h2>
            <div class="row">
                <div class="col-md-6 col-sm-12" style="border-right:1px solid silver;">
                    <p>
                        The master project repository is
                        <a href="https://github.com/NinongFoundation/PhCitiesPH" target="_blank">https://github.com/NinongFoundation/PhCitiesPH</a>
                    </p>
                    <p>
                        This project is built from this repository
                        <a href="https://github.com/halimus/laravel-rest-api" target="_blank">https://github.com/halimus/laravel-rest-api</a>
                    </p>
                    <p>Click on the links to check simple <strong>GET methods</strong> whether is working.</p>

                    <h3><u>Region</u></h3>
                    <ol>
                       <li><a href="{{ url('/api/region') }}">{{ url('/api/region') }}</a></li>
                       <li><a href="{{ url('/api/region/01')}}">{{ url('/url/region/01') }}</a></li>
                       <li><a href="{{ url('/api/region/01/provinces')}}">{{ url('/url/region/01/provinces') }}</a></li>
                       <li><a href="{{ url('/api/region/01/cities')}}">{{ url('/url/region/01/cities') }}</a></li>
                       <li><a href="{{ url('/api/region/01/barangays')}}">{{ url('/url/region/01/barangays') }}</a></li>
                    </ol>

                    <h3><u>Province</u></h3>
                    <ol>
                       <li><a href="{{ url('/api/province')}}">{{ url('/api/province')}}</a></li>
                       <li><a href="{{ url('/api/province/0155')}}">{{ url('/api/province/0155')}}</a></li>
                       <li><a href="{{ url('/api/province/0155/cities')}}">{{ url('/api/province/0155/cities')}}</a></li>
                       <li><a href="{{ url('/api/province/0155/barangays')}}">{{ url('/api/province/0155/barangays')}}</a></li>
                    </ol>

                    <h3><u>City</u></h3>
                    <ol>
                        <li><a href="{{ url('/api/city') }}">{{ url('/api/city')}}</a></li>
                        <li><a href="{{ url('/api/city/012801') }}">{{ url('/api/city/012801')}}</a></li>
                        <li><a href="{{ url('/api/city/012801/barangays') }}">{{ url('/api/city/012801/barangays')}}</a></li>
                    </ol>

                    <h3><u>Barangay</u></h3>
                    <ol>
                       <li><a href="{{ url('/api/barangay')}}">{{ url('/api/barangay')}}</a></li>
                       <li><a href="{{ url('/api/barangay/012801001')}}">{{ url('/api/barangay/012801001')}}</a></li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.js"></script>

    </body>
</html>
