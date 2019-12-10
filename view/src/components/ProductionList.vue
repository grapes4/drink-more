<template>
    <el-row class="production-list">
        <el-col :span="4" v-for="(item, index) in imgName" :key="index" :offset="3">
            <router-link to="/production">
                <div class="pro-img" :style="`background-image:url(${item.img})`">
                    <div class="pro-des">
                        <span>馥中春酒 - {{item.name}}</span>
                    </div>
                </div>
            </router-link>
        </el-col>
    </el-row>
</template>

<script>
    export default {
        name: "ProductionList",
        props:['imgList'],
        data() {
            return {
                proList: {},
                imgName: [
                    {
                        name: '至尊',
                        img: '/static/image/production/pro_list/1_zhizun.jpg'
                    },
                    {
                        name: '贵族',
                        img: '/static/image/production/pro_list/2_guizu.jpg'
                    },
                    {
                        name: '臻藏',
                        img: '/static/image/production/pro_list/3_zhencang.jpg'
                    },
                    {
                        name: '典藏',
                        img: '/static/image/production/pro_list/4_diancang.jpg'
                    },
                    {
                        name: '封藏',
                        img: '/static/image/production/pro_list/5_fengcang.jpg'
                    },
                    {
                        name: '精装小酒',
                        img: '/static/image/production/pro_list/6_jingzhuangxiaojiu.jpg'
                    }
                ]
            };
        }
    }
</script>

<style lang="less" scoped>
    .production-list {
        padding-top: 30px;
    }


    .pro-img {
        height: 198px;
        position: relative;
        box-shadow: 0 0 5px #333;
        width: 198px;
        top: 0;
        left: 0;
        transition: all 1.5s;
        -moz-transition: all 1.5s; /* Firefox 4 */
        -webkit-transition: all 1.5s; /* Safari 和 Chrome */
        -o-transition: all 1.5s; /* Opera */
        background-size: 100% 100%;
        margin-bottom: 30px;
        background-position: center;

        &:hover {
            background-size: 150% 150%;
        }

        .pro-des {
            text-align: center;
            height: 50px;
            line-height: 50px;
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            color: #fff;
        }
    }
</style>