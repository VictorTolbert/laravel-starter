@extends('layouts.app')

@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">Glossary</h1>
            <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure doloribus, quidem optio, numquam commodi unde nihil nesciunt sapiente obcaecati corporis maiores ipsam cumque magni magnam provident sed sequi, praesentium, veniam.</h2>

        </div>
    </div>
</header>
<section class="section">
    <div class="content">
        @include('content.glossary')
    </div>
</section>
@endsection
