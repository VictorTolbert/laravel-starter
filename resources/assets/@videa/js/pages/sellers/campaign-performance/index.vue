<template lang="pug">
  .campaign-performance-view
    vui-title Campaign Performance
    vui-panel
      .vui-scrollabl.vui-p-bottom--x-small
        campaign-performance-filter

    campaign-performance-grid-controls

    .vui-scrollable--x.vui-m-bottom--small
      campaign-performance-grid(campaigns='campaigns')

    vui-footnote

</template>

<script>
  import CampaignPerformanceGridControls from '@/components/campaign-performance/grid-controls'
  import CampaignPerformanceFilter from '@/components/campaign-performance/filter'
  import CampaignPerformanceGrid from '@/components/campaign-performance/grid'

  export default {
    metaInfo: {
      title: 'Campaign Performance'
    },

    components: {
      CampaignPerformanceGridControls,
      CampaignPerformanceFilter,
      CampaignPerformanceGrid
    },

    beforeCreate () {
      this.$store.state.activeApp = 'sellers'
    },

    created () {
      this.fetchCampaigns()
    },

    data () {
      return {
        campaigns: [],
        gridColumns: []
      }
    },

    methods: {
      fetchCampaigns () {
        axios.get('/campaigns')
          .then((response) => {
            this.campaigns = response.data
          })
          .catch((error) => {
            console.log(error)
          })
      }
    }
  }
</script>
