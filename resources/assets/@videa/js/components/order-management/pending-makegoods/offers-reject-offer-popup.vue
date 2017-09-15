<template lang="pug">
  vui-modal(size='large')
    .modal-header.vui-m-bottom--large
      h3.vui-text-heading--medium.vui-grid.vui-grid--align-spread
        span Reject Offer
        a.vui-text-align--right(@click.prevent = '$emit("close")' style='color: white')
          vui-icon(name='close', style='width: 2rem; height: 2rem')
    .modal-body
      p.vui-m-top--medium.vui-m-bottom--medium
        | Seller comment why this offer is being rejected
        sup *
      .soft-warn.vui-grid.vui-m-bottom--medium(v-show='isError')
        //- i.glyphicon.glyphicon-warning-sign.vui-align-middle.vui-m-right--x-small
        ul.error
          li Error Message is required.

      fieldset.vui-form-element.vui-m-bottom--large
        textarea.vui-textarea(v-model='rejectOfferMessage' required='')
      fieldset.vui-form-element
        input.vui-button.vui-button--secondary.vui-m-right--xx-small(
          @click.prevent = '$emit("close")'
          type = 'button'
          value = 'Send Offer Rejection'
        )
        input.vui-button.vui-button--neutral(
          @click.prevent = '$emit("close")'
          type = 'button'
          value = 'Close'
        )
</template>

<script>
  export default {
    data () {
      return {
        isError: false,
        show: false,
        rejectOfferMessage: ''
      }
    },
    computed: {
      dialogStyle () {
        return { }
      }
    },
    methods: {
      showModal () {},
      rejectOffer () {},
      hideDialog () {}
    }
  }
</script>
