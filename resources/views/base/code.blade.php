@extends('layouts.app')

@section('content')
    <header class="hero is-light">
        <div class="hero-body">
            <div class="container is-fluid">
                <h1 class="title">Code</h1>
                <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h2>
            </div>
        </div>
    </header>
    <section class="section">
        <div class="box">
            <b-tabs size="is-small">
                <b-tab-item label="HTML">
                    <pre><code v-text="code"></code></pre>
                </b-tab-item>
                <b-tab-item label="Handlebars"></b-tab-item>
                <b-tab-item label="Nunjucks"></b-tab-item>
                <b-tab-item label="Pug"></b-tab-item>
                <b-tab-item label="Angular"></b-tab-item>
                <b-tab-item label="React"></b-tab-item>
                <b-tab-item label="Vue"></b-tab-item>
                <b-tab-item label="Props"></b-tab-item>
                <b-tab-item label="Events"></b-tab-item>
            </b-tabs>
        </div>

    </section>
@endsection
