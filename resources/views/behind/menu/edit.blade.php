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
                            <i class="fa fa-edit"></i> 编辑
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
                                <input type="text" name="name" class="form-control" id="inputname" placeholder="请填写菜单名"
                                       value="{$menu.name}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">菜单类型:</label>
                            <div class="col-sm-5">
                                <input type="radio" name="type" id="optionsRadiosInline1" value="1"
                                <if condition="$menu.type eq 1">checked</if>
                                > 后台菜单
                                <input type="radio" name="type" id="optionsRadiosInline2" value="0"
                                <if condition="$menu.type eq 0">checked</if>
                                > 前端栏目
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">模块名:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="m" id="inputPassword3"
                                       placeholder="模块名如admin" value="{$menu.m}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">控制器:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="c" id="inputPassword3"
                                       placeholder="控制器如index" value="{$menu.c}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">方法:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="f" id="inputPassword3"
                                       placeholder="方法名如index" value="{$menu.f}">
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
                                <input type="radio" name="status" id="optionsRadiosInline1" value="1"
                                <if condition="$menu.status eq 1">checked</if>
                                > 开启
                                <input type="radio" name="status" id="optionsRadiosInline2" value="0"
                                <if condition="$menu.status eq 0">checked</if>
                                > 关闭
                            </div>

                        </div>
                        <input type="hidden" name="menu_id" value="{$menu.menu_id}"/>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-default" id="singcms-button-submit">更新</button>
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