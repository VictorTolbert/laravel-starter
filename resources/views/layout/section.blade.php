@extends('layouts.app')
@section('title', 'Layout &mdash; Section')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('section') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Section</h1>
            <h2 class="subtitle">A simple container to divide your page into <strong>sections</strong></h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
