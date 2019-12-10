<template>
    <div class="news-page">
        <div class="title">企业新闻</div>
        <div class="intro-container">
            <div class="content-text">
                <iframe
                    class="news-content"
                    scrolling="yes"
                    :src="newsUrl"
                    frameborder="0"
                >
                </iframe>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "news-page",
        data() {
            return {
                imgUrl: {},
                newsUrl: 'http://www.zgsshw.cn/content.asp?id=43372'
            };
        },
        created() {
            // this.getNewsContent();
        },
        methods: {
            getNewsContent() {
                this.axios.get('news/getNewsContent', {
                    params: {
                        url: 'https://mp.weixin.qq.com/s/kgJswcvw1LWAnP9yqJ-PIA'
                    }
                })
                    .then(res => {
                        // this.newsUrl = res.data;
                        this.newsUrl = 'data:text/html;charset=utf-8,' + res.data;
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
    .news-page {
        overflow: hidden;
    }

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

    .content-text {
        width: 1200px;
        margin: 0 auto;
        height: 800px;
        padding: 30px;
        overflow: hidden;
    }
    .news-content {
        margin: 0;
        width: 100%;
        height: 100%;
        overflow: visible;
        border: solid 2px #333;
    }
</style>