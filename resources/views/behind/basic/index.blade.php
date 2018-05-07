@extends('behind.layout.master')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <include file="Basic/button"/>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">

                    <form class="form-horizontal" id="singcms-form">
                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">站点标题:</label>
                            <div class="col-sm-5">
                                <input type="text" name="title" value="{$vo.title}" class="form-control" id="inputname"
                                       placeholder="请填写站点标题">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">站点关键词:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" value="{$vo.keywords}" name="keywords"
                                       id="inputPassword3" placeholder="请填写站点关键词">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">站点描述:</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" rows="3" name="description">{$vo.description}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">是否自动备份数据库:</label>
                            <div class="col-sm-5">
                                <input type="radio" name="dumpmysql" id="optionsRadiosInline1" value="1" checked> 是
                                <input type="radio" name="dumpmysql" id="optionsRadiosInline2" value="0" checked> 否
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">是否自动生成首页缓存:</label>
                            <div class="col-sm-5">
                                <input type="radio" name="cacheindex" id="optionsRadiosInline1" value="1" checked> 是
                                <input type="radio" name="cacheindex" id="optionsRadiosInline2" value="0" checked> 否
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-default" id="singcms-button-submit">提交</button>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
<!-- /#page-wrapper -->
<!-- Morris Charts JavaScript -->

@section('scripts')
    <script type="text/javascript" src="/js/admin/form.js"></script>
    <script>
        var SCOPE = {
            'save_url' : '/admin.php?c=basic&a=add',
            'jump_url' : '/admin.php?c=basic',
        };

    </script>
@endsection