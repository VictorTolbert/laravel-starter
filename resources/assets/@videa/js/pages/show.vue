<template lang="pug">
  .page.order
    order-detail-info(:order='order')
</template>

<script>
  import OrderDetailInfo from '@/components/order-management/order-detail-info'

  export default {
    name: 'orders-id',
    props: ['order'],
    components: { OrderDetailInfo }
  }
</script>
