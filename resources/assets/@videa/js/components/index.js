import Vue from 'vue'

export default {
  registerAllGlobalComponents () {
    Vue.component('cpm', require('@/components/common/cpm'))
    Vue.component('cpp', require('@/components/common/cpp'))
    Vue.component('vui-back-to-top', require('@/components/common/back-to-top'))
    Vue.component('vui-badge', require('@/components/common/badge'))
    Vue.component('vui-button', require('@/components/common/button'))
    Vue.component('vui-checkbox', require('@/components/common/checkbox'))
    Vue.component('vui-checkbox-list', require('@/components/common/form-element/checkbox-list'))
    Vue.component('vui-datagrid-heading', require('@/components/common/datagrid/datagrid-heading'))
    Vue.component('vui-datagrid-tools', require('@/components/common/datagrid/datagrid-tools'))
    Vue.component('vui-datepicker', require('@/components/common/form-element/datepicker'))
    Vue.component('vui-daypart-selector', require('@/components/common/daypart-selector'))
    Vue.component('vui-dropdown', require('@/components/common/dropdown'))
    Vue.component('vui-footer', require('@/components/common/footer'))
    Vue.component('vui-footnote', require('@/components/common/footnote'))
    Vue.component('vui-icon', require('@/components/common/icon'))
    Vue.component('vui-input', require('@/components/common/form-element/input'))
    Vue.component('vui-items-per-page-selector', require('@/components/common/datagrid/items-per-page-selector'))
    Vue.component('vui-media', require('@/components/common/media-object'))
    Vue.component('vui-modal', require('@/components/common/modal'))
    Vue.component('vui-panel', require('@/components/common/panel'))
    Vue.component('vui-quarter-selector', require('@/components/common/form-element/quarter-selector'))
    Vue.component('vui-resizable-textarea', require('@/components/common/form-element/resizable-textarea'))
    Vue.component('vui-select', require('@/components/common/select'))
    Vue.component('vui-sorting-column', require('@/components/common/datagrid/sorting-column'))
    Vue.component('vui-subtitle', require('@/components/common/subtitle'))
    Vue.component('vui-table', require('@/components/common/table'))
    Vue.component('vui-textarea', require('@/components/common/textarea'))
    Vue.component('vui-title', require('@/components/common/title'))

    Vue.component('order-search-detail-tabs', require('@/components/order-management/order-search/detail-tabs'))
    Vue.component('order-search-detail-grid', require('@/components/order-management/order-search/detail-grid'))

    Vue.component('order-detail-info', require('@/components/order-management/order-detail-info'))
    Vue.component('offers-reject-offer-popup', require('@/components/order-management/pending-makegoods/offers-reject-offer-popup'))
    Vue.component('nested-order-line-grid', require('@/components/order-management/pending-makegoods/nested-order-line-grid'))
    Vue.component('nested-order-line-invoice-details-grid', require('@/components/order-management/pending-makegoods/nested-order-line-invoice-details-grid'))
    Vue.component('nested-order-line-makegoods-grid', require('@/components/order-management/pending-makegoods/nested-order-line-makegoods-grid'))
    Vue.component('spot-allocation-with-editable-quantity', require('@/components/order-management/pending-makegoods/spot-allocation-with-editable-quantity'))
    Vue.component('spot-allocation-with-traffic-spots', require('@/components/order-management/pending-makegoods/spot-allocation-with-traffic-spots'))
    Vue.component('spot-allocation-with-missed-spots', require('@/components/order-management/pending-makegoods/spot-allocation-with-missed-spots'))
    Vue.component('spot-allocation-header', require('@/components/order-management/pending-makegoods/spot-allocation-header'))

    Vue.component('offer-tab-details', require('@/components/order-management/pending-makegoods/offer-tab-details'))
    Vue.component('offer-tab-offer-grid', require('@/components/order-management/pending-makegoods/offer-tab-offer-grid'))
    Vue.component('offer-tab-order-grid', require('@/components/order-management/pending-makegoods/offer-tab-order-grid'))

    Vue.component('order-line-curr-info-rate-rating-grid', require('@/components/order-management/pending-makegoods/order-line-curr-info-rate-rating-grid'))
    Vue.component('order-line-current-info-popup', require('@/components/order-management/pending-makegoods/order-line-current-info-popup'))

    // Vue.component('makegoods-common-avail-offer-grids-wrapper', require('@/components/pending-makegoods/makegoods-common-avail-offer-grids-wrapper'))
    // Vue.component('makegoods-program-name-change-lines-grid', require('@/components/pending-makegoods/makegoods-program-name-change-lines-grid'))
    Vue.component('spots-run-not-ordered-popup', require('@/components/order-management/pending-makegoods/spots-run-not-ordered-popup'))
    Vue.component('spots-run-not-ordered-grid', require('@/components/order-management/pending-makegoods/spots-run-not-ordered-grid'))
    // Vue.component('makegoods-classification-dropdown', require('@/components/pending-makegoods/makegoods-classification-dropdown'))

    Vue.component('requested-dayparts-popup', require('@/components/order-management/pending-makegoods/requested-dayparts-popup'))
    Vue.component('orbit-details-popup-grid', require('@/components/order-management/pending-makegoods/orbit-details-popup-grid'))
    Vue.component('orbit-details-popup', require('@/components/order-management/pending-makegoods/orbit-details-popup'))

    Vue.component('program-change-lines-to-change-grid', require('@/components/order-management/pending-makegoods/program-change-lines-to-change-grid'))

    // Vue.component('makegoods-order-details-info', require('@/components/pending-makegoods/makegoods-order-details-info'))
    // Vue.component('makegoods-offered-spots-grid', require('@/components/pending-makegoods/makegoods-offered-spots-grid'))

    Vue.component('revision-history-grid', require('@/components/order-management/pending-makegoods/revision-history-grid'))
    Vue.component('ebiz-history-popup', require('@/components/order-management/pending-makegoods/ebiz-history-popup'))
    Vue.component('ebiz-history-grid', require('@/components/order-management/pending-makegoods/ebiz-history-grid'))
    Vue.component('totals-popup', require('@/components/order-management/pending-makegoods/totals-popup'))

    // Vue.component('makegoods-offer-spots-grid', require('@/components/pending-makegoods/makegoods-offer-spots-grid'))
    // Vue.component('makegoods-preempts-grid', require('@/components/pending-makegoods/makegoods-preempts-grid'))
    // Vue.component('makegoods-avails-filter', require('@/components/pending-makegoods/makegoods-avails-filter'))
    // Vue.component('makegoods-offer-popup', require('@/components/pending-makegoods/makegoods-offer-popup'))
    // Vue.component('makegoods-avails-grid', require('@/components/pending-makegoods/makegoods-avails-grid'))
    Vue.component('makegoods-total-grid', require('@/components/order-management/pending-makegoods/makegoods-total-grid'))

  }
}
