<!DOCTYPE html>
<html lang="en">

@include('Admin.partials.header')

<body>

    @include('Admin.partials.head')

    @include('Admin.partials.sidebar')

    @yield('content')


    @include('Admin.partials.footer')

    @include('Admin.partials.js')

</body>

</html>
