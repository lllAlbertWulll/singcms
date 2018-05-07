@extends('behind.layout.master')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i> <a href="/admin.php?c=content">文章管理</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> 文章添加
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">

                    <form class="form-horizontal" id="singcms-form">
                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">标题:</label>
                            <div class="col-sm-5">
                                <input type="text" name="title" class="form-control" id="inputname" placeholder="请填写标题">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">短标题:</label>
                            <div class="col-sm-5">
                                <input type="text" name="small_title" class="form-control" id="inputname"
                                       placeholder="请填写短标题">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">缩图:</label>
                            <div class="col-sm-5">
                                <input id="file_upload" type="file" multiple="true">
                                <img style="display: none" id="upload_org_code_img" src="" width="150" height="150">
                                <input id="file_upload_image" name="thumb" type="hidden" multiple="true" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">标题颜色:</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="title_font_color">
                                    <option value="">==请选择颜色==</option>
                                    <foreach name="titleFontColor" item="color">
                                        <option value="{$key}">{$color}</option>
                                    </foreach>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">所属栏目:</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="catid">

                                    <foreach name="webSiteMenu" item="sitenav">
                                        <option value="{$sitenav.menu_id}">{$sitenav.name}</option>
                                    </foreach>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputname" class="col-sm-2 control-label">来源:</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="copyfrom">
                                    <foreach name="copyfrom" item="cfrom">

                                        <option value="{$key}">{$cfrom}</option>
                                    </foreach>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">内容:</label>
                            <div class="col-sm-5">
                                <textarea class="input js-editor" id="editor_singcms" name="content"
                                          rows="20"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">描述:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="description" id="inputPassword3"
                                       placeholder="描述">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">关键字:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="keywords" id="inputPassword3"
                                       placeholder="请填写关键词">
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
            'save_url' : '/admin.php?c=content&a=add',
            'jump_url' : '/admin.php?c=content',
            'ajax_upload_image_url' : '/admin.php?c=image&a=ajaxuploadimage',
            'ajax_upload_swf' : '/js/party/uploadify.swf',
        };

    </script>
    <!-- /#wrapper -->
    <script src="/js/admin/image.js"></script>
    <script>
        // 6.2
        KindEditor.ready(function(K) {
            window.editor = K.create('#editor_singcms',{
                uploadJson : '/admin.php?c=image&a=kindupload',
                afterBlur : function(){this.sync();}, //
            });
        });
    </script>
@endsection