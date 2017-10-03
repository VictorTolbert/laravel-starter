@extends('layouts.app')
@section('title', 'Overview &mdash; Classes')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('classes') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Classes</h1>
            <h2 class="subtitle">Bulma is simply a collection of CSS classes. Write the HTML code you want.</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            @include('content.overview.classes')
        </div>
    </div>
</section>
@endsection
