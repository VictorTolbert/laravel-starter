@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-narrow">
                <figure class="image is-128x128">
                  <img src="/images/placeholder-128x128.png">
                </figure>
            </div>
            <div class="column is-8 col-md-8 col-md-offset-2">
                <h1 class="title">
                    {{ $profileUser->name }}
                </h1>
            </div>
        </div>
    </div>
</section>
@endsection
