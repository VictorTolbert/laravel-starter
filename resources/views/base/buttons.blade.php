@extends('layouts.app')

@section('hero-body')

@endsection

@section('content')
    <header class="hero is-light">
        <div class="hero-body">
            <div class="container is-fluid">
                <h1 class="title">Buttons</h1>
                <h2 class="subtitle">Buttons are used to invoke an event</h2>
            </div>
        </div>
    </header>
    <section class="section">
        <a class="button is-success">Confirm</a>
        <a class="button is-danger">Reject</a>
        <a class="button">Modify</a>
    </section>
@endsection
