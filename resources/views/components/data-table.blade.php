@extends('layouts.app')
@section('content')
<section class="hero is-dark" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('data-table') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Data Table</h1>
            <h2 class="subtitle">The inevitable HTML <b>table</b>, with special case cells</h2>
        </div>
    </div>
</section>

<section class="section p-t-md">
    <div class="container is-fluid">

        {{-- @include('partials.tables.column-config') --}}
        {{-- @include('partials.tabs.table-tools') --}}
        {{-- @include('partials.navbars.project-info') --}}
        {{-- <h3 class="is-size-4">Exploration</h3> --}}
        {{-- <hr> --}}
        <b-tabs type="is-boxed">
            <b-tab-item label="Inspiration">
                <section class="section">
                    <div class="columns">
                        <div class="column is-8">
                            <div class="box">
                                <div class="content is-medium">
                                    <h1>Design better data tables</h1>
                                    <h2>The ingredients of a successful data table UI</h2>

                                    <p>Data is useless without the ability to visualize and act on it. The success of future industries will couple advanced data collection with a better user experience, and the data table comprises much of this user experience.</p>

                                    <p>Good data tables allow users to scan, analyze, compare, filter, sort, and manipulate information to derive insights and commit actions. This article presents a list of design structures, interaction patterns, and techniques to help you design better data tables.</p>
                                    <div class="columns is-multiline">
                                        <div class="column is-6">
                                            <h3>Basic Filtering</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/basic-filtering.jpg">
                                            </figure>
                                            <p>Basic filtering allows users to manipulate the data presented in the table.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Customizable Columns</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/customizable-columns.jpg">
                                            </figure>
                                            <p>The customizable columns feature enables users to pick the columns they want to see and sort accordingly. The feature may include the ability to save presets for later use.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Display Density</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/display-density.gif">
                                            </figure>
                                            <p>Smaller row height enables the user to view more data without the need for scrolling. However, is effects scannability leading to visual parsing errors. That is why many successful data table designs incorporate the ability to control display density.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Add Columns</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/add-columns.jpg">
                                            </figure>
                                            <p>This pattern allows users to add columns from a dataset. It is a way to keep the table’s data limited to essential information, and allows the user to add additional columns based on their use case.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Expandable Rows</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/expandable-rows.gif">
                                            </figure>
                                            <p>Expandable rows allows the user to evaluate additional information without loosing their context.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Filter Columns</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/filter-columns.gif">
                                            </figure>
                                            <p>This design pattern allows users to assign filtering parameters to specific columns.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Fixed Header</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/fixed-header.gif">
                                            </figure>
                                            <p>Fixing the row header as a user scrolls provides context on what column the user is on.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Horizontal Scrolling</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/horizontal-scrolling.gif">
                                            </figure>
                                            <p>Horizontal scrolling is inevitable when presenting large datasets. It is good practice to place identifier data in the first column. As an advanced feature, enable individual locking of columns so users can compare data with multiple anchoring identifiers.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Hover Actions</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/hover-actions.gif">
                                            </figure>
                                            <p>Presenting additional action when a user hovers reduces visual clutter. However, it can cause discoverability issues because the user needs to interact with the table to expose the presentation of actions.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Inline Editing</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/inline-editing.gif">
                                            </figure>
                                            <p>Inline editing allows the user to change data without navigating to a separate details view.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Modal</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/modal.gif">
                                            </figure>
                                            <p>Modals allow the user to stay within the table view, but provides more focus to the additional information and actions.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Multi Modal</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/multi-modal.gif">
                                            </figure>
                                            <p>A multi-modal feature is powerful for active use users to crank through a number of actions, or compare details of disparate items.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Pagination</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/pagination.jpg">
                                            </figure>
                                            <p>Pagination works by presenting a set number of rows in a view, with the ability to navigate to another set. The above example provides the ability to customize the row count per view. This pattern is often replaced by infinite scroll. Infinite scroll progressively loads results as a user scrolls. Infinite scroll works well for discovery websites, but is often disastrous for prioritization apps.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Quick View</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/quick-view.gif">
                                            </figure>
                                            <p>Much like expandable rows, quick view enables a user to view additional information while staying in-context.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Resizable Columns</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/resizable-columns.gif">
                                            </figure>
                                            <p>Resizing columns allows users to see abbreviated data in full.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Row Style</h3>
                                            <h4>Zebra Stripes, Line Divisions, Free Form.</h4>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/row-style.gif">
                                                <p>The row style helps users scan data. Reducing visual noise by removing row lines or zebra stripes works well for small datasets. Users may lose their place when parsing larger datasets. Line divisions help users keep their place. Alternating rows (aka zebra stripes) help users keep their place when scanning long horizontal datasets. Although they cause usability problems when there is a small number of rows because users may ascribe meaning to the highlighted rows.</p>
                                            </figure>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Row to Details</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/row-to-details.gif">
                                            </figure>
                                            <p>Clicking on a row link transforms the table into a view with list items on the left and additional details on the right. It enables a user to parse large datasets, as well as reference many items without losing their place.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Searchable Columns</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/searchable-columns.jpg">
                                            </figure>
                                            <p>This design pattern allows a user to search specific values within each column.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Sortable Columns</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/sortable-columns.jpg">
                                            </figure>
                                            <p>Column sorting allows users to organize rows alphabetically and numerically.</p>
                                        </div>
                                        <div class="column is-6">
                                            <h3>Visual Table Summary</h3>
                                            <figure class="image is-4x3">
                                                <img src="/images/screengrabs/data-tables/visual-table-summary.jpg">
                                            </figure>
                                            <p>A visual data summary provides an overview of the accompanying table. It allows the user to spot patterns and issues in aggregate before actioning summary insights.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </b-tab-item>
            <b-tab-item label="Experiments">
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <a class="level-item">
                                <div class="tags has-addons">
                                    <span class="tag is-medium">Conflicts</span>
                                    <span class="tag is-medium is-danger">8</span>
                                </div>
                            </a>
                            <a class="level-item">
                                <div class="tags has-addons">
                                    <span class="tag is-medium">Gaps</span>
                                    <span class="tag is-medium is-danger">4</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    @include('partials.navbars.utilities')

                    <div class="box">
                        <h1 class="title">Station Groups</h1>

                        <hr class="is-marginless">

                        <b-table :data="db.demo.stationGroups" striped narrowed>
                            <template scope="props">
                                <b-table-column field="rank" label="Rank" width="40" sortable numeric>
                                    @{{ props.row.rank }}
                                </b-table-column>
                                <b-table-column field="group" label="Group" sortable>
                                    @{{ props.row.group }}
                                </b-table-column>
                                <b-table-column field="revenue" label="Revenue" sortable numeric>
                                    @{{ props.row.revenue }}
                                </b-table-column>
                            </template>
                        </b-table>
                    </div>

                    <avails></avails>
                </section>
            </b-tab-item>

{{--             <b-tab-item label="Inventory Guide">
                @include('partials.navbars.utilities')
                <b-table
                    :bordered="isBordered"
                    :checkable="isCheckable"
                    :checked-rows.sync="checkedRows"
                    :data="isEmpty ? [] : clients"
                    :default-sort-direction="defaultSortDirection"
                    :loading="isLoading"
                    :mobile-cards="hasMobileCards"
                    :narrowed="isNarrowed"
                    :paginated="clients.length > perPage"
                    :pagination-simple="isPaginationSimple"
                    :per-page="perPage"
                    :row-class="(row, index) => row.id === 1 ? 'is-warning' : ''"
                    :selected.sync="selectedClient"
                    :striped="isStriped"

                    default-sort=""
                    detailed>
                    <template scope="props">
                        <b-table-column v-for="(column, index) in clientsColumns"
                            :key="index"
                            :label="column.title"
                            :field="column.field"
                            :meta="column.meta"
                            :width="column.width"
                            :numeric="column.isNumeric"
                            :centered="column.isCentered"
                            :sortable="column.isSortable"
                            :visible="column.isVisible" >
                            <span v-if="column.field == 'first_name'">
                                <b-icon
                                    v-if="props.row.id == 1"
                                    icon="fiber_manual_record">
                                </b-icon>
                                <b-icon
                                    v-else
                                    icon="dfe">
                                </b-icon>
                                <span>@{{ props.row[column.field] }}</span>
                            </span>
                            <span v-if="column.field == 'last_name'">
                                <a class="day">
                                    <span>M</span>
                                </a>
                                <a class="day">
                                    <span>T</span>
                                </a>
                                <a class="day">
                                    <span>W</span>
                                </a>
                                <a class="day">
                                    <span>T</span>
                                </a>
                                <a class="day">
                                    <span>F</span>
                                </a>
                                <a class="day">
                                    <span>S</span>
                                </a>
                                <a class="day">
                                    <span>S</span>
                                </a>
                            </span>
                            <span v-else>
                                @{{ props.row[column.field] }}
                            </span>
                        </b-table-column>
                    </template>

                    <template slot="detail" scope="props">
                        <h4 class="is-size-4">Detail</h4>
                    </template>

                    <template slot="empty">
                        <section class="section">
                            <div class="content has-text-grey has-text-centered">
                                <p>
                                    <b-icon icon="sentiment_very_dissatisfied" size="is-large"></b-icon>
                                </p>
                                <p>Nothing here.</p>
                            </div>
                        </section>
                    </template>
                </b-table>
            </b-tab-item> --}}
{{--             <b-tab-item label="Order Reporting">
            </b-tab-item>
            <b-tab-item label="Order Search">
            </b-tab-item>
            <b-tab-item label="Order Summary">
            </b-tab-item> --}}
        </b-tabs>

{{--         <div class="content">
            <h2 id="component-overview">Component Overview</h2>
            <p>To initialize a data table, apply the <code>.slds-table</code> class to the table element. This class creates a table with formatted cells and allows you to use data table utilities.</p>
        </div> --}}
    </div>
</section>
{{-- <b-modal
    :active.sync="isCustomizeDataModalActive"
    :width="960"
    has-modal-card
    >
    <div class="card">
        <div class="card-content">
            <div class="">
                <div class="content">
                    <h2 class="subtitle">Edit Columns</h2>
                    <p>Show or hide columns. Prioritze columns by using up and down arrows. Customize column widths and ability to lock first column.</p>


                </div>
                <table class="b-table--custom table is-bordered is-narrow is-striped">
                    <thead>
                        <tr>
                            <th>Show/Hide</th>
                            <th>Column</th>
                            <th>Width</th>
                            <th>Lock Column</th>
                        </tr>
                    </thead>

                    <tr v-for="(column, index) in clientsColumns">
                        <td class="has-text-centered">
                            <b-checkbox v-model="column.isVisible"></b-checkbox>
                        </td>
                        <td>
                            @{{ column.title }}
                        </td>
                        <td>
                            <b-select v-model="column.width">
                                <option value="">Auto Fit</option>
                                <option value="80">XX Small (80)</option>
                                <option value="160">X Small (160)</option>
                                <option value="240">Small (240)</option>
                                <option value="320">Medium (320)</option>
                                <option value="480">Large (480)</option>
                                <option value="640">X Large (640)</option>
                                <option value="720">XX Large (720)</option>
                            </b-select>
                        </td>
                        <td class="has-text-centered">


                            <a class="is-large" v-if="index == 2">
                                <span class="icon is-large">
                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                </span>
                            </a>
                        </td>
                    </tr>
                </table>
                <div class="field">
                    <a class="button is-primary" @click="isCustomizeDataModalActive = false">OK</a>
                    <a class="button is-neutral" @click="isCustomizeDataModalActive = false">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</b-modal> --}}
@endsection
