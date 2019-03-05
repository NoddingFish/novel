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
        <div class="col-12 p-3 text-center">
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

        <div class="col-12 pt-3">
            清晨。

            丁念系上小西装最后一粒扣，握紧拳头，提上一口气才推门进了卧室。

            走进门的那一刻，她的目光瞬时犀利起来，睨着床上躺着的男人，语带轻蔑道，"曹子骞，你是想死在床上？"

            曹子骞眯了眼，想镇定，还是被丁念的态度给惹恼了！"滚出去！"

            只有丁念知道，床上这个男人继续这样消极对抗不锻炼，可能真的会失去双腿，而她是让他成为植物人的罪魁祸首。

            好不容易醒来，若再成了永久性残疾，她的良心，这辈子都别想好过！

            总有办法让他锻炼！

            任何办法！
        </div>

        <div class="col-12 progress mt-3" style="height: 1px;">
            <div class="progress-bar bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="col-12 p-3 text-center">
            <a class="btn btn-success" href="{{ route('detail') }}" role="button">章节目录</a>
            <a role="button" class="btn btn-light" href="{{ route('show') }}">
                <img src="/open-iconic/svg/action-undo.svg" style="width: 16px;fill: white;">上一章
            </a>
            <a role="button" class="btn btn-light" href="{{ route('show') }}">
                下一章<img src="/open-iconic/svg/action-redo.svg" style="width: 16px;fill: white;">
            </a>
        </div>
    </div>
@endsection
