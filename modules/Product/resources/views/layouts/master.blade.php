<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module Product</title>

    <link rel="stylesheet" href="{{ mix('css/product.css','/modules/product') }}">

    <style>
        [v-cloak] {
            display: none;
        }
    </style>

</head>
<body>

<div id="app">
    @yield('content')
</div>

<script src="{{ mix('js/product.js','/modules/product') }}"></script>
</body>
</html>
