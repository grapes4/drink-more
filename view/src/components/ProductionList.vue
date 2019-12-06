<template>
    <el-row class="production-list">
        <el-col :span="4" v-for="(item, index) in imgList" :key="index" :offset="3">
            <router-link to="/production/index">
                <el-card :body-style="{ padding: '0px', position: 'relative' }">
                    <img :src="item.url" :alt="`馥中春酒 - ${imgName[index]}`">
                    <div class="pro-des">
                        <span>馥中春酒 - {{imgName[index]}}</span>
                    </div>
                </el-card>
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
                    '至尊',
                    '贵族',
                    '臻藏',
                    '典藏',
                    '封藏',
                    '精装小酒'
                ]
            };
        }
    }
</script>

<style lang="less" scoped>
    .production-list {
        padding-top: 30px;
    }

    .el-card {
        margin-bottom: 50px;

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

        /*&:hover {*/
            /*.pro-des {*/
                /*height: 50px;*/
            /*}*/
        /*}*/
    }

    img {
        width: 198px;
        height: 198px;
        display: block;
    }
</style>