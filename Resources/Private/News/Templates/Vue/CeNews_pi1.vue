<template>
  <div>
    <template v-if="isListPage">
        put list component here
        {{ data }}
    </template>
    <template v-if="isSinglePage">
      put single component here
        {{ data}}
    </template>
  </div>
</template>
<script>
import baseCe from '~typo3/components/content/mixins/baseCe'
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

