@extends('layouts.app')
@section('title', 'Overview &mdash; Customize')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('customize') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Customizing with Sass</h1>
            <h2 class="subtitle">Create your <strong>own theme</strong> with a simple set of <strong>variables</strong></h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            @include('content.overview.customize')
        </div>
    </div>
</section>
@endsection

