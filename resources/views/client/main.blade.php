<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.elements.head')
</head>

<body>
    <div class="page-wrapper">

        <header class="header header-intro-clearance header-4">
            @include('client.elements.navbar')
        </header>

        <main class="main">
            @yield('content')
        </main>

        <footer class="footer">
            @include('client.elements.footer')
        </footer>

    </div>
    @include('client.elements.modal')
    @include('client.elements.script')
</body>

</html>
