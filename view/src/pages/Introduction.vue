<template>
    <div id="introduction-page">
        <div class="title">企业简介</div>
        <div class="intro-container">
            <div class="content-text">
                <div class="text-main">
                    <p>
                       贵州汇四方商务服务有限责任公司，是一家专注于做酱香型白酒的公司，拥有自己的酱香酒品牌-馥中春。公司总部位于贵州省贵阳市南明区遵义路105号，生产基地位于贵州省茅台镇7.5平方公里的核心产区，生产基地年生产酱香白酒2000多吨，常年基酒库存10000多吨，是一家历史悠久的酱香型白酒企业。
                    </p>
                    <p>
                        公司致力于打造中国界精英首选的酱香型白酒平台。公司致力于中国酱香型白酒文化的传播和推广，通过让大众对“馥中春”系列酱香酒的消费体验，使其真正感受到酱香型白酒的魅力—喝酱酒，更健康！
                    </p>
                    <p>
                        公司秉承“顾客至上，合作共赢”的经营理念，贯彻“以客户需求为中心，注重客户体验，让客户感受到物超所值”的服务理念。让客户通过对馥中春系列酒的消费、个性化定制和在品酒馆体验，让客户真正爱上酱香酒，让客户以消费酱香酒和拥有一款属于自己的酱香酒为荣。
                    </p>
                    <p>
                        公司以能让普通大众喝上高品质酱香型白酒为使命。公司提供高、中、低三种档次的酱酒，让不同收入群体的人都可以喝到真正的酱香酒。公司还可以根据客户的需求，为企业、个人、事业单位和机关单位提供定制化服务。
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "introduction-page",
        data() {
            return {
                imgUrl: {}
            }
        },
        created() {
            this.getImageData();
        },
        methods: {
            getImageData() {
                this.axios.get('index/getImage', {
                    params: {
                        page: 'introduction'
                    }
                })
                    .then(res => {
                        this.imgUrl = res.data;
                        console.log(res.data);
                    })
                    .catch(
                        err => console.log(err)
                    );
            }
        }
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

    .intro-container {
        width: 1200px;
        margin: 0 auto;
        padding: 50px;
        box-sizing: border-box;
    }

    .content-text {
        .text-main {
            margin: 30px;
            margin-top: 0;
            padding-top: 10px;
        }

        p {
            text-indent: 2em;
            margin: 1.4em 0;
            word-break: break-word;
            line-height: 1.6;
        }
    }
</style>