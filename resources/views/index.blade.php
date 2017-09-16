@extends('layouts.app')

@section('hero-body')
@endsection

@section('content')
    <section class="section">
        <div class="container is-fluid">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="#">Bulma</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Components</a></li>
                    <li class="is-active"><a href="#" aria-current="page">Breadcrumb</a></li>
                </ul>
            </nav>
            <b-tabs>
                <b-tab-item label="CSS Grid">
                    <section class="section">
                        <h1 class="title">CSS Grid</h1>
                        <ul class="gallery">
                            <li v-for="n in 12">
                                <img src="/images/placeholder-1280x960.png">
                            </li>
                        </ul>
                    </section>
                </b-tab-item>
                <b-tab-item label="Inbox">
                    <section class="section">
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
                                                    <img src="http://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
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
                                        <button class="button is-info" aria-haspopup="true" aria-controls="dropdown-menu2">
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
                                        repositories
                                    </p>
                                    <div class="panel-block">
                                        <p class="control has-icons-left">
                                        <input class="input is-small" type="text" placeholder="search">
                                        <span class="icon is-small is-left">
                                            <i class="fa fa-search"></i>
                                        </span>
                                        </p>
                                    </div>
                                    <p class="panel-tabs">
                                        <a class="is-active">all</a>
                                        <a>public</a>
                                        <a>private</a>
                                        <a>sources</a>
                                        <a>forks</a>
                                    </p>
                                    <a class="panel-block is-active">
                                        <span class="panel-icon">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        bulma
                                    </a>
                                    <a class="panel-block">
                                        <span class="panel-icon">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        marksheet
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
                                        jgthms.github.io
                                    </a>
                                    <a class="panel-block">
                                        <span class="panel-icon">
                                            <i class="fa fa-code-fork"></i>
                                        </span>
                                        daniellowtw/infboard
                                    </a>
                                    <a class="panel-block">
                                        <span class="panel-icon">
                                            <i class="fa fa-code-fork"></i>
                                        </span>
                                        mojs
                                    </a>
                                    <label class="panel-block">
                                        <input type="checkbox">
                                        remember me
                                    </label>
                                    <div class="panel-block">
                                        <button class="button is-primary is-outlined is-fullwidth">
                                            reset all filters
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
                </b-tab-item>
                <b-tab-item label="Layouts">
                    <section class="section">
                        <div class="columns">
                            <div class="column is-2">
                                <aside class="menu">
                                    <p class="menu-label">
                                        General
                                    </p>
                                    <ul class="menu-list">
                                        <li><a>Dashboard</a></li>
                                        <li><a>Customers</a></li>
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
                </b-tab-item>
                <b-tab-item label="Colors">
                    <section class="section">
                        <h1 class="title">Colors</h1>

                        <h4 class="is-capitalized">brand</h4>

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
                        <h4 class="is-capitalized">grays</h4>
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
                        <h4 class="is-capitalized">states</h4>
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
                </b-tab-item>
                <b-tab-item label="Icons">
                    <section class="section">
                        <h1 class="title">Icons</h1>

                        <div class="field">
                            <div class="control has-icons-left">
                                <input type="search" class="input" placeholder="Search icons">
                                <span class="icon is-small is-left">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>

                        <ul class="icons">
                            <li v-for="n in 120">
                                <img src="/images/placeholder-128x128.png">
                            </li>
                        </ul>
                    </section>
                </b-tab-item>
                <b-tab-item label="Typography">
                    <section class="section">
                        <h1 class="title">Typography</h1>
                    </section>
                </b-tab-item>
                <b-tab-item label="Buttons">
                    <section class="section">
                        <h1 class="title">Buttons</h1>
                        <a class="button is-primary">Primary Button</a>
                        <a class="button is-neutral">Neutral Button</a>
                        <a class="button is-link">Link Button</a>
                    </section>
                </b-tab-item>
                <b-tab-item label="Data Table">
                    <section class="section">
                        <h1 class="title">Data Table</h1>
                        <div class="columns">
                            <div class="column">
                                <b-field label="Advertiser">
                                    <b-input></b-input>
                                </b-field>
                            </div>
                            <div class="column">
                                <b-field label="Agency">
                                    <b-input></b-input>
                                </b-field>
                            </div>
                            <div class="column">
                                <b-field label="Flight Start Date">
                                    <b-datepicker
                                        placeholder="Click to select..."
                                        icon="today">
                                    </b-datepicker>
                                </b-field>
                            </div>
                            <div class="column">
                                <b-field label="Flight End Date">
                                    <b-datepicker
                                        placeholder="Click to select..."
                                        icon="today">
                                    </b-datepicker>
                                </b-field>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <label class="label">&nbsp;</label>
                                    <div class="control">
                                        <button class="button is-primary">Search</button>
                                        <button class="button is-link">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <avails></avails>
                    </section>
                </b-tab-item>
            </b-tabs>
        </div>
    </section>
@endsection
