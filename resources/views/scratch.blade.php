@extends('layouts.app')
@section('title', 'Scratch')
@section('content')
<header class="hero is-primary">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">Scratch</h1>
        </div>
    </div>
</header>

<nav class="panel">
    <p class="panel-heading">
        View Selection
    </p>
    <div class="panel-block">
        <p class="control has-icons-left">
            <input class="input" type="text" placeholder="Search">
            <span class="icon is-small is-left">
                <i class="fa fa-search"></i>
            </span>
        </p>
    </div>
</nav>

<section class="section">
    <b-tabs>
        <b-tab-item label="Goals">
            <section class="section">
                <div class="container is-fluid">
                    <div class="columns">
                        <div class="column is-2">

                        </div>
                        <div class="column is-4">
                            <div class="content">
                                @include('content.2017.goals')
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </b-tab-item>
        <b-tab-item label="Loaders"></b-tab-item>
        <b-tab-item label="Spinners"></b-tab-item>
    </b-tabs>


    <span class="box" v-for="(group, index) in db.demo.stationGroups" :key="index">
        @{{ group.group }}
    </span>

    <div class="container">
        <h1 class="title">Mixins</h1>
        <h2 class="subtitle">Utility mixins for custom elements and responsive helpers</h2>

        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>=arrow($color)</code></td>
                    <td>Creates a CSS-only down arrow. Used for the dropdown select.</td>
                </tr>
                <tr>
                    <td><code>=block</code></td>
                    <td>Defines a margin-bottom of 1.5rem, except when the element is the last child. Used for almost all block elements.</td>
                </tr>
                <tr>
                    <td><code>=clearfix</code></td>
                    <td>Adds a clearfix at the end of the element. Used for the “is-clearfix” helper.</td>
                </tr>
                <tr>
                    <td><code>=center($size)</code></td>
                    <td>Positions an element in the exact center of its parent. Used for the spinner in a loading button.</td>
                </tr>
                <tr>
                    <td><code>=delete</code></td>
                    <td>Creates a CSS-only cross. Used for the delete element in modals, messages, tags…</td>
                </tr>
                <tr>
                    <td><code>=fa($size, $dimensions)</code></td>
                    <td>Sets the style of a Font Awesome icon container.</td>
                </tr>
                <tr>
                    <td><code>=hamburger($dimensions)</code></td>
                    <td>Creates a CSS-only hamburger menu with 3 bars. Used for the “nav-toggle”.</td>
                </tr>
                <tr>
                    <td><code>=loader</code></td>
                    <td>Creates a CSS-only loading spinner. Used for the “.loader” element, and for input and button spinners.</td>
                </tr>
                <tr>
                    <td><code>=overflow-touch</code></td>
                    <td>Sets the style of a container so that it keeps momentum when scrolling on iOS devices.</td>
                </tr>
                <tr>
                    <td><code>=overlay($offset: 0)</code></td>
                    <td>Makes the element overlay its parent container, like the transparent modal background.</td>
                </tr>
                <tr>
                    <td><code>=placeholder</code></td>
                    <td>Sets the styles of an input placeholder.</td>
                </tr>
                <tr>
                    <td><code>=unselectable</code></td>
                    <td>Turns the element unselectable. Used for buttons to prevent selection when clicking.</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<section class="section">

    <p><b-icon icon="access_time" size="is-small"></b-icon> Tuesday July 25, 2017 to Wednesday July 26, 2017 EDT</p>
    <p><b-icon icon="location_on" size="is-small"></b-icon> Videa, 3390 Peachtree Road NE, Atlanta, GA, United States</p>
    <hr>
    <b-tabs>
        <b-tab-item label="Image Placeholder">
            <h3 class="is-size-3">Image Placeholder</h3>
            <figure class="image">
                <image-placeholder
                    :width="1440"
                    :height="150"
                    background-color="#ccc"
                    border-color="#333"
                    :border-width="1"
                    :show-ratio="false"
                    font-family="monspace, sans-serif"
                    font-color="#333"
                    :font-size="36">
                </image-placeholder>
            </figure>

            <table class="table">
                <thead>
                    <tr>
                        <th>Props</th>
                        <th>Type</th>
                        <th>Default</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>width</td>
                        <td>Number</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>height</td>
                        <td>Number</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>background-color</td>
                        <td>String</td>
                        <td>‘#ccc’</td>
                    </tr>
                    <tr>
                        <td>border-color</td>
                        <td>String</td>
                        <td>‘#333’</td>
                    </tr>
                    <tr>
                        <td>border-width</td>
                        <td>Number</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>show-ratio</td>
                        <td>Boolean</td>
                        <td>false</td>
                    </tr>
                    <tr>
                        <td>font-family</td>
                        <td>String</td>
                        <td>‘monospace, sans-serif’</td>
                    </tr>
                    <tr>
                        <td>font-color</td>
                        <td>String</td>
                        <td>‘#333’</td>
                    </tr>
                    <tr>
                        <td>font-size</td>
                        <td>Number</td>
                        <td>14</td>
                    </tr>
                </tbody>
            </table>
        </b-tab-item>
    </b-tabs>
</section>
@endsection
