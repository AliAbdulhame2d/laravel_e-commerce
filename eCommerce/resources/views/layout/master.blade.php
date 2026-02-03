<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Unknown Page')</title>
</head>
<body>
    @yield('content')

    @section('sidebar')
      This Is Sidebar From Master Layout
    @show

</body>
</html>