@extends('layouts.app')
@section('title', 'Elements &mdash; Tags')
@section('content')
<header class="hero is-light" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('tag') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Tags</h1>
            <h2 class="subtitle">Small <strong>tag labels</strong> to insert anywhere</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container">
        <b-tag>Tag label</b-tag>
        <b-tag rounded>Rounded tag label</b-tag>

        <b-taglist>
            <b-tag type="is-info">First</b-tag>
            <b-tag type="is-info">Second</b-tag>
            <b-tag type="is-info">Third</b-tag>
            <b-tag type="is-info">Fourth</b-tag>
            <b-tag type="is-info">Fifth</b-tag>
        </b-taglist>

        <b-taglist attached>
            <b-tag type="is-dark">npm</b-tag>
            <b-tag type="is-info">0.5.1</b-tag>
        </b-taglist>
    </div>
</section>
<section class="section">
    <div class="container is-fluid">
        <b-field grouped group-multiline>
            <div class="control">
                <b-taglist attached>
                    <b-tag type="is-dark">npm</b-tag>
                    <b-tag type="is-info">0.5.1</b-tag>
                </b-taglist>
            </div>

            <div class="control">
                <b-taglist attached>
                    <b-tag type="is-dark">downloads</b-tag>
                    <b-tag type="is-success">15k</b-tag>
                </b-taglist>
            </div>

            <div class="control">
                <b-taglist attached>
                    <b-tag type="is-dark">chat</b-tag>
                    <b-tag type="is-primary">on discord</b-tag>
                </b-taglist>
            </div>
        </b-field>
        <br>

        <b-field grouped group-multiline>
            <div class="control">
                <b-tag type="is-primary" attached closable>Technology</b-tag>
            </div>

            <div class="control">
                <b-tag type="is-primary" attached closable>Vuejs</b-tag>
            </div>

            <div class="control">
                <b-tag type="is-primary" attached closable>CSS</b-tag>
            </div>

            <div class="control">
                <b-tag type="is-primary" attached closable>Flexbox</b-tag>
            </div>
        </b-field>
    </div>
</section>
@endsection
