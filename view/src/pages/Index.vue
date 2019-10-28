<template>
    <div class="index-page">
        <el-carousel height="450px">
            <el-carousel-item v-for="item in 4" :key="item">
                <h3 class="small">{{ item }}</h3>
            </el-carousel-item>
        </el-carousel>
    </div>
</template>

<script>
    export default {
        name: "index-page"
    }
</script>

<style lang="less" scoped>
    h1 {
        line-height: 50px;
        height: 50px;
        text-align: center;
    }
</style>