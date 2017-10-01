@extends('layouts.app')
@section('content')
<header class="hero is-dark has-code-bg" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('box') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Box</h1>
            <h2 class="subtitle">A white <strong>box</strong> to contain other elements</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
