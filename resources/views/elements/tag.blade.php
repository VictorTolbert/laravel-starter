@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Tag</h1>
        <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h2>
    </div>
</div>
@endsection

@section('content')
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
