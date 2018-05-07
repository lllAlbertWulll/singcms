@extends('behind.layout.master')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i> <a href="javascript:void(0)">个人中心</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> 配置
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">

                    <form class="form-horizontal" id="singcms-form">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">用户名:</label>
                            <div class="col-sm-5">
                                {$vo.username}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">真实姓名:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="realname" id="inputPassword3"
                                       placeholder="" value="{$vo.realname}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">个人邮箱:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="email" id="inputPassword3" placeholder=""
                                       value="{$vo.email}">
                            </div>
                        </div>
                        <input type="hidden" name="admin_id" value="{$vo.admin_id}"/>


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
            'save_url' : '/admin.php?c=admin&a=save',
            'jump_url' : '',

        };

    </script>
    <!-- /#wrapper -->
    <script type="text/javascript" src="/js/admin/form.js"></script>
@endsection