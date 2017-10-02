@extends('layouts.app')

@section('content')
<header class="hero is-light" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('title') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Titles</h1>
            <h2 class="subtitle">Simple <strong>headings</strong> to add depth to your page</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="tile is-ancestor animated">
            <div class="tile is-parent is-3">
                <article class="tile is-child box">
                    <h1 class="title">Title</h1>
                    <h2 class="subtitle">Subtitle</h2>
                </article>
            </div>
            <div class="tile is-parent is-3">
                <article class="tile is-child box">
                    <p class="title is-1">Title 1</p>
                    <p class="title is-2">Title 2</p>
                    <p class="title is-3">Title 3 (default size)</p>
                    <p class="title is-4">Title 4</p>
                    <p class="title is-5">Title 5</p>
                    <p class="title is-6">Title 6</p>
                </article>
            </div>
            <div class="tile is-parent is-3">
                <article class="tile is-child box">
                    <p class="subtitle is-1">Subtitle 1</p>
                    <p class="subtitle is-2">Subtitle 2</p>
                    <p class="subtitle is-3">Subtitle 2</p>
                    <p class="subtitle is-4">Subtitle 4</p>
                    <p class="subtitle is-5">Subtitle 5 (default size)</p>
                    <p class="subtitle is-6">Subtitle 6</p>
                </article>
            </div>
            <div class="tile is-parent is-3">
                <article class="tile is-child box">
                    <div class="block">
                        <p class="title is-1">Title 1</p>
                        <p class="subtitle is-3">Subtitle 3</p>
                    </div>
                    <div class="block">
                        <p class="title is-2">Title 2</p>
                        <p class="subtitle is-4">Subtitle 4</p>
                    </div>
                    <div class="block">
                        <p class="title is-3">Title 3</p>
                        <p class="subtitle is-5">Subtitle 5</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
