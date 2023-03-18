<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Biztrox Admin | @yield('title')</title>
    @include('admin.includes.style')

</head>
<body class="sb-nav-fixed">
    @include('admin.includes.header')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('admin.includes.menu')
        </div>
        <div id="layoutSidenav_content">
            @yield('body')
            @include('admin.includes.footer')
        </div>
    </div>
    @include('admin.includes.script')
</body>
</html>
