<template lang="pug">
  form.vui-grid.vui-grid--vertical-align-end.vui-wrap
    fieldset.vui-form-element.vui-m-right--small
      label.vui-form-element__label Offer Status
      .vui-form-element__control(style='width: 11rem')
        .vui-select_container
          select.vui-select
            option All Offer Statuses
            option Pending
            option Confirmed
            option Rejected
            option Recalled
            option Cancelled

    fieldset.vui-form-element.vui-m-right--small
      label.vui-form-element__label Offer Type
      .vui-form-element__control(style='width: 11rem')
        .vui-select_container
          select.vui-select
            option All Offer Types
            option Makegood
            option Credit
            option Bonus
            option Program Name Change
            option MG Preempts
            option Missed Spots


    fieldset.vui-form-element.vui-m-right--small
      label.vui-form-element__label Agency
      .vui-form-element__control(style='width: 11rem')
        .vui-select_container
          select.vui-select
            option Agency
            option Auto Advertising Partners
            option Hughes-Martin Agency
            option The Media Masters Group
            option Mullberry Way Group
            option Vanthrop and Associates
            option Zone Group Advertising


    fieldset.vui-form-element.vui-m-right--small
      label.vui-form-element__label Advertiser
      .vui-form-element__control(style='width: 11rem')
        .vui-select_container
          select.vui-select
            option Advertiser
            option Community Loans, Inc
            option Metro Wireless
            option Papa John's Pizza
            option Piedmont Healthcare
            option Southeast Ford
            option Sun Valley Bank

    fieldset.vui-form-element
      label.vui-form-element__label Campaign Name
      .vui-form-element__control.vui-m-right--small
        input.vui-input(
          v-model = 'searchKey'
          name = 'campaign'
          placeholder = 'Campaign'
          ref = 'searchKey'
          type = 'text'
        )

    fieldset.vui-form-element.vui-m-right--small
      label.vui-form-element__label Agency Status
      .vui-form-element__control(style='width: 11rem')
        .vui-select_container
          select.vui-select
            option All Agency Statuses
            option Pending
            option Accepted
            option Rejected
            option Recalled
            option Cancelled

    fieldset.vui-form-element.vui-m-right--small
      label.vui-form-element__label Station Status
      .vui-form-element__control(style='width: 11rem')
        .vui-select_container
          select.vui-select
            option All Station Statuses
            option Pending
            option Accepted
            option Rejected
            option Recalled
            option Cancelled

    fieldset.vui-form-element.vui-m-right--small
      label.vui-form-element__label MG Transfers
      .vui-form-element__control(style='width: 11rem')
        .vui-select_container
          select.vui-select
            option All MG's &amp; Transferred
            option All Transferred
            option Sent to Station
            option Sent to MediaOps

    fieldset.vui-form-element
      button.vui-button.vui-button--brand.vui-m-right--x-small(
        @click.prevent = ''
      ) Search

    fieldset.vui-form-element
      button.vui-button.vui-button--neutral.vui-m-right--x-small(
        @click.prevent = ''
      ) Clear
</template>

<script>
  export default {
    data () {
      return {
        searchKey: '',
        offerStatuses: [],
        offerTypes: [],
        agencies: [],
        advertisers: [],
        agencyStatuses: [],
        stationStatuses: [],
        makegoodTransfers: []
      }
    }
  }
</script>
