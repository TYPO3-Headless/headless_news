<template>
    <div class="news-item ">
        <h2>{{singleNews.title}}</h2>
        <div class="news-item__info">
            <span v-if="singleNews.datetime"><b>Date:</b> {{singleNews.datetime}}</span>
            <span v-if="singleNews.author.author"><b>Author:</b> {{singleNews.author.author}}</span>
        </div>
        <p class="news-item__teaser" v-if="singleNews.teaser"> {{ singleNews.teaser}}</p>
        <nuxt-link :to="`${singleNews.slug}`" tag="a" class="news-item__button"> Read more >> </nuxt-link>
    </div>
</template>

<script>
export default {
    name: "NewsListItem",
    props:{
        singleNews:{
            type: Object,
            required: true
        }
    }
}
</script>


<style scoped>
.news-item{
    box-sizing: border-box;
    border: 1px solid black;
    margin-bottom: 20px;
    padding: 20px;
}
.news-item__info{
    margin-bottom: 20px;
}
.news-item__button{
    width: max-content;
    padding: 5px 15px;
    height: 30px;
    cursor: pointer;
    text-align: center;
    border: 1px solid #010;
}
</style>
