@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Dropdown</h1>
        <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h2>
    </div>
</div>
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <b-dropdown>
                <p class="tag is-success" slot="trigger">
                    Custom trigger
                </p>

                <b-dropdown-item>Action</b-dropdown-item>
                <b-dropdown-item>Another action</b-dropdown-item>
                <b-dropdown-item>Something else</b-dropdown-item>
            </b-dropdown>
        </div>
    </section>
@endsection
