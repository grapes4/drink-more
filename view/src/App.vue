<template>
    <div id="app">
        <el-container>
            <el-header height="82px"><MainHeader /></el-header>
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
    }
    .el-header {
        background-color: #B3C0D1;
        color: #333;
        line-height: 82px;
        padding: 0;
    }

    .el-main {
        padding: 0;
    }

    .el-aside {
        color: #333;
    }
</style>
