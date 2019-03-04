@extends('layouts.default')
@section('title', '摸金校尉')
@section('content')
    <div class="row">
        <div class="col p-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">首页</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('classify') }}">言情小说</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('detail') }}">二婚甜蜜蜜</a></li>
                    <li class="breadcrumb-item active" aria-current="page">第1章 跟你滚一滚</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row border border-secondary bg-read-5 p-2 rounded">
        <div class="col-12">
            <h2 class="text-center">第1章 跟你滚一滚</h2>
        </div>
        <div class="col-12 p-2 text-center">
            <a href="#" class="badge badge-info">张三</a>
            <a href="{{ route('classify') }}" class="badge badge-info">言情小说</a>
            <span class="badge badge-pill badge-secondary">字数：560万</span>
            <span class="badge badge-pill badge-secondary">阅读量：4k</span>
            <span class="badge badge-pill badge-secondary">已完成</span>
            <span class="badge badge-pill badge-warning">连载中</span>
        </div>

        <div class="col-12 progress" style="height: 1px;">
            <div class="progress-bar bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="col-12 align-content-center">
            1222222222222222222222222
        </div>
    </div>
@endsection
