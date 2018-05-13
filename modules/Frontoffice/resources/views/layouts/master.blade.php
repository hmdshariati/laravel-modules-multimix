<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Frontoffice</title>

        <link rel="stylesheet" href="{{ mix('css/frontoffice.css','/modules/frontoffice') }}">

    </head>
    <body>
        @yield('content')

        <script src="{{ mix('js/frontoffice.js','/modules/frontoffice') }}"></script>
    </body>
</html>
