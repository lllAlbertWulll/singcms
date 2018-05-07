@extends('behind.layout.master')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        您好!欢迎使用singcms内容管理平台
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> 平台整理指标
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">5</div>
                                    <div>今日登录用户数</div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <span class="pull-left"></span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">50</div>
                                    <div>文章数量</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin.php?c=content&a=index">
                            <div class="panel-footer">
                                <span class="pull-left">查看</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa glyphicon glyphicon-asterisk  fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">100</div>
                                    <div>文章最大阅读数</div>
                                </div>
                            </div>
                        </div>
                        <a target="_blank" href="/index.php?c=detail&id={$news.news_id}">
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </span>
                                <div class="clearfix">{$news.title}</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">2</div>
                                    <div>推荐位数</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin.php?c=position">
                            <div class="panel-footer">
                                <span class="pull-left">查看</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
<script>
    var SCOPE = {
        'edit_url' : '/admin.php?c=content&a=edit',
        'add_url' : '/blog/add',
        'set_status_url' : '/admin.php?c=content&a=setStatus',
        'sing_news_view_url' : '/index.php?c=view',
        'listorder_url' : '/admin.php?c=content&a=listorder',
        'push_url' : '/admin.php?c=content&a=push',
    }
</script>
@section('scripts')

@endsection