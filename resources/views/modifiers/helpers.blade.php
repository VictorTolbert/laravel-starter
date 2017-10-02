@extends('layouts.app')
@section('title', 'Modifiers &mdash; Helpers')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('helpers') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Helpers</h1>
            <h2 class="subtitle">You can apply <strong>responsive helper classes</strong> to almost any element, in order to alter its style based upon the browser's width.</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
