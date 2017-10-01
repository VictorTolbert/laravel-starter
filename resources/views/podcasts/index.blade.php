@extends('layouts.app')

@section('content')
    <section class="hero is-dark has-code-bg">
        <div class="hero-body">
            <div class="container is-fluid">
                    <h1 class="title">Podcasting for Programmers</h1>
                    <p>The best place to discover and publish podcasts about building software.</p>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container is-fluid">
            <div class="content">
                <h1 class="text-bold mb-4">Popular Shows</h1>
                <div class="columns row pull-x-4 pull-b-6">
                    @foreach ($podcasts as $podcast)
                    <div class="column is-2 col-2 px-4 mb-6">
                        <div class="hover-grow">
                            <a href="{{ url("/podcasts/{$podcast->id}") }}" class="block box-shadow mb-2">
                                <img src="{{ $podcast->imageUrl() }}" class="img-fit">
                            </a>
                            <p class="text-ellipsis">
                                <a href="{{ url("/podcasts/{$podcast->id}") }}" class="text-sm text-medium">
                                    {{ $podcast->title }}
                                </a>
                            </p>
                            <p class="text-xs text-uppercase text-spaced text-ellipsis">
                                <a href="{{ $podcast->website }}" class="link-softer">
                                    {{ $podcast->websiteHost() }}
                                </a>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
