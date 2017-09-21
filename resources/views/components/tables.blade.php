@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">WJAX Schedule Guide</h1>
        <h1 class="subtitle">Last Uploaded 03/06/17</h1>
    </div>
</div>
@endsection

@section('content')
<section class="section">
    <div class="container is-fluid">
        <div class="level" style="margin-bottom: 0.25rem">
            <div class="level-left">
                <div class="level-item">
                    <div class="tags has-addons">
                        <span class="tag">Conflicts</span>
                        <span class="tag is-danger">8</span>
                    </div>
                </div>
                <div class="level-item">
                    <div class="tags has-addons">
                        <span class="tag">Gaps</span>
                        <span class="tag is-danger">4</span>
                    </div>
                </div>
            </div>
            <div class="level-right">
            </div>
        </div>
        <b-panel>
            {{-- <strong slot="header">View Selection</strong> --}}
            <div class="columns">
                <div class="column">
                    <b-field label="Program Search">
                        <b-input></b-input>
                    </b-field>
                </div>
                <div class="column">
                    <b-field label="Daypart">
                        <b-select expanded disabled>
                            <option>Daytime</option>
                        </b-select>
                    </b-field>
                </div>
                <div class="column">
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
                </div>
                <div class="column">
                    <b-field label="Flight End">
                        <b-datepicker
                            placeholder="Click to select..."
                            icon="today"
                            :first-day-of-week="1"
                            :readonly="false">
                        </b-datepicker>
                    </b-field>
                </div>
                <div class="column">
                    <b-field label="Days">
                        <b-select expanded>
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
                </div>
                <div class="column">
                    <b-field label="Show Programs">
                        <b-select expanded>
                            <option>Availed Only</option>
                            <option>Non-Avaiiled Only</option>
                            <option>Both Availed and Non-Availed</option>
                        </b-select>
                    </b-field>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">&nbsp;</label>
                        <div class="control">
                            <button class="button is-primary">Search</button>
                            <button class="button is-neutral">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
        </b-panel>
        <div class="level" style="margin-bottom: 0.25rem">
            <div class="level-left">
            </div>
            <div class="level-right">
                <div class="level-item">
                    <div class="field has-addons">
                        <p class="control">
                          <a class="button is-small">
                            <span class="icon is-small">
                              <i class="fa fa-table"></i>
                            </span>
                            <span>Table View</span>
                          </a>
                        </p>
                        <p class="control">
                          <a class="button is-small">
                            <span class="icon is-small">
                              <i class="fa fa-bar-chart"></i>
                            </span>
                            <span>Chart View</span>
                          </a>
                        </p>
                    </div>
                </div>
                <div class="level-item">
                    <div class="field has-addons">
                      <p class="control">
                        <a class="button is-small">
                            <b-icon
                                icon="filter_list"
                                size="is-small">
                            </b-icon>
                            <span>Filter</span>
                        </a>
                      </p>
                      <p class="control">
                        <a class="button is-small">
                          <b-icon
                              icon="sort"
                              size="is-small">
                          </b-icon>
                          <span>Sort</span>
                        </a>
                      </p>
                      <p class="control">
                        <a class="button is-small">
                          <b-icon
                              icon="file_download"
                              size="is-small">
                          </b-icon>
                          <span>Export</span>
                        </a>
                      </p>
                      <p class="control">
                        {{-- <a class="button is-small" @click="isCustomizeDataModalActive = true"> --}}
                        <a class="button is-small" data-show="quickview" data-target="quickviewDefault">
                          <b-icon
                              icon="sliders"
                              pack="fa"
                              size="is-small">
                          </b-icon>
                          <span>Customize Columns</span>
                        </a>
                      </p>
                    </div>
                </div>
            </div>
        </div>
        <b-table
            class="b-table--custom"
            :data="clients"
            :selected.sync="selectedClient"
            bordered
            narrowed
            striped
            checkable
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
                    <span v-if="column.field !== 'first_name'">
                        @{{ props.row[column.field] }}
                    </span>
                    <span v-else>
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
                </b-table-column>
            </template>

            <template slot="detail" scope="props">
                <h4 class="is-size-4">Detail</h4>
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
