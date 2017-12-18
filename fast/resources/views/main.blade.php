<!DOCTYPE html>
<html lang="en">
@include('partials._head')

<body>

@include('partials._navbar') <!-- navbar -->

<!--@include('partials._footer')-->

<br>

    <div class="container">
    @yield('content')
    </div>

@include('partials._javascript')
@include('partials._footer')
</body>
</html>

