@extends('layouts.app')

@section('content')
<header class="hero is-dark has-code-bg" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('title') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Titles</h1>
            <h2 class="subtitle">Simple <strong>headings</strong> to add depth to your page</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
