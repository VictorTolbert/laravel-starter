@extends('layouts.app')
@section('title', 'Components &mdash; Table')
@section('content')
<section class="hero is-dark has-code-bg" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('table') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Table</h1>
            <h2 class="subtitle">The inevitable HTML <b>table</b>, with special case cells</h2>
        </div>
    </div>
</section>

{{-- @include('partials.navbars.table-tools') --}}
@include('partials.navbars.utilities')
@include('partials.navbars.breadcrumb')

<hr class="is-marginless">

<section class="section">
    <div class="container is-fluid">

        @include('partials.tables.column-config')
        @include('partials.tabs.table-tools')

        <avails></avails>

        <a href="#component-overview">Component Overview</a>

        <h2 class="is-size-3">Inventory Guide</h2>
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
        <div class="content">

            <h2 id="component-overview">Component Overview</h2>
            <p>To initialize a data table, apply the <code>.slds-table</code> class to the table element. This class creates a table with formatted cells and allows you to use data table utilities.</p>

        </div>

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
