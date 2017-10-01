@extends('layouts.app')
@section('title', 'Layout &mdash; Tiles')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('tiles') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Tiles</h1>
            <h2 class="subtitle">A <strong>single tile</strong> element to build 2-dimensional Metro-like, Pinterest-like, or whatever-you-like grids</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
