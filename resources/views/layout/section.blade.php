@extends('layouts.app')
@section('title', 'Layout &mdash; Section')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('section') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Section</h1>
            <h2 class="subtitle">A simple container to divide your page into <strong>sections</strong></h2>
        </div>
    </div>
</header>
<section class="section">
  <div class="container is-fluid">
    <div class="content">
      <p>Use sections as <strong>direct</strong> children of <code>body</code>.</p>
    </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;body&gt;</span>
  <span class="nt">&lt;section</span> <span class="na">class=</span><span class="s">"section"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Section<span class="nt">&lt;/h1&gt;</span>
      <span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"subtitle"</span><span class="nt">&gt;</span>
        A simple container to divide your page into <span class="nt">&lt;strong&gt;</span>sections<span class="nt">&lt;/strong&gt;</span>, like the one you're currently reading
      <span class="nt">&lt;/h2&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/section&gt;</span>
<span class="nt">&lt;/body&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>

    <div class="content">
      <p>You can use the modifiers <code>is-medium</code> and <code>is-large</code> to change the <strong>spacing</strong>.</p>
    </div>

  </div>
</section>
@endsection
