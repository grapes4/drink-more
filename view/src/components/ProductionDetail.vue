<template>
    <div class="production-detail">
        <div
            class="pro-img"
            :style="{background: `url(${proData.item})`,'background-size':'100% 100%'}"
        >
        </div>
        <div class="pro-desc">
            <div class="flavor">香型：酱香型白酒</div>
            <div class="material">原料：水、高粱、小麦</div>
            <div class="vol">酒精度：53%vol</div>
            <div class="net-content">净含量：500ml</div>
            <div class="desc">
                <div v-if="proData.index===0">
                    <p>
                        至尊53度年份酱香，靓丽奢华、金碧辉煌、犹如帝王翩翩风度，传统中国龙凤呈祥，蕴含吉祥富贵，其高贵的品质就像帝王至高无上风度。
                    </p>
                    <p>
                        秉承千年酿酒文化、集古老的酱香传统工艺，凭借独特的天然酿酒环境，天人合一，精酿而成，其酒香醇味美、幽雅细腻、回味悠长、空怀留香，是馈赠及收藏之御品。
                    </p>
                </div>
                <div v-else-if="proData.index===1">
                    <p>
                        贵族53度酱香，年份陈酿，华丽尊贵彰显幽雅之风范，中国传统韵味，环绕水纹给予本品典雅的非凡气度。
                    </p>
                    <p>
                        秉承千年酿酒文化、集古老的酱香传统工艺，凭借独特的天然酿酒环境，天人合一，精酿而成，其酒香醇味美、幽雅细腻、回味悠长、空怀留香，是自饮及收藏之尚品。
                    </p>
                </div>
                <div v-else-if="proData.index===2">
                    <p>
                        臻藏53度，简约、淡雅而富有内涵，以酱色为主色，金色点缀，传统富贵花纹体现其神圣而不可求的好酒品质。
                    </p>
                    <p>
                        秉承千年酿酒文化、集古老的酱香传统工艺，凭借独特的天然酿酒环境，天人合一，精酿而成，其酒香醇味美、幽雅细腻、回味悠长、空怀留香，是高品质宴会及馈赠之佳品。
                    </p>
                </div>
                <div v-else-if="proData.index===3">
                    <p>
                        典藏53度酱香酒，蓝色为主色调，凸显庄严成功人士的内涵，传统中国风，更能体现其高贵典雅的品质，耐人寻味。
                    </p>
                    <p>
                        秉承千年酿酒文化、集古老的传统工艺，其酒酱香十足，绵甜爽净，香味协调，酒体丰满，回味悠长，是馈赠及商务宴请之首选。
                    </p>
                </div>
                <div v-else-if="proData.index===4">
                    <p>
                        封藏53度酱香酒，中国简约大气外观，深红色为主，金色为辅，整洁的祥云更有古朴、典雅的韵味，酒质味美香醇、艳而不腻。
                    </p>
                    <p>
                        秉承千年酿酒文化、集古老的传统工艺，其酒酱香浓郁，入口甘甜，酱味协调，口感舒适，回味悠长，是馈赠及宴请之首选礼品。
                    </p>
                </div>
                <div v-else-if="proData.index===5">
                    <p>
                        尊享小酒53度酱香酒，以金色为主，酱色为辅，精致诱人的外观，简约大气，别具一格的设计风格体现其优雅、高尚。
                    </p>
                    <p>
                        秉承千年酿酒文化、集古老的传统工艺，其酒体醇厚，香气四溢，绵甜爽净，香味协调，回味悠长，是馈赠、自饮的首选伴手礼。
                    </p>
                </div>
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