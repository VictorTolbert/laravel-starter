@extends('layouts.app')
@section('title', 'Team')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('team') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Team</h1>
            <h1 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit. Illum, quas nostrum? Rem, iste ratione saepe. Perspiciatis sapiente, molestiae iste vel.</h1>
        </div>
    </div>
</header>

<section class="section m-t-sm">
    <div class="container is-fluid">
        <nav class="panel">
            <p class="panel-heading">
                Search
            </p>
            <div class="panel-block">
                <p class="control has-icons-left">
                    <input class="input" type="search" placeholder="">
                    <span class="icon is-small is-left">
                        <i class="fa fa-search"></i>
                    </span>
                </p>
            </div>
        </nav>
        <div class="columns">
            <div class="column">
                @include('partials.articles.team')
            </div>
        </div>
    </div>
</section>
@endsection
