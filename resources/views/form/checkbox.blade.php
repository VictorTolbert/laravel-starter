@extends('layouts.app')
@section('title', 'Form &mdash; Checkbox')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('checkbox') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Checkbox</h1>
            <h2 class="subtitle">A checkable input that communicates if an option is true, false or indeterminate</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
