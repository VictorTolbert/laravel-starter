@extends('layouts.app')
@section('title', 'Overview &mdash; Getting Started')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('start') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Getting Stated</h1>
            <h2 class="subtitle">You only need <strong>1 CSS file</strong></h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            @include('content.overview.start')
        </div>
    </div>
</section>
@endsection
