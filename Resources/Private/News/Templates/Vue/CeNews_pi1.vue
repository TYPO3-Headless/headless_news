<template>
  <div>
    <template v-if="isListPage">
      <NewsList :data="data"/>
    </template>
    <template v-if="isSinglePage">
      <news-single :data="data"/>
    </template>
  </div>
</template>
<script>
import baseCe from '~typo3/components/content/mixins/baseCe'
import NewsList from './Components/NewsList'
import NewsSingle from './Components/NewsSingle'

export default {
  name: 'CeNews_pi1',
  extends: baseCe,
  props: {
    data: {
      type: Object,
      required: false,
      default: () => {}
    }
  },
  components:{
    NewsList,
    NewsSingle
  },
  computed: {
    isSinglePage() {
      return this.data.settings.action === 'detail'
    },
    isListPage() {
      return this.data.settings.action === 'list'
    }
  }
}
</script>

