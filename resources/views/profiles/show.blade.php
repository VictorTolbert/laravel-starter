@extends('layouts.app')
@section('content')
<header class="hero is-dark">
    <div class="hero-body">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-narrow">
                    <figure class="image is-128x128">
                      {{-- <img src="{{ get_gravatar($profileUser->email) }}"> --}}
                      <img src="/demo-user.png" style="background-color: #eee">
                    </figure>
                </div>
                <div class="column is-5 name">
                    <h1 class="title">
                        {{ $profileUser->name }}
                    </h1>
                    <h1 class="subtitle">
                        {{ $profileUser->email }}
                    </h1>
                    {{-- <p>
                        <span>
                            <span class="title is-bold">{{ $profileUser->name }}</span><br>
                            <span>{{ $profileUser->email }}</span>
                        </span>
                        <span class="button is-primary is-outlined follow">Follow</span>
                    </p> --}}
                    <p class="tagline">The users profile bio would go here, of course. It could be two lines</p>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container is-fluid">
    <section class="section">
    </section>
</div>
</section>
@endsection
