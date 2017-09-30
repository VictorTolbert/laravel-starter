@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Panel</h1>
        <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h2>
    </div>
</div>
@endsection

@section('content')
    <section class="section">
        <div class="container is-fluid">
            <div class="block">
                <button class="button is-medium is-primary"
                    @click="isOpen = !isOpen">
                    Toggle
                </button>
            </div>
        </div>
    </section>
    <section class="section">
        <b-collapse class="panel" :open.sync="isOpen">
            <div slot="trigger" class="panel-heading">
                <strong>Title</strong>
            </div>
            <p class="panel-tabs">
                <a class="is-active">All</a>
                <a>Public</a>
                <a>Private</a>
            </p>
            <div class="panel-block">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br />
                Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. <br />
                Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque.
            </div>
        </b-collapse>
    </section>
@endsection
