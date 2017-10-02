@extends('layouts.app')
@section('title', 'Components &mdash; Calendar')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('collapse') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Collapse</h1>
            <h2 class="subtitle">Collapse is a easy way to toggle what you want</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
