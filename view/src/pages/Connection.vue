<template>
    <div class="connection-page">
        <div class="title">联系我们</div>
        <div class="connection-container">
            <div class="connection-detail">
                <p>招商经理 陈经理</p>
                <p>联系方式：0851 - 88655713</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "connection-page"
    }
</script>

<style lang="less" scoped>
    .title {
        height: 200px;
        width: 100%;
        background: url("/static/image/introduction/head.jpg") 100% 100% no-repeat;
        background-size: 100%;
        text-align: center;
        line-height: 200px;
        font-size: 32px;
        font-weight: 800;
        letter-spacing: 6px;
        color: #333;
    }
    .connection-container {
        width: 1200px;
        margin: 0 auto;
    }
    .connection-detail {
        text-align: center;
        padding: 80px;
    }
</style>