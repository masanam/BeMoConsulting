<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->

<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->

<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    @foreach ($menus as $menu)
    <meta name="description" content="{{ $menu->meta_keyword }}">
    <title>{{ $menu->meta_title }}</title>

@endforeach
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192" href="android-icon-192x192.png">

    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">

    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

    <link rel="stylesheet" href="css/flexslider.css">

    <link rel="stylesheet" href="css/jquery.fancybox.css">

    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/animate.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/main.css">



</head>

<body>

	

@yield('content')



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>

    <script src="js/jquery.flexslider-min.js"></script>

    <script src="js/jquery.fancybox.pack.js"></script>

    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/retina.min.js"></script>

    <script src="js/modernizr.js"></script>

    <script src="js/main.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/jquery-3.3.1.slim.min.j"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>