@extends('layouts.app')
@section('title', 'Layout &mdash; Level')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('level') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Level</h1>
            <h2 class="subtitle">A multi-purpose <strong>horizontal level</strong>, which can contain almost any other element</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
