@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Data Table</h1>
        <h2 class="subtitle">The inevitable HTML <b>table</b>, with special case cells</h2>
    </div>
</div>
@endsection

@section('content')
<section class="section" style="display: none">
    <div class="container is-fluid">
        <b-message title="Danger with icon" type="is-danger" has-icon>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
        </b-message>

        <b-message title="Success with icon" type="is-success" has-icon>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
        </b-message>

        <b-message title="Info with icon" type="is-info" has-icon>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
        </b-message>

        <b-message title="Warning with icon" type="is-warning" has-icon>
            Lorem ipsum dolor sit amet, consectetur warning elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
        </b-message>
    </div>
</section>
<section class="section">
    <div class="container is-fluid">
        <div class="level">
            <div class="level-left">
                <div class="level-item">
                    <div class="tags has-addons">
                        <span class="tag is-medium">Conflicts</span>
                        <span class="tag is-medium is-danger">8</span>
                    </div>
                </div>
                <div class="level-item">
                    <div class="tags has-addons">
                        <span class="tag is-medium">Gaps</span>
                        <span class="tag is-medium is-danger">4</span>
                    </div>
                </div>
            </div>
            <div class="level-right">
            </div>
        </div>
        <div class="box">
            <b-field grouped group-multiline>
{{--                 <b-field label="Name" expanded>
                    <b-field>
                        <b-select placeholder="Title">
                            <option>Mr.</option>
                            <option>Ms.</option>
                        </b-select>
                        <b-input placeholder="Name" expanded></b-input>
                    </b-field>
                </b-field>
                <b-field label="Email" expanded>
                    <b-input placeholder="some@email.com"></b-input>
                </b-field>
                <b-field label="Autocomplete" expanded>
                    <b-input></b-input>
                </b-field> --}}
                <b-field label="Program Name" expanded>
                    <b-input></b-input>
                </b-field>
                <b-field label="Select">
                    <b-select placeholder="Select Daypart">
                        <option>Daytime</option>
                        <option>Prime</option>
                        <option>Early Morning</option>
                        <option>Early News</option>
                        <option>Early Fringe</option>
                        <option>Late Night</option>
                    </b-select>
                </b-field>
                <b-field label="Flight Start">
                    <b-datepicker
                        placeholder="Click to select..."
                        :first-day-of-week="1"
                        icon="today"
                        :readonly="false">
                        <button class="button is-primary"
                            @click="date = new Date()">
                            <b-icon icon="today"></b-icon>
                            <span>Today</span>
                        </button>

                        <button class="button is-danger"
                            @click="date = null">
                            <b-icon icon="clear"></b-icon>
                            <span>Clear</span>
                        </button>
                    </b-datepicker>
                </b-field>
                <b-field label="Flight End">
                    <b-datepicker
                        placeholder="Click to select..."
                        icon="today"
                        :first-day-of-week="1"
                        :readonly="false">
                    </b-datepicker>
                </b-field>
                <b-field label="Days">
                    <b-select>
                        <option>Mon - Fri</option>
                        <option>Mon - Sun</option>
                        <option>Sat - Sun</option>
                        <option>Mon</option>
                        <option>Tue</option>
                        <option>Wed</option>
                        <option>Thu</option>
                        <option>Fri</option>
                        <option>Sat</option>
                        <option>Sun</option>
                    </b-select>
                </b-field>
                <b-field label="Show Programs">
                    <b-select>
                        <option>Availed Only</option>
                        <option>Non-Avaiiled Only</option>
                        <option>Both Availed and Non-Availed</option>
                    </b-select>
                </b-field>
                <div class="field">
                    <label class="label">&nbsp;</label>
                    <div class="control">
                        <button class="button is-primary">Search</button>
                        <button class="button is-neutral">Clear</button>
                    </div>
                </div>
            </b-field>
        </div>
        <div class="level" style="margin-bottom: 0.25rem">
            <div class="level-left">
            </div>
        </div>

        {{-- <avails></avails> --}}


        <div class="level" style="margin-bottom: 0.25rem">
            <div class="level-left">

                <div class="level-item">
                    <div class="tags has-addons">
                        <span class="tag is-success">&nbsp;</span>
                        <span class="tag">Recurring Program</span>
                    </div>
                </div>
                <div class="level-item">
                    <div class="tags has-addons">
                        <span class="tag is-warning">&nbsp;</span>
                        <span class="tag">Program Deviation</span>
                    </div>
                </div>
                <div class="level-item">
                    <div class="tags has-addons">
                        <span class="tag is-danger">&nbsp;</span>
                        <span class="tag">Non-Sellable Program</span>
                    </div>
                </div>
                <div class="level-item">
                    <div class="tags has-addons">
                        <span class="tag is-info">&nbsp;</span>
                        <span class="tag">Both Programs Availed</span>
                    </div>
                </div>
            </div>
            <div class="level-right">
                <div class="level-item">
                    <div class="field has-addons">
                        <p class="control">
                          <a class="button">
                            <b-icon icon="view_list"></b-icon>
                            {{-- <span>Table View</span> --}}
                          </a>
                        </p>
                        <p class="control">
                          <a class="button">
                            <b-icon icon="show_chart"></b-icon>
                            {{-- <span>Chart View</span> --}}
                          </a>
                        </p>
                    </div>
                </div>
                <div class="level-item">
                    <div class="field has-addons">
                      <p class="control">
                        <a class="button">
                            <b-icon icon="filter_list"></b-icon>
                            {{-- <span>Filter</span> --}}
                        </a>
                      </p>
                      <p class="control">
                        <a class="button ">
                          <b-icon icon="sort"></b-icon>
                          {{-- <span>Sort</span> --}}
                        </a>
                      </p>
                    </div>
                </div>
                <div class="level-item">
                    <p class="control">
                        <a class="button">
                            <b-icon icon="file_download"></b-icon>
                            {{-- <span>Export</span> --}}
                        </a>
                    </p>
                </div>
                <div class="level-item">
                    <p class="control">
                        {{-- <a class="button is-small" @click="isCustomizeDataModalActive = true"> --}}
                        <a class="button" data-show="quickview" data-target="quickviewDefault">
                            <b-icon icon="sliders" pack="fa"></b-icon>
                            {{-- <span>Customize Columns</span> --}}
                        </a>
                    </p>
                </div>
            </div>
        </div>

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
