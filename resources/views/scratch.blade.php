@extends('layouts.app')
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
    <figure class="image">
        @svg('salesforce-logo')
    </figure>

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
