@extends('layouts.app')
@section('title', 'Columns')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('snackbar') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Snackbar</h1>
            <h2 class="subtitle">When a Dialog seems a bit overkill for the task, Snackbars are good candidates</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
