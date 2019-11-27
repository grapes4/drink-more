<template>
    <div id="app">
        <el-container>
            <el-header height="171px"><MainHeader /></el-header>
            <el-main><MainArea /></el-main>
            <el-footer><MainFooter /></el-footer>
        </el-container>
    </div>
</template>

<script>
    import MainHeader from './components/MainHeader.vue';
    import MainFooter from './components/MainFooter.vue';
    import MainArea from './components/MainArea.vue';

    export default {
        name: 'app',
        components:{
            MainHeader,
            MainArea,
            MainFooter
        },
        data() {
            return {

            }
        }
    };
</script>

<style>
    #app,
    body{
        margin: 0;
        padding: 0;
        font-family: -apple-system,BlinkMacSystemFont,Helvetica Neue,PingFang SC,Microsoft YaHei,Source Han Sans SC,Noto Sans CJK SC,WenQuanYi Micro Hei,sans-serif;
        font-size: 15px;
        color: #1a1a1a;
        -webkit-tap-highlight-color: rgba(26,26,26,0);

    }
    .el-header,
    .el-footer {
        display: block;
        padding: 0;
    }

    .el-main {
        padding: 0;
    }

    .el-aside {
        color: #333;
    }

    .el-menu--horizontal>.el-submenu .el-submenu__title {
         height: 126px;
         line-height: 126px;
         font-size: 18px;
    }

    .el-carousel__button {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }
</style>
