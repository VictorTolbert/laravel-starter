@extends('layouts.app')
@section('title', 'Modifiers &mdash; Responsive Helpers')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('responsive-helpers') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Responsive Helpers</h1>
            <h2 class="subtitle"><strong>Show/hide</strong> content depending on the width of the viewport</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
