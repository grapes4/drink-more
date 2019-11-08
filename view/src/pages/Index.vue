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
    </div>
</template>

<script>
    export default {
        name: "index-page",
        data() {
            return {
                imgUrl: [],
                isImgLazy: true
            }
        },
        created(){
            this.axios.get('index/getImage', {
                params: {
                    page: 'home'
                }
            })
                .then(res => {
                    this.imgUrl = this.imgUrl.concat(res.data);
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
</style>