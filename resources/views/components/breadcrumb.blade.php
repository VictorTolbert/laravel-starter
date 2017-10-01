@extends('layouts.app')
@section('title', 'Components &mdash; Breadcrumb')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('breadcrumb') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Breadcrumb</h1>
            <h2 class="subtitle">A simple breadcrumb component to improve your navigation experience</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
