<template>
  <div class="ce-newslist">
    <div v-for="singleNews in data.list" :key="singleNews.uid">
      <h2>{{singleNews.title}}</h2>
      <span v-if="singleNews.datetime">
        <b>Date:</b>
        {{singleNews.datetime}}
      </span>
      <span v-if="singleNews.author.author">
        <b>Author:</b>
        {{singleNews.author.author}}
      </span>
      <p v-if="singleNews.teaser">{{ singleNews.teaser}}</p>
      <nuxt-link :to="singleNews.slug" tag="a">Read more >></nuxt-link>
      <hr />
      <br />
    </div>
    <div class="ce-newslist__pagination">
      <nuxt-link
        to="#"
        v-for="page in data.pagination.numberOfPages"
        :key="page"
        class="ce-newslist__page"
        :class="{'ce-newslist__page--current': isCurrent(page)}"
      >{{page}}</nuxt-link>
    </div>
  </div>
</template>

<script>
export default {
  name: "NewsList",
  props: {
    data: {
      type: Object,
      required: true
    }
  },
  methods: {
    isCurrent(page) {
      return this.data.pagination.current === page ? true : false;
    }
  }
};
</script>
