<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.user.head')
    <title>@yield('title')</title>
    @yield('style')
</head>

<body dir="rtl" class="my-body">
    @include('layouts.user.nav')

    @yield('body')

    @include('layouts.user.footer')

    @yield('end')

    @include('layouts.user.js')
</body>

</html>
