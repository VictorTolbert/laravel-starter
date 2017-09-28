@extends('layouts.app')
@section('content')

<header class="hero is-primary">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">Navbars</h1>
            <h2 class="subtitle"></h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="box">
        @include('partials.navbars.app')
    </div>

    <div class="box">
        @include('partials.navbars.seller')
    </div>

    <div class="box">
        @include('partials.navbars.atomic-design')
    </div>

    <div class="box">
        @include('partials.navbars.breadcrumb')
    </div>

    <div class="box">
        @include('partials.navbars.buyer')
    </div>

    <div class="box">
        @include('partials.navbars.campaign-performance')
    </div>

    <div class="box">
        @include('partials.navbars.design-system')
    </div>

    <div class="box">
        @include('partials.navbars.gasps')
    </div>

    <div class="box">
        @include('partials.navbars.ops')
    </div>

    <div class="box">
        @include('partials.navbars.project-info')
    </div>

    <div class="box">
        @include('partials.navbars.pagination')
    </div>


    <div class="box">
        @include('partials.navbars.style1')
    </div>

    <div class="box">
        @include('partials.navbars.styleguide')
    </div>

    <div class="box">
        @include('partials.navbars.table-tools')
    </div>

    <div class="box">
        @include('partials.navbars.team')
    </div>

    <div class="box">
        @include('partials.navbars.utilities')
    </div>

    <div class="box">
        @include('partials.navbars.vti')
    </div>

    <div class="box">
        @include('partials.navbars.wizard')
    </div>
</section>
@endsection
