@extends('layouts.app')
@section('Atomic Design')
@section('content')
<header class="hero is-light">
    <div class="hero-body">
        <div class="container is-fluid">
           <div class="content">
               <h1 class="title">
                   <a style="text-decoration: underline" href="http://bradfrost.com/blog/post/atomic-web-design/">Atomic design</a> is a methodology for creating design
               </h1>
               <blockqoute class="is-size-5">
                   <em>
                       We’re not designing pages, we’re designing systems of components.
                       — <a style="text-decoration: underline" href="http://bradfrost.com/blog/mobile/bdconf-stephen-hay-presents-responsive-design-workflow/" target="bradfrost">Stephen Hay</a>
                   </em>
               </blockquote>
           </div>
        </div>
    </div>
</header>
@include('partials.navbars.atomic-design')
<section class="section">
    <div class="container is-fluid">
        @include('content.atomic-design')
    </div>
</section>
@endsection
