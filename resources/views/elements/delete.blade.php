@extends('layouts.app')

@section('content')
<header class="hero is-dark has-code-bg" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('data-table') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Delete</h1>
            <h2 class="subtitle">A versatile <strong>delete</strong> cross</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
