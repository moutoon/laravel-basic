<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
    <title>人生逆転サロン</title>
</head>
<body>
    <header class="navbar navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}">
                Gyakuten
            </a>
        </div>
    </header>
    
    <!-- index.blade.phpの@section('content')を差し込む -->
    @yield('content')
    
</body>
</html>