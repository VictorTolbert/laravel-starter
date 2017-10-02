@extends('layouts.app')
@section('title', 'Layout &mdash; Container')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('container') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Container</h1>
            <h2 class="subtitle">A simple <strong>container</strong> to center your content horizontally</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            <p>The <code>.container</code> class can be used in any context, but mostly as a <strong>direct child</strong> of either:</p>
            <ul>
                <li><code>.navbar</code></li>
                <li><code>.hero</code></li>
                <li><code>.section</code></li>
                <li><code>.footer</code></li>
            </ul>
            <p>
                The container <strong>breakpoints</strong> have an <strong>offset</strong> defined by the <code>$container-offset</code> variable. It has a default value of <code>60px</code>.
            </p>
            <p>This is how the container will behave:</p>
            <ul>
                <li>on <code>$desktop</code> + <code>$container-offset</code> = <code>&gt;= 1068px</code> it will have a maximum width of <strong>960px</strong> and will be <strong>horizontally centered</strong>.</li>
                <li>on <code>$widescreen</code> + <code>$container-offset</code> = <code>&gt;= 1260px</code> it will have a maximum width of <strong>1152px</strong>.</li>
                <li>on <code>$fullhd</code> + <code>$container-offset</code> = <code>&gt;= 1452px</code> it will have a maximum width of <strong>1344px</strong>.</li>
            </ul>
            <p>
                The <code>$gap</code> variable has a default value of <code>24px</code> but can be modified.
            </p>
            <p>The values <strong>960</strong>, <strong>1152</strong> and <strong>1344</strong> have been chosen because they are divisible by both <strong>12</strong> and <strong>16</strong>.</p>
        </div>
    </div>
</section>
@endsection
