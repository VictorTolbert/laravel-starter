<template lang="pug">
  vui-modal(size='large')
    .modal-header.vui-m-bottom--large
      h3.vui-text-heading--medium.vui-grid.vui-grid--align-spread
        span Edit Rating
        a.vui-text-align--right(@click.prevent = '$emit("close")' style='color: white')
          vui-icon(name='close', style='width: 2rem; height: 2rem')
    .modal-body
      form(name='ratingForProgram')
      .ng-scope(ng-if='ratingType.rating')
        h2.vui-text-heading--large Skew and Factor
        p.vui-text--longform.vui-m-bottom--large
          | Use the Edit Ratings window to skew ratings by household, apply a
          | positive or negative factor, or edit ratings individually.
          | To view ratings rationale click
          a(href='/Files/05-10001-02 Ratings Rationale.pdf', download='') here.
        .error
          div(v-show='false') Factor needs to be between 0.01 and 5.00
          div(v-show='false') Not all of station ratings are valid

        .vui-grid.vui-grid--pull-padded.vui-grid--align-spread.vui-m-bottom--large.ng-scope(ng-if='ratingType.rating')
          .vui-col--padded
            .vui-form-element
              label.vui-form-element__label(for='hhRating') HH Rating
            .vui-form--inline
              .vui-form-element
                .vui-form-element__control
                  //- v-bind:disabled='isRepUser'
                  input#hhRating.vui-input(
                    v-model.number='programRatings.householdRating'
                    name='hhRating'
                    ng-pattern='/^[0-9]+(\.[0-9])?$/'
                    pv-decimal='{nullable: true, scale:1, formatRaw: true}'
                    min='0.1'
                    max='70'
                    step='0.1'
                    type='number'
                  )
              .vui-form-element
                .vui-form-element__control
                  //- v-if='!isRepUser'
                  input#btnApplySkew.vui-button.vui-button--brand(
                    @click='applySkewOnClick()'
                    v-bind:disabled='!programRatings.householdRating'
                    type='button'
                    value='Apply Skew'
                  )
          .vui-col--padded
            .vui-form-element
              label.vui-form-element__label(for='ratingFactor') Factor
            .vui-form--inline
              .vui-form-element
                .vui-form-element__control
                  //- v-bind:disabled='isRepUser'
                  input#ratingFactor.vui-input(
                    v-model.number='programRatings.ratingFactor'
                    name='ratingFactor'
                    pv-decimal='{nullable: true}'
                    required=''
                    min='0.01'
                    max='5.00'
                    step='0.01'
                    type='number'
                  )
              .vui-form-element
                .vui-form-element__control
                  //- v-if='!isRepUser'
                  input#btnApplyFactor.vui-button.vui-button--brand(
                    @click='applyFactorOnClick()'
                    v-bind:disabled='!programRatings.ratingFactor'
                    type='button'
                    value='Apply Factor'
                  )

      .vui-grid.vui-grid--align-spread.vui-p-around--small(style='background-color: white')
        .vui-media
          .vui-media__body
            p.vui-align-middle
              span.vui-m-right--xx-small Station Rate
              span.vui-text-heading--medium  ${{ context.station.rate }}
      .vui-scrollable--x.vui-m-bottom--large(style='height: 20rem; overflow-x: hidden; overflow-y: scroll')

        table.vui-table.vui-no-row-hover
          thead
            tr
              th Demo
              th.u-width-medium Station Rating
              th.u-width-small
                | CPP
                sup 1
              th.u-width-medium Videa Rating
              th.u-width-small
                | CPP
                sup 1

          tbody
            tr(
              v-bind:class = '(index % 2 === 0) ? "vui-highlight" : ""'
              v-for = '(demo, index) in programRatings.ratings',
            )
              td {{ demo.stationDemoType }}
              td
                //- v-model.number = 'demo.stationRating'
                input.vui-input.vui-text-align--right(
                  v-bind:value = 'demo.stationRating | formatRating'
                )
              td.vui-text-align--right
                cpp(
                  v-bind:rate = 'context.station.rate'
                  v-bind:rating = 'demo.stationRating'
                )
              td.vui-text-align--right {{ demo.videaRating | formatRating }}
              td.vui-text-align--right
                cpp(
                  v-bind:rate = 'context.station.rate'
                  v-bind:rating = 'demo.videaRating'
                )

      .vui-grid.vui-grid--align-end
        button.vui-button.vui-button--neutral.vui-m-right--x-small(@click.prevent='$emit("close")') Cancel
        button.vui-button.vui-button--brand(@click.prevent='saveEditedRatings(context)') Save
</template>

<script>
  import { EventBus } from '@/plugins/event-bus'

  export default {
    props: {
      show: Boolean,
      heading: String,
      data: Object,
      context: Object,
    },

    data () {
      return {
        comment: '',
        defaultDemo: 'A25-54',
        previousHHRating: 2.3,
        previousFactor: 0,
        programRatings: {
          householdRating: 2.3,
          ratingFactor: 0,
          ratings: [
            {
              stationDemoType: "P25-54",
              stationRating: 2.1,
              videaRating: 2.1
            },
            {
              stationDemoType: "P25-49",
              stationRating: 2.1,
              videaRating: 2.4
            },
            {
              stationDemoType: "P18-49",
              stationRating: 1.0,
              videaRating: 0.8
            },
            {
              stationDemoType: "M18-49",
              stationRating: 1.2,
              videaRating: 1.1
            },
            {
              stationDemoType: "M25-54",
              stationRating: 1.7,
              videaRating: 1.7
            },
            {
              stationDemoType: "M18-49",
              stationRating: 1.2,
              videaRating: 1.1
            },
            {
              stationDemoType: "W25-54",
              stationRating: 1.8,
              videaRating: 1.8
            }
          ]
        },
        reps: [
          {
            name: 'Adamy, John',
            office: 'New York, NY',
            checked: false
          },
          {
            name: 'Admire, Tony',
            office: 'Austin, TX',
            checked: false
          },
          {
            name: 'Akens, Phil',
            office: 'New York, NY',
            checked: false
          },
          {
            name: 'Aden, Michael',
            office: 'Chicago, IL',
            checked: false
          },
          {
            name: 'Adel, Joe',
            office: 'Atlanta, GA',
            checked: false
          }
        ]
      }
    },

    methods: {
      saveEditedRatings (context) {
        this.$emit('close')
      },

      applySkewOnClick () {
        var diff = this.programRatings.householdRating / this.previousHHRating
        this.programRatings.ratings.forEach((element) => {
          if (element.stationDemoType !== this.defaultDemo) {
            element.stationRating *= diff
          }
        })
        this.previousHHRating = this.programRatings.householdRating
      },

      applyFactorOnClick () {
        this.programRatings.ratings.forEach((element) => {
          if (element.stationDemoType !== this.defaultDemo) {
            element.stationRating *= this.programRatings.ratingFactor
          }
        })
        this.previousFactor = this.programRatings.ratingFactor
      },

      formatRating (num) {
        return num.toFixed(1)
      },

      // updateRatingOnPriceGuide (program) {
      //   var newRating = 0
      //   this.programRatings.ratings.forEach(function(element) {
      //     if (element.stationDemoType === this.primaryDemo) {
      //       newRating = element.stationRating
      //     }
      //     element.stationImpressions = element.stationRating * 0.01 * element.universe
      //   })
      //   program.stationRating.value = newRating
      //   program.stationImpressions.value = newRating * 0.01 * program.universe
      //   program.stationCpm.value = (program.stationRate.value * 1000) / program.stationImpressions.value
      // },

      // overrideHhRatingForDefaultDemo () {
      //   this.programRatings.ratings.forEach(function(element) {
      //     if (element.stationDemoType === this.defaultDemo && element.demoCode === 'HH') {
      //       element.stationRating = $scope.programRatings.householdRating
      //     }
      //   })
      // },

      // updateOriginalStationRating () {
      //   this.programRatings.ratings.forEach(function(element) {
      //     element.originalStationRating = element.stationRating
      //   })
      // },

      // submitRatingOnClick () {
      //   this.overrideHhRatingForDefaultDemo()
      //   priceGuideService.SaveRatingsForProgram(this.current.keys[0], this.programRatings)
      //     .then(
      //       function () {
      //         this.updateRatingOnPriceGuide(this.current)
      //         this.updateOriginalStationRating()
      //         this.showRatingPopup = false
      //       }, function () {
      //           this.errorMsg = 'An error occurred while saving the ratings. Please try again later.'
      //       })
      // }
    }
    // mounted () {
    //   EventBus.listen('display-edit-ratings-modal', (context) => {
    //     this.show = true
    //     this.context = context
    //   })
    // }
  }
</script>
