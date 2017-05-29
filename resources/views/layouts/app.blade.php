<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>eGourmet</title>

    <!-- Bootstrap -->
    <link href="/assets/mdb/css/bootstrap.min.css" rel="stylesheet">

    <!-- Materialize -->
    <link href="/assets/mdb/css/mdb.min.css" rel="stylesheet">

    <!-- Custom -->
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="/assets/mdb/js/jquery-3.1.1.min.js"></script>
</head>

<body>
<header>
    @include('layouts.partials.navbar')
</header>
<main>
    @yield('content')
</main>
@include('layouts.partials.footer')
<script>
    new WOW().init();
</script>
</body>
</html>