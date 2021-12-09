<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.elements.head')

</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            @include('admin.elements.navbar')
        </div>
        <div class="sidebar" id="sidebar">

            @include('admin.elements.sidebar')

        </div>
        <div class="page-wrapper">
            @yield('content')
        </div>
        <div class="sidebar-overlay" data-reff=""></div>

        @include('admin.elements.script')


</body>



</html>
