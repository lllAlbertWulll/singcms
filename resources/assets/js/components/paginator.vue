<template>
    <div class="pagination">
        <ul>
            <li :class="{disabled: curPage == 1}" @click="prevPage" v-if="pageCount > 1">&laquo;</li>
            <li :class="{disabled: curPage == pageCount}" @click="nextPage" v-if="pageCount > 1">&raquo;</li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['pageCount'],
        data() {
            return {
                curPage: 1,
            };
        },
        methods: {
            page(indexPage) {
                this.$emit('togglePage', indexPage);
                this.curPage = indexPage;
            },
            prevPage() {
                if (this.curPage != 1) {
                    this.page(this.curPage - 1);
                }
            },
            nextPage() {
                if (this.curPage != this.pageCount) {
                    this.page(this.curPage + 1);
                }
            }
        }
    };
</script>

<style lang="scss" rel="stylesheet/scss" scoped>

    .pagination {
        width: 100%;
        text-align: center;
        ul {
            margin: 0;
            padding: 0;
            li {
                width: 50px;
                cursor: pointer;
                display: inline-block;
                padding: 5px 9px;
                border: 2px solid #e1e1eb;
                border-radius: 30px;
                margin-right: 5px;
                &.active {
                    background: #4078c0;
                    color: #fff;
                }
                &.ellipsis {
                    border: none;
                }
                &.disabled {
                    color: #dcdcdc;
                }
            }
        }
    }
</style>