@extends('layouts.app')
@section('title', 'Columns')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('notices') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Notices</h1>
            <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quis dicta est ducimus aliquid dolor corporis tempora, odit amet quos nihil harum, doloribus in ea expedita, illo similique, architecto eum.</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
