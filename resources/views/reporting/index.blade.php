@extends('layouts.app')
@section('content')
    <section class="section">
        <div class="content">
            @include('sitemap')
        </div>
    </section>

    <section class="section">
        <div class="columns is-multiline">

            <div class="column is-3">
{{--                 <b-tabs>
                    <b-tab-item v-for="(item, index) in $parent.db.features.dataTables" :key="index" :label="item">
                        <figure class="image is-4x3">
                            <img :src="`/images/screengrabs/data-tables/${item}.jpg`">
                        </figure>
                    </b-tab-item>
                </b-tabs> --}}
            </div>

            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/basic-filtering.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/customizable-columns.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/display-density.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/expandable-rows.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/filter-columns.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/fixed-header.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/horizontal-scrolling.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/hover-actions.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/inline-editing.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/modal.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/multi-modal.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/pagination.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/quick-view.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/resizable-columns.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/row-style.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/row-to-details.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/searchable-columns.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/sortable-columns.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/data-tables/visual-table-summary.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/fdk_preview_800x600.png">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/final.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/flexport-website.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/icons.png">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/invoice-reminder-flow.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/private.png">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/style-guide.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/table.gi">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/screengrabs/website-wireframe.gif">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/array-destructuring.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/async-resize.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/async-forgot-password.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/async-photo-resize.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/browser-window-consts.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/cents-to-price.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/check-validity.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/console-group.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/console-object.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/css-grid-properties.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/css-vars-in-pseudo-classes.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/find-and-display-matches.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/flexbox-example.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/format-price.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/input-label.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/install-json2csv.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/install-nodemon.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/jade-ink-and-juice.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/node-version-check.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/object-fit.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/object-spread.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/object-spread.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/promises.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/remove-utm.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/render-keywords-map-example.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/send-message-promise.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/var-let-const.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/virtual-fields-gravatar.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/tips/what-is-node.jpg">
                </figure>
            </div>

            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/25596863_xl.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/alone.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/background.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/data-model-example.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/login-background.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/saul-bass.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/victor-tolbert.jpg">
                </figure>
            </div>
            <div class="column is-3">
                <figure class="image is-4x3">
                    <img src="/images/waves.jpg">
                </figure>
            </div>
        </div>
    </section>
@endsection
