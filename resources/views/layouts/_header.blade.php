<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-margin-bottom">
    <div class="container">
        <div class="navbar-header">
            <ul class="nav navbar-nav justify-content-start">
                <a class="navbar-brand nav-link" href="{{ route('home') }}">Novel小说阅读网</a>
                <a class="navbar-brand nav-link active" href="{{ route('home') }}">首页</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">小说分类</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('classify') }}">言情小说</a>
                        <a class="dropdown-item" href="{{ route('classify') }}">魔幻小说</a>
                        <a class="dropdown-item" href="{{ route('classify') }}">都市小说</a>
                        <a class="dropdown-item" href="{{ route('classify') }}">科幻小说</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-order" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">小说排行</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown-order">
                        <a class="dropdown-item" href="{{ route('classify') }}">点击总榜</a>
                        <a class="dropdown-item" href="{{ route('classify') }}">点击月榜</a>
                        <a class="dropdown-item" href="{{ route('classify') }}">推荐总榜</a>
                        <a class="dropdown-item" href="{{ route('classify') }}">本站推荐</a>
                    </div>
                </li>
                <a class="navbar-item nav-link" href="{{ route('classify') }}">完本小说</a>
                <a class="navbar-item nav-link" href="{{ route('classify') }}">阅读历史</a>
            </ul>
        </div>
        <ul class="nav navbar-nav justify-content-end">
            <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
            <li class="nav-item"><a class="nav-link" href="#">免费注册</a></li>
        </ul>
    </div>
</nav>
