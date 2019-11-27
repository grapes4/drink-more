<template>
    <el-container class="main-footer">
        <div class="foot-content">
            <div class="foot-content-main">
                <p>贵州汇四方商务服务有限责任公司</p>
                <p class="bq">黔ICP备19011893号</p>
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

        &-main {
            ul {
                clear: both;
                margin: 0 auto;
                width: 900px;

                li {
                    float: left;
                    display: block;
                    margin-right: 30px;
                }
            }

        }
    }
</style>