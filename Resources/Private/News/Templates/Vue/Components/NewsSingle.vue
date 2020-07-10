<template>
  <div>
    <h2>{{data.detail.title}}</h2>
    <img v-if="image" :src="image" alt />
    <div v-html="data.detail.bodytext"></div>
  </div>
</template>

<script>
export default {
  name: "NewsSingle",
  props: {
    data: {
      type: Object,
      required: true
    }
  },
  computed: {
    image() {
      if (this.data.detail.media.length) {
        return this.data.detail.media[0].images.defaultImage.publicUrl;
      } else {
        return false;
      }
    }
  }
};
</script>
