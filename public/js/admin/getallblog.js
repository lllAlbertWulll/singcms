/**
 *
 */
$(document).ready(function(){
    var url = "/api/getallblog";
    // 执行异步请求  $.post
    $.get(url,function(result){
        console.log(result);
        // if(result.code == 400) {
        //     return dialog.error(result.msg);
        // }
        // if(result.code == 200) {
        //     return dialog.success(result.msg, '/admin/index');
        // }

    },'JSON');
})