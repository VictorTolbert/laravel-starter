@extends('layouts.app')
@section('title', 'Form &mdash; Autocomplete')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('autocomplete') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Autocomplete</h1>
            <h2 class="subtitle">Extended input that provide suggestions while the user types. Use with Field to access all functionalities</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
