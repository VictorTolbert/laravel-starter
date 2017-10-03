@extends('layouts.app')
@section('title', 'Overview &mdash; Variables')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('variables') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Variables</h1>
            <h2 class="subtitle">Easily <strong>customize</strong> Bulma to match your design</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            @include('content.overview.variables')
        </div>
    </div>
</section>
@endsection
