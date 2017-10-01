@extends('layouts.app')
@section('title', 'Modifiers &mdash; Typography Helpers')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('typography-helpers') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Typography Helpers</h1>
            <h2 class="subtitle">Change the <strong>size</strong> and <strong>color</strong> of the text for one or multiple viewport width</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
