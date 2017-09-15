<template lang="pug">
  .vui-grid.vui-grid--align--spread.vui-m-bottom--medium(ng-if='showDialogData()')
    fieldset.vui-form-element.vui-size--1-of-2.vui-m-right--medium
      label.vui-form-element__label Makegood Comment
      textarea.vui-textarea.vui-p-around--medium(style='box-shadow: 0 2px 2px 0 rgba(0,0,0,.16); border: 1px solid #ccc; min-height: 8rem; background: rgba(250,255,189,.2)', ng-bind='makegoodComment', readonly='readonly')
    fieldset.vui-form-element.vui-size--1-of-2.vui-align-middle.ng-hide(ng-show='totalGridIsVisible()')
      .vui-container--small.vui-container--center
        // Makegoods Total Grid
        table.vui-table.vui-no-row-hover.mgs-total-grid.text-right
          thead
            tr
              th Totals
              th.vui-text-align--right Spots
              th.vui-text-align--right Dollars
              th.vui-text-align--right IMP
          tbody
</template>
