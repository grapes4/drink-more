<template>
    <el-row>
        <el-col :xs="0" :lg="2"><div class="grid-content bg-purple"></div></el-col>
        <el-col :xs="24" :lg="20">
            <div class="grid-content bg-purple-light">
                <img :src="logoUrl" class="img-logo">
            </div>
        </el-col>
        <el-col :xs="0" :lg="2">
            <div class="grid-content bg-purple"></div>
        </el-col>
    </el-row>
</template>

<script>
    export default {
        name: "main-header",
        data() {
            return {
                logoUrl: require("../assets/logo.png")
            }
        }
    }
</script>

<style scoped>
    .el-col {

    }
    .bg-purple-dark {
        background: #99a9bf;
    }
    .bg-purple {
        background: #d3dce6;
    }
    .bg-purple-light {
        background: #e5e9f2;
    }
    .grid-content {
        height: 82px;
    }
    .img-logo {
        display: block;
        height: 62px;
        position: absolute;
        top: 50%;
        margin-top: -31px;

    }
</style>