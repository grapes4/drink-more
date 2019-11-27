<template>
    <div id="introduction-page">
        <el-image
                style="height:450px;width:100%;"
                :src="imgUrl.url"
                :alt="imgUrl.name"
                fit="fill"
        >
        </el-image>
        <h1>企业简介</h1>
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
        created(){
            // this.axios.get('index/getImage', {
            //     params: {
            //         page: 'introduction'
            //     }
            // })
            //     .then(res => {
            //         this.imgUrl = res.data;
            //     })
            //     .catch(
            //         err => console.log(err)
            //     );
        }
    }
</script>

<style lang="less" scoped>
    h1 {
        line-height: 50px;
        height: 50px;
        text-align: center;
    }
</style>