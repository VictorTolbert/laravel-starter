<template lang="pug">
  .makegoods-add-makegood-offer-view
    vui-title Order Information - Offers
    //- button.vui-button(@click='emitMethod(oldProgramNamesBeingReplaced)') Emit

    order-detail-info(:order='order')

    .vui-grid.vui-grid--align-spread.vui-m-top--large.vui-m-bottom--large
      h2.vui-text-heading--medium: span {{$store.state.stationCallLetters}} Details

      fieldset.vui-form-element
        button.vui-button.vui-button--brand.vui-m-right--x-small(:disabled='!offered.length' @click='transfer') Transfer to MediaOps
        button.vui-button.vui-button--brand.vui-m-right--x-small(:disabled='!offered.length' @click='send') Send
        button.vui-button.vui-button--brand.vui-m-right--x-small(@click='viewGuidelines') Guidelines
        button.vui-button.vui-button--secondary.vui-m-right--xx-small(:disabled='!canSave' @click='save') Save
        button.vui-button.vui-button--neutral(:disabled='!canSave' @click.prevent='closeWindow') Close
        button.vui-button.vui-button--secondary(@click.prevent='showTotalsPopup = true') Totals

    // Tab
    .vui-tabs--scoped.details-tabs-header-container
      ul.vui-tabs--scoped__nav.details-tabs(role='tablist')
        li.vui-tabs--scoped__item.vui-text-heading--label.vui-active(role='presentation')
          a.vui-tabs--scoped__link {{$route.params.offer || 'Makegood'}}
    // Tab Panel -- Program Change Offer Type
    div(role='tabpanel' v-if='$route.params.offer == "program-change"')
      .vui-p-around--large.vui-tabs--scoped__content
        .vui-grid
          .vui-col.vui-p-right--medium
            .vui-form-element
              label.vui-form-element__label Makegood comments:
              .vui-form-element__control
                vui-resizable-textarea(initial-height='140' text='' width='200')
          .vui-col.vui-truncate_container--50.vui-size--1-of-2.vui-p-left--medium.vui-grid.vui-align-spread.vui-form--inline.vui-p-top--medium

            // Classification
            .vui-form-element.vui-col.vui-size--1-of-3.vui-m-left--x-large
              label.vui-form-element__label Classification
              .vui-form-element__control
                .vui-select_container
                  select.vui-select(v-model='selectedClassification')
                    option(v-for='classification in classifications') {{classification}}

        // Program Change Form
        .vui-grid.vui-m-top--small
          .vui-grid.vui-col.vui-p-right--medium
            .vui-large-size--3-of-5
              .vui-form-element
                label.vui-form-element__label New program name:
                .vui-form-element__control
                  input.vui-input(type='text', name='newProgramName', v-model='programData.newProgramName', required='', maxlength='50')
              .vui-form-element
                label.vui-form-element__label MG comment:
                .vui-form-element__control
                  input.vui-input(type='text', v-model='programData.mgComment')
            .vui-large-size--2-of-5.vui-text-align--right
              .vui-form-element
                label.vui-form-element__label.vui-size--2-of-3 Effective from:
                .vui-form-element__control.vui-float--right.vui-size--2-of-3
                  //- vui-datepicker(v-model='programData.effectiveFrom')
                  vui-datepicker(placeholder='MM/dd/yyyy')
              .vui-form-element.vui-clear
                label.vui-form-element__label.vui-size--2-of-3 Effective through:
                .vui-form-element__control.vui-float--right.vui-size--2-of-3
                  //- vui-datepicker(v-model='programData.effectiveThrough', min-date='orderInfo.startDate')
                  vui-datepicker(placeholder='MM/dd/yyyy')
          .vui-col.vui-truncate_container--50.vui-size--1-of-2.vui-p-left--medium.vui-m-top--large
            .program-change-container.vui-fieldset.vui-dropdown--large
              .vui-fieldset-header.vui-text-align--center
                label Only enter if Days/Times changed:
              .vui-grid.vui-grid--align-space.vui-p-top--medium.vui-p-bottom--x-small
                .vui-form-element
                  label.vui-form-element__label Days:
                  .vui-form-element__control(style='width: 8rem')
                    //- vui-multiselect-dropdown(items='programData.dayItems')
                    .vui-form-element__control
                      .vui-select_container
                        select.vui-select(v-model='programData.newSelectedDay')
                          option ALL
                          option MO-FR
                          option SU
                          option MO
                          option TU
                          option WE
                          option TH
                          option FR
                          option SA
                .vui-form-element
                  label.vui-form-element__label Start Time:
                  .vui-form-element__control
                    //- vui-time-input(on-time-changed='timeChanged', is-time-invalid='!isTimeRangeValid', model='programData.startTime')
                    .vui-form-element__control
                      .vui-select_container
                        select.vui-select(v-model='programData.newStartTime')
                            option 07:00 AM
                            option 07:30 AM
                            option 08:00 AM
                            option 08:30 AM
                            option 09:00 AM
                            option 09:30 AM
                            option 10:00 AM
                            option 10:30 AM
                            option 11:00 AM
                            option 11:30 AM
                            option 12:00 PM
                            option 12:30 PM
                            option 01:00 PM
                            option 01:30 PM
                            option 02:00 PM
                            option 02:30 PM
                            option 03:00 PM
                            option 03:30 PM
                            option 04:00 PM
                            option 04:30 PM
                            option 05:00 PM
                            option 05:30 PM
                            option 06:00 PM
                            option 06:30 PM
                            option 07:00 PM
                            option 07:30 PM
                            option 08:00 PM
                            option 08:30 PM
                            option 09:00 PM
                            option 09:30 PM
                            option 10:00 PM
                            option 10:30 PM
                            option 11:00 PM
                            option 11:30 PM
                            option 12:00 AM
                            option 12:30 AM
                .vui-form-element
                  label.vui-form-element__label End Time:
                  .vui-form-element__control
                    .vui-select_container
                      select.vui-select(v-model='programData.newEndTime')
                            option 07:00 AM
                            option 07:30 AM
                            option 08:00 AM
                            option 08:30 AM
                            option 09:00 AM
                            option 09:30 AM
                            option 10:00 AM
                            option 10:30 AM
                            option 11:00 AM
                            option 11:30 AM
                            option 12:00 PM
                            option 12:30 PM
                            option 01:00 PM
                            option 01:30 PM
                            option 02:00 PM
                            option 02:30 PM
                            option 03:00 PM
                            option 03:30 PM
                            option 04:00 PM
                            option 04:30 PM
                            option 05:00 PM
                            option 05:30 PM
                            option 06:00 PM
                            option 06:30 PM
                            option 07:00 PM
                            option 07:30 PM
                            option 08:00 PM
                            option 08:30 PM
                            option 09:00 PM
                            option 09:30 PM
                            option 10:00 PM
                            option 10:30 PM
                            option 11:00 PM
                            option 11:30 PM
                            option 12:00 AM
                            option 12:30 AM
                    //- vui-time-input(on-time-changed='timeChanged', is-time-invalid='!isTimeRangeValid', model='programData.endTime')
        .vui-grid.vui-grid--pull-padded.vui-grid--align-spread.vui-m-top--medium.vui-m-bottom--medium
          .vui-col--padded.vui-align-middle
            h4.vui-text-heading--small Select Program line(s) to change
          .vui-col--padded
            button.vui-button.vui-button--brand(@click='addProgramToChange')
              vui-icon(name='plus-circle')
              | Add Spots(s)

        // Lines to Change
        div
          //- program-change-lines-to-change-grid(items='orderItems')
          .vui-scrollable--x
            table.vui-table.vui-no-row-hover.vui-table--striped.vui-table--fixed-layout.mg-program-name-change
              thead
                tr
                  th.vui-text-align--center(v-if='isEditMode' style='width: 48px') Select
                  th(style='width: 110px'): vui-sorting-column(title='Order Days')
                  th(style='width: 95px'): vui-sorting-column(title='Start Time')
                  th(style='width: 95px'): vui-sorting-column(title='End Time')
                  th(style='width: 220px'): vui-sorting-column(title='Program')
                  th(style='width: 70px'): vui-sorting-column(title='Line')
                  th(style='width: 55px'): vui-sorting-column(title='Len')
                  th.vui-cell-wrap(style='width: 80px'): vui-sorting-column(title='Ordered Spots')
                  th.spot-allocation-column(style='width: 503px')
                    spot-allocation-header
                  th(style='width: 100px'): vui-sorting-column(title='Spot Rate')
                  th(v-if='isImpressionsBuyType' style='width: 100px'): vui-sorting-column(title='Buyer RTG')
                  th(v-if='isImpressionsBuyType' style='width: 100px'): vui-sorting-column(title='Buyer CPP')
                  th(style='width: 50%'): vui-sorting-column(title='Line $ Total')
              tbody
                tr(v-for='program in programsToChange')
                  td.vui-text-align--center(v-if='isEditMode' style='width: 48px')
                    label.vui-checkbox
                      input.vui-input(v-model='program.isSelected' type='checkbox')
                      span.vui-checkbox--faux
                  td.vui-truncate(:title='program.orderDays' style='width: 110px') {{program.orderDays}}
                  td.vui-truncate(:title='program.startTime' style='width: 95px') {{program.startTime}}
                  td.vui-truncate(:title='program.endTime' style='width: 95px') {{program.endTime}}
                  td.vui-truncate(:title='program.programName' style='width: 220px') {{program.programName}}
                  td.vui-truncate.vui-text-align--right(:title='program.lineNumber' style='width: 70px') {{program.lineNumber}}
                  td.vui-truncate.vui-text-align--right(:title='program.spotLength' style='width: 55px') {{program.spotLength}}
                  td.vui-truncate.vui-text-align--right(:title='program.orderedSpots' style='width: 80px') {{program.orderedSpots}}
                  td.spot-allocation-cell(style='width: 503px')
                    //- makegoods-spot-allocation-with-missed-spots(v-model='program.weeklySpotAllocations')
                    .spot-allocation-row
                      .spot-allocation-container.spot-allocation-data(style='width: 455px')
                        ul.spot-allocation(style='left: 0')
                          li(v-for='spot in program.weeklySpotAllocations')
                            div: span: span {{ spot.value }}
                  td.vui-truncate.vui-text-align--right(:title='program.orderedSpotRate' style='width: 100px') {{program.spotRate | numberWithCommas | formatMoney}}
                  td.vui-truncate.vui-text-align--right(:title='program.buyerRating' style='width: 100px') {{program.buyerRating | formatRating}}
                  td.vui-truncate.vui-text-align--right(:title='program.orderedCpp' style='width: 100px') {{Math.round((program.spotRate / program.buyerRating)) | formatMoney}}
                  td.vui-truncate.vui-text-align--right(:title='program.lineTotalMoney' style='width: 50%') {{program.lineDollarTotal | numberWithCommas | formatMoney}}

        .vui-grid.vui-grid--pull-padded.vui-grid--align-spread.vui-m-top--medium.vui-m-bottom--medium
          .vui-col--padded.vui-align-middle
            h4.vui-text-heading--small New Program MG Spots Offered
          .vui-col--padded
            button.vui-button.vui-button--brand(@click='removeSpots')
              vui-icon(name='plus-circle')
              | Delete Spot(s)

        // Offered Spots Grid
        div(style='height: 12rem')
          //- makegoods-offer-spots-grid(items='makegood.offers', order-buy-type='orderInfo.orderBuyType', transaction-type='transactionType')
          // Makegood Spot(s) Offered Table
          .vui-scrollable.offers-makegood-offered-spots-container(style='height: 14rem')
            //- makegoods-offered-spots-grid(items='makegoodOffers')
            .vui-scrollable--x
              table.vui-table.vui-no-row-hover.vui-table--fixed-layout.mg-offer-spots
                thead
                  tr
                    th.vui-cell-wrap(style='width: 80px'): vui-sorting-column(title = 'Line #')
                    th(style='width: 110px'): vui-sorting-column(title='Days')
                    th(style='width: 105px'): vui-sorting-column(title='Start Time')
                    th(style='width: 105px'): vui-sorting-column(title='End Time')
                    th(style='width: 235px'): vui-sorting-column(title='Program')
                    th(style='width: 105px'): vui-sorting-column(title='Len')
                    th.vui-cell-wrap(style='width: 75px'): vui-sorting-column(title = 'Offered Spots')
                    //- style='width: 48px'
                    th.spot-allocation-column(style='width: 503px')
                      spot-allocation-header(v-model='weeklySpotAllocations')
                    th(style='width: 100px'): vui-sorting-column(title='Station Rate')
                    th(v-if='isImpressionsBuyType' style='width: 100px'): vui-sorting-column(title='Station Rating')
                    th(style = 'width: 90px'): vui-sorting-column(title='Station CPP')
                    th(style='width: 120px') Makegood #[br] Comment
                tbody
                  tr(v-if='spotsOffered' v-for='(item, index) in spotsOffered', :key='index')
                    td
                      .vui-form-element
                        label.vui-checkbox
                          input(
                            v-model = 'item.isSelected'
                            name = 'unmatchedSpots'
                            type = 'checkbox'
                          )
                          span.vui-checkbox--faux
                          span.vui-form-element__label {{ index + 1 }}
                    td
                      .vui-form-element__control
                        .vui-select_container
                          select.vui-select(v-model='item.selectedDay')
                            option ALL
                            option MO-FR
                            option SU
                            option MO
                            option TU
                            option WE
                            option TH
                            option FR
                            option SA
                    td
                      .vui-form-element__control
                        .vui-select_container
                          select.vui-select(v-model='item.startTime')
                            option 07:00 AM
                            option 07:30 AM
                            option 08:00 AM
                            option 08:30 AM
                            option 09:00 AM
                            option 09:30 AM
                            option 10:00 AM
                            option 10:30 AM
                            option 11:00 AM
                            option 11:30 AM
                            option 12:00 PM
                            option 12:30 PM
                            option 01:00 PM
                            option 01:30 PM
                            option 02:00 PM
                            option 02:30 PM
                            option 03:00 PM
                            option 03:30 PM
                            option 04:00 PM
                            option 04:30 PM
                            option 05:00 PM
                            option 05:30 PM
                            option 06:00 PM
                            option 06:30 PM
                            option 07:00 PM
                            option 07:30 PM
                            option 08:00 PM
                            option 08:30 PM
                            option 09:00 PM
                            option 09:30 PM
                            option 10:00 PM
                            option 10:30 PM
                            option 11:00 PM
                            option 11:30 PM
                            option 12:00 AM
                            option 12:30 AM
                    td
                      .vui-form-element__control
                        .vui-select_container
                          select.vui-select(v-model='item.endTime')
                            option 07:00 AM
                            option 07:30 AM
                            option 08:00 AM
                            option 08:30 AM
                            option 09:00 AM
                            option 09:30 AM
                            option 10:00 AM
                            option 10:30 AM
                            option 11:00 AM
                            option 11:30 AM
                            option 12:00 PM
                            option 12:30 PM
                            option 01:00 PM
                            option 01:30 PM
                            option 02:00 PM
                            option 02:30 PM
                            option 03:00 PM
                            option 03:30 PM
                            option 04:00 PM
                            option 04:30 PM
                            option 05:00 PM
                            option 05:30 PM
                            option 06:00 PM
                            option 06:30 PM
                            option 07:00 PM
                            option 07:30 PM
                            option 08:00 PM
                            option 08:30 PM
                            option 09:00 PM
                            option 09:30 PM
                            option 10:00 PM
                            option 10:30 PM
                            option 11:00 PM
                            option 11:30 PM
                            option 12:00 AM
                            option 12:30 AM
                    td: input.vui-input(type='text', v-model='programData.newProgramName')
                    //-  Len
                    td 30 s
                    //- Ordered Spots
                    //- td.vui-text-align--right {{ Number.isInteger(total) ? parseInt(total) : 0 }}
                    td.vui-text-align--right {{ item.weeks.reduce((total, week) => total + week, 0) }}
                    td.spot-allocation-column(style='width: 503px')
                      .spot-allocation-row
                        .spot-allocation-container.spot-allocation-data(style='width: 455px')
                          ul.spot-allocation(style='left: 0')
                            li(v-for='(week, index) in item.weeks', :key='index')
                              .editable-spot-value
                                input(
                                  @keypress = 'onKeypress'
                                  v-model.number='item.weeks[index]'
                                )
                    td: input.vui-input.vui-text-align--right(type='text', v-model.number='item.spotRate' @keypress='onKeypress')
                    td: input.vui-input.vui-text-align--right(type='text', v-model.number='item.stationRating' @keypress='onKeypress')
                    td.vui-text-align--right {{Math.round((item.spotRate / item.stationRating)) | formatMoney}}
                    td: input.vui-input(type='text', v-model='programData.mgComment')


    // Tab Panel -- Other Offer Types
    div(role='tabpanel' v-else)
      form.vui-p-around--large.vui-tabs--scoped__content

        // Offer type (program-change, makegood)
        .vui-grid.vui-m-bottom--xx-large

          // Comments
          .vui-col.vui-p-right--medium
            .vui-form-element
              label.vui-form-element__label Makegood comments
              .vui-form-element__control
                vui-resizable-textarea(initial-height='140' text='' width='200')

          .vui-col.vui-truncate_container--50.vui-size--1-of-2.vui-p-left--medium.vui-grid.vui-align-spread.vui-form--inline

            // Totals
            .vui-col.vui-size--2-of-3.vui-m-top--large
              makegoods-total-grid(:preempts='order.preempts', :offered='spotsOffered')

            // Classification
            .vui-form-element.vui-col.vui-size--1-of-3.vui-m-left--x-large
              label.vui-form-element__label Classification
              .vui-form-element__control
                .vui-select_container
                  select.vui-select(v-model='selectedClassification')
                    option(v-for='classification in classifications') {{classification}}

        // Preempts
        .preempts-grid.vui-m-bottom--xx-large(v-if='order.preempts && order.preempts.length > 0')
          .vui-grid.vui-m-bottom--small
            h4.vui-text-heading--small.vui-align-middle.vui-m-right--large Pre-Empt(s)
            fieldset.vui-form-element.vui-align-middle
              label.vui-radio
                input(v-model='isOnlySelectedPreemptsShown' name='selectedPreemptsRadioGroup' type='radio' value='false')
                span.vui-radio--faux.vui-m-right--xxx-small
                span.vui-form-element__label All Order Preempts

              label.vui-radio
                input(v-model='isOnlySelectedPreemptsShown' name='selectedPreemptsRadioGroup' type='radio' value='true')
                span.vui-radio--faux.vui-m-right--xxx-small
                span.vui-form-element__label Selected

          //- makegoods-preempts-grid(
          //-   is-edit-mode = 'true'
          //-   is-only-selected-preempts-shown = 'isOnlySelectedPreemptsShown'
          //-   item-selection-changed = 'selectedPreemptsChanged'
          //-   items = 'allOrderPreempts'
          //-   v-bind:order = 'order'
          //-   v-bind:order-line-items = 'orderLineItems'
          //-   order-buy-type = 'orderInfo.orderBuyType'
          //- )
          // Makegoods Preempts Grid
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
                  th(v-if='isImpressionsBuyType' style='width: 90px'): vui-sorting-column(title='Buyer<br>RTG')
                  th(v-if='isEditMode' style='width: 90px'): vui-sorting-column(title = 'Buyer<br>CPP')
                  th(style = 'width: 120px') Comment
              tbody
                tr(v-for='preempt in order.preempts')
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
                  td.vui-text-align--right(:title='preempt.buyerRating' style='width: 90px') {{preempt.buyerRating | formatRating }}
                  td.vui-text-align--right(:title='preempt.buyerCpp' style='width: 90px', v-if='isEditMode') {{preempt.programSpotUnitRate / preempt.buyerRating | formatMoney}}
                  td(style='width: 120px')
                    input.vui-input.vui-size--1-of-1(:title='preempt.comment' v-if='isEditMode' v-model='preempt.comment' type='text')
                    span(v-else) {{preempt.comment}}

        // Makegood Spot(s) Offered / Station Avails Wrapper
        .offers-makegoods-common-avail-offer-grids-wrapper
          // Makegood Spot(s) Offered
          .makegood-spots-offered.vui-m-bottom--xx-large
            // Makegood Spot(s) Offered Header / Actions
            .vui-grid.vui-grid--align-spread.vui-m-bottom--medium
              .vui-align-middle
                h4.vui-text-heading--small Makegood spot(s) offered
              .vui-align-middle

                button.vui-button.vui-button--neutral.vui-m-right--x-small(@click='addSpotsColumn' type='button')
                  vui-icon.vui-align-middle.vui-m-right--xx-small(name='plus-circle')
                  | Add a week

                button.vui-button.vui-button--brand(@click='removeSpots' type='button')
                  vui-icon.vui-align-middle.vui-m-right--xx-small(name='minus-circle')
                  | Delete Spot(s)
            // Makegood Spot(s) Offered Table
            .vui-scrollable.offers-makegood-offered-spots-container(style='height: 14rem')
              //- makegoods-offered-spots-grid(items='makegoodOffers')
              .vui-scrollable--x
                table.vui-table.vui-no-row-hover.vui-table--fixed-layout.mg-offer-spots
                  thead
                    tr
                      th.vui-cell-wrap(style='width: 80px'): vui-sorting-column(title = 'Line #')
                      th(style='width: 110px'): vui-sorting-column(title='Days')
                      th(style='width: 105px'): vui-sorting-column(title='Start Time')
                      th(style='width: 105px'): vui-sorting-column(title='End Time')
                      th(style='width: 235px'): vui-sorting-column(title='Program')
                      th(style='width: 105px'): vui-sorting-column(title='Len')
                      th.vui-cell-wrap(style='width: 75px'): vui-sorting-column(title = 'Offered Spots')
                      //- style='width: 48px'
                      th.spot-allocation-column(style='width: 503px')
                        spot-allocation-header(v-model='weeklySpotAllocations')
                      th(style='width: 100px'): vui-sorting-column(title='Station Rate')
                      th(v-if='isImpressionsBuyType' style='width: 100px'): vui-sorting-column(title='Station RTG')
                      th(style = 'width: 90px'): vui-sorting-column(title='Station CPP')
                      th(style='width: 120px') Makegood #[br] Comment
                  tbody
                    tr(v-if='spotsOffered' v-for='(item, index) in spotsOffered', :key='index')
                      td
                        .vui-form-element
                          label.vui-checkbox
                            input(
                              v-model='item.isSelected'
                              name='unmatchedSpots'
                              type='checkbox'
                            )
                            span.vui-checkbox--faux
                            span.vui-form-element__label {{ index + 1 }}
                      td
                        .vui-form-element__control
                          .vui-select_container
                            select.vui-select(v-model='item.selectedDay')
                              option ALL
                              option MO-FR
                              option SU
                              option MO
                              option TU
                              option WE
                              option TH
                              option FR
                              option SA
                      td
                        .vui-form-element__control
                          .vui-select_container
                            select.vui-select(v-model='item.startTime')
                              option 07:00 AM
                              option 07:30 AM
                              option 08:00 AM
                              option 08:30 AM
                              option 09:00 AM
                              option 09:30 AM
                              option 10:00 AM
                              option 10:30 AM
                              option 11:00 AM
                              option 11:30 AM
                              option 12:00 PM
                              option 12:30 PM
                              option 01:00 PM
                              option 01:30 PM
                              option 02:00 PM
                              option 02:30 PM
                              option 03:00 PM
                              option 03:30 PM
                              option 04:00 PM
                              option 04:30 PM
                              option 05:00 PM
                              option 05:30 PM
                              option 06:00 PM
                              option 06:30 PM
                              option 07:00 PM
                              option 07:30 PM
                              option 08:00 PM
                              option 08:30 PM
                              option 09:00 PM
                              option 09:30 PM
                              option 10:00 PM
                              option 10:30 PM
                              option 11:00 PM
                              option 11:30 PM
                              option 12:00 AM
                              option 12:30 AM
                      td
                        .vui-form-element__control
                          .vui-select_container
                            select.vui-select(v-model='item.endTime')
                              option 07:00 AM
                              option 07:30 AM
                              option 08:00 AM
                              option 08:30 AM
                              option 09:00 AM
                              option 09:30 AM
                              option 10:00 AM
                              option 10:30 AM
                              option 11:00 AM
                              option 11:30 AM
                              option 12:00 PM
                              option 12:30 PM
                              option 01:00 PM
                              option 01:30 PM
                              option 02:00 PM
                              option 02:30 PM
                              option 03:00 PM
                              option 03:30 PM
                              option 04:00 PM
                              option 04:30 PM
                              option 05:00 PM
                              option 05:30 PM
                              option 06:00 PM
                              option 06:30 PM
                              option 07:00 PM
                              option 07:30 PM
                              option 08:00 PM
                              option 08:30 PM
                              option 09:00 PM
                              option 09:30 PM
                              option 10:00 PM
                              option 10:30 PM
                              option 11:00 PM
                              option 11:30 PM
                              option 12:00 AM
                              option 12:30 AM
                      td: input.vui-input(type='text', v-model='item.name')
                      //-  Len
                      td 30 s
                      //- Ordered Spots
                      //- td.vui-text-align--right {{ Number.isInteger(total) ? parseInt(total) : 0 }}
                      td.vui-text-align--right {{ item.weeks.reduce((total, week) => total + week, 0) }}
                      td.spot-allocation-column(style='width: 503px')
                        .spot-allocation-row
                          .spot-allocation-container.spot-allocation-data(style='width: 455px')
                            ul.spot-allocation(style='left: 0')
                              li(v-for='(week, index) in item.weeks', :key='index')
                                .editable-spot-value
                                  input(
                                    @keypress = 'onKeypress'
                                    v-model.number='item.weeks[index]'
                                  )
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent='selectContents'
                              //-       @keypress='onKeypress'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week0'
                              //-     )
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent='selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week1')
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent = 'selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week2')
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent = 'selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week3')
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent = 'selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week4')
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent = 'selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week5')
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent = 'selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week6')
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent = 'selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week7')
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent = 'selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week8')
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent = 'selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week9')
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent = 'selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week10')
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent = 'selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week11')
                              //- li
                              //-   .editable-spot-value
                              //-     input(
                              //-       @click.prevent = 'selectContents'
                              //-       min='0'
                              //-       max='10'
                              //-       step='1'
                              //-       type='number'
                              //-       v-model.number='item.week12')
                      td: input.vui-input.vui-text-align--right(type='text', v-model.number='item.spotRate' @keypress='onKeypress')
                      td: input.vui-input.vui-text-align--right(type='text', v-model.number='item.buyerRating' @keypress='onKeypress')
                      td.vui-text-align--right {{Math.round((item.spotRate / item.buyerRating))  | formatMoney}}
                      td: input.vui-input(type='text', v-model='item.makegoodComment')

          // Station Avails
          #station-avails
            // Station Avails Header and Actions
            .vui-grid.vui-grid--align-spread.vui-m-bottom--medium
              .vui-align-middle
                h4.vui-text-heading--small Station Avails
              .vui-align-middle
                button.vui-button.vui-button--neutral.vui-m-right--x-small(@click='createSpots' type='button')
                  vui-icon.vui-align-middle.vui-m-right--xx-small(name='plus-circle')
                  | Create Spots
                button.vui-button.vui-button--brand(@click='addSpots' type='button')
                  vui-icon.vui-align-middle.vui-m-right--xx-small(name='plus-circle')
                  | Add Spot(s)

            // Station Avails Filter
            .vui-panel.vui-m-bottom--large.offers-makegoods-avails-filter
              .vui-panel__heading
                h2.vui-panel__title Search Station Avails
              .vui-panel__body
                form.vui-grid.vui-grid--vertical-align-end.vui-wrap

                  fieldset.vui-form--inline
                    .vui-form-element
                      .vui-form-element__control
                        label.vui-radio
                          input(v-model='filteringType' name='filteringTypeRadioGroup' type='radio' value='0')
                          span.vui-radio--faux.vui-m-right--xxx-small
                          span.vui-form-element__label All

                  fieldset.vui-form--inline.vui-m-right--large
                    .vui-form-element
                      .vui-form-element__control
                        label.vui-radio
                          input(v-model='filteringType' name='filteringTypeRadioGroup' type='radio' value='1')
                          span.vui-radio--faux.vui-m-right--xxx-small
                          span.vui-form-element__label Programs Ordered

                  fieldset.vui-form--inline.vui-m-right--large
                    .vui-form-element
                      .vui-form-element__control
                        a(@click.prevent='openRequestedDaypartsModal') DPs Availed

                  fieldset.vui-form-element.vui-m-right--small
                    label.vui-form-element__label(for='') Start Time
                    .vui-form-element__control
                      .vui-select_container
                        select.vui-select
                          option 08:00 AM
                          option 09:00 AM
                          option 10:00 AM
                          option 11:00 AM
                          option 12:00 PM
                          option 01:00 PM
                          option 02:00 PM
                          option 03:00 PM
                          option 04:00 PM
                          option(selected) 05:00 PM
                          option 06:00 PM

                  fieldset.vui-form-element.vui-m-right--small
                    label.vui-form-element__label(for='') End Time
                    .vui-form-element__control
                      .vui-select_container
                        select.vui-select
                          option 08:00 AM
                          option 09:00 AM
                          option 10:00 AM
                          option 11:00 AM
                          option 12:00 PM
                          option 01:00 PM
                          option 02:00 PM
                          option 03:00 PM
                          option 04:00 PM
                          option 05:00 PM
                          option 06:00 PM
                          option(selected) 07:00 PM
                          option 08:00 PM
                          option 09:00 PM
                  fieldset.vui-form-element.vui-m-right--small
                    .vui-form-element__control(style='width: 8rem')
                      .vui-form-element__control
                        .vui-select_container
                          select.vui-select
                            option All Days

                  fieldset.vui-form-element.vui-m-right--small
                    .vui-form-element__control(style='width: 11rem')
                      .vui-form-element__control
                        .vui-select_container
                          select.vui-select
                            option All Dayparts
                            option Early Morning
                            option Daytime
                            option Early Fringe
                            option(selected) Early News
                            option Prime Access
                            option Prime/Specials
                            option Sports
                            option Late News
                            option Late Fringe
                            option Weekend
                            option Overnight

                  fieldset.vui-form-element.vui-m-right--small
                    .vui-form-element__control(style='width: 9rem')
                      .vui-form-element__control
                        .vui-select_container
                          select.vui-select
                            option All Lengths
                            option 15 s
                            option 30 s

                  fieldset.vui-form-element.vui-m-right--small
                    .vui-form-element__control(style='width: 8rem')
                      vui-datepicker(v-model='flightStartDate' name='flightStartDate' placeholder='MM/dd/yyyy')

                  fieldset.vui-form-element.vui-m-right--small
                    .vui-form-element__control(style='width: 8rem')
                      vui-datepicker(v-model='flightEndDate' name='flightEndDate' placeholder='MM/dd/yyyy')

                  fieldset.vui-form-element.vui-m-right--small.vui-m-top--medium
                    .vui-form-element__control
                      button.vui-button.vui-button--brand(@click.prevent='applyFilter') Search

                  fieldset.vui-form-element.vui-m-top--medium
                    .vui-form-element__control
                      input.vui-button.vui-button--neutral(@click='filterClear' type='button' value='Clear')

            // Station Avails Grid
            div(style='height: 25rem')
              .vui-scrollable--x(style='height: 400px;overflow-y: scroll' v-show='showStationAvails' @close='showStationAvails=false')
                table.vui-table.vui-no-row-hover.vui-table--fixed-layout.vui-table--striped.mg-missed-spots
                  thead
                    tr
                      th.vui-truncate(style='width: 240px'): vui-sorting-column(title='Program')
                      th(style='width: 102px'): vui-sorting-column(title='Start Time')
                      th(style='width: 102px'): vui-sorting-column(title='End Time')
                      th(style='width: 95px'): vui-sorting-column(title='Days')
                      th(style='width: 140px'): vui-sorting-column(title='Daypart')
                      th(style='width: 60px'): vui-sorting-column(title='Len')
                      th(style='width: 77px'): vui-sorting-column(title='MG<br>Spots')
                      th.spot-allocation-column(style='width: 503px'): spot-allocation-header
                      th(style='width: 100px'): vui-sorting-column(title='Spot Rate')
                      th(style='width: 122px'): vui-sorting-column(title='Station<br>RTG')
                      th(style='width: 85px'): vui-sorting-column(title='Station<br>CPP')
                      th(style='width: 110px'): vui-sorting-column(title='Makegood<br>Comment')
                      th(style='width: 85px'): vui-sorting-column(title='GDLNS')
                      th(style='width: 255px'): vui-sorting-column(title='Guidelines Warnings / Violations')
                  tbody
                    tr(v-for='avail in stationAvails')
                      td.vui-truncate(style='width:240px', title='10:00 News4Jax')
                        label.vui-checkbox
                          input.vui-input(v-model='avail.isSelected' type='checkbox')
                          span.vui-checkbox--faux
                        span {{avail.name}}
                      td(:title='avail.startTime' style='width:102px') {{avail.startTime}}
                      td(:title='avail.endTime' style='width:102px') {{avail.endTime}}
                      td(:title='avail.days' style='width:95px')
                        span(v-if='!avail.isSelected') {{avail.days || avail.day}}
                        .vui-form-element__control(v-else)
                          .vui-select_container
                            select.vui-select(v-model='avail.selectedDay')
                              option MO-FR
                              option SU
                              option MO
                              option TU
                              option WE
                              option TH
                              option FR
                              option SA
                      td.vui-truncate(:title='avail.dayPartName' style='width: 140px') {{daypart.daypartName || avail.dayPartName || avail.daypart}}
                      td.vui-text-align--center(:title='avail.spotLength', style='width: 60px') {{avail.spotLength || '30 s'}}
                      td.vui-text-align--right(:title='avail.totalSpots' style='width: 77px')
                        //- span {{avail.totalSpots || avail.spotCount}}
                        span {{ avail.weeks.reduce((total, week) => total + week, 0) }}
                      td.spot-allocation-cell.editable-spot-allocation-cell(style='width: 503px')
                        //- spot-allocation-with-editable-quantity(
                        //-   v-bind:spots = 'avail.weeklySpotAllocations'
                        //-   v-bind:is-editable='avail.isSelected'
                        //- )
                        .spot-allocation-row.has-quantity
                          .spot-allocation-container.spot-allocation-data(style='width: 455px')
                            ul.spot-allocation(style='left: 0')
                              li(v-for='(week, index) in avail.weeks', :key='index')
                                div
                                  div
                                    .table-row.value
                                      input(@keypress='onKeypress' type='number' v-model.number='avail.weeks[index]')
                                    .table-row.quantity
                                      span.text-underline

                      td.vui-text-align--right(:title='avail.spotRate' style='width: 100px')
                        span(v-if='!avail.isSelected') {{avail.station.rate || avail.spotRate | numberWithCommas | formatMoney}}
                        span(v-else)
                          input.vui-text-align--right.vui-input(type='text' v-model.number='avail.station.rate')

                      td.vui-text-align--right(:title='avail.videaImpressions' v-if='isImpressionsBuyType' style='width: 122px' )
                        span.vui-text-align--right(v-if='!avail.isSelected') {{avail.station.rating || avail.videaImpressions}}
                        span(v-else)
                          input.vui-text-align--right.vui-input(type='text' v-model='avail.station.rating')

                      td.vui-text-align--right.currency(:title='avail.videa.rate /avail.station.rating' style='width: 85px') {{(avail.videa.rate / avail.station.rating) | formatRating}}

                      td.vui-text-align--right(:title='avail.comment' style='width: 110px')
                        span(v-if='!avail.isSelected') {{avail.comment}}
                        span(v-else)
                          input.vui-text-align--right.vui-input(v-model='avail.comment' type='text')
                      td.text-center(style='width: 85px')
                        i.img-conditional.avails-grid.declined(:class="{ 'accepded': avail.gdlns, 'declined': !avail.gdlns}")
                      td.text-center(style='width: 255px')

            .vui-m-top--medium
              label Found Avails Count:
              span {{availsCount}}
    requested-dayparts-popup(v-if='showRequestedDaypartsModal' @close='showRequestedDaypartsModal = false')
    totals-popup(v-if='showTotalsPopup' @close='showTotalsPopup = false')
</template>

<script>
  export default {
    name: 'pending-makegoods-id-offer',

    metaInfo: {
      title: 'Pending Makegood / Offer'
    },

    data () {
      return {
        // Preempts
        isEditMode: true,
        isImpressionsBuyType: true,
        preempts: require('@/components/order-management/open-preempts/open-preempts.config').context.preempts,
        weeklySpotAllocations: require('@/components/order-management/open-preempts/open-preempts.config').context.weeklySpotAllocations,
        spotsOffered: [],
        //
        availsCount: 0,
        spotValues: [
          0,0,0,0,0,0,0,0,0,0,0,0,0
        ],
        id: this.$route.params.id,
        order: { },
        orderLineItems: [],
        isOnlySelectedPreemptsShown: true,
        mgComment: '',
        canTransfer: false,
        canSave: true,
        showStationAvails: false,
        showRequestedDaypartsModal: false,
        showTotalsPopup: false,
        filteringType: 0,
        startTime: '',
        endTime: '',
        dayItems: [],
        daypartItems: [],
        lengthItems: [],
        flightStartDate: new Date(moment().subtract(2, 'weeks').weekday(1).toISOString()),
        flightEndDate: new Date(moment().add(3, 'weeks').weekday(7).toISOString()),
        startDate: new Date(moment().add(14, 'days').toISOString()),
        endDate: new Date(moment().add(5, 'days').toISOString()),
        selectedClassification: 'Unknown',
        daypart: {},
        programsToChange: [],
        stationAvails: [],
        classifications: [
          'Unknown',
          'MG for Missed Spot',
          'MG for Programing Change',
          'MG for Live event schedule changes',
          'MG to fix schedule',
          'Technical difficulties',
          'Wrong or no copy',
          'Buyer request'
        ],
        programData: {
          effectiveFrom: new Date(moment().add(14, 'days').toISOString()),
          effectiveThrough: new Date(moment().add(14, 'days').toISOString()),
          newProgramName: null,
          newSelectedDay: 'ALL',
          newStartTime: '07:00 AM',
          newEndTime: '07:00 AM'
        },
        oldProgramNamesBeingReplaced: [
          {
            orderDays: 'SU',
            startTime: '6:30 pm',
            endTime: '7:00 pm',
            program: 'Inside Edition',
            lineNumber: 76,
            length: '30 s',
            orderedSpots: 3,
            week0: null,
            week1: null,
            week2: null,
            week3: 1,
            week4: 1,
            week5: 1,
            week6: null,
            week7: null,
            week8: null,
            week9: null,
            week10: null,
            week11: null,
            week12: null,
            spotRate: 60.00,
            buyerImp: 5.8,
            buyerCpm: 10.34,
            lineDollarTotal: 180.00
          },
          {
            orderDays: 'SU',
            startTime: '6:30 pm',
            endTime: '7:00 pm',
            program: 'Inside Edition',
            lineNumber: 105,
            length: '15 s',
            orderedSpots: 2,
            week0: 0,
            week1: 0,
            week2: 0,
            week3: 0,
            week4: 0,
            week5: 0,
            week6: 1,
            week7: 1,
            week8: 0,
            week9: 0,
            week10: 0,
            week11: 0,
            week12: 0,
            spotRate: 45.50,
            buyerImp: 5.8,
            buyerCpm: 7.84,
            lineDollarTotal: 91.00
          }
        ]
      }
    },

    computed: {
      offered () {
        // return this.spotsOffered.filter(spot => spot.isSelected) || []
        // console.table(this.spotsOffered)
        return this.spotsOffered
      },

      selectedStationAvails () {
        return this.stationAvails.filter(avail => avail.isSelected) || []
      },

      selectedProgramsToChange () {
        return this.programsToChange.filter(program => program.isSelected) || []
      },

      spotValuesTotal () {
        return this.spotValues.reduce((total, value) => total + value, 0)
      },

      // total () {
      //   // return this.spotValues.reduce((sum, item) => sum + item, 0)

      //   return this.spotsOffered[0].week0 +
      //     this.spotsOffered[0].week1 +
      //     this.spotsOffered[0].week2 +
      //     this.spotsOffered[0].week3 +
      //     this.spotsOffered[0].week4 +
      //     this.spotsOffered[0].week5 +
      //     this.spotsOffered[0].week6 +
      //     this.spotsOffered[0].week7 +
      //     this.spotsOffered[0].week8 +
      //     this.spotsOffered[0].week9 +
      //     this.spotsOffered[0].week10 +
      //     this.spotsOffered[0].week11 +
      //     this.spotsOffered[0].week12
      // }
    },
    methods: {
      emitMethod (payload) {
        EventBus.$emit('EVENT_NAME', payload)
      },

      input ($event) {
        console.log( $event )
      },

      selectContents (event) {
        event.target.select()
      },

      onKeypress (event) {
        if ((event.which !== 46 || $(this).val().indexOf('.') !== -1) && (event.which < 48 || event.which > 57)) {
          event.preventDefault()
        }
      },

      fetchOrder (id) {
        axios.get(`/orders/${id}`)
          .then((response) => {
            this.order = response.data
          })
          .catch((error) => {
            console.log(error)
          })
      },

      fetchOrderLineItems () {
        axios.get(`/orderLineItems`)
          .then((response) => {
            this.orderLineItems = response.data
          })
          .catch((error) => {
            console.log(error)
          })
      },

      fetchStationAvails () {
        axios.get(`/stationAvails`)
          .then((response) => {
            this.stationAvails = response.data
          })
          .catch((error) => {
            console.log(error)
          })
      },

      fetchProgramsToChange () {
        axios.get(`/programsToChange`)
          .then((response) => {
            this.programsToChange = response.data
          })
          .catch((error) => {
            console.log(error)
          })
      },

      addSpotsColumn () {
      },

      removeSpots () {
        var spots = this.spotsOffered.filter(spot => spot.isSelected)
        spots.forEach(spot => this.spotsOffered.splice(spot, 1))
      },

      viewGuidelines () {
        alert('Sorry this feature has not been implemented')
      },

      sum(arr) {
        return arr.reduce((total, number) => {
          total + number
        }, 0)
      },

      createSpots () {
        this.spotsOffered.push(
          {
            isSelected: false,
            lineNumber: 0,
            startTime: null,
            endTime: null,
            selectedDay: null,
            spotRate: 0,
            buyerRating: 0,
            weeks: [
              0,
              0,
              0,
              0,
              0,
              0,
              0,
              0,
              0,
              0,
              0,
              0,
              0
            ],
          }
        )
      },

      addSpots () {
        // this.spotsOffered.push(this.selectedPrograms)
        // console.log(this.selectedPrograms)
        this.selectedStationAvails.forEach((avail) => {
          this.spotsOffered.push(avail)
        })
      },

      addProgramToChange () {
        // this.spotsOffered.push(this.selectedPrograms)
        this.selectedProgramsToChange.forEach((program) => {
          this.spotsOffered.push(program)
        })
      },

      openRequestedDaypartsModal () {
        this.showRequestedDaypartsModal = true
      },

      applyFilter () {
        this.showStationAvails = true
        this.fetchStationAvails()
      },

      filterClear () {
        this.showStationAvails = false
      },

      getStationCppm(avail) {
        // return avail
      },

      send () {
        this.$toasted.success('Sent...', {
          theme: "primary",
          position: "top-right",
          duration : 9000
        })
        // this.spotsOffered = []
      },

      transfer () {
        this.$toasted.success('Successfully Transferred to MediaOps', {
          theme: "primary",
          position: "top-right",
          duration : 9000
        })
        // this.spotsOffered = []
      },

      save () {},
      closeWindow () {
        window.close()
      }
    },

    watch: {
      '$route' (to, from) {
        this.id = to.params.id
      },

      'spotValues' (oldVal, newVal) {
        console.log(oldVal, newVal)
      }
    },

    beforeCreate () {
      this.$store.state.activeApp = 'sellers'
    },

    created () {
      this.fetchOrder(this.$route.params.id)
      this.fetchOrderLineItems()
      this.fetchProgramsToChange()
    },

    mounted () {
      EventBus.$on('EVENT_NAME', function (payload) {
        console.table(payload)
      })
    }
  }
</script>

<style lang="stylus">
  @media only screen and (min-width: 993px)
    #toasted-container
      max-width: 86%
    #toasted-container.top-right
      top: 0.25rem !important
      right: 1rem !important

  .spot-allocation-cell.editable-spot-allocation-cell .spot-allocation-data li > div input
    width 100%
</style>
