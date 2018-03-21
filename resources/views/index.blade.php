<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Test 1</title>

        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="">
                        <datatable data-ajax-url="{{ route('data.load') }}"></datatable>
                    </div>
                    <div class="sidebar">
                        <button-component></button-component>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
