<template>
    <div id="main-area">
        <router-view></router-view>
    </div>
</template>

<script>
    import IndexPage from '../pages/Index.vue';
    export default {
        name: "main-area",
        components:{
            IndexPage
        },
        data() {
            return {

            }
        }
    }
</script>

<style scoped>
#main-area {
    background-color: #003399;
    overflow: auto;
}
</style>