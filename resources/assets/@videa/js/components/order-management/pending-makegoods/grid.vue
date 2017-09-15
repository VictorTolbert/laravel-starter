<template lang="pug">
div
  .vui-scrollable--x
    table.vui-table.vui-no-row-hover.vui-table--striped
      thead
        tr
          th(rowspan = '2') View #[br] Offer
          th(rowspan = '2') View #[br] Order
          th(rowspan = '2'): vui-sorting-column(title='Advertiser')
          th(rowspan = '2'): vui-sorting-column(title='Agency')
          th(rowspan = '2'): vui-sorting-column(title='Campaign Name')
          th(rowspan = '2'): vui-sorting-column(title='Flight Start')
          th(rowspan = '2'): vui-sorting-column(title='Flight End')
          th(colspan = '6') Makegood
          th(colspan = '4') Station
          th(colspan = '2') Agency
          th(rowspan = '2') Videa Order
          th(rowspan = '2') MG Created by
          th(rowspan = '2') Date/Time Created
          th(rowspan = '2') MG Last updated by
          th(rowspan = '2') Date/Time last updated
          th(rowspan = '2') CPE
        tr
          th(style = 'padding-left: 0.5rem'): vui-sorting-column(title='Number')
          th: vui-sorting-column(title='Status')
          th: vui-sorting-column(title='Sent')
          th: vui-sorting-column(title='Due')
          th: vui-sorting-column(title='Total')
          th: vui-sorting-column(title='Type')
          th: vui-sorting-column(title='Order')
          th: vui-sorting-column(title='Status')
          th Notes
          th: vui-sorting-column(title='Action')
          th: vui-sorting-column(title='Status')
          th Notes
      tbody
        tr(v-for='offer in offers')
          //- td: a(
          //-   v-bind:href = '`/#/sellers/order-management/pending-makegoods/${offer.orderId}/${offer.offerType}`'
          //-   target = '_blank'
          //- )
          td: a(@click.prevent='displayOfferPopup(offer)')
            vui-icon.vui-icon--small(name='medicine-bottle')
          td: a.vui-m-right--xx-small(
            v-bind:href = '`/#/sellers/reporting/order-reporting/${offer.orderId}`'
            target = '_blank'
          ) Open

          td {{ offer.advertiser }}
          td {{ offer.agency }}
          td {{ offer.campaignName }}
          td {{ offer.flightStartDate }}
          td {{ offer.flightEndDate }}
          td.vui-text-align--center {{ offer.makegoodNumber }}
          td
            span.vui-badge(
              v-bind:class = 'offer.offerStatus'
            ) {{ offer.offerStatus }}
          td {{ offer.makegoodNumber == '001' ? dateMakegoodSent : offer.dateMakegoodSent }}
          td {{ offer.makegoodNumber == '001' ? dateTimeOfferDue : offer.dateTimeOfferDue }}
          td.vui-text-align--right(v-if='offer.makegoodTotal') {{ offer.makegoodTotal | numberWithCommas | formatMoney }}
          td.vui-text-align--right(v-else)
          td {{ offer.offerType }}

          td {{ offer.stationOrderNumber }}
          td
            span.vui-badge(v-bind:class='offer.acceptedByStation') {{offer.acceptedByStation}}
          td.vui-text-align--center
            a(@click.prevent='')
              vui-icon(name='sticky-note-o')
          td.vui-text-align--center {{ offer.stationAction }}

          td
            span.vui-badge(:class='offer.acceptedByAgency') {{ offer.acceptedByAgency }}
          td.vui-text-align--center
            a(@click.prevent='')
              vui-icon(name='sticky-note-o')
          td V{{offer.orderId}}
          td {{offer.repName}}
          td {{offer.dateCreated}} {{offer.timeCreated}}
          td {{offer.repName}}
          td {{offer.dateUpdated}} {{offer.timeUpdated}}
          td {{ offer.cpe }}
  .offer-popup(v-show='showOfferPopup')
    .modal-mask(@click='$emit("close")' transition='modal')
      .modal-container(style='width: 96%')
        .modal-header.vui-m-bottom--large
          h3.vui-text-heading--medium.vui-grid.vui-grid--align-spread
            span(v-if='selectedOffer.offerType == "Program Change"') Program Name Change Offer
            span(v-else-if='selectedOffer.offerType == "Bonus"') Bonus Offer
            span(v-else) Makegood Offer Details
            a.vui-text-align--right(@click.prevent='showOfferPopup = !showOfferPopup' style='color: white')
              vui-icon(name='close', style='width: 2rem; height: 2rem')
        .modal-body
          program-change-header(:offer='selectedOffer')
          old-programming(:offer='selectedOffer' v-if='selectedOffer.offerType == "Program Change"')
          new-programming(:offer='selectedOffer' v-if='selectedOffer.offerType == "Program Change"')
          // Preempt(s)
          div(v-else)
            h4.vui-text-heading--small.vui-align-middle.vui-m-right--large Pre-Empt(s)
            .vui-scrollable--x.vui-m-bottom--large
              table.vui-table.vui-no-row-hover.vui-table--fixed-layout.vui-table--compact.mg-preempts
                thead
                  tr
                    th(v-if='isEditMode' style='width: 35px') Sel
                    th(style='width: 90px'): vui-sorting-column(title='Air Day')
                    th(style='width: 90px'): vui-sorting-column(title='Air Time')
                    th(v-bind:style='{ width: isEditMode ? "120px" : "110px" }' style='width: 120px'): vui-sorting-column(title='Program<br>Placed')
                    th(style='width: 65px'): vui-sorting-column(title='Buy<br>Line #')
                    th.vui-cell-wrap(style='width: 70px'): vui-sorting-column(title='Spot #')
                    th(style='width: 122px'): vui-sorting-column(title='Status')
                    th(style='width: 67px'): vui-sorting-column(title='Priority')
                    th(style='width: 103px'): vui-sorting-column(title='Air Date')
                    th(style='width: 55px'): vui-sorting-column(title='Len')
                    th.spot-allocation-column(style='width: 503px'): spot-allocation-header
                    th(style='width: 90px'): vui-sorting-column(title='Spot<br>Rate')
                    th(v-if='isImpressionsBuyType' style='width: 90px'): vui-sorting-column(title='Buyer<br>IMP')
                    th(v-else, style='width: 90px'): vui-sorting-column(title='Buyer<br>RTG')
                    th(v-if='isEditMode' style='width: 90px'): vui-sorting-column(title = 'Buyer<br>CPP')
                    th(style = 'width: 120px') Comment
                tbody
                  tr(v-for='preempt in selectedOffer.preempts')
                    td(v-if='isEditMode' style='width: 35px')
                      label.vui-checkbox
                        input.vui-input(v-model='preempt.isSelected' type='checkbox')
                        span.vui-checkbox--faux
                    td.vui-truncate(:title='preempt.airDay' style='width: 90px') {{preempt.airDay}}
                    td.vui-truncate(:title='preempt.airTime' style='width: 90px') {{preempt.airTime}}
                    td.vui-truncate(:title='preempt.programName' style='width: 120px') {{preempt.buyerProgramOrdered}}
                    td.vui-truncate.vui-text-align--right(:title='preempt.lineNumber' style='width: 65px') {{preempt.buyerLineNumber}}
                    td.vui-truncate.vui-text-align--right(:title='preempt.spotNumber' style='width: 70px'): span {{preempt.stationSpotNumber}}
                    td.vui-truncate(:title='preempt.status' style='width: 122px') {{preempt.status}}
                    td.vui-truncate.vui-text-align--right(:title='preempt.priority' style='width: 67px') {{preempt.priority}}
                    td.vui-truncate(:title='preempt.airDate' style='width: 103px') {{preempt.airDate}}
                    td.vui-truncate.vui-text-align--center(:title='preempt.spotLength' style='width: 55px') {{preempt.length}}
                    td.spot-allocation-cell(style='width: 503px'): spot-allocation-with-missed-spots(:spots='preempt.weeklySpotAllocations')
                    td.vui-truncate.vui-text-align--right(:title='preempt.programSpotUnitRate' style='width: 90px') {{preempt.programSpotUnitRate | numberWithCommas | formatMoney}}
                    td.vui-text-align--right(:title='preempt.totalPurchasedGrpsImps' style='width: 90px', v-if='isImpressionsBuyType') {{preempt.totalPurchasedGrpsImps}}
                    td.vui-text-align--right(:title='preempt.totalPurchasedGrpsImps' style='width: 90px', v-else) {{preempt.buyerRating | formatRating}}
                    td.vui-text-align--right(:title='preempt.buyerCppm' style='width: 90px', v-if='isEditMode') {{preempt.buyerCpp | numberWithCommas | formatMoney}}
                    td(style='width: 120px')
                      span {{preempt.comment}}
          // Makegood Spot(s) Offered
          div(v-if='selectedOffer.offerType !== "Program Change"')
            h4.vui-text-heading--small.vui-align-middle.vui-m-right--large Makegood Spot(s) Offered
            .vui-scrollable--x
              table.vui-table.vui-no-row-hover.vui-table--fixed-layout.mg-offer-spots
                thead
                  tr
                    th.vui-cell-wrap(style='width: 80px'): vui-sorting-column(title = 'Line #')
                    th(style='width: 110px'): vui-sorting-column(title='Order Days')
                    th(style='width: 105px'): vui-sorting-column(title='Start Time')
                    th(style='width: 105px'): vui-sorting-column(title='End Time')
                    th(style='width: 235px'): vui-sorting-column(title='Program')
                    th(style='width: 105px'): vui-sorting-column(title='Len')
                    th.vui-cell-wrap(style='width: 75px'): vui-sorting-column(title='Offered Spots')
                    //- style='width: 48px'
                    th.spot-allocation-column(style='width: 503px'): spot-allocation-header
                    th(style='width: 100px'): vui-sorting-column(title='Spot Rate')
                    th(v-if='isImpressionsBuyType' style='width: 100px'): vui-sorting-column(title='Station IMP')
                    th(v-else, style='width: 100px'): vui-sorting-column(title='Station RTG')
                    th(style = 'width: 90px'): vui-sorting-column(title='Station CPP')
                    th(style='width: 120px') Makegood #[br] Comment
                tbody
                  tr(v-if='selectedOffer.spotsOffered' v-for='(spot, index) in selectedOffer.spotsOffered', :key='index')
                    td {{index + 1}}
                    td.vui-text-align--center {{spot.orderDays}}
                    td {{spot.startTime}}
                    td {{spot.endTime}}
                    td {{spot.program}}
                    td.vui-text-align--center {{spot.length}}
                    td.vui-text-align--right {{ spot.weeks.reduce((total, week) => total + week, 0) }}
                    td.spot-allocation-column(style='width: 503px')
                      .spot-allocation-row
                        .spot-allocation-container.spot-allocation-data(style='width: 455px')
                          ul.spot-allocation(style='left: 0')
                            li(v-for='(week, index) in spot.weeks', :key='index')
                              .editable-spot-value
                                input(v-model.number='spot.weeks[index]')
                    td.vui-text-align--right {{spot.spotRate | numberWithCommas | formatMoney}}
                    td.vui-text-align--right {{spot.stationRating | formatRating}}
                    td.vui-text-align--right {{spot.spotRate / spot.stationRating | formatMoney}}
                    td {{spot.makegoodComment}}
          //- offer-comment
          .vui-grid.vui-grid--align--spread.vui-m-bottom--medium(ng-if='showDialogData()')
            fieldset.vui-form-element.vui-size--1-of-2.vui-m-right--medium
              label.vui-form-element__label Makegood Comment
              textarea.vui-textarea.vui-p-around--medium(style='box-shadow: 0 2px 2px 0 rgba(0,0,0,.16); border: 1px solid #ccc; min-height: 8rem; background: rgba(250,255,189,.2)', ng-bind='makegoodComment', readonly='readonly') Please confirm within 48 hours.
            fieldset.vui-form-element.vui-size--1-of-2.vui-align-middle.ng-hide(ng-show='totalGridIsVisible()')
              .vui-container--small.vui-container--center
                // Makegoods Total Grid
                table.vui-table.vui-no-row-hover.mgs-total-grid.text-right(v-if='selectedOffer.offerType !== "Program Change"')
                  thead
                    tr
                      th Totals
                      th.vui-text-align--right Spots
                      th.vui-text-align--right Dollars
                      th.vui-text-align--right RTG
                  tbody
                    tr
                      td Pre-empts
                      td.vui-text-align--center 2
                      td.vui-text-align--center $1,100
                      td.vui-text-align--right 4.0
                    tr
                      td Makegoods
                      td.vui-text-align--center 2
                      td.vui-text-align--center $1,100
                      td.vui-text-align--right 4.0
          .vui-grid.vui-grid--align-end
            input.vui-button.vui-button--secondary.vui-m-right--xx-small(type='button', @click='showRejectDialog = true', value='Reject Offer', ng-disabled='!canBeRejected')
            input.vui-button.vui-button--brand(type='button', @click='acceptOffer(selectedOffer)', value='Accept Offer', :disabled='selectedOffer.offerType !== "Program Change"')
  offers-reject-offer-popup(@close='showRejectDialog = false' v-show='showRejectDialog')
</template>

<script>
  import moment from 'moment'
  import ProgramChangeHeader from './program-change-header'
  import OldProgramming from './program-change-old-programming'
  import NewProgramming from './program-change-new-programming'
  import OfferComment from './program-change-offer-comment'

  export default {
    props: {
      offers: {
        type: Array
      },
      offerRoute: {
        type: String,
        default: 'sellers-order-management-pending-makegoods-id-offer'
      }
    },

    components: {
      OldProgramming,
      NewProgramming,
      ProgramChangeHeader,
      OfferComment
    },

    data () {
      return {
        isEditMode: true,
        isImpressionsBuyType: false,
        showOfferPopup: false,
        showRejectDialog: false,
        selectedOffer: {},
        dateMakegoodSent: moment().add(-3, 'days').format('MM/DD/YY'),
        dateTimeOfferDue: moment().add(-1, 'days').format('MM/DD/YY')
      }
    },

    methods: {
      showOffer (id, version = '') {
        let routeInfo = {
          name: this.offerRoute,
          params: {
            id: id,
            offer: 'makegood'
          }
        }

        if (version) {
          routeInfo.query = { version: version }
        }

        this.$router.push(routeInfo)
      },

      displayOfferPopup(offer) {
        this.showOfferPopup = true
        this.selectedOffer = offer
      },

      acceptOffer (offer) {
        this.showOfferPopup = false
        offer.offerStatus = 'confirmed'
        offer.acceptedByStation = 'confirmed'
      }
    }
  }
</script>
