<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module Product</title>

    <!-- Laravel Mix - CSS File -->
    <link rel="stylesheet" href="{{ mix('css/product.css','modules/Product') }}">

</head>
<body>

<div id="app">
    @yield('content')
</div>

<!-- Laravel Mix - JS File -->
<script src="{{ mix('js/product.js','modules/Product') }}"></script>
</body>
</html>
