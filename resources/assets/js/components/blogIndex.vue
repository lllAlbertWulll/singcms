<template>
<div>
    <form id="singcms-listorder">
        <table class="table table-bordered table-hover singcms-table">
            <thead>
            <tr>
                <th id="singcms-checkbox-all" width="10"><input type="checkbox"/></th>
                <th width="14">排序</th>
                <th>id</th>
                <th>标题</th>
                <th>栏目</th>
                <th>来源</th>
                <th>封面图</th>
                <th>时间</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in items">
                <td><input type="checkbox" name="pushcheck" v-model="item.news_id"></td>
                <td><input size=4 type='text' name='listorder[{item.news_id}]'
                           v-model="item.listorder"/></td>
                <td>{{item.news_id}}</td>
                <td>{{item.title}}</td>
                <td>{{item.catid}}</td>
                <td>{{item.copyfrom}}</td>
                <td>{{item.thumb}}</td>
                <td>{{item.create_time}}</td>
                <td><span attr-status="" attr-id="{item.news_id}" class="sing_cursor singcms-on-off"
                          id="singcms-on-off">{{item.status}}</span></td>
                <td>
                <span class="sing_cursor glyphicon glyphicon-edit" aria-hidden="true"
                      id="singcms-edit" attr-id="{item.news_id}"></span>
                    <a href="javascript:void(0)" id="singcms-delete" :attr-id="item.news_id"
                       attr-message="删除">
                        <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                    </a>
                    <a target="_blank" href="" class="sing_cursor glyphicon glyphicon-eye-open"
                       aria-hidden="true"></a>
                </td>
            </tr>

            </tbody>
        </table>

        <pagination :pageCount="pageCount" :initPage="initPage" @togglePage="togglePage($event)"></pagination>

        <div>
            <button id="button-listorder" type="button" class="btn btn-primary dropdown-toggle">
                <span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></span>更新排序
            </button>
        </div>
    </form>
</div>
</template>

<script>
    export default {
        name: "blogindex",
        data() {
            return {
                items: [],
                pageCount: 1,   // 总页数
                initPage: 1,    // 初始页[optional],可为null
                currentPage: 1 // 当前页数
            }
        },
        mounted() {
            var url = "/api/getallblog?page=" + this.initPage;
            let self = this;
            // 执行异步请求  $.get
            $.get(url, function (result) {
                // console.log(result);
                self.pageCount = result.last_page;
                // console.log(this.pageCount);
                self.items = result.data;
            }, 'JSON');
        },
        methods: {
            togglePage(indexPage) {
                var url = "/api/getallblog?page=" + indexPage;
                let self = this;
                // 执行异步请求  $.get
                $.get(url, function (result) {
                    // console.log(result.data);
                    self.items = result.data;
                    this.currentPage = result.current_page;
                }, 'JSON');
            }
        }
    }
</script>

<style scoped>
    /*#button-add {*/
        /*float: right;*/
        /*margin-right: 15px;*/
    /*}*/

    #select-push {
        width: 300px;
        margin: 0 10px 0 0;
    }

    .tuisong {
        margin: 10px 10px 10px 0;
    }
</style>