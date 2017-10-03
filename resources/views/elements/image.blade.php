@extends('layouts.app')
@section('title', 'Elements &mdash; Images')
@section('content')
<header class="hero is-light" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('image') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Images</h1>
            <h2 class="subtitle">A container for <strong>responsive images</strong></h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
