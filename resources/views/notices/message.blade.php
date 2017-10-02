@extends('layouts.app')
@section('title', 'Columns')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('message') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Message</h1>
            <h2 class="subtitle">Colored message blocks, to draw attention of your user</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
