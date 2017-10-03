@extends('layouts.app')
@section('title', 'Overview &mdash; Colors')
@section('content')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Colors</h1>
        <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h2>
    </div>
</div>
<section class="section">
    <div class="container is-fluid">
        <div v-for="(palette, index) in db.demo.palettes">
            <h2 v-text="palette.color"></h2>
            <ul class="columns" v-for="(variation, index) in palette.variations">
                <li class="column" v-text="variation"></li>
            </ul>
        </div>
    </div>
</section>
@endsection
