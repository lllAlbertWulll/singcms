@extends('behind.layout.master')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">

                        <li class="active">
                            <i class="fa fa-table"></i>{$nav}
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div>
                <button url="/admin.php?c=position&a=add" id="button-add" type="button"
                        class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加
                </button>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3></h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover singcms-table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>推荐位名称</th>
                                <th>时间</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <volist name="positions" id="position">
                                <tr>
                                    <td>{$position.id}</td>
                                    <td>{$position.name}</td>
                                    <td>{$position.create_time|date="Y-m-d H:i",###}</td>
                                    <td><span attr-status="<if condition=" $position['status'] eq 1">0
                                        <else/>
                                        1</if>" attr-id="{$position.id}" class="sing_cursor singcms-on-off"
                                        id="singcms-on-off" >{$position.status|status}</span></td>
                                    <td>
                                        <span class="sing_cursor glyphicon glyphicon-edit" aria-hidden="true"
                                              id="singcms-edit" attr-id="{$position.id}"></span>
                                        <a href="javascript:void(0)" id="singcms-delete" attr-id="{$position.id}"
                                           attr-message="删除">
                                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                        </a>

                                    </td>
                                </tr>
                            </volist>

                            </tbody>
                        </table>

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
            'edit_url' : '/admin.php?c=position&a=edit',
            'set_status_url' : '/admin.php?c=position&a=setStatus',
            'add_url' : '/admin.php?c=position&a=add',
        }
        $(".singcms-table #sing-add-position-content").on('click',function(){
            var id = $(this).attr('attr-id');
            window.location.href='/admin.php?c=positioncontent&a=index&position_id='+id;
        });
    </script>
@endsection