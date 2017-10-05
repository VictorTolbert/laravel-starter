@extends('layouts.app')
@section('content')
<header class="hero is-light">
    <div class="hero-body">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column">
                    <h1 class="title">Price Guide</h1>
                    <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h2>
                </div>
                <div class="column is-3">
                    <twitter-quote></twitter-quote>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div v-for="index in 6" >
            <p :class="`is-size-${index + 1}`">
                ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                abcdefghijklmnopqrstuvwxyz<br>
                1234567890
            </p>
            <hr>
        </div>
        <div class="columns">
            <div class="column is-3">
                <twitter-quote></twitter-quote>
            </div>
        </div>
    </div>
</section>
@endsection
