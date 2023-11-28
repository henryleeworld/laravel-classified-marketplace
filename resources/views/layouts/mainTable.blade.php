<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

@include('partialsMainTable.head')

</head>

<body class="body-wrapper">


@include('partialsMainTable.topbar')

@yield('content')

@include('partialsMainTable.footer')

</body>
</html>



