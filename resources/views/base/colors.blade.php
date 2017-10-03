@extends('layouts.app')
@section('title', 'Colors')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('colors') }}
        </div>
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            {{-- <h1 class="title">Design Coding Dashboard</h1> --}}
            <h1 class="title">Colors</h1>
            <h2 class="subtitle">The <b>colors</b> that <b>style</b> most of our elements and components</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <h2 class="is-size-3">Material Design Palette -- Brand Colors</h2>
        <div class="columns is-gapless is-multiline">
            <div class="column is-1" v-for="(palette, index) in db.demo.palettes">
                <h2 class="subtitle" v-text="palette.color"></h2>
                <ul v-for="(variation, index) in palette.variations">
                    <li v-if="index == 5"
                        v-text="variation.color"
                        :style="`text-transform:uppercase;border-top: 1px solid #000;border-bottom: 1px solid #000;padding: 0.5rem 1rem;color: ${variation.textColor } ;background-color: ${variation.color}`">
                        &nbsp;
                    </li>
                    <li v-else
                        v-text="variation.color"
                        :style="`text-transform:uppercase;padding: 0.5rem 1rem;color: ${variation.textColor} ;background-color: ${variation.color}`">
                        &nbsp;
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            <p>
                Most elements and components have color variations thanks to <strong>modifiers</strong> with syntax <code>.is-$color</code>, like <code>is-primary</code> or <code>is-dark</code>.
            </p>
            <p>
                This is thanks to the <code>$colors</code> <strong>Sass map</strong>, through which Bulma cycles to grab all the colors and their inverts.
            </p>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Color</th>
                    <th>Variable</th>
                    <th>Value</th>
                    <th>Actual value</th>
                    <th>Invert variable</th>
                    <th>Actual invert value</th>
                </tr>
            </thead>
            <tbody>


                <tr>
                    <td>
                        <strong>White</strong>
                    </td>
                    <td>
                        <code>$white</code>
                    </td>
                    <td>
                        <code>$white</code>
                    </td>
                    <td>
                        <span class="bd-color" style="background: hsl(0, 0%, 100%);"></span>
                        <code>hsl(0, 0%, 100%)</code>

                    </td>
                    <td>
                        <code>$black</code>
                    </td>
                    <td>

                        <span class="bd-color" style="background: rgba(0, 0, 0, 0.7);"></span>
                        <code>rgba(0, 0, 0, 0.7)</code>

                    </td>
                </tr>


                <tr>
                    <td>
                        <strong>Black</strong>
                    </td>
                    <td>
                        <code>$black</code>
                    </td>
                    <td>
                        <code>$black</code>
                    </td>
                    <td>
                        <span class="bd-color" style="background: hsl(0, 0%, 4%);"></span>
                        <code>hsl(0, 0%, 4%)</code>

                    </td>
                    <td>
                        <code>$white</code>
                    </td>
                    <td>

                        <span class="bd-color" style="background: #fff;"></span>
                        <code>#fff</code>

                    </td>
                </tr>


                <tr>
                    <td>
                        <strong>Light</strong>
                    </td>
                    <td>
                        <code>$light</code>
                    </td>
                    <td>
                        <code>$white-ter</code>
                    </td>
                    <td>
                        <span class="bd-color" style="background: hsl(0, 0%, 96%);"></span>
                        <code>hsl(0, 0%, 96%)</code>

                    </td>
                    <td>
                        <code>$light-invert</code>
                    </td>
                    <td>

                        <span class="bd-color" style="background: rgba(0, 0, 0, 0.7);"></span>
                        <code>rgba(0, 0, 0, 0.7)</code>

                    </td>
                </tr>


                <tr>
                    <td>
                        <strong>Dark</strong>
                    </td>
                    <td>
                        <code>$dark</code>
                    </td>
                    <td>
                        <code>$grey-darker</code>
                    </td>
                    <td>
                        <span class="bd-color" style="background:  hsl(0, 0%, 21%);"></span>
                        <code>hsl(0, 0%, 21%)</code>

                    </td>
                    <td>
                        <code>$dark-invert</code>
                    </td>
                    <td>

                        <span class="bd-color" style="background: #fff;"></span>
                        <code>#fff</code>

                    </td>
                </tr>


                <tr>
                    <td>
                        <strong>Primary</strong>
                    </td>
                    <td>
                        <code>$primary</code>
                    </td>
                    <td>
                        <code>$turquoise</code>
                    </td>
                    <td>
                        <span class="bd-color" style="background: hsl(171, 100%, 41%);"></span>
                        <code>hsl(171, 100%, 41%)</code>

                    </td>
                    <td>
                        <code>$primary-invert</code>
                    </td>
                    <td>

                        <span class="bd-color" style="background: #fff;"></span>
                        <code>#fff</code>

                    </td>
                </tr>


                <tr>
                    <td>
                        <strong>Info</strong>
                    </td>
                    <td>
                        <code>$info</code>
                    </td>
                    <td>
                        <code>$blue</code>
                    </td>
                    <td>
                        <span class="bd-color" style="background: hsl(217, 71%,  53%);"></span>
                        <code>hsl(217, 71%,  53%)</code>

                    </td>
                    <td>
                        <code>$info-invert</code>
                    </td>
                    <td>

                        <span class="bd-color" style="background: #fff;"></span>
                        <code>#fff</code>

                    </td>
                </tr>


                <tr>
                    <td>
                        <strong>Success</strong>
                    </td>
                    <td>
                        <code>$success</code>
                    </td>
                    <td>
                        <code>$green</code>
                    </td>
                    <td>
                        <span class="bd-color" style="background: hsl(141, 71%,  48%);"></span>
                        <code>hsl(141, 71%,  48%)</code>

                    </td>
                    <td>
                        <code>$success-invert</code>
                    </td>
                    <td>

                        <span class="bd-color" style="background: #fff;"></span>
                        <code>#fff</code>

                    </td>
                </tr>


                <tr>
                    <td>
                        <strong>Warning</strong>
                    </td>
                    <td>
                        <code>$warning</code>
                    </td>
                    <td>
                        <code>$yellow</code>
                    </td>
                    <td>
                        <span class="bd-color" style="background: hsl(48,  100%, 67%);"></span>
                        <code>hsl(48,  100%, 67%)</code>

                    </td>
                    <td>
                        <code>$warning-invert</code>
                    </td>
                    <td>

                        <span class="bd-color" style="background: rgba(0, 0, 0, 0.7);"></span>
                        <code>rgba(0, 0, 0, 0.7)</code>

                    </td>
                </tr>


                <tr>
                    <td>
                        <strong>Danger</strong>
                    </td>
                    <td>
                        <code>$danger</code>
                    </td>
                    <td>
                        <code>$red</code>
                    </td>
                    <td>
                        <span class="bd-color" style="background: hsl(348, 100%, 61%);"></span>
                        <code>hsl(348, 100%, 61%)</code>

                    </td>
                    <td>
                        <code>$danger-invert</code>
                    </td>
                    <td>

                        <span class="bd-color" style="background: #fff;"></span>
                        <code>#fff</code>

                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</section>
@endsection
