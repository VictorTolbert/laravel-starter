@extends('layouts.app')
@section('title', 'Layout &mdash; Hero')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('hero') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Hero</h1>
            <h2 class="subtitle">An imposing <strong>hero banner</strong> to showcase something</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
