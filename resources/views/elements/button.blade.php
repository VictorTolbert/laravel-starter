@extends('layouts.app')
@section('title', 'Elements &mdash; Buttons')
@section('content')
<header class="hero is-light" id="home-intro">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('button') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Buttons</h1>
            <h2 class="subtitle">The classic <strong>button</strong>, in different colors, sizes, and states</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="content">
            <p>
                The <strong>button</strong> is an essential element of any design. It's meant to look and behave as an <strong>interactive</strong> element of your page.
            </p>
        </div>

        <div class="bd-snippet bd-is-vertical bd-is-1">
    <div class="bd-snippet-preview">

<a class="button">Button</a>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <div class="content">
      <p>
        The <code>.button</code> class can be used on:
      </p>
      <ul>
        <li>
          <code>&lt;a&gt;</code> anchor links
        </li>
        <li>
          <code>&lt;button&gt;</code> form buttons
        </li>
        <li>
          <code>&lt;input type="submit"&gt;</code> submit inputs
        </li>
        <li>
          <code>&lt;input type="reset"&gt;</code> reset inputs
        </li>
      </ul>
    </div>


  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<a class="button">Anchor</a>
<button class="button">Button</button>
<input class="button" type="submit" value="Submit input">
<input class="button" type="reset" value="Reset input">

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>Anchor<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"button"</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"button"</span> <span class="na">type=</span><span class="s">"reset"</span> <span class="na">value=</span><span class="s">"Reset input"</span><span class="nt">&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <hr style="margin-bottom: 0;">

<h3 id="colors" class="title is-4 is-spaced bd-anchor-title">
  Colors
  <a class="bd-anchor-link" href="#colors">
    #
  </a>
</h3>



  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<a class="button is-white">White</a>
<a class="button is-light">Light</a>
<a class="button is-dark">Dark</a>
<a class="button is-black">Black</a>
<a class="button is-link">Link</a>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-white"</span><span class="nt">&gt;</span>White<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-light"</span><span class="nt">&gt;</span>Light<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-dark"</span><span class="nt">&gt;</span>Dark<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-black"</span><span class="nt">&gt;</span>Black<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>




  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<a class="button is-primary">Primary</a>
<a class="button is-info">Info</a>
<a class="button is-success">Success</a>
<a class="button is-warning">Warning</a>
<a class="button is-danger">Danger</a>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <hr style="margin-bottom: 0;">

<h3 id="sizes" class="title is-4 is-spaced bd-anchor-title">
  Sizes
  <a class="bd-anchor-link" href="#sizes">
    #
  </a>
</h3>



  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<a class="button is-small">Small</a>
<a class="button">Normal</a>
<a class="button is-medium">Medium</a>
<a class="button is-large">Large</a>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-small"</span><span class="nt">&gt;</span>Small<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>Normal<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-medium"</span><span class="nt">&gt;</span>Medium<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-large"</span><span class="nt">&gt;</span>Large<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <hr style="margin-bottom: 0;">

<h3 id="styles" class="title is-4 is-spaced bd-anchor-title">
  Styles
  <a class="bd-anchor-link" href="#styles">
    #
  </a>
</h3>


    <h4 class="subtitle">Outlined</h4>


  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<a class="button is-outlined">Outlined</a>
<a class="button is-primary is-outlined">Outlined</a>
<a class="button is-info is-outlined">Outlined</a>
<a class="button is-success is-outlined">Outlined</a>
<a class="button is-danger is-outlined">Outlined</a>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-outlined"</span><span class="nt">&gt;</span>Outlined<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-outlined"</span><span class="nt">&gt;</span>Outlined<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info is-outlined"</span><span class="nt">&gt;</span>Outlined<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success is-outlined"</span><span class="nt">&gt;</span>Outlined<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger is-outlined"</span><span class="nt">&gt;</span>Outlined<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <h4 class="subtitle">Inverted (the text color becomes the background color, and vice-versa)</h4>

    <div class="columns">
      <div class="column">
        <div class="bd-callout is-primary">

<a class="button is-primary is-inverted">Inverted</a>
<a class="button is-info is-inverted">Inverted</a>
<a class="button is-success is-inverted">Inverted</a>
<a class="button is-danger is-inverted">Inverted</a>

        </div>
      </div>
      <div class="column">
        <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-inverted"</span><span class="nt">&gt;</span>Inverted<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info is-inverted"</span><span class="nt">&gt;</span>Inverted<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success is-inverted"</span><span class="nt">&gt;</span>Inverted<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger is-inverted"</span><span class="nt">&gt;</span>Inverted<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
      </div>
    </div>

    <h4 class="subtitle">Invert Outlined (the invert color becomes the text and border colors)</h4>

    <div class="columns">
      <div class="column">
        <div class="bd-callout is-primary">

<a class="button is-primary is-inverted is-outlined">Invert Outlined</a>
<a class="button is-info is-inverted is-outlined">Invert Outlined</a>
<a class="button is-success is-inverted is-outlined">Invert Outlined</a>
<a class="button is-danger is-inverted is-outlined">Invert Outlined</a>

        </div>
      </div>
      <div class="column">
        <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-inverted is-outlined"</span><span class="nt">&gt;</span>Invert Outlined<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info is-inverted is-outlined"</span><span class="nt">&gt;</span>Invert Outlined<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success is-inverted is-outlined"</span><span class="nt">&gt;</span>Invert Outlined<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger is-inverted is-outlined"</span><span class="nt">&gt;</span>Invert Outlined<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
      </div>
    </div>

    <hr style="margin-bottom: 0;">

<h3 id="states" class="title is-4 is-spaced bd-anchor-title">
  States
  <a class="bd-anchor-link" href="#states">
    #
  </a>
</h3>


    <h4 class="subtitle">Normal</h4>


  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<a class="button">Normal</a>
<a class="button is-primary">Normal</a>
<a class="button is-info">Normal</a>
<a class="button is-success">Normal</a>
<a class="button is-warning">Normal</a>
<a class="button is-danger">Normal</a>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>Normal<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>Normal<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info"</span><span class="nt">&gt;</span>Normal<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success"</span><span class="nt">&gt;</span>Normal<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-warning"</span><span class="nt">&gt;</span>Normal<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger"</span><span class="nt">&gt;</span>Normal<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <h4 class="subtitle">Hover</h4>


  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<a class="button is-hovered">Hover</a>
<a class="button is-primary is-hovered">Hover</a>
<a class="button is-info is-hovered">Hover</a>
<a class="button is-success is-hovered">Hover</a>
<a class="button is-warning is-hovered">Hover</a>
<a class="button is-danger is-hovered">Hover</a>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-hovered"</span><span class="nt">&gt;</span>Hover<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-hovered"</span><span class="nt">&gt;</span>Hover<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info is-hovered"</span><span class="nt">&gt;</span>Hover<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success is-hovered"</span><span class="nt">&gt;</span>Hover<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-warning is-hovered"</span><span class="nt">&gt;</span>Hover<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger is-hovered"</span><span class="nt">&gt;</span>Hover<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <h4 class="subtitle">Focus</h4>


  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<a class="button is-focused">Focus</a>
<a class="button is-primary is-focused">Focus</a>
<a class="button is-info is-focused">Focus</a>
<a class="button is-success is-focused">Focus</a>
<a class="button is-warning is-focused">Focus</a>
<a class="button is-danger is-focused">Focus</a>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-focused"</span><span class="nt">&gt;</span>Focus<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-focused"</span><span class="nt">&gt;</span>Focus<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info is-focused"</span><span class="nt">&gt;</span>Focus<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success is-focused"</span><span class="nt">&gt;</span>Focus<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-warning is-focused"</span><span class="nt">&gt;</span>Focus<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger is-focused"</span><span class="nt">&gt;</span>Focus<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <h4 class="subtitle">Active</h4>


  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<a class="button is-active">Active</a>
<a class="button is-primary is-active">Active</a>
<a class="button is-info is-active">Active</a>
<a class="button is-success is-active">Active</a>
<a class="button is-warning is-active">Active</a>
<a class="button is-danger is-active">Active</a>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-active"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-active"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info is-active"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success is-active"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-warning is-active"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger is-active"</span><span class="nt">&gt;</span>Active<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <h4 class="subtitle">Loading</h4>

    <div class="columns">
      <div class="column">
        <div class="block">

<a class="button is-loading">Loading</a>
<a class="button is-primary is-loading">Loading</a>
<a class="button is-info is-loading">Loading</a>
<a class="button is-success is-loading">Loading</a>
<a class="button is-warning is-loading">Loading</a>
<a class="button is-danger is-loading">Loading</a>

        </div>
        <div class="message is-info">
          <div class="message-body">
            <p>
              Since the loading spinner is implemented using the <code>:after</code> pseudo-element, it is not support by the <code>&lt;input type="submit"&gt;</code> element.
            </p>
          </div>
        </div>
      </div>
      <div class="column">
        <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-loading"</span><span class="nt">&gt;</span>Loading<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary is-loading"</span><span class="nt">&gt;</span>Loading<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info is-loading"</span><span class="nt">&gt;</span>Loading<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success is-loading"</span><span class="nt">&gt;</span>Loading<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-warning is-loading"</span><span class="nt">&gt;</span>Loading<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger is-loading"</span><span class="nt">&gt;</span>Loading<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
      </div>
    </div>

    <h4 id="static-button" class="subtitle">
      Static
    </h4>

    <div class="columns">
      <div class="column">
        <div class="content">
          <p>
            You can create a <strong>non-interactive button</strong> by using the <code>is-static</code> modifier. This is useful to align a text label with an input, for example when using <a href="http://bulma.io/documentation/form/general#form-addons">form addons</a>.
          </p>
        </div>

<span class="button is-static">Static</span>

      </div>
      <div class="column">
        <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"button is-static"</span><span class="nt">&gt;</span>Static<span class="nt">&lt;/span&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
      </div>
    </div>

    <h4 class="subtitle">Disabled</h4>

    <div class="columns">
      <div class="column">
        <div class="block">

<a class="button" title="Disabled button" disabled="">Disabled</a>
<a class="button is-primary" title="Disabled button" disabled="">Disabled</a>
<a class="button is-info" title="Disabled button" disabled="">Disabled</a>
<a class="button is-success" title="Disabled button" disabled="">Disabled</a>
<a class="button is-warning" title="Disabled button" disabled="">Disabled</a>
<a class="button is-danger" title="Disabled button" disabled="">Disabled</a>

        </div>
        <div class="message is-danger">
          <div class="message-body">
            <p>The <code>is-disabled</code> CSS class has been deprecated in favor of the <code>disabled</code> HTML attribute. <a href="https://github.com/jgthms/bulma/issues/276">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="column">
        <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span> <span class="na">title=</span><span class="s">"Disabled button"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span> <span class="na">title=</span><span class="s">"Disabled button"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info"</span> <span class="na">title=</span><span class="s">"Disabled button"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success"</span> <span class="na">title=</span><span class="s">"Disabled button"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-warning"</span> <span class="na">title=</span><span class="s">"Disabled button"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger"</span> <span class="na">title=</span><span class="s">"Disabled button"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Disabled<span class="nt">&lt;/a&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
      </div>
    </div>

    <h4 class="subtitle">With Font Awesome icons</h4>


  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<p class="field">
  <a class="button">
    <span class="icon is-small">
      <i class="fa fa-bold"></i>
    </span>
  </a>
  <a class="button">
    <span class="icon is-small">
      <i class="fa fa-italic"></i>
    </span>
  </a>
  <a class="button">
    <span class="icon is-small">
      <i class="fa fa-underline"></i>
    </span>
  </a>
</p>
<p class="field">
  <a class="button">
    <span class="icon">
      <i class="fa fa-github"></i>
    </span>
    <span>GitHub</span>
  </a>
  <a class="button is-primary">
    <span class="icon">
      <i class="fa fa-twitter"></i>
    </span>
    <span>Twitter</span>
  </a>
  <a class="button is-success">
    <span class="icon is-small">
      <i class="fa fa-check"></i>
    </span>
    <span>Save</span>
  </a>
  <a class="button is-danger is-outlined">
    <span>Delete</span>
    <span class="icon is-small">
      <i class="fa fa-times"></i>
    </span>
  </a>
</p>
<p class="field">
  <a class="button is-small">
    <span class="icon is-small">
      <i class="fa fa-github"></i>
    </span>
    <span>GitHub</span>
  </a>
  <a class="button">
    <span class="icon">
      <i class="fa fa-github"></i>
    </span>
    <span>GitHub</span>
  </a>
  <a class="button is-medium">
    <span class="icon">
      <i class="fa fa-github"></i>
    </span>
    <span>GitHub</span>
  </a>
  <a class="button is-large">
    <span class="icon is-medium">
      <i class="fa fa-github"></i>
    </span>
    <span>GitHub</span>
  </a>
</p>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-bold"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-italic"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-underline"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span&gt;</span>GitHub<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span&gt;</span>Twitter<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-success"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span&gt;</span>Save<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger is-outlined"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span&gt;</span>Delete<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-times"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-small"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span&gt;</span>GitHub<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span&gt;</span>GitHub<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-medium"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span&gt;</span>GitHub<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-large"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-medium"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span&gt;</span>GitHub<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <div class="columns">
      <div class="column">
        <div class="content">
          <p>
            <span class="tag is-success">New!</span>
          </p>
          <p>
            If the button only contains an icon, Bulma will make sure the button remains <strong>square</strong>, no matter the size of the button <em>or</em> of the icon.
          </p>
        </div>

<p class="field">
  <a class="button is-small">
    <span class="icon is-small">
      <i class="fa fa-header"></i>
    </span>
  </a>
</p>
<p class="field">
  <a class="button">
    <span class="icon is-small">
      <i class="fa fa-header"></i>
    </span>
  </a>
  <a class="button">
  <span class="icon">
    <i class="fa fa-header"></i>
  </span>
  </a>
</p>
<p class="field">
  <a class="button is-medium">
    <span class="icon is-small">
      <i class="fa fa-header"></i>
    </span>
  </a>
  <a class="button is-medium">
  <span class="icon">
    <i class="fa fa-header"></i>
  </span>
  </a>
  <a class="button is-medium">
    <span class="icon is-medium">
      <i class="fa fa-header"></i>
    </span>
  </a>
</p>
<p class="field">
  <a class="button is-large">
    <span class="icon is-small">
      <i class="fa fa-header"></i>
    </span>
  </a>
  <a class="button is-large">
  <span class="icon">
    <i class="fa fa-header"></i>
  </span>
  </a>
  <a class="button is-large">
    <span class="icon is-medium">
      <i class="fa fa-header"></i>
    </span>
  </a>
  <a class="button is-large">
    <span class="icon is-large">
      <i class="fa fa-header"></i>
    </span>
  </a>
</p>

      </div>
      <div class="column">
        <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-small"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-header"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-header"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-header"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-medium"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-header"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-medium"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-header"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-medium"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-medium"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-header"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-large"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-header"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-large"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-header"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-large"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-medium"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-header"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-large"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-large"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-header"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/p&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>
      </div>
    </div>

    <hr style="margin-bottom: 0;">

<h3 id="button-group" class="title is-4 is-spaced bd-anchor-title">
  Button group
  <a class="bd-anchor-link" href="#button-group">
    #
  </a>
</h3>


    <div class="content">
      <p>If you want to <strong>group</strong> buttons together on a <strong>single line</strong>, use the <code>is-grouped</code> modifier on the <code>field</code> container:</p>
    </div>


  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<div class="field is-grouped">
  <p class="control">
    <a class="button is-primary">
      Save changes
    </a>
  </p>
  <p class="control">
    <a class="button">
      Cancel
    </a>
  </p>
  <p class="control">
    <a class="button is-danger">
      Delete post
    </a>
  </p>
</div>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-grouped"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>
      Save changes
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      Cancel
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-danger"</span><span class="nt">&gt;</span>
      Delete post
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <hr style="margin-bottom: 0;">

<h3 id="button-addons" class="title is-4 is-spaced bd-anchor-title">
  Button addons
  <a class="bd-anchor-link" href="#button-addons">
    #
  </a>
</h3>


    <div class="content">
      <p>If you want to use buttons as <strong>addons</strong>, use the <code>has-addons</code> modifier on the <code>field</code> container:</p>
    </div>


  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<div class="field has-addons">
  <p class="control">
    <a class="button">
      <span class="icon is-small">
        <i class="fa fa-align-left"></i>
      </span>
      <span>Left</span>
    </a>
  </p>
  <p class="control">
    <a class="button">
      <span class="icon is-small">
        <i class="fa fa-align-center"></i>
      </span>
      <span>Center</span>
    </a>
  </p>
  <p class="control">
    <a class="button">
      <span class="icon is-small">
        <i class="fa fa-align-right"></i>
      </span>
      <span>Right</span>
    </a>
  </p>
</div>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field has-addons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-align-left"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span&gt;</span>Left<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-align-center"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span&gt;</span>Center<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-align-right"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span&gt;</span>Right<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <hr style="margin-bottom: 0;">

<h3 id="button-group-with-addons" class="title is-4 is-spaced bd-anchor-title">
  Button group with addons
  <a class="bd-anchor-link" href="#button-group-with-addons">
    #
  </a>
</h3>


    <div class="content">
      <p>You can group together addons as well:</p>
    </div>


  <div class="
    bd-snippet
    bd-is-vertical

    bd-is-1
    ">
    <div class="bd-snippet-preview">

<div class="field has-addons">
  <p class="control">
    <a class="button">
      <span class="icon is-small">
        <i class="fa fa-bold"></i>
      </span>
      <span>Bold</span>
    </a>
  </p>
  <p class="control">
    <a class="button">
      <span class="icon is-small">
        <i class="fa fa-italic"></i>
      </span>
      <span>Italic</span>
    </a>
  </p>
  <p class="control">
    <a class="button">
      <span class="icon is-small">
        <i class="fa fa-underline"></i>
      </span>
      <span>Underline</span>
    </a>
  </p>
</div>

<div class="field has-addons">
  <p class="control">
    <a class="button">
      <span class="icon is-small">
        <i class="fa fa-align-left"></i>
      </span>
      <span>Left</span>
    </a>
  </p>
  <p class="control">
    <a class="button">
      <span class="icon is-small">
        <i class="fa fa-align-center"></i>
      </span>
      <span>Center</span>
    </a>
  </p>
  <p class="control">
    <a class="button">
      <span class="icon is-small">
        <i class="fa fa-align-right"></i>
      </span>
      <span>Right</span>
    </a>
  </p>
</div>

    </div>
    <div class="bd-snippet-code highlight-full">
      <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field has-addons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-bold"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span&gt;</span>Bold<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-italic"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span&gt;</span>Italic<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-underline"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span&gt;</span>Underline<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field has-addons"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-align-left"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span&gt;</span>Left<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-align-center"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span&gt;</span>Center<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-align-right"</span><span class="nt">&gt;&lt;/i&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;span&gt;</span>Right<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
    </div>
  </div>



    <hr style="margin-bottom: 0;">

<h3 id="variables" class="title is-4 is-spaced bd-anchor-title">
  Variables
  <a class="bd-anchor-link" href="#variables">
    #
  </a>
</h3>


<div class="content">
  <p>
    You can use these variables to <strong>customize</strong> this component. Simply set one or multiple of these variables <em>before</em> importing Bulma. <a href="http://bulma.io/documentation/overview/customize/">Learn how</a>.
  </p>
</div>

<table class="table is-bordered">
  <thead>
    <tr>
      <th>Name</th>
      <th>Default value</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>Name</th>
      <th>Default value</th>
    </tr>
  </tfoot>
  <tbody>

      <tr>
        <td>
          <code>$button-color</code>
        </td>
        <td>
          <code>$grey-darker</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-background-color</code>
        </td>
        <td>
          <code>$white</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-border-color</code>
        </td>
        <td>
          <code>$grey-lighter</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-hover-color</code>
        </td>
        <td>
          <code>$link-hover</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-hover-border-color</code>
        </td>
        <td>
          <code>$link-hover-border</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-focus-color</code>
        </td>
        <td>
          <code>$link-focus</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-focus-border-color</code>
        </td>
        <td>
          <code>$link-focus-border</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-focus-box-shadow-size</code>
        </td>
        <td>
          <code>0 0 0 0.125em</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-focus-box-shadow-color</code>
        </td>
        <td>
          <code>rgba($link, 0.25)</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-active-color</code>
        </td>
        <td>
          <code>$link-active</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-active-border-color</code>
        </td>
        <td>
          <code>$link-active-border</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-link-color</code>
        </td>
        <td>
          <code>$text</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-link-hover-background-color</code>
        </td>
        <td>
          <code>$background</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-link-hover-color</code>
        </td>
        <td>
          <code>$text-strong</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-disabled-background-color</code>
        </td>
        <td>
          <code>$white</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-disabled-border-color</code>
        </td>
        <td>
          <code>$grey-lighter</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-disabled-shadow</code>
        </td>
        <td>
          <code>none</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-disabled-opacity</code>
        </td>
        <td>
          <code>0.5</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-static-color</code>
        </td>
        <td>
          <code>$grey</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-static-background-color</code>
        </td>
        <td>
          <code>$white-ter</code>
        </td>
      </tr>

      <tr>
        <td>
          <code>$button-static-border-color</code>
        </td>
        <td>
          <code>$grey-lighter</code>
        </td>
      </tr>

  </tbody>
</table>


  </div>
</section>
@endsection
