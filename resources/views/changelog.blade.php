@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Changelog</h1>
        <h1 class="subtitle">Last Uploaded 03/06/17</h1>
    </div>
</div>
@endsection

@section('content')
<section class="section">
    <div class="container is-fluid">
        <ul class="timeline">
            <li class="timeline-header">
                <span class="tag is-medium is-primary">October 6, 2017</span>
            </li>
            <li class="timeline-item">
                <div class="timeline-marker is-primary"></div>
                <div class="timeline-content">
                    <p class="heading">January 2016</p>
                    <p>Timeline content - Can include any HTML element</p>
                </div>
            </li>
            <li class="timeline-item">
                <div class="timeline-marker is-warning is-image is-32x32">
                    <img src="http://bulma.io/images/placeholders/32x32.png">
                </div>
                <div class="timeline-content">
                    <p class="heading">February 2016</p>
                    <p>Timeline content - Can include any HTML element</p>
                </div>
            </li>
            <li class="timeline-header">
                <span class="tag is-primary">2017</span>
            </li>
            <li class="timeline-item">
                <div class="timeline-marker is-danger is-icon">
                    <i class="fa fa-flag"></i>
                </div>
                <div class="timeline-content">
                    <p class="heading">March 2017</p>
                    <p>Timeline content - Can include any HTML element</p>
                </div>
            </li>
            <li class="timeline-header">
                <span class="tag is-medium is-primary">End</span>
            </li>
        </ul>
    </div>
</section>

@endsection
