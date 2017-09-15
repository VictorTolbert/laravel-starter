<template lang="pug">
  .vui-box.vui-wrap.vui-theme--default.vui-m-bottom--xx-large
    .vui-grid.vui-grid--align-centre.vui-m-bottom--medium.ng-scope(ng-if='ctrl.showDialogData()')
      .vui-form--inline.vui-size--2-of-12
        fieldset.vui-form-element
          label.vui-form-element__label Offer Status:
          .vui-form-element__control
            span.vui-badge(:class='offer.acceptedByStation') {{offer.acceptedByStation}}
      .vui-form--inline.vui-size--2-of-12
        fieldset.vui-form-element
          label.vui-form-element__label Offer Sent:
          .vui-form-element__control
            span {{offer.dateMakegoodSent}}
      .vui-form--inline.vui-size--2-of-12
        fieldset.vui-form-element
          label.vui-form-element__label Buyer Status:
          .vui-form-element__control
            span.vui-badge(:class='offer.acceptedByAgency') {{offer.acceptedByAgency}}
      .vui-form--inline.vui-size--2-of-12
        fieldset.vui-form-element
          label.vui-form-element__label Station Status:
          .vui-form-element__control
            span.vui-badge(:class='offer.acceptedByStation') {{offer.acceptedByStation}}
      .vui-form--inline.vui-size--4-of-12
        fieldset.vui-form-element
          label.vui-form-element__label Classification:
          .vui-form-element__control
            span {{offer.classification}}

    .ng-scope(ng-if='ctrl.showDialogData()')
      .vui-grid.vui-grid--align-centre
        .vui-col.vui-size--2-of-12
          .vui-form--inline
            fieldset.vui-form-element
              label.vui-form-element__label Advertiser:
              .vui-form-element__control
                span {{offer.advertiser}}
        .vui-col.vui-size--2-of-12
          .vui-form--inline
            fieldset.vui-form-element
              label.vui-form-element__label Flight Start:
              .vui-form-element__control
                span {{offer.flightStartDate}}
        .vui-col.vui-size--2-of-12
          .vui-form--inline
            fieldset.vui-form-element
              label.vui-form-element__label Station Order #:
              .vui-form-element__control
                span.col-md-7 {{offer.stationOrderNumber}}
        .vui-col.vui-size--6-of-12
          .vui-form--inline
            fieldset.vui-form-element
              label.vui-form-element__label Estimate #:
              .vui-form-element__control
                span {{offer.estimate}}
      .vui-grid.vui-grid--align-centre
        .vui-col.vui-size--2-of-12
          .vui-form--inline
            fieldset.vui-form-element
              label.vui-form-element__label Product:
              .vui-form-element__control
                span {{offer.product}}
        .vui-col.vui-size--2-of-12
          .vui-form--inline
            fieldset.vui-form-element
              label.vui-form-element__label Flight End:
              .vui-form-element__control
                span {{offer.flightEndDate}}
        .vui-col.vui-size--2-of-12
          .vui-form--inline
            fieldset.vui-form-element
              label.vui-form-element__label Videa Order #:
              .vui-form-element__control
                span {{offer.videaOrderNumber}}
        .vui-col.vui-size--6-of-12
          .vui-form--inline
            fieldset.vui-form-element
              label.vui-form-element__label Campaign:
              .vui-form-element__control
                span {{offer.campaignName}}
</template>

<script>
  export default {
    props: {
      offer: {
        type: Object
      }
    }
  }
</script>
