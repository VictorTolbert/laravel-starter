@extends('layouts.app')

@section('content')
<header class="hero is-primary has-bubbles">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">Dashboard</h1>
        <h1 class="subtitle">Lorem ipsum <abbr>dolor</abbr> sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h1>
        </div>
    </div>
</header>
{{-- @include('partials.navbars.project-info') --}}
<section class="section">
    <div class="container is-fluid">
        <b-tabs>
            <b-tab-item label="Sitemap">

                <section class="section">
                    <div class="content">
                        @include('content.quotes')
                        @include('content.sitemap')
                    </div>
                </section>

            </b-tab-item>

            <b-tab-item label="Navbars">
                <section class="section">
                    <p class="is-size-4">Navbars</p>

                    <div class="box">
                        @include('partials.navbars.app')
                    </div>

                    <div class="box">
                        @include('partials.navbars.apps')
                    </div>

                    <div class="box">
                        @include('partials.navbars.breadcrumb')
                    </div>

                    <div class="box">
                        @include('partials.navbars.buyer')
                    </div>

                    <div class="box">
                        @include('partials.navbars.campaign-performance')
                    </div>

                    <div class="box">
                        @include('partials.navbars.design-system')
                    </div>

                    <div class="box">
                        @include('partials.navbars.gasps')
                    </div>

                    <div class="box">
                        @include('partials.navbars.ops')
                    </div>

                    <div class="box">
                        @include('partials.navbars.project-info')
                    </div>

                    <div class="box">
                        @include('partials.navbars.pagination')
                    </div>

                    <div class="box">
                        @include('partials.navbars.seller')
                    </div>

                    <div class="box">
                        @include('partials.navbars.style1')
                    </div>

                    <div class="box">
                        @include('partials.navbars.styleguide')
                    </div>

                    <div class="box">
                        @include('partials.navbars.table-tools')
                    </div>

                    <div class="box">
                        @include('partials.navbars.team')
                    </div>

                    <div class="box">
                        @include('partials.navbars.utilities')
                    </div>

                    <div class="box">
                        @include('partials.navbars.vti')
                    </div>

                    <div class="box">
                        @include('partials.navbars.wizard')
                    </div>
                </section>
                <section class="section">
                    <div class="tile is-ancestor">
                        <div class="tile is-vertical is-8">
                            <div class="tile">
                                <div class="tile is-parent is-vertical">

                                    @include('partials.articles.political')

                                    <article class="tile is-child box">
                                        <!-- -->
                                    </article>
                                </div>

                                <div class="tile is-parent">
                                    @include('partials.articles.featured-component')
                                </div>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <!-- -->
                                </article>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <!-- -->
                            </article>
                        </div>
                    </div>
                </section>
            </b-tab-item>
            <b-tab-item label="Design Tokens">
                <section class="section">
                    <div class="columns">
                        <div class="column is-1">
                            <aside class="menu">
                                <p class="menu-label">Overview</p>
                                <ul class="menu-list">
                                    <li><a href="#">Color</a></li>
                                    <li><a href="#">Type</a></li>
                                    <li><a href="#">Fonts</a></li>
                                    <li><a href="#">Spacing</a></li>
                                    <li><a href="#">Sizing</a></li>
                                    <li><a href="#">Helpers</a></li>
                                    <li><a href="#">Icons</a></li>
                                    <li><a href="#">Grid</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="column">

                        </div>
                    </div>
                </section>

            </b-tab-item>

            <b-tab-item label="Layout">
                <section class="section">
                    <div class="columns">
                        <div class="column is-1">
                            <aside class="menu">
                                <p class="menu-label">Menu</p>
                                <ul class="menu-list">
                                    <li><a href="">Blank slate</a></li>
                                    <li><a href="">Two-Column</a></li>
                                    <li><a href="">Gallery</a></li>
                                    <li><a href="">List page</a></li>
                                    <li><a href="">Detail page</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="column">

                        </div>
                    </div>
                </section>
            </b-tab-item>

            <b-tab-item label="Data Tables">
                <section class="section">
                    @include('partials.articles.avails')
                </section>
            </b-tab-item>

            <b-tab-item label="Placeholders">
                <section class="section">
                    @include('partials.tables.responsive-images-with-ratio')
                    <div class="columns">
                        <div class="column is-6">
                            <figure class="image box is-4by3">
                                <img src="/images/placeholders/fpo.png">
                            </figure>
                            <hr>
                            <figure class="image box is-3by2">
                                <img src="/images/placeholders/fpo.png">
                            </figure>
                            <hr>
                            <figure class="image box is-16by9">
                                <img src="/images/placeholders/fpo.png">
                            </figure>
                        </div>
                        <div class="column"></div>
                        <div class="column"></div>
                    </div>

                </section>
            </b-tab-item>

            <b-tab-item label="Form Controls">
                <section class="section">
                    <div class="container is-fluid">
                        <div class="columns">
                            <div class="column">
                                <p class="is-size-5">HTML5</p>
                                <p class="is-size-4">Datalist</p>

                                <input class="input" type="text" name="foo" id="foo" list="planets">
                                <datalist id="planets">
                                    <option value="Mercury"></option>
                                    <option value="Venus"></option>
                                </datalist>

                                <p class="is-size-4">Progress</p>
                                <progress min="0" max="100" value="60"></progress>

                                <p class="is-size-4">Number</p>
                                <input class="input" type="number" min="1" max="5">
                            </div>

                            <div class="column">
                            </div>

                            <div class="column">
                            </div>
                        </div>
                    </div>
                </section>
            </b-tab-item>

            <b-tab-item label="Assets">
                <section class="section">
                    @include('partials.assets.icons')
                    @include('partials.assets.images')
                    @include('partials.assets.logos')
                    @include('partials.assets.photos')
                    <todo v-for="(todo, index) in todos" :key="index" :todo="todo"></todo>
                </section>
            </b-tab-item>

            <b-tab-item label="Daypart Display">
                <section class="section">
                    @include('partials.grids.dayparts')
                </section>
            </b-tab-item>

            <b-tab-item label="Galleries">
                <section class="section">
                    @include('partials.galleries.logos')
                    @include('partials.galleries.tech')
                    @include('partials.galleries.ui-details')
                </section>
            </b-tab-item>

            <b-tab-item label="Data Tables">
                <section class="section">
                    @include('partials.datatables.tv-grid')
                </section>
            </b-tab-item>



            <b-tab-item label="Components">
                <section class="section">
                    <div class="tile is-ancestor">
                        <div class="tile is-vertical is-8">
                            <div class="tile">
                                <div class="tile is-parent is-vertical">

                                    @include('partials.articles.political')

                                    <article class="tile is-child box">
                                        <!-- -->
                                    </article>
                                </div>

                                <div class="tile is-parent">
                                    @include('partials.articles.featured-component')
                                </div>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child box">
                                    <!-- -->
                                </article>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <!-- -->
                            </article>
                        </div>
                    </div>
                </section>
            </b-tab-item>

            <b-tab-item label="Two">
                <section class="section">
                    <div class="tile is-ancestor">
                        <div class="tile is-4 is-vertical is-parent">
                            <div class="tile is-child box">
                                @include('partials.panels.popular')
                            </div>
                            <div class="tile is-child box">

                            </div>
                        </div>
                        <div class="tile is-parent">
                            <div class="tile is-child box">
                                <p class="title">Three</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                                <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
                                <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </b-tab-item>

            <b-tab-item label="Placeholders">
                <section class="section">
                    <div class="tile is-ancestor">
                        <div class="tile is-vertical is-8">
                            <div class="tile">
                                <div class="tile is-parent is-vertical">
                                    <article class="tile is-child notification is-primary">
                                        <p class="title">Vertical...</p>
                                        <p class="subtitle">Top tile</p>
                                    </article>
                                    <article class="tile is-child notification is-warning">
                                        <p class="title">...tiles</p>
                                        <p class="subtitle">Bottom tile</p>
                                    </article>
                                </div>
                                <div class="tile is-parent">
                                    @include('partials.articles.ui-ux')
                                </div>
                            </div>
                            <div class="tile is-parent">
                                <article class="tile is-child notification is-danger">
                                    <p class="title">Wide tile</p>
                                    <p class="subtitle">Aligned with the right tile</p>
                                    <div class="content">
                                        <!-- Content -->
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child notification is-success">
                                <div class="content">
                                    <p class="title">Tall tile</p>
                                    <p class="subtitle">With even more content</p>
                                    <div class="content">
                                        <!-- Content -->

                                        <span class="tag">not started</span>
                                        <span class="tag is-success">in progress</span>
                                        <span class="tag is-info">complete</span>

                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
            </b-tab-item>

            <b-tab-item label="Team">
                <section class="section">
                    @include('partials.articles.product-team')
                    @include('partials.articles.design-team')
                    @include('partials.articles.team')
                </section>
            </b-tab-item>
        </b-tabs>
    </div>
</section>
@endsection
