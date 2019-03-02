@extends('layouts.default')
@section('title', '摸金校尉')
@section('content')
    <div class="row">
        <div class="col p-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">首页</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('classify') }}">言情小说</a></li>
                    <li class="breadcrumb-item active" aria-current="page">二婚甜蜜蜜</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row border border-secondary p-2 bg-light rounded mb-2">
        <div class="col-2">
            <img src="http://www.woyaodu.com/files/article/image/0/4/4s.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-10">
            <div class="row p-2">
                <div class="col-12"><h3>二婚甜蜜蜜</h3></div>
                <div class="col-12 pb-3">
                    <a href="#" class="badge badge-info">张三</a>
                    <a href="{{ route('classify') }}" class="badge badge-info">言情小说</a>
                    <span class="badge badge-pill badge-secondary">字数：560万</span>
                    <span class="badge badge-pill badge-secondary">阅读量：4k</span>
                    <span class="badge badge-pill badge-secondary">已完成</span>
                    <span class="badge badge-pill badge-warning">连载中</span>
                </div>
                <div class="col-12 pb-3 text-truncate">
                    丁念为了让曹子骞坚持锻炼可是操碎了心，如果变成永久性残疾的话那可就麻烦了。虽然曹子骞对丁念的态度非常差，但是丁念还是一心想着曹子骞丁念为了让曹子骞坚持锻炼可是操碎了心，如果变成永久性残疾的话那可就麻烦了。虽然曹子骞对丁念的态度非常差，但是丁念还是一心想着曹子骞丁念为了让曹子骞坚持锻炼可是操碎了心，如果变成永久性残疾的话那可就麻烦了。虽然曹子骞对丁念的态度非常差，但是丁念还是一心想着曹子骞丁念为了让曹子骞坚持锻炼可是操碎了心，如果变成永久性残疾的话那可就麻烦了。虽然曹子骞对丁念的态度非常差，但是丁念还是一心想着曹子骞丁念为了让曹子骞坚持锻炼可是操碎了心，如果变成永久性残疾的话那可就麻烦了。虽然曹子骞对丁念的态度非常差，但是丁念还是一心想着曹子骞。
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-success">加入书架</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row border border-info p-2 bg-light rounded">
        <table class="col p-0 table">
            <thead>
            <tr class="table-primary">
                <th colspan="7">
                    <img src="/open-iconic/svg/sort-descending.svg" alt="sort-descending" style="width: 16px;height: 16px;">
                    <h5 class="d-inline" style="vertical-align: middle;">《二婚甜蜜蜜》全部章节目录</h5>
                </th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < 12; $i++)
                <tr>
                    <td class="table-sm"><a href="#">第1章 跟你滚一滚</a></td>
                    <td class="table-sm"><a href="#">第2章 重口味哦</a></td>
                    <td class="table-sm"><a href="#">第3章 好想试试哦</a></td>
                    <td class="table-sm"><a href="#">第4章 怒火中烧</a></td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
@endsection
