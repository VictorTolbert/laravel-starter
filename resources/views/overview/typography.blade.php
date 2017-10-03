@extends('layouts.app')
@section('title', 'Overview &mdash; Typography')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('typography') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Typography</h1>
            <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae eveniet saepe facilis libero, unde molestiae animi, ratione similique numquam quasi voluptatum quaerat debitis. Consequatur deleniti culpa laudantium ratione! Quia, modi.</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content is-medium">
            <div class="columns is-multiline">
                <div class="column is-4" style="font-weight: 100">
                    <h4>Roboto Thin</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
                <div class="column is-4" style="font-weight: 100; font-style: italic">
                    <h4>Roboto Thin Italic</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
                <div class="column is-4" style="font-weight: 300;">
                    <h4>Roboto Light</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
                <div class="column is-4" style="font-weight: 300;font-style: italic">
                    <h4>Roboto Light Italic</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
                <div class="column is-4" style="font-weight: 400">
                    <h4>Roboto Regular</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
                <div class="column is-4" style="font-weight: 400;font-style: italic">
                    <h4>Roboto Regular Italic</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
                <div class="column is-4" style="font-weight: 500">
                    <h4>Roboto Medium</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
                <div class="column is-4" style="font-weight: 500;font-style: italic">
                    <h4>Roboto Medium Italic</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
                <div class="column is-4" style="font-weight: 700">
                    <h4>Roboto Bold</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
                <div class="column is-4" style="font-weight: 700; font-style: italic">
                    <h4>Roboto Bold Italic</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
                <div class="column is-4" style="font-weight: 900">
                    <h4>Roboto Black</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
                <div class="column is-4" style="font-weight: 900; font-style: italic">
                    <h4>Roboto Black Italic</h4>
                    <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz<br>
                    1234567890</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

