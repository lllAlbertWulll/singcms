@extends('behind.layout.master')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i> <a href="/admin.php?c=admin">用户管理</a>
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
                            <label for="inputname" class="col-sm-2 control-label">用户名:</label>
                            <div class="col-sm-5">
                                <input type="text" name="username" class="form-control" id="inputname"
                                       placeholder="请填写用户名">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">密码:</label>
                            <div class="col-sm-5">
                                <input type="text" name="password" class="form-control" id="inputname"
                                       placeholder="请填写密码"/>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">真实姓名:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="realname" id="inputPassword3"
                                       placeholder="请填写真实姓名">
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
    </div>
@endsection
<!-- /#page-wrapper -->
<!-- Morris Charts JavaScript -->

@section('scripts')
    <script>

        var SCOPE = {
            'save_url' : '/admin.php?c=admin&a=add',
            'jump_url' : '/admin.php?c=admin',
        }
    </script>
@endsection