@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-8 is-offset-2 col-md-8 col-md-offset-2">
                <h1 class="title">
                    {{ $profileUser->name }}
                </h1>
            </div>
        </div>
    </div>
</section>
@endsection
