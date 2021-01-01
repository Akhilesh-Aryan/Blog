<!Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=drevice-width, initial-scale=1.0">
    <title>blogs @yield('title') </title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a href="" class="navbar-brand">Blog</a>
        <form action="" method="get" class=" form-inline mx-auto">
            <input type="search" class="form-control" placeholder="search by name" size="70">
            <input type="submit" class="btn btn-dark" name="search" value=">">
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('insertpage')}}" class="nav-link">Insert</a></li>
        </ul>
    </nav>
    @section('content')
    @show


</body>

</html>