<template>
    <div id="main-header">
        <el-row class="header-top">
            <div class="header-top-main">
                <span>{{today}}</span>
            </div>
        </el-row>
        <el-row class="header-content">
            <div class="header-content-main">
                <img :src="logoUrl" class="img-logo">
                <el-menu
                        :default-active="activeIndex"
                        class="nav-menu"
                        mode="horizontal"
                        @select="handleSelect"
                        :router="isRouterAble"
                        active-text-color="#409EFF"
                >
                    <el-menu-item index="/">首页</el-menu-item>
                    <el-submenu popper-class="nav-submenu">
                        <template slot="title">企业概况</template>
                        <el-menu-item index="/introduction">公司简介</el-menu-item>
                        <el-menu-item index="/culture">文化理念</el-menu-item>
                        <el-menu-item index="/connection">联系我们</el-menu-item>
                    </el-submenu>
                    <el-menu-item index="/production">产品中心</el-menu-item>
                    <el-menu-item index="/news">新闻资讯</el-menu-item>
                    <el-menu-item index="/store">茅台商城</el-menu-item>
                </el-menu>
            </div>
        </el-row>
    </div>
</template>

<script>
    export default {
        name: "main-header",
        data() {
            return {
                logoUrl: require("../assets/logo.png"),
                today: '',
                isRouterAble: true,
                activeIndex: '/'
            }
        },
        methods: {
            getDateString() {
                let date = new Date();
                let year = date.getFullYear();
                let month = date.getMonth() + 1;
                let strDate = date.getDate();
                let weekDay = [
                    '星期日',
                    '星期一',
                    '星期二',
                    '星期三',
                    '星期四',
                    '星期五',
                    '星期六'
                ];
                this.today = `${year} 年 ${month} 月 ${strDate} 日 ${weekDay[date.getDay()]}`;
            },
            handleSelect(key, keyPath) {
                console.log(key, keyPath);
            }
        },
        mounted() {
            this.getDateString();
        }
    }
</script>

<style lang="less" scoped>
    .header-top {
        background-color: #409EFF;
    }
    .header-content {
        background-color: #fff;
    }
    .header-top-main {
        height: 45px;
        width: 1200px;
        margin: 0 auto;

        span {
            line-height: 45px;
            color: #fff;
        }
    }
    .header-content-main {
        height: 126px;
        width: 1200px;
        margin: 0 auto;
        clear: both;

        .img-logo {
            display: block;
            height: 62px;
            position: absolute;
            top: 50%;
            margin-top: -31px;
            float: left;
        }

        .nav-menu {
            float: right;
            border: 0;

            &>.el-menu-item {
                height: 126px;
                line-height: 126px;
                font-size: 18px;
            }
        }
    }

</style>