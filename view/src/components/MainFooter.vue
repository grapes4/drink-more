<template>
    <el-container class="main-footer">
        <div class="foot-content">
            <div class="foot-content-main">
                <h3>贵州茅台酒股份有限公司</h3>
                <p class="bq">版权所有 2019 黔ICP备10001658号</p>
                <ul>
                    <li>增值电信业务经营许可证 黔B2-20050029</li>
                    <li>互联网经营执照贵州工商网监</li>
                    <li>贵公网安备 52038202001008号</li>
                </ul>
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
        height: 125px;
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