<template>
    <el-container class="main-footer">
        <div class="foot-content">
            <div class="foot-content-main">
                <span>Copyright © 2019-2020</span>
                <span>贵州汇四方商务服务有限责任公司</span>
                <span class="bq">黔ICP备19011893号</span>
            </div>
        </div>
    </el-container>
</template>

<script>
    export default {
        name: "main-footer"
    }
</script>

<style lang="less" scoped>
    .main-footer {
        background-color: #3e3e3e;
    }

    .foot-content {
        width: 1200px;
        /*height: 125px;*/
        margin: 0 auto;
        text-align: center;
        color: #ccc;
        height: 80px;

        &-main {
            clear: both;
            margin: 0 auto;
            width: 900px;
            height: 80px;
            line-height: 80px;
            text-align: center;

            span {
                margin-right: 20px;
                font-size: 14px;
            }
        }
    }
</style>