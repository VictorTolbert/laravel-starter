@extends('layouts.app')
@section('title', 'Columns')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('basics') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Columns</h1>
            <h2 class="subtitle">A simple way to build <strong>responsive columns</strong></h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
