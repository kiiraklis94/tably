<!DOCTYPE html>

<html>
<head>
    @include('templates.head')
    @include('templates.javascript')
    <title>Tably - @yield('title')</title>
</head>

<body>

<div id="wrapper">
    @include('templates.nav')
</div>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">@yield('header-title')
                @yield('header-other')
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    @yield('content')
</div>


</body>

</html>
