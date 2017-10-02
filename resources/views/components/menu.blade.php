@extends('layouts.app')
@section('title', 'Components &mdash; Menu')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('menu') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Menu</h1>
            <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h2>
        </div>
    </div>
</header>
<section class="section">
    <!-- Menu -->
    <aside class="menu">
        <p class="menu-label">
            <span class="icon"><i class="fa fa-folder"></i></span> General
        </p>
        <ul class="menu-list">
            <li>
                <a class="menu-item" href="#">
                    <span class="icon"><i class="fa fa-home"></i></span> Home
                </a>
            </li>
            <li>
                <a class="menu-item" href="#">
                    <span class="icon"><i class="fa fa-camera"></i></span> Pictures
                </a>
            </li>
            <li>
                <a class="menu-item" href="#">
                    <span class="icon"><i class="fa fa-video-camera"></i></span> Videos
                </a>
            </li>
        </ul>
    </aside>
</section>
@endsection
