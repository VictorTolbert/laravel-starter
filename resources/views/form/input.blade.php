@extends('layouts.app')
@section('title', 'Form &mdash; Input')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('input') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Input</h1>
            <h2 class="subtitle">The <strong>text input</strong> and its variations</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div id="meta" class="field is-grouped is-grouped-multiline">
            <div class="control">
                <div class="tags has-addons">
                    <span class="tag">Colors</span>

                    <a class="tag is-success" href="#colors">Yes</a>

                </div>
            </div>

            <div class="control">
                <div class="tags has-addons">
                    <span class="tag">Sizes</span>

                    <a class="tag is-success" href="#sizes">Yes</a>

                </div>
            </div>

            <div class="control">
                <div class="tags has-addons">
                    <span class="tag">Variables</span>

                    <a class="tag is-success" href="#variables">Yes</a>

                </div>
            </div>
        </div>


        <hr>

        <div class="content">
            <p>The following <strong>modifiers</strong> are supported:</p>
            <ul>
                <li>the <strong><a href="#colors">color</a></strong></li>
                <li>the <strong><a href="#sizes">size</a></strong></li>
                <li>the <strong><a href="#states">state</a></strong></li>
            </ul>
            <p>The following <a href="http://htmlreference.io/element/input/" target="_blank">type attributes</a> are supported:</p>
            <ul>
                <li><code>type="text"</code></li>
                <li><code>type="password"</code></li>
                <li><code>type="email"</code></li>
                <li><code>type="tel"</code></li>
            </ul>
        </div>

        <div class="columns">
            <div class="column is-half">

                <input class="input" type="text" placeholder="Text input">

            </div>
            <div class="column is-half highlight-full">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Text input"</span><span class="nt">&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>

        <hr style="margin-bottom: 0;">

        <h3 id="colors" class="title is-4 is-spaced bd-anchor-title">
            Colors
            <a class="bd-anchor-link" href="#colors">
    #
  </a>
        </h3>


        <div class="columns">
            <div class="column is-half">

                <div class="field">
                    <div class="control">
                        <input class="input is-primary" type="text" placeholder="Primary input">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input class="input is-info" type="text" placeholder="Info input">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input class="input is-success" type="text" placeholder="Success input">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input class="input is-warning" type="text" placeholder="Warning input">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input class="input is-danger" type="text" placeholder="Danger input">
                    </div>
                </div>

            </div>
            <div class="column is-half highlight-full">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-primary"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Primary input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-info"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Info input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-success"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Success input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-warning"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Warning input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-danger"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Danger input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>

        <hr style="margin-bottom: 0;">

        <h3 id="sizes" class="title is-4 is-spaced bd-anchor-title">
            Sizes
            <a class="bd-anchor-link" href="#sizes">
    #
  </a>
        </h3>


        <div class="columns">
            <div class="column is-half">

                <div class="field">
                    <div class="control">
                        <input class="input is-small" type="text" placeholder="Small input">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input class="input" type="text" placeholder="Normal input">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input class="input is-medium" type="text" placeholder="Medium input">
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input class="input is-large" type="text" placeholder="Large input">
                    </div>
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Small input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Normal input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Medium input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Large input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>
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
        <div class="columns">
            <div class="column is-half">

                <div class="control">
                    <input class="input" type="text" placeholder="Normal input">
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Normal input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>

        <h4 class="subtitle">Hover</h4>
        <div class="columns">
            <div class="column is-half">

                <div class="control">
                    <input class="input is-hovered" type="text" placeholder="Hovered input">
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-hovered"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Hovered input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>

        <h4 class="subtitle">Focus</h4>
        <div class="columns">
            <div class="column is-half">

                <div class="control">
                    <input class="input is-focused" type="text" placeholder="Focused input">
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-focused"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Focused input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>

        <h4 class="subtitle">Loading</h4>
        <div class="columns">
            <div class="column is-half">

                <div class="control is-loading">
                    <input class="input" type="text" placeholder="Loading input">
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-loading"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Loading input"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>


        <div class="columns">
            <div class="column is-half">
                <div class="content">
                    <p>
                        You can resize the loading spinner by appending <code>is-small</code>, <code>is-medium</code> or <code>is-large</code> to the <code>control</code> container.
                    </p>
                </div>

                <div class="field">
                    <div class="control is-small is-loading">
                        <input class="input is-small" type="text" placeholder="Small loading input">
                    </div>
                </div>
                <div class="field">
                    <div class="control is-loading">
                        <input class="input" type="text" placeholder="Normal loading input">
                    </div>
                </div>
                <div class="field">
                    <div class="control is-medium is-loading">
                        <input class="input is-medium" type="text" placeholder="Medium loading input">
                    </div>
                </div>
                <div class="field">
                    <div class="control is-large is-loading">
                        <input class="input is-large" type="text" placeholder="Large loading input">
                    </div>
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-small is-loading"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Small loading input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-loading"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Normal loading input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-medium is-loading"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Medium loading input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control is-large is-loading"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Large loading input"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>
            </div>
        </div>


        <h4 class="subtitle">Disabled</h4>
        <div class="columns">
            <div class="column is-half">

                <div class="control">
                    <input class="input" type="text" placeholder="Disabled input" disabled="">
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled input"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>

        <h4 class="subtitle">Readonly and static inputs</h4>
        <div class="content">
            <p>
                If you use the <code>readonly</code> HTML attribute, the input will look similar to a normal one, but is not editable and has no shadow.
            </p>
        </div>
        <div class="columns">
            <div class="column is-half">

                <div class="control">
                    <input class="input" type="text" value="This text is readonly" readonly="">
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">value=</span><span class="s">"This text is readonly"</span> <span class="na">readonly</span><span class="nt">&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>

        <div class="content">
            <p>
                If you <em>also</em> append the <code>is-static</code> modifier, it removes the background, border, shadow, and horizontal padding, while maintaining the <strong>vertical spacing</strong> so you can easily align the input in any context, like a horizontal form.
            </p>
        </div>

        <div class="bd-example">

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">From</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input is-static" type="email" value="me@example.com" readonly="">
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">To</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input" type="email" placeholder="Recipient email">
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <figure class="highlight">
            <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label is-normal"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>From<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-static"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">value=</span><span class="s">"me@example.com"</span> <span class="na">readonly</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label is-normal"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>To<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Recipient email"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button><button class="button is-small bd-expand">Expand</button></figure>

        <!-- Font Awesome Icons -->
        <hr style="margin-bottom: 0;">

        <h3 id="with-font-awesome-icons" class="title is-4 is-spaced bd-anchor-title">
            With Font Awesome icons
            <a class="bd-anchor-link" href="#with-font-awesome-icons">
    #
  </a>
        </h3>


        <div class="content">
            <p>You can append one of 2 <strong>modifiers</strong> on a control:</p>
            <ul>
                <li>
                    <code>has-icons-left</code>
                </li>
                <li>
                    and/or <code>has-icons-right</code>
                </li>
            </ul>
            <p>You also need to add a modifier on the <strong>icon</strong>:</p>
            <ul>
                <li>
                    <code>icon is-left</code> if <code>has-icons-left</code> is used
                </li>
                <li>
                    <code>icon is-right</code> if <code>has-icons-right</code> is used
                </li>
            </ul>
            <p>The size of the <strong>input</strong> will define the size of the icon container.</p>
        </div>
        <div class="columns">
            <div class="column is-half">

                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="Email">
                        <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
                        <span class="icon is-small is-right">
      <i class="fa fa-check"></i>
    </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Password">
                        <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
                    </p>
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-right"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">placeholder=</span><span class="s">"Password"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-lock"</span><span class="nt">&gt;&lt;/i&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>

        <div class="columns">
            <div class="column is-half">
                <div class="content">
                    <p>
                        If the control contains an icon, Bulma will make sure the icon remains <strong>centered</strong>, no matter the size of the input <em>or</em> of the icon.
                    </p>
                </div>

                <div class="control has-icons-left has-icons-right">
                    <input class="input is-small" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
    <i class="fa fa-envelope"></i>
  </span>
                    <span class="icon is-small is-right">
    <i class="fa fa-check"></i>
  </span>
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>

        <div class="columns">
            <div class="column is-half">

                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
    <i class="fa fa-envelope"></i>
  </span>
                    <span class="icon is-small is-right">
    <i class="fa fa-check"></i>
  </span>
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>

        <div class="columns">
            <div class="column is-half">

                <div class="control has-icons-left has-icons-right">
                    <input class="input is-medium" type="email" placeholder="Email">
                    <span class="icon is-left">
    <i class="fa fa-envelope"></i>
  </span>
                    <span class="icon is-right">
    <i class="fa fa-check"></i>
  </span>
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
            </div>
        </div>

        <div class="columns">
            <div class="column is-half">

                <div class="control has-icons-left has-icons-right">
                    <input class="input is-large" type="email" placeholder="Email">
                    <span class="icon is-medium is-left">
    <i class="fa fa-envelope"></i>
  </span>
                    <span class="icon is-medium is-right">
    <i class="fa fa-check"></i>
  </span>
                </div>

            </div>
            <div class="column is-half">
                <figure class="highlight">
                    <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-medium is-left"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-medium is-right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
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
                You can use these variables to <strong>customize</strong> this element. Simply set one or multiple of these variables <em>before</em> importing Bulma. <a href="http://bulma.io/documentation/overview/customize/">Learn how</a>.
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
                        <code>$input-color</code>
                    </td>
                    <td>
                        <code>$grey-darker</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-background-color</code>
                    </td>
                    <td>
                        <code>$white</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-border-color</code>
                    </td>
                    <td>
                        <code>$grey-lighter</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-shadow</code>
                    </td>
                    <td>
                        <code>inset 0 1px 2px rgba($black, 0.1)</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-hover-color</code>
                    </td>
                    <td>
                        <code>$grey-darker</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-hover-border-color</code>
                    </td>
                    <td>
                        <code>$grey-light</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-focus-color</code>
                    </td>
                    <td>
                        <code>$grey-darker</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-focus-border-color</code>
                    </td>
                    <td>
                        <code>$link</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-disabled-color</code>
                    </td>
                    <td>
                        <code>$text-light</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-disabled-background-color</code>
                    </td>
                    <td>
                        <code>$background</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-disabled-border-color</code>
                    </td>
                    <td>
                        <code>$background</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-arrow</code>
                    </td>
                    <td>
                        <code>$link</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-icon-color</code>
                    </td>
                    <td>
                        <code>$grey-lighter</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-icon-active-color</code>
                    </td>
                    <td>
                        <code>$grey</code>
                    </td>
                </tr>

                <tr>
                    <td>
                        <code>$input-radius</code>
                    </td>
                    <td>
                        <code>$radius</code>
                    </td>
                </tr>

            </tbody>
        </table>


    </div>
</section>
@endsection
