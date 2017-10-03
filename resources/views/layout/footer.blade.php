@extends('layouts.app')
@section('title', 'Layout &mdash; Footer')
@section('content')
<header class="hero is-light">
    <div class="hero-head">
        <div class="container is-fluid p-l-lg">
            {{ Breadcrumbs::render('footer') }}
        </div>
        {{-- <hr class="m-b-sm m-t-xxs"> --}}
    </div>
    <div class="hero-body p-t-sm">
        <div class="container is-fluid">
            <h1 class="title">Footer</h1>
            <h2 class="subtitle">A simple responsive <strong>footer</strong> which can include anything: lists, headings, columns, icons, buttons, etc.</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
        <div class="bd-example">
            <footer class="footer">
                <div class="container is-fluid">
                    <div class="content has-text-centered">
                        <p>
                            <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                            is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
                        </p>
                        <p>
                            <a class="icon" href="https://github.com/jgthms/bulma">
                                <i class="fa fa-github"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"footer"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content has-text-centered"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;strong&gt;</span>Bulma<span class="nt">&lt;/strong&gt;</span> by <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"http://jgthms.com"</span><span class="nt">&gt;</span>Jeremy Thomas<span class="nt">&lt;/a&gt;</span>. The source code is licensed
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"http://opensource.org/licenses/mit-license.php"</span><span class="nt">&gt;</span>MIT<span class="nt">&lt;/a&gt;</span>. The website content
        is licensed <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"http://creativecommons.org/licenses/by-nc-sa/4.0/"</span><span class="nt">&gt;</span>CC BY NC SA 4.0<span class="nt">&lt;/a&gt;</span>.
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"icon"</span> <span class="na">href=</span><span class="s">"https://github.com/jgthms/bulma"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/footer&gt;</span></code></pre><button class="button is-small bd-copy">Copy</button></figure>
  </div>
</section>
@endsection
