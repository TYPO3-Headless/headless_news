<template>
    <div>
        <news-list-item  v-for="singleNews in data.list" :key="singleNews.uid" :singleNews="singleNews" />
    </div>
</template>

<script>
import NewsListItem from './NewsListItem'

export default {
    name: "NewsList",
    components:{
        NewsListItem
    },
    props:{
        data:{
            type: Object,
            required: true
        }
    }
}
</script>
