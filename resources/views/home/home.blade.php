@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-sm-8 border border-color-1 rounded d-block bg-white">
            <div class="row bg-light">
                <h4 class="col-xs-4" style="margin-top:8px;margin-left: 10px;"><i class="fa fa-diamond fa-fw"></i>本站推荐</h4>
                <div class="col-md-6 col-xs-8 ml-auto p-1">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="请输入您需要搜索的关键字" id="bdcsMain" name="searchkey">
                            <span class="input-group-btn">
                            <button class="btn btn-outline-success" type="submit">搜索</button>
                        </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row p-3">
                @for($a = 0; $a < 8; $a++)
                    @include('shared._left_novel')
                @endfor
            </div>
        </div>
        <div class="col-sm-4 pl-4">
            <ul class="row-sm-12 nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item col-sm-6 p-0">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                       aria-controls="home" aria-selected="true">本月热门小说</a>
                </li>
                <li class="nav-item col-sm-3 p-0">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile" aria-selected="false">点击榜</a>
                </li>
                <li class="nav-item col-sm-3 p-0">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                       aria-controls="contact" aria-selected="false">最新</a>
                </li>
            </ul>
            <div class="row-sm-12 tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @for($a = 0; $a < 15; $a++)
                        @include('shared._right_novel', ['key' => $a])
                    @endfor
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @for($a = 0; $a < 12; $a++)
                        @include('shared._right_novel', ['key' => $a])
                    @endfor
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    @for($a = 0; $a < 10; $a++)
                        @include('shared._right_novel', ['key' => $a])
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
