@extends('layouts.app')
@section('title', 'Columns')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('dialog') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Dialog</h1>
            <h2 class="subtitle">Dialogs inform users about a specific task and may contain critical information or require decisions</h2>
        </div>
    </div>
</header>
<section class="section">

</section>
@endsection
