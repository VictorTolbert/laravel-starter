@extends('layouts.app')
@section('title', 'Columns &mdash; Column Gap')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('gap') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Column Gap</h1>
            <h2 class="subtitle">Customize the <strong>gap</strong> between the columns</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
