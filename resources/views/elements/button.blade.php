@extends('layouts.app')

@section('content')
<header class="hero is-light" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('button') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Buttons</h1>
            <h2 class="subtitle">The classic <strong>button</strong>, in different colors, sizes, and states</h2>
        </div>
    </div>
</header>
    <section class="section">
        <div class="container is-fluid">
            <a class="button is-success">Confirm</a>
            <a class="button is-danger">Reject</a>
            <a class="button">Modify</a>
        </div>
    </section>
@endsection
