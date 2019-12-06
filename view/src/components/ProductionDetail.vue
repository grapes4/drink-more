<template>
    <div class="production-detail">
        <div
            class="pro-img"
            :style="{background: `url(${proData.img})`,'background-size':'100% 100%'}"
        >
        </div>
        <div class="pro-desc">
            <div class="flavor">香型：酱香型白酒</div>
            <div class="material">原料：水、高粱、小麦</div>
            <div class="vol">酒精度：53%vol</div>
            <div class="net-content">净含量：500ml</div>
            <div class="desc">
                <p>
                    至尊53度年份酱香，靓丽奢华、金碧辉煌、犹如帝王翩翩风度，传统中国龙凤呈祥，蕴含吉祥富贵，其高贵的品质就像帝王至高无上风度。
                </p>
                <p>
                    秉承千年酿酒文化、集古老的酱香传统工艺，凭借独特的天然酿酒环境，天人合一，精酿而成，其酒香醇味美、幽雅细腻、回味悠长、空怀留香，是馈赠及收藏之御品。
                </p>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: "production-detail",
        props: [
            "pro-data"
        ],
        data() {
            return {

            }
        }
    }
</script>

<style lang="less" scoped>
    .production-detail {
        height: 300px;
        width: 100%;
        overflow: hidden;
        position: relative;
        margin-bottom: 20px;
    }

    .pro-img {
        float: left;
        width: 300px;
        height: 100%;
    }

    .pro-desc {
        float: left;
        height: 100%;
        width: 800px;
        padding: 20px 50px;
        word-break: break-word;
        line-height: 1.6;
        box-sizing: border-box;
        overflow: hidden;
        font-size: 18px;

        .desc {
            text-indent: 2em;
            font-size: 16px;
        }
    }
</style>