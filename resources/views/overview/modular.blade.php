@extends('layouts.app')
@section('title', 'Overview &mdash; Modular')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('modular') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Modular</h1>
            <h2 class="subtitle">Just import what you <strong>need</strong></h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            @include('content.overview.modular')
        </div>
    </div>
</section>
@endsection
