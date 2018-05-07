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
                            <i class="fa fa-table"></i>{$nav}
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div>
                <button id="button-add" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加
                </button>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h3></h3>
                    <div class="table-responsive">
                        <form id="singcms-listorder">
                            <table class="table table-bordered table-hover singcms-table">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>用户名</th>
                                    <th>真实姓名</th>
                                    <th>最后登录时间</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>{$vo.admin_id}</td>
                                        <td>{$vo.username}</td>
                                        <td>{$vo.realname}</td>
                                        <td>{$vo.lastlogintime|date="Y-m-d H:i",###}</td>
                                        <td>
                                            <span attr-status="" attr-id="{$vo.admin_id}" class="sing_cursor singcms-on-off" id="singcms-on-off" >{$vo.status|status}</span>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" attr-id="{$vo.admin_id}" id="singcms-delete" attr-a="admin" attr-message="删除">
                                                <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </form>

                    </div>
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
            'add_url' : '/admin.php?c=admin&a=add',
            'edit_url' : '/admin.php?c=admin&a=edit',
            'set_status_url' : '/admin.php?c=admin&a=setStatus',
            'index_url' : '/',

        }
    </script>
@endsection