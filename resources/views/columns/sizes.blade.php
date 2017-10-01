@extends('layouts.app')
@section('title', 'Columns &mdash; Sizes')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('sizes') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Column Sizes</h1>
            <h2 class="subtitle">Define the <strong>size</strong> of each column <strong>individually</strong></h2>
        </div>
    </div>
</header>
<section class="section">
    If you want to change the size of a single column, you can use one of the following classes:

    is-three-quarters
    is-two-thirds
    is-half
    is-one-third
    is-one-quarter
    The other columns will fill up the remaining space automatically.
</section>
@endsection
