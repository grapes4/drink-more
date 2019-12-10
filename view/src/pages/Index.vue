<template>
    <div class="index-page">
        <el-carousel height="450px">
            <el-carousel-item v-for="(item, index) in imgData" :key="index">
                <div class="head-img" :style="`background-image:url(${item})`"></div>
            </el-carousel-item>
        </el-carousel>
        <div class="content-des-container">
            <el-divider><span class="area-title">品牌简介</span></el-divider>
            <div class="content-brand"><div class="brand"></div></div>
            <div class="content-text">
                <div class="text-main">
                    <p>
                        “馥中春”是贵州汇四方商务服务有限责任公司倾力打造的酱香酒品牌，其酒厂位于贵州茅台镇7.5平方公里酱香酒核心产区。
                    </p>
                    <p>
                        茅台镇踞川黔要津，挹赤水之源，拥山川苍茫，天赐神韵，造化钟灵，世出佳酿，乃酱酒之圣地。贵州汇四方，师从上古方，取水美酒河，精选原料，秉千年酱酒文化，集古老传统工艺，扬红色不屈精神，乱云飞卷，不改初心，誓出极品。经数年之砥砺，成大品于初春，酱香醇厚，细腻绵柔，空杯留香持久，故名馥中春。
                    </p>
                    <p>
                        赤水激流等闲渡，雄关漫道从头越！谨以此酒献给奋斗者！
                    </p>
                </div>
            </div>
        </div>
        <div class="production-list-container">
            <el-divider><span class="area-title">产品列表</span></el-divider>
            <ProductionList />
        </div>
    </div>
</template>

<script>
    import ProductionList from '../components/ProductionList.vue';
    export default {
        name: "index-page",
        components: {
            ProductionList
        },
        data() {
            return {
                imgData: [
                    '/static/image/home/head/1.jpg',
                    '/static/image/home/head/2.jpg',
                    '/static/image/home/head/3.jpg',
                    '/static/image/home/head/4.jpg'
                ]
            }
        },
        mounted(){
            // this.getImageData();
        },
        methods: {
            getImageData() {
                this.axios.get('index/getImage', {
                    params: {
                        page: 'home'
                    }
                })
                    .then(res => {
                        // console.log(res.data);
                        this.imgList = res.data;
                    })
                    .catch(
                        err => console.log(err)
                    );
            }
        }
    }
</script>

<style lang="less" scoped>
    h1 {
        line-height: 50px;
        height: 50px;
        text-align: center;
    }

    .area-title {
        font-size: 18px;
        font-weight: 700;
    }

    .head-img {
        height: 100%;
        width: 100%;
        background-size: 100% 100%;
    }

    .content-des-container {
        width: 1200px;
        margin: 0 auto;
        clear: both;
        overflow: auto;
        padding-top: 20px;

        .content-brand {
            float: left;
            height: 250px;
            width: 300px;
            position: relative;

            .brand {
                background-image: url("/static/image/home/brand/brand.png");
                background-size: 100% 100%;
                box-shadow: 1px 1px 5px #888;
                height:160px;
                width:160px;
                position:absolute;
                top:45px;
                right:0;
                border-radius:50%;
                transition: all 1.5s;
                -moz-transition: all 1.5s; /* Firefox 4 */
                -webkit-transition: all 1.5s; /* Safari 和 Chrome */
                -o-transition: all 1.5s; /* Opera */

                &:hover {
                    transform:rotate(360deg);
                    -ms-transform:rotate(360deg); 	/* IE 9 */
                    -moz-transform:rotate(360deg); 	/* Firefox */
                    -webkit-transform:rotate(360deg); /* Safari 和 Chrome */
                    -o-transform:rotate(360deg); 	/* Opera */
                }
            }
        }

        .content-text {
            float: right;
            width: 850px;

            .text-main {
                margin: 30px;
            }

            p {
                text-indent: 2em;
                margin: 1.4em 0;
                word-break: break-word;
                line-height: 1.6;
            }
        }
    }
    .production-list-container {
        width: 1200px;
        margin: 0 auto;
    }
</style>