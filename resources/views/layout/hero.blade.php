@extends('layouts.app')
@section('title', 'Layout &mdash; Hero')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('hero') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Hero</h1>
            <h2 class="subtitle">An imposing <strong>hero banner</strong> to showcase something</h2>
        </div>
    </div>
</header>
<section class="section is-fullwidth">
  <div class="bd-example">
    <section class="hero">
      <div class="hero-body">
        <div class="container is-fluid">
          <p class="title">
            Hero title
          </p>
          <p class="subtitle">
            Hero subtitle
          </p>
        </div>
      </div>
    </section>
  </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;section</span> <span class="na">class=</span><span class="s">"hero"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hero-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>
        Hero title
      <span class="nt">&lt;/h1&gt;</span>
      <span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>
        Hero subtitle
      <span class="nt">&lt;/h2&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/section&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
</section>
<section class="section">
  <div class="container is-fluid">
    <h3 class="title">Colors</h3>
    <h4 class="subtitle">
        As with buttons, you can choose one of the <strong>7 different colors</strong>:
    </h4>
  </div>
</section>
<section class="section is-fullwidth">
  <div class="bd-example">
    <section class="hero is-primary">
      <div class="hero-body">
        <div class="container is-fluid">
          <p class="title">
            Primary title
          </p>
          <p class="subtitle">
            Primary subtitle
          </p>
        </div>
      </div>
    </section>
  </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;section</span> <span class="na">class=</span><span class="s">"hero is-primary"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"hero-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>
        Primary title
      <span class="nt">&lt;/h1&gt;</span>
      <span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>
        Primary subtitle
      <span class="nt">&lt;/h2&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/section&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>

  <div class="bd-example">
    <section class="hero is-info">
      <div class="hero-body">
        <div class="container is-fluid">
          <p class="title">
            Info title
          </p>
          <p class="subtitle">
            Info subtitle
          </p>
        </div>
      </div>
    </section>
  </div>

  <div class="bd-example">
    <section class="hero is-success">
      <div class="hero-body">
        <div class="container is-fluid">
          <p class="title">
            Success title
          </p>
          <p class="subtitle">
            Success subtitle
          </p>
        </div>
      </div>
    </section>
  </div>

  <div class="bd-example">
    <section class="hero is-warning">
      <div class="hero-body">
        <div class="container is-fluid">
          <p class="title">
            Warning title
          </p>
          <p class="subtitle">
            Warning subtitle
          </p>
        </div>
      </div>
    </section>
  </div>

  <div class="bd-example">
    <section class="hero is-danger">
      <div class="hero-body">
        <div class="container is-fluid">
          <p class="title">
            Danger title
          </p>
          <p class="subtitle">
            Danger subtitle
          </p>
        </div>
      </div>
    </section>
  </div>

  <div class="bd-example">
    <section class="hero is-light">
      <div class="hero-body">
        <div class="container is-fluid">
          <p class="title">
            Light title
          </p>
          <p class="subtitle">
            Light subtitle
          </p>
        </div>
      </div>
    </section>
  </div>

  <div class="bd-example">
    <section class="hero is-dark">
      <div class="hero-body">
        <div class="container is-fluid">
          <p class="title">
            Dark title
          </p>
          <p class="subtitle">
            Dark subtitle
          </p>
        </div>
      </div>
    </section>
  </div>
</section>
<section class="section">
  <div class="container is-fluid">
    <h3 class="title">
      Gradients
      <span class="tag is-warning">Experimental</span>
    </h3>
    <h4 class="subtitle">
      By adding the <code>is-bold</code> modifier, you can generate a subtle <strong>gradient</strong>
    </h4>
  </div>
</section>
@endsection
