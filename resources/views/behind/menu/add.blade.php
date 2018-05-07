@extends('behind.layout.master')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i> <a href="/admin.php?c=menu">菜单管理</a>
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
                            <label for="inputname" class="col-sm-2 control-label">菜单名:</label>
                            <div class="col-sm-5">
                                <input type="text" name="name" class="form-control" id="inputname" placeholder="请填写菜单名">
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">父类菜单ID:</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="parentid">
                                    <option value="0">一级菜单</option>
                                    <volist name="menus" id="parent">
                                        <option value="{$parent.menu_id}">{$parent.name}</option>
                                    </volist>
                                </select>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">菜单类型:</label>
                            <div class="col-sm-5">
                                <input type="radio" name="type" id="optionsRadiosInline1" value="1" checked> 后台菜单
                                <input type="radio" name="type" id="optionsRadiosInline2" value="0"> 前端栏目
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">模块名:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="m" id="inputPassword3"
                                       placeholder="模块名如admin">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">控制器:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="c" id="inputPassword3"
                                       placeholder="控制器如index">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">方法:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="f" id="inputPassword3"
                                       placeholder="方法名如index">
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">是否为前台菜单:</label>
                            <div class="col-sm-5">
                                <input type="radio" name="type" id="optionsRadiosInline1" value="0" checked> 否
                                <input type="radio" name="type" id="optionsRadiosInline2" value="1"> 是
                            </div>

                        </div>-->

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
            'save_url' : '/admin.php?c=menu&a=add',
            'jump_url' : '/admin.php?c=menu',
        }
    </script>
@endsection