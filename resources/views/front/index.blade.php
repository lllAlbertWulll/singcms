@extends('front.master')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-9">
                    <div class="banner">
                        <div class="banner-left">
                            <div class="banner-info"><span>阅读数</span>
                                <i class="news_count node-{$result['topPicNews'][0]['news_id']}"
                                   news-id="{$result['topPicNews'][0]['news_id']}"
                                   id="node-{$result['topPicNews'][0]['news_id']}"></i>
                            </div>
                            <a target="_blank" href="/">
                                <img width="670" height="360" src="" alt="">
                            </a>
                        </div>
                        <div class="banner-right">
                            <ul>
                                <li>
                                    <a target="_blank" href="/">
                                        <img width="150" height="113" src="" alt="{$vo.title}">
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="news-list">

                            <dl>
                                <dt><a target="_blank" href="/">{$vo.title}</a></dt>
                                <dd class="news-img">
                                    <a target="_blank" href="/">
                                        <img width="200" height="120" src="" alt="">
                                    </a>
                                </dd>
                                <dd class="news-intro">
                                    {$vo.description}
                                </dd>
                                <dd class="news-info">
                                    {$vo.keywords}
                                    <span>{$vo.create_time|date="Y-m-d H:i:s",###}</span>
                                    阅读(<i news-id="{$vo.news_id}" class="news_count node-{$vo.news_id}">{$vo.count}</i>)
                                </dd>
                            </dl>

                    </div>
                </div>
                <!--网站右侧信息-->
                @include('front.right')
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="/js/jquery.js"></script>
    <script src="/js/count.js"></script>
@endsection