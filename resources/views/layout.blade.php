<html>
<head>
    <title> Restaurant APP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

    <link href="https://fonts.googleapis.com/css?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
</head>
<body  class="bg-navbar">
<header>
    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">My Restaurant</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse d-sm-inline-flex">
                        <a class="nav-link text-dark" href="/">Home<span class="sr-only">(current)</span></a>
                        <a class="nav-link text-dark" href="/list">List</a>
                        <a class="nav-link text-dark" href="add">Add Restaurant</a>
            </div>
        </div>
        <div class="navbar-collapse nav navbar-nav navbar-right">
                        @if(Session::get('user'))
                        <a class="nav-link text-dark" href="#">Welcome {{Session::get('user')}}</a>
                        <a class="nav-link text-dark" href="logout">Logout</a>
                        @else
                        <a class="nav-link text-dark" href="login">Login</a>
                        <a class="nav-link text-dark" href="/register">Register</a>
                        @endif
        </div>
    </nav>
</header>
<div class="container">
    @yield('content')
</div>

</body>
</html>