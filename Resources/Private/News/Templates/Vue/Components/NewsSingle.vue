<template>
    <div class="news-single">
        <h2>{{data.detail.title}}</h2>
        <img  v-if="data.detail.media.length !== 0" :src="data.detail.media[0].images.defaultImage.publicUrl" alt="">
        <div class="news-single__contnent" v-html="data.detail.bodytext"></div>
    </div>
</template>

<script>
export default {
    name: "NewsSingle",
    props:{
        data:{
            type: Object,
            required: true
        }
    },
    computed:{
        checkIfImageExist() {
            return
            }
    }
}
</script>
