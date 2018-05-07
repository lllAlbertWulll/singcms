@extends('behind.layout.master')

@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            @include('behind.basic.button')
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="inputname" class="col-sm-2 control-label">更新首页缓存:</label>
                        <div class="col-sm-5">
                            <button type="button" class="btn" id="cache-index">确定更新</button>
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
    <script type="text/javascript" src="/js/admin/form.js"></script>
    <script>
        $("#cache-index").click(function(){

            var url = 'index.php?c=index&a=build_html';
            var jump_url = '/admin.php?c=basic&a=cache';
            var postData = {};

            $.post(url, postData,function(result){
                if(result.status==1) {
                    // 成功
                    return dialog.success(result.message,jump_url);
                }else if(result.status==0) {
                    return dialog.error(result.message);
                }

            },"JSON");
        });

    </script>
@endsection