@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Team</h1>
        <h1 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit. Illum, quas nostrum? Rem, iste ratione saepe. Perspiciatis sapiente, molestiae iste vel.</h1>
    </div>
</div>
@endsection

@section('content')
<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column">
                @include('partials.articles.product-team')
            </div>
        </div>
    </div>
</section>
@endsection
