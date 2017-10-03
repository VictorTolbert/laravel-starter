@extends('layouts.app')
@section('title', 'Elements &mdash; Progress Bars')
@section('content')
<header class="hero is-light" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('progress') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Progress Bars</h1>
            <h2 class="subtitle">Native HTML <strong>progress</strong> bars</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
