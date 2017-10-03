@extends('layouts.app')
@section('title', 'Overview &mdash; Mixins')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('mixins') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Mixins</h1>
            <h2 class="subtitle">Utility mixins for custom elements and responsive helpers</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            @include('content.overview.mixins')
        </div>
    </div>
</section>
@endsection
