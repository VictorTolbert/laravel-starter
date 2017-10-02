@extends('layouts.app')
@section('title', 'Layout &mdash; Footer')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('footer') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Footer</h1>
            <h2 class="subtitle">A simple responsive <strong>footer</strong> which can include anything: lists, headings, columns, icons, buttons, etc.</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
