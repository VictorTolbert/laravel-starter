@extends('layouts.app')
@section('title', 'Elements &mdash; Notifications')
@section('content')
<header class="hero is-light" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('notification') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Notifications</h1>
            <h2 class="subtitle">Bold <strong>notification</strong> blocks, to alert your users of something</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
