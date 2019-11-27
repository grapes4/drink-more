<template>
    <div class="index-page">
        <el-carousel height="450px">
            <el-carousel-item v-for="(item, index) in imgUrl" :key="index">
                <el-image
                    style="height:450px;width:100%;"
                    :src="item.url"
                    :alt="item.name"
                    fit="fill"
                >
                </el-image>
            </el-carousel-item>
        </el-carousel>
        <div class="content-main">
            <div class="content-brand">
                <img
                    :src="brandImgUrl.url"
                     alt="馥中春"
                >
            </div>
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
    </div>
</template>

<script>
    export default {
        name: "index-page",
        data() {
            return {
                imgUrl: [],
                brandImgUrl: {}
            }
        },
        created(){
            this.axios.get('index/getImage', {
                params: {
                    page: 'home-head'
                }
            })
                .then(res => {
                    // console.log(res.data);
                    this.imgUrl = this.imgUrl.concat(res.data);
                })
                .catch(
                    err => console.log(err)
                );

            this.axios.get('index/getImage', {
                params: {
                    page: 'home-brand'
                }
            })
                .then(res => {
                    this.brandImgUrl = res.data[0];
                    console.log(this.brandImgUrl.url)
                })
                .catch(
                    err => console.log(err)
                );
        }
    }
</script>

<style lang="less" scoped>
    h1 {
        line-height: 50px;
        height: 50px;
        text-align: center;
    }
    .content-main {
        width: 1200px;
        margin: 0 auto;
        clear: both;
        overflow: auto;

        .content-brand {
            float: left;
            width: 300px;
            height: 280px;
            position: relative;

            img {
                box-shadow: 1px 1px 5px #888;
                height:160px;
                width:160px;
                position:absolute;
                top:45px;
                right:0;
                border-radius:50%;
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
</style>