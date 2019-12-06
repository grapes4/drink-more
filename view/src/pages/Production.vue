<template>
    <div class="production-page">
        <div class="title">产品中心</div>
        <div class="production-list-container">
            <ProductionDetail v-for="(item, index) in proList" :pro-data="item" />
        </div>
    </div>
</template>

<script>
    import ProductionDetail from '../components/ProductionDetail.vue';
    export default {
        name: "production-page",
        components:{
            ProductionDetail
        },
        data() {
            return {
                proList: [
                    {
                        img: '/static/image/production/pro_list/1_zhizun.jpg',
                        keyWord: []
                    },
                    {
                        img: '/static/image/production/pro_list/2_guizu.jpg',
                        keyWord: []
                    },
                    {
                        img: '/static/image/production/pro_list/3_zhencang.jpg',
                        keyWord: []
                    },
                    {
                        img: '/static/image/production/pro_list/4_diancang.jpg',
                        keyWord: []
                    },
                    {
                        img: '/static/image/production/pro_list/5_fengcang.jpg',
                        keyWord: []
                    },
                    {
                        img: '/static/image/production/pro_list/6_jingzhuangxiaojiu.jpg',
                        keyWord: []
                    },
                ]
            };
        },
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

    .production-list-container {
        width: 1200px;
        margin: 0 auto;
        padding: 30px 0;
    }
</style>