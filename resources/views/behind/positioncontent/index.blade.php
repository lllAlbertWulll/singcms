@extends('behind.layout.master')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">

                        <li class="active">
                            <i class="fa fa-table"></i>推荐位内容管理
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div>
                <button id="button-add" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus"
                                                                         aria-hidden="true"></span>添加
                </button>
            </div>

            <div class="row">
                <form action="/admin.php" method="get">
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon">推荐位</span>
                            <select class="form-control" name="position_id">
                                <foreach name="positions" item="position">
                                    <option value="{$position.id}"
                                    <if condition="$position['id'] eq $positionId">selected="selected"</if>
                                    >{$position.name}</option>
                                </foreach>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="c" value="positioncontent"/>
                    <input type="hidden" name="a" value="index"/>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input class="form-control" name="title" type="text" value="{$title}" placeholder="文章标题"/>
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
                        <form id="singcms-listorder">
                            <table class="table table-bordered table-hover singcms-table">
                                <thead>
                                <tr>
                                    <th width="14">排序</th><!--7-->
                                    <th>id</th>
                                    <th>标题</th>
                                    <th>时间</th>
                                    <th>封面图</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td><input size=4 type='text' name='listorder[{$vo.id}]'
                                               value="{$vo.listorder}"/></td>
                                    <td>{$vo.id}</td>
                                    <td>{$vo.title}</td>
                                    <td>{$vo.create_time|date="y-m-d H:i",###}</td>
                                    <td>{$vo.thumb|isThumb}</td>
                                    <td>
                                        <span attr-status="<if condition=" $vo['status'] eq 1">0
                                        <else/>
                                        1</if>" attr-id="{$vo.id}" class="sing_cursor singcms-on-off"
                                        id="singcms-on-off" >{$vo.status|status}</span>
                                    </td>
                                    <td>
                                            <span class="sing_cursor glyphicon glyphicon-edit" aria-hidden="true"
                                                  id="singcms-edit" attr-id="{$vo.id}"></span>
                                        <a href="javascript:void(0)" id="singcms-delete" attr-id="{$vo.id}"
                                           attr-message="删除">
                                                <span class="glyphicon glyphicon-remove-circle"
                                                      aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </form>
                        <div>
                            <button id="button-listorder" type="button" class="btn btn-primary dropdown-toggle">
                                <span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></span>更新排序
                            </button>
                        </div>
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
            'edit_url' : '/admin.php?c=positioncontent&a=edit',
            'set_status_url' : '/admin.php?c=positioncontent&a=setStatus',
            'add_url' : '/admin.php?c=positioncontent&a=add',
            'listorder_url' : '/admin.php?c=positioncontent&a=listorder',
        }
    </script>
@endsection