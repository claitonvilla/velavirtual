<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>

<body>
    <section class="container" id="menu">
        <!-- Just an image -->
        <nav class="navbar">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/0226.png') }}" height="60" alt="">
            </a>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
            </form>
        </nav>
    </section>

    @yield('content')


    <section class="container" id="footer">
        <div class="row">
            <div class="col-md-6 logo">
                <h3>MISSIONARY CHURCH</h3>
            </div>
            <div class="col-md-6 allrights">
                <h3>&#0169;2021</h3>
            </div>
        </div>
    </section>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
