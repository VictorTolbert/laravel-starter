@extends('layouts.app')
@section('title', 'Modifiers &mdash; Modifiers Syntax')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('modifiers') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Modifiers Syntax</h1>
            <h2 class="subtitle">Most Bulma elements have alternative styles. To apply them, you only need to append one of the modifier classes. They all start with <code>is-</code> or <code>has-</code>.</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
