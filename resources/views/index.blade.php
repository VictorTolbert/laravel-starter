@extends('layouts.app')

@section('hero-body')
@endsection

@section('content')
<section class="section">
    <div class="container is-fluid">
        <button class="button block" @click="activeTab = 1">Set Inbox</button>
        <b-tabs v-model="activeTab">
            <b-tab-item label="Inventory Search" icon-pack="fa" icon="search">
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1>
                                    <span class="title has-text-danger">WJAX Schedule Guide</span><br>
                                    <span class="subtitle">Last Uploaded 03/06/17</span>
                                </h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="level">
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
                                    <span class="tag is-dark">4</span>
                                </div>
                            </div>
                        </div>
                        <div class="left-right">
                            <button class="button is-primary">Upload Station Inventory</button>
                        </div>
                    </div>

                    <div class="box">
                        <div class="columns">
                            <div class="column">
                                <b-field label="Program Search">
                                    <b-input loading></b-input>
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
                    </div>

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
                                <button class="button is-primary">
                                    Edit Table
                                </button>
                            </div>
                        </div>
                    </div>
                    <avails></avails>
                </section>
            </b-tab-item>
            <b-tab-item label="Inbox" icon-pack="fa" icon="inbox">
                <section class="section">
                    <h1 class="title">Inbox</h1>
                    <hr>
                    <div class="columns">
                        <div class="column">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                    <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                <img src="{{ get_gravatar(auth()->user()->email) }}">
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <p class="title is-4">John Smith</p>
                                            <p class="subtitle is-6">@johnsmith</p>
                                        </div>
                                    </div>

                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                        <a href="#">#css</a> <a href="#">#responsive</a>
                                        <br>
                                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                                <header class="card-header">
                                    <p class="card-header-title">
                                        Component
                                    </p>
                                    <a href="#" class="card-header-icon" aria-label="more options">
                                        <span class="icon">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                </header>
                                <div class="card-content">
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                                        <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                                        <br>
                                        <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                    </div>
                                </div>
                                <footer class="card-footer">
                                    <a href="#" class="card-footer-item">Save</a>
                                    <a href="#" class="card-footer-item">Edit</a>
                                    <a href="#" class="card-footer-item">Delete</a>
                                </footer>
                            </div>
                        </div>
                        <div class="column">
                            <div class="dropdown is-active">
                                <div class="dropdown-trigger">
                                    <button class="button is-neutral" aria-haspopup="true" aria-controls="dropdown-menu2">
                                        <span>Content</span>
                                        <span class="icon is-small">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu2" role="menu">
                                    <div class="dropdown-content">
                                        <div class="dropdown-item">
                                            <p>You can insert <strong>any type of content</strong> within the dropdown menu.</p>

                                            <img src="/images/placeholder-480x320.png">

                                        </div>
                                        <hr class="dropdown-divider">
                                        <div class="dropdown-item">
                                            <p>You simply need to use a <code>&lt;div&gt;</code> instead.</p>
                                        </div>
                                        <hr class="dropdown-divider">
                                        <a href="#" class="dropdown-item">
                                            This is a link
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <nav class="panel">
                                <p class="panel-heading">
                                    Repositories
                                </p>
                                <div class="panel-block">
                                    <p class="control has-icons-left">
                                    <input class="input is-small" type="text" placeholder="Search">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-search"></i>
                                    </span>
                                    </p>
                                </div>
                                <p class="panel-tabs">
                                    <a class="is-active">All</a>
                                    <a>Public</a>
                                    <a>Private</a>
                                    <a>Sources</a>
                                    <a>Forks</a>
                                </p>
                                <a class="panel-block">
                                    <span class="panel-icon">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    bootstrap
                                </a>
                                <a class="panel-block">
                                    <span class="panel-icon">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    minireset.css
                                </a>
                                <a class="panel-block">
                                    <span class="panel-icon">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    progroup.github.io
                                </a>
                                <a class="panel-block">
                                    <span class="panel-icon">
                                        <i class="fa fa-code-fork"></i>
                                    </span>
                                    progroup/prototype
                                </a>
                                <a class="panel-block">
                                    <span class="panel-icon">
                                        <i class="fa fa-code-fork"></i>
                                    </span>
                                    mojs
                                </a>
                                <label class="panel-block">
                                    <input type="checkbox">
                                    Remember me
                                </label>
                                <div class="panel-block">
                                    <button class="button is-primary is-outlined is-fullwidth">
                                        Reset All Filters
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class="column">
                            <progress class="progress is-primary" value="30" max="100">30%</progress>
                            <progress class="progress is-info" value="45" max="100">45%</progress>
                            <progress class="progress is-success" value="60" max="100">60%</progress>
                            <progress class="progress is-warning" value="75" max="100">75%</progress>
                            <progress class="progress is-danger" value="90" max="100">90%</progress>

                            <div class="block">
                                <span class="tag is-success">
                                    Hello World
                                    <button class="delete is-small"></button>
                                </span>
                            </div>

                            <div class="notification is-danger">
                                <button class="delete"></button>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </div>

                            <article class="message is-info">
                                <div class="message-header">
                                    Info
                                    <button class="delete"></button>
                                </div>
                                <div class="message-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <button class="button block" @click="isActive = !isActive">Toggle</button>
                    <b-message title="Default" :active.sync="isActive" type="is-danger" has-icon>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
                    </b-message>
                    <b-notification  :active.sync="isActive" type="is-danger" has-icon>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
                    </b-notification>
                </section>
                <section class="section">
                    <p class="content"><b>selected</b>: @{{ selectedOptions }}</p>
                    <b-field>
                        <b-select
                            multiple
                            native-size="8"
                            v-model="selectedOptions">
                            <option value="flint">Flint</option>
                            <option value="silver">Silver</option>
                            <option value="vane">Vane</option>
                            <option value="billy">Billy</option>
                            <option value="jack">Jack</option>
                            <option value="heisenberg">Heisenberg</option>
                            <option value="jesse">Jesse</option>
                            <option value="saul">Saul</option>
                            <option value="mike">Mike</option>
                        </b-select>
                    </b-field>
                </section>
            </b-tab-item>
            <b-tab-item label="Utilities">
            </b-tab-item>
            <b-tab-item label="Base">
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Colors</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="block">
                                    <span class="tag is-warning">
                                        In Progress
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h2 class="subtitle is-capitalized">brand</h2>
                    <ul class="u-grid">
                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#692565" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#692565</code></li>
                                        <li><code>--color-plum</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#1D4F90" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#1D4F90</code></li>
                                        <li><code>--color-fun-blue</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#276092" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#276092</code></li>
                                        <li><code>--color-st-tropaz</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#4296B4" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#4296B4</code></li>
                                        <li><code>--color-boston-blue</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#64B1BC" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#64B1BC</code></li>
                                        <li><code>--color-fountain-blue</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#83C8BC" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#83C8BC</code></li>
                                        <li><code>--color-monte-carlo</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <hr>
                    <h2 class="subtitle is-capitalized">grays</h2>
                    <ul class="u-grid">
                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#111111" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#111111</code></li>
                                        <li><code>--color-black</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#52545D" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#52545D</code></li>
                                        <li><code>--color-dark-gray</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#E0E4E5" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#E0E4E5</code></li>
                                        <li><code>--color-light-grey</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <hr>
                    <h2 class="subtitle is-capitalized">states</h2>
                    <ul class="u-grid">
                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#04864b" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#04864b</code></li>
                                        <li><code>--color-green</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#f4831f" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#f4831f</code></li>
                                        <li><code>--color-yellow</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <svg class="swatch">
                                    <rect fill="#c5203e" width="100%" height="100%"></rect>
                                </svg>
                                <figcaption>
                                    <ul>
                                        <li><code>#c5203e</code></li>
                                        <li><code>--color-red</code></li>
                                    </ul>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <hr>
                </section>
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Icons</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="block">
                                    <span class="tag is-success">
                                        In Progress
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <div class="control has-icons-left">
                            <input type="search" class="input" placeholder="Search icons">
                            <span class="icon is-small is-left">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <hr>
                    <ul class="icons">
                        <li v-for="n in 120">
                            <img src="/images/placeholder-128x128.png">
                        </li>
                    </ul>
                </section>
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Typography</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="block">
                                    <span class="tag is-danger">
                                        Not Started
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </section>
            </b-tab-item>
            <b-tab-item label="Elements">
                <section class="section">

                    <a class="button is-link">Customize Data Table</a>
                    <h2>Edit Columns</h2>
                    <p>Show or hide columns. Prioritze columns by using up and down arrows. Customize column widths and ability to lock first column.</p>
                    <table class="table is-bordered is-narrowed">
                        <thead>
                            <tr>
                                <th>Show/Hide</th>
                                <th>Column</th>
                                <th>Width</th>
                                <th>Lock Column</th>
                            </tr>
                        </thead>

                        <tr v-for="column in clientsColumns">
                            <td>
                                <b-checkbox v-model="column.isVisible">
                                    @{{ column.title }}
                                </b-checkbox>
                            </td>
                            <td>
                                <b-select v-model="column.width">
                                    <option value="">Auto Fit</option>
                                    <option value="80">Extra Small (80)</option>
                                    <option value="120">Small (120)</option>
                                    <option value="240">Medium (240)</option>
                                    <option value="360">Large (360)</option>
                                    <option value="500">Extra Large (500)</option>
                                </b-select>
                            </td>
                        </tr>
                    </table>

                    <a class="button is-primary">OK</a>
                    <a class="button is-neutral">Cancel</a>

                    {{--  <b-field grouped group-multiline>
                        <div v-for="column in clientsColumns" class="control">
                            <b-checkbox v-model="column.isVisible">
                                @{{ column.title }}
                            </b-checkbox>
                        </div>
                    </b-field>  --}}

                    <b-table
                        class="b-table--custom"
                        :data="clients"
                        :selected.sync="selectedClient"
                        bordered
                        narrowed
                        striped
                        checkable
                    >
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
                                @{{ props.row[column.field] }}
                            </b-table-column>
                        </template>
                    </b-table>
                </section>
                <section class="section">
                    <b-table
                        :data="data"
                        :loading="loading"

                        paginated
                        backend-pagination
                        :total="total"
                        :per-page="perPage"
                        @page-change="onPageChange"

                        backend-sorting
                        :default-sort-direction="sortOrder"
                        :default-sort="[sortField, sortOrder]"
                        @sort="onSort">

                        <template scope="props">
                            <b-table-column field="original_title" label="Title" sortable>
                                @{{ props.row.original_title }}
                            </b-table-column>

                            <b-table-column field="vote_average" label="Vote Average" numeric sortable>
                                <span class="tag" :class="type(props.row.vote_average)">
                                   @{{ props.row.vote_average }}
                                </span>
                            </b-table-column>

                            <b-table-column field="vote_count" label="Vote Count" numeric sortable>
                                @{{ props.row.vote_count }}
                            </b-table-column>

                            <b-table-column field="release_date" label="Release Date" sortable centered>
                                @{{ props.row.release_date ? new Date(props.row.release_date).toLocaleDateString() : '' }}
                            </b-table-column>

                            <b-table-column label="Overview" width="500">
                                @{{ props.row.overview | truncate(80) }}
                            </b-table-column>
                        </template>
                    </b-table>
                </section>
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Buttons</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="block">
                                    <span class="tag is-success">
                                        Complete
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <a class="button is-primary">Primary Button</a>
                    <a class="button is-primary is-loading">Loading</a>
                    <a class="button is-primary" title="Disabled button" disabled>Disabled</a>
                    <hr>
                    <a class="button is-secondary">Secondary Button</a>
                    <a class="button is-secondary is-loading">Loading</a>
                    <a class="button is-secondary" title="Disabled button" disabled>Disabled</a>
                    <hr>
                    <a class="button is-neutral">Neutral Button</a>
                    <a class="button is-neutral is-loading">Loading</a>
                    <a class="button is-neutral" title="Disabled button" disabled>Disabled</a>
                    <hr>
                    <p class="field">
                        <a class="button is-success">
                            <span class="icon is-small">
                                <i class="fa fa-check"></i>
                            </span>
                            <span>Save</span>
                        </a>
                        <a class="button is-danger">
                            <span>Delete</span>
                            <span class="icon is-small">
                                <i class="fa fa-times"></i>
                            </span>
                        </a>
                    </p>

                    <hr>
                    <div class="bd-callout is-primary">

                        <a class="button is-primary is-inverted">Inverted</a>
                        <a class="button is-info is-inverted">Inverted</a>
                        <a class="button is-success is-inverted">Inverted</a>
                        <a class="button is-danger is-inverted">Inverted</a>

                    </div>
                    <hr>
                    <div class="bd-callout is-primary">

                        <a class="button is-primary is-inverted is-outlined">Invert Outlined</a>
                        <a class="button is-info is-inverted is-outlined">Invert Outlined</a>
                        <a class="button is-success is-inverted is-outlined">Invert Outlined</a>
                        <a class="button is-danger is-inverted is-outlined">Invert Outlined</a>

                    </div>
                    <hr>
                    <a class="button is-success is-outlined">
                        <span>Save</span>
                        <span class="icon is-small">
                            <i class="fa fa-check"></i>
                        </span>
                    </a>
                    <a class="button is-danger is-outlined">
                        <span>Delete</span>
                        <span class="icon is-small">
                            <i class="fa fa-check"></i>
                        </span>
                    </a>
                    <hr>
                    <a class="button is-link">Link Button</a>

                </section>
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Forms</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="block">
                                    <span class="tag is-success">
                                        Complete
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="tile">
                        <div class="tile is-parent">
                            <div class="tile is-child box">
                                <b-field label="Order Date">
                                    <flat-pickr v-model="date"></flat-pickr>
                                </b-field>
                                <b-field label="Search">
                                    <b-input has-counter expanded icon="search" maxlength="30">
                                    </b-input>
                                </b-field>
                                <b-field label="Sort by">
                                    <b-select icon="sort" expanded>
                                        <option value="1">Advertiser</option>
                                        <option value="2">Agency</option>
                                    </b-select>
                                </b-field>
                                <b-field label="View Filter">
                                    <b-select icon="filter" expanded>
                                        <option value="1">All</option>
                                        <option value="2">Availed</option>
                                    </b-select>
                                </b-field>

                            </div>
                            <div class="tile is-child box">
                                <div class="field">
                                    <textarea class="textarea" placeholder="10 lines of textarea" rows="10"></textarea>
                                </div>
                                <div class="field">
                                    <div class="file is-primary has-name">
                                        <label class="file-label">
                                        <input class="file-input" type="file" name="resume">
                                        <span class="file-cta">
                                            <span class="file-icon">
                                            <i class="fa fa-cloud-upload"></i>
                                            </span>
                                            <span class="file-label">
                                            Upload file…
                                            </span>
                                        </span>
                                        <span class="file-name">
                                            Screen Shot.png
                                        </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <b-field>
                                    <b-input expanded placeholder="Search..." icon="search">
                                    </b-input>
                                </b-field>
                            </div>
                            <div class="level-item">
                                <button v-tooltip.top="{ html: 'tooltipContent' }" class="button is-link">
                                    Multiline (default)
                                </button>
                                <div id="tooltipContent">
                                    <div class="content">
                                        <p>Hello
                                            <b>There</b> Maecenas sed diam eget risus varius blandit
                                            sit amet non magna.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <b-field>
                                    <b-select placeholder="Select columns">
                                        <option value="flint">All</option>
                                        <option value="flint">Advertiser</option>
                                    </b-select>
                                </b-field>
                            </div>
                            <div class="level-item">
                                <b-field>
                                    <b-select v-model="perPage" :disabled="!isPaginated">
                                        <option value="5">5 per page</option>
                                        <option value="10">10 per page</option>
                                        <option value="15">15 per page</option>
                                        <option value="20">20 per page</option>
                                    </b-select>
                                </b-field>
                            </div>
                        </div>
                    </div>
                </section>
                {{--  <section class="section">
                    <h1 class="title">Autocomplete</h1>
                    <p>Extended input that provide suggestions while the user types. Use with Field to access all functionalities</p>
                    <hr>
                    <div class="field">
                        <b-switch v-model="keepFirst">
                            Keep-first <small>(will always have first option pre-selected)</small>
                        </b-switch>
                    </div>
                    <p class="content"><b>Selected:</b> @{{ selected }}</p>
                    <b-field label="Find a name">
                        <b-autocomplete
                            v-model="name"
                            placeholder="e.g. Anne"
                            :keep-first="keepFirst"
                            :data="filteredPeople"
                            field="user.first_name"
                            @select="option => selected = option">
                        </b-autocomplete>
                    </b-field>
                </section>  --}}
                {{--  <section class="section">
                    <p class="content"><b>Selected:</b> @{{ selected }}</p>
                    <b-field label="Find a movie">
                        <b-autocomplete
                            v-model="name"
                            :data="data"
                            placeholder="e.g. Fight Club"
                            field="title"
                            :loading="isFetching"
                            @input="getMovies"
                            @select="option => selected = option">

                            <template scope="props">
                                <div class="media">
                                    <div class="media-left">
                                        <img width="32" :src="`https://image.tmdb.org/t/p/w500/${props.option.poster_path}`">
                                    </div>
                                    <div class="media-content">
                                        @{{ props.option.title }}
                                        <br>
                                        <small>
                                            Released at @{{ props.option.release_date }},
                                            rated <b>@{{ props.option.vote_average }}</b>
                                        </small>
                                    </div>
                                </div>
                            </template>
                        </b-autocomplete>
                    </b-field>
                </section>  --}}
            </b-tab-item>
            <b-tab-item label="Components" icon-pack="fa" icon="external-link">
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Badges</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="block">
                                    <span class="tag is-success">
                                        Complete
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field">
                        <button class="button badge" data-badge="8">Button</button>
                    </div>
                    <div class="field">
                        <span class="badge is-badge-danger" data-badge="8">
                            Conflicts
                        </span>
                    </div>
                    <div class="field">
                        <span class="badge is-badge-danger" data-badge="4">
                            Gaps
                        </span>
                    </div>
                </section>
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Tags</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="block">
                                    <span class="tag is-success">
                                        Complete
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </section>
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Data Table</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="block">
                                    <span class="tag is-warning">
                                        In progress
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <avails></avails>
                </section>
            </b-tab-item>
            <b-tab-item label="Grid" icon-pack="fa" icon="th"></b-tab-item>
            <b-tab-item label="Layout" icon-pack="fa" icon="columns">
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Layouts</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="block">
                                    <span class="tag is-success">
                                        Complete
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="columns">
                        <div class="column is-2">
                            <aside class="menu">
                                <p class="menu-label">
                                    General
                                </p>
                                <ul class="menu-list">
                                    <li><a>Dashboard</a></li>
                                    <li><a>Login Page</a></li>
                                    <li><a>Help Drawer</a></li>
                                </ul>
                                <p class="menu-label">Administration</p>
                                <ul class="menu-list">
                                    <li>
                                        <a href="">Team Settings</a>
                                    </li>
                                    <li>
                                        <a class="is-active">Manage Your Team</a>
                                        <ul>
                                            <li><a>Members</a></li>
                                            <li><a>Plugins</a></li>
                                            <li><a>Add a member</a></li>
                                        </ul>
                                    </li>
                                    <li><a>Invitations</a></li>
                                    <li><a>Cloud Storage Environment Settings</a></li>
                                    <li><a>Authentication</a></li>
                                </ul>
                                <p class="menu-label">
                                    Transactions
                                </p>
                                <ul class="menu-list">
                                    <li><a>Payments</a></li>
                                    <li><a>Transfers</a></li>
                                    <li><a>Balance</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="column">
                            <avails></avails>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">CSS Grid</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="block">
                                    <span class="tag is-success">
                                        Complete
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <ul class="gallery">
                        <li v-for="n in 12">
                            <img src="/images/placeholder-1280x960.png">
                        </li>
                    </ul>
                </section>
                <section class="section">
                    <div class="tile is-ancestor">
                        <div class="tile is-vertical is-8">
                            <div class="tile">
                            <div class="tile is-parent is-vertical">
                                <article class="tile is-child box">
                                <p class="title">Vertical tiles</p>
                                <p class="subtitle">Top box</p>
                                </article>
                                <article class="tile is-child box">
                                <p class="title">Vertical tiles</p>
                                <p class="subtitle">Bottom box</p>
                                </article>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                <p class="title">Middle box</p>
                                <p class="subtitle">With an image</p>
                                <figure class="image is-4by3">
                                    <img src="/images/placeholder-640x480.png">
                                </figure>
                                </article>
                            </div>
                            </div>
                            <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">Wide column</p>
                                <p class="subtitle">Aligned with the right column</p>
                                <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                                </div>
                            </article>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                            <div class="content">
                                <p class="title">Tall column</p>
                                <p class="subtitle">With even more content</p>
                                <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                                <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
                                <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
                                </div>
                            </div>
                            </article>
                        </div>
                        </div>
                </section>
            </b-tab-item>
            <b-tab-item icon="ellipsis-h" icon-pack="fa">
                {{--  <section class="section">
                    <button class="button is-primary is-medium"
                        @click="isComponentModalActive = true">
                        Launch component modal
                    </button>

                    <b-modal :active.sync="isComponentModalActive" has-modal-card>
                        <modal-form v-bind="formProps"></modal-form>
                    </b-modal>
                </section>  --}}
                <section class="section">
                    <h1 class="title">Steps</h1>
                    <steps></steps>
                </section>

                <section class="section">
                    <b-field label="Date">
                        <flat-pickr v-model="date"></flat-pickr>
                    </b-field>

                    <b-field label="Search">
                        <b-input expanded icon="search">
                        </b-input>
                    </b-field>

                    <b-field label="Sort by">
                        <b-select icon="sort" expanded>
                            <option value="1">Advertiser</option>
                            <option value="2">Agency</option>
                        </b-select>
                    </b-field>

                    <b-field label="View Filter">
                        <b-select icon="filter" expanded>
                            <option value="1">All</option>
                            <option value="2">Availed</option>
                        </b-select>
                    </b-field>

                    <hr>

                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">

                                <b-field>
                                    <b-input expanded placeholder="Search..." icon="search">
                                    </b-input>
                                </b-field>

                            </div>
                            <div class="level-item">

                                <button v-tooltip.top="{ html: 'tooltipContent' }" class="button is-link">
                                    Multiline (default)
                                </button>

                                <div id="tooltipContent">
                                    <div class="content">
                                        <p>Hello
                                            <b>There</b> Maecenas sed diam eget risus varius blandit
                                            sit amet non magna.
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <b-field>
                                    <b-select placeholder="Select columns">
                                        <option value="flint">All</option>
                                        <option value="flint">Advertiser</option>
                                    </b-select>
                                </b-field>
                            </div>
                            <div class="level-item">
                                <b-field>
                                    <b-select v-model="perPage" :disabled="!isPaginated">
                                        <option value="5">5 per page</option>
                                        <option value="10">10 per page</option>
                                        <option value="15">15 per page</option>
                                        <option value="20">20 per page</option>
                                    </b-select>
                                </b-field>

                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <button class="button is-medium is-primary" @click="alert">
                        Launch alert (default)
                    </button>
                    <button class="button is-medium is-primary" @click="alertCustom">
                        Launch alert (custom)
                    </button>
                </section>
                <section class="section">
                    <button class="button is-medium is-info" @click="confirm">
                        Launch confirm (default)
                    </button>

                    <button class="button is-medium is-info" @click="confirmCustom">
                        Launch confirm (custom)
                    </button>

                    <button class="button is-medium is-danger" @click="confirmCustomDelete">
                        Launch confirm (custom)
                    </button>
                </section>
                <section class="section ">
                    <button class="button is-medium is-dark" @click="prompt">
                        Launch prompt
                    </button>
                </section>
                <section class="section">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Calendars</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="block">
                                    <span class="tag is-success">
                                        Complete
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="columns is-multiline">
                        <div class="column">
                            <div class="calendar">
                                <div class="calendar-nav">
                                    <div class="calendar-nav-left">
                                    <button class="button is-link">
                                        <i class="fa fa-chevron-left"></i>
                                    </button>
                                    </div>
                                    <div>March 2017</div>
                                    <div class="calendar-nav-right">
                                    <button class="button is-link">
                                        <i class="fa fa-chevron-right"></i>
                                    </button>
                                    </div>
                                </div>
                                <div class="calendar-container">
                                    <div class="calendar-header">
                                        <div class="calendar-date">Sun</div>
                                        <div class="calendar-date">Mon</div>
                                        <div class="calendar-date">Tue</div>
                                        <div class="calendar-date">Wed</div>
                                        <div class="calendar-date">Thu</div>
                                        <div class="calendar-date">Fri</div>
                                        <div class="calendar-date">Sat</div>
                                    </div>
                                    <div class="calendar-body">
                                    <div class="calendar-date is-disabled"><button class="date-item">26</button></div>
                                    <div class="calendar-date is-disabled"><button class="date-item">27</button></div>
                                    <div class="calendar-date is-disabled"><button class="date-item">28</button></div>
                                    <div class="calendar-date"><button class="date-item">1</button></div>
                                    <div class="calendar-date"><button class="date-item">2</button></div>
                                    <div class="calendar-date"><button class="date-item">3</button></div>
                                    <div class="calendar-date tooltip" data-tooltip="Today"><button class="date-item is-today">4</button></div>
                                    <div class="calendar-date tooltip" data-tooltip="Not available"><button class="date-item" disabled="">5</button></div>
                                    <div class="calendar-date"><button class="date-item">6</button></div>
                                    <div class="calendar-date"><button class="date-item">7</button></div>
                                    <div class="calendar-date tooltip" data-tooltip="You have appointments"><button class="date-item">8</button></div>
                                    <div class="calendar-date"><button class="date-item">9</button></div>
                                    <div class="calendar-date"><button class="date-item">10</button></div>
                                    <div class="calendar-date"><button class="date-item">11</button></div>
                                    <div class="calendar-date"><button class="date-item">12</button></div>
                                    <div class="calendar-date"><button class="date-item">13</button></div>
                                    <div class="calendar-date"><button class="date-item">14</button></div>
                                    <div class="calendar-date"><button class="date-item">15</button></div>
                                    <div class="calendar-date calendar-range range-start"><button class="date-item is-active">16</button></div>
                                    <div class="calendar-date calendar-range"><button class="date-item">17</button></div>
                                    <div class="calendar-date calendar-range"><button class="date-item">18</button></div>
                                    <div class="calendar-date calendar-range"><button class="date-item">19</button></div>
                                    <div class="calendar-date calendar-range range-end"><button class="date-item is-active">20</button></div>
                                    <div class="calendar-date"><button class="date-item">21</button></div>
                                    <div class="calendar-date"><button class="date-item">22</button></div>
                                    <div class="calendar-date"><button class="date-item">23</button></div>
                                    <div class="calendar-date"><button class="date-item">24</button></div>
                                    <div class="calendar-date"><button class="date-item">25</button></div>
                                    <div class="calendar-date"><button class="date-item">26</button></div>
                                    <div class="calendar-date"><button class="date-item">27</button></div>
                                    <div class="calendar-date"><button class="date-item">28</button></div>
                                    <div class="calendar-date"><button class="date-item">29</button></div>
                                    <div class="calendar-date"><button class="date-item">30</button></div>
                                    <div class="calendar-date"><button class="date-item">31</button></div>
                                    <div class="calendar-date is-disabled"><button class="date-item">1</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="is-divider-vertical" data-content="OR"></div>
                        <div class="column">
                            <ul class="timeline">
                                <li class="timeline-header">
                                    <span class="tag is-medium is-primary">Start</span>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-marker is-primary"></div>
                                    <div class="timeline-content">
                                        <p class="heading">January 2016</p>
                                        <p>Timeline content - Can include any HTML element</p>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-marker is-warning is-image is-32x32">
                                        <img src="http://bulma.io/images/placeholders/32x32.png">
                                    </div>
                                    <div class="timeline-content">
                                        <p class="heading">February 2016</p>
                                        <p>Timeline content - Can include any HTML element</p>
                                    </div>
                                </li>
                                <li class="timeline-header">
                                    <span class="tag is-primary">2017</span>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-marker is-danger is-icon">
                                        <i class="fa fa-flag"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p class="heading">March 2017</p>
                                        <p>Timeline content - Can include any HTML element</p>
                                    </div>
                                </li>
                                <li class="timeline-header">
                                    <span class="tag is-medium is-primary">End</span>
                                </li>
                            </ul>
                        </div>
                        <div class="is-divider-vertical" data-content="OR"></div>
                        <div class="column">
                            <button id="showPageloader" class="button is-primary">Show Page-loader (3 sec only)</button>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="content">
                        <h1>More Stuff...</h1>
                        <ul>
                            <li><a>Item one</a></li>
                            <li><a>Item two</a></li>
                            <li><a>Item ...</a></li>
                        </ul>
                    </div>
                </section>
                <section class="section">
                    <div class="block">
                        <b-switch v-model="isCollapsible">Collapsible</b-switch>
                    </div>
                    <div class="block">
                        <button class="button is-medium is-primary"
                            @click="isOpen = !isOpen">
                            Toggle
                        </button>
                    </div>
                    <b-panel :open.sync="isOpen" :collapsible="isCollapsible">
                        <strong slot="header">Title</strong>
                        <div class="content">
                            <h3>
                                Subtitle
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br />
                                Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. <br />
                                Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.
                            </p>
                        </div>
                    </b-panel>
                </section>
            </b-tab-item>
        </b-tabs>
    </div>
</section>
@endsection
