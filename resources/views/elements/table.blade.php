@extends('layouts.app')
@section('title', 'Elements &mdash; Tables')
@section('content')
<header class="hero is-light" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('table') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Tables</h1>
            <h2 class="subtitle">The inevitable HTML <strong>table</strong>, with special case cells</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
