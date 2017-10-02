@extends('layouts.app')

@section('content')
<header class="hero is-light" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('icon') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Icons</h1>
            <h2 class="subtitle">Font Awesome and Material Design Icons</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            <p>The icon element is a container for any type of icon font. Because the icons can take a few seconds to load, and because you want control over the space the icons will take, you can use the icon class as a reliable square container that will prevent the page to "jump" on page load.</p>
        </div>
    </div>
</section>
@endsection
