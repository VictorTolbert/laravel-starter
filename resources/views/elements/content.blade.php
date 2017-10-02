@extends('layouts.app')

@section('content')
<header class="hero is-light" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('content') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Content</h1>
            <h2 class="subtitle">A single class to handle WYSIWYG generated content, where only <strong>HTML tags</strong> are available</h2>
        </div>
    </div>
</header>
    <section class="section">

    </section>
@endsection
