@extends('layouts.app')
@section('title', 'Components &mdash; Dropdown')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('dropdown') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Dropdown</h1>
            <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container">
        <b-dropdown>
            <p class="tag is-success" slot="trigger">
                Custom trigger
            </p>

            <b-dropdown-item>Action</b-dropdown-item>
            <b-dropdown-item>Another action</b-dropdown-item>
            <b-dropdown-item>Something else</b-dropdown-item>
        </b-dropdown>
    </div>
</section>
@endsection
