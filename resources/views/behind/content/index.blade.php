@extends('behind.layout.master')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i> <a href="/blog/index">文章管理</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-table"></i>文章列表
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <button id="button-add" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus"
                                                                         aria-hidden="true"></span>添加
                </button>
                <form action="/admin.php" method="get">
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon">栏目</span>
                            <select class="form-control" name="catid">
                                <option value=''>全部分类</option>
                                <option value="{$sitenav.menu_id}">{$sitenav.name}</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="c" value="content"/>
                    <input type="hidden" name="a" value="index"/>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input class="form-control" name="title" type="text" value="" placeholder="文章标题"/>
                            <span class="input-group-btn">
                  <button id="sub_data" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h3></h3>
                    <div class="table-responsive">

                        <blogindex></blogindex>

                        <!-- /.container-fluid -->
                        <div class="input-group tuisong">
                            <select class="form-control" name="position_id" id="select-push">
                                <option value="0">请选择推荐位进行推送</option>

                                <option value="{$position.id}">选项</option>

                            </select>
                            <button id="singcms-push" type="button" class="btn btn-primary">推送</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- /#page-wrapper -->
<!-- Morris Charts JavaScript -->

@section('scripts')
    <script>
        var SCOPE = {
            'edit_url': '/admin.php?c=content&a=edit',
            'add_url': '/blog/add',
            'set_status_url': '/admin.php?c=content&a=setStatus',
            'sing_news_view_url': '/index.php?c=view',
            'listorder_url': '/admin.php?c=content&a=listorder',
            'push_url': '/admin.php?c=content&a=push',
        }
    </script>
    {{--<script src="/js/admin/getallblog.js"></script>--}}
@endsection