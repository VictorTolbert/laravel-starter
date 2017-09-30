@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Card</h1>
        <h2 class="subtitle">Cards are used to apply a container around a related grouping of information.</h2>
    </div>
</div>
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <b-collapse class="card" :open.sync="isOpen">
                <div slot="trigger" class="card-header">
                    <p class="card-header-title">
                        Component
                    </p>
                    <a class="card-header-icon">
                        <b-icon :icon="isOpen ?
                            'arrow_drop_down' : 'arrow_drop_up'">
                        </b-icon>
                    </a>
                </div>
                <div class="card-content">
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                        <a>#buefy</a>.
                    </div>
                </div>
                <footer class="card-footer">
                    <a class="card-footer-item">Save</a>
                    <a class="card-footer-item">Edit</a>
                    <a class="card-footer-item">Delete</a>
                </footer>
            </b-collapse>
        </div>
    </section>
@endsection
