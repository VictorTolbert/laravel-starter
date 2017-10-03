@extends('layouts.app')
@section('title', 'Overview')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('overview') }}
        </div>
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            {{-- <h1 class="title">Design Coding Dashboard</h1> --}}
            <h1 class="title">Overview</h1>
            <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est aspernatur consectetur, atque exercitationem consequatur nisi magni voluptatum suscipit amet dolor eligendi expedita officia asperiores delectus rerum pariatur sapiente quaerat quia.</h2>
        </div>
    </div>
</header>
    <section class="section">

    </section>
@endsection
