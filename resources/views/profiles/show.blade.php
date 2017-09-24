@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Profile</h1>
        <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure doloribus, quidem optio, numquam commodi unde nihil nesciunt sapiente obcaecati corporis maiores ipsam cumque magni magnam provident sed sequi, praesentium, veniam.</h2>
    </div>
</div>
@endsection

@section('content')
<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-narrow">
                <figure class="image is-48x48">
                  <img src="{{ get_gravatar($profileUser->email) }}">
                </figure>
            </div>
            <div class="column is-8 col-md-8 col-md-offset-2">
                <h1 class="title">
                    {{ $profileUser->name }}
                </h1>
                <h1 class="subtitle">
                    {{ $profileUser->email }}
                </h1>
            </div>
        </div>
    </div>
</section>
@endsection
