@extends('layouts.app')
@section('title', 'Overview &mdash; Functions')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('functions') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Functions</h1>
            <h2 class="subtitle">Utility functions to calculate colors and other values</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            @include('content.overview.functions')
        </div>
    </div>
</section>
@endsection
