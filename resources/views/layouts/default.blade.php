<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Novel') - 小说阅读网</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')

    <div class="container">
        @yield('content')
        @include('layouts._footer')
    </div>
</body>
<script src="/js/app.js"></script>
</html>
