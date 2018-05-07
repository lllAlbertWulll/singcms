@extends('front.master')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-9">

                    <div class="news-list">
                        <volist name="result['listNews']" id="vo">
                            <dl>
                                <dt>{$vo.title}</dt>
                                <dd class="news-img">
                                    <a href="/">
                                        <img width="200" height="120" src="" alt="{$vo.title}">
                                    </a>
                                </dd>
                                <dd class="news-intro">
                                    {$vo.description}
                                </dd>
                                <dd class="news-info">
                                    {$vo.keywords} <span>{$vo.create_time|date="Y-m-d H:i:s",###}</span> 阅读({$vo.count})
                                </dd>
                            </dl>
                        </volist>
                        {$result['pageres']}

                    </div>

                    <!--<button id="sing_more" type="button" class="btn btn-primary btn-lg btn-block sing_display_none">更多</button>-->
                </div>
                <!--start right -->

                @include('front.right')
                <!-- end right-->
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="/js/jquery.js"></script>
    <script src="/js/home/common.js"></script>
@endsection