@extends('layouts.app')
@section('title', 'Layout')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('layout') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Layout</h1>
            <h2 class="subtitle">A simple way to build <strong>responsive columns</strong></h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
