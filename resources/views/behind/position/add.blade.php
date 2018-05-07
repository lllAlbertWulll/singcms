@extends('behind.layout.master')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i> <a href="/admin.php?c=position">推荐位管理</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> 添加
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">

                    <form class="form-horizontal" id="singcms-form">
                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">推荐位名称:</label>
                            <div class="col-sm-5">
                                <input type="text" name="name" class="form-control" id="inputname"
                                       placeholder="请填写推荐位名称">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">推荐位描述:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="description" id="inputPassword3"
                                       placeholder="请填写描述">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">状态:</label>
                            <div class="col-sm-5">
                                <input type="radio" name="status" id="optionsRadiosInline1" value="1" checked> 开启
                                <input type="radio" name="status" id="optionsRadiosInline2" value="0"> 关闭
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
    <script>
        var SCOPE = {
            'save_url' : '/admin.php?c=position&a=add',
            'jump_url' : '/admin.php?c=position'
        };

    </script>
    <!-- /#wrapper -->
    <script type="text/javascript" src="/js/admin/form.js"></script>
@endsection