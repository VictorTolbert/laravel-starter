@extends('layouts.app')
@section('title', 'Overview &mdash; Responsiveness')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('responsiveness') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Responsiveness</h1>
            <h2 class="subtitle">Bulma is a <strong>mobile-first</strong> framework</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            @include('content.overview.responsiveness')
        </div>
    </div>
</section>
@endsection
