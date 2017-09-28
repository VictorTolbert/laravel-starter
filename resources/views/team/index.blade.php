@extends('layouts.app')

@section('hero-body')

@endsection

@section('content')
<header class="hero is-primary">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">Team</h1>
            <h1 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit. Illum, quas nostrum? Rem, iste ratione saepe. Perspiciatis sapiente, molestiae iste vel.</h1>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column">
                @include('partials.articles.team')
            </div>
        </div>
    </div>
</section>
@endsection
