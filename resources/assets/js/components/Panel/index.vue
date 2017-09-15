<template>
    <section>
      <div class="container">
        <h1 class="title">Panel</h1>
        <h2 class="subtitle">A composable <strong>panel</strong>, for compact controls</h2>

        <hr>

        <div class="content">
          <p>
            The <code>panel</code> is container for several types:
          </p>
          <ul>
            <li>
              <code>panel-heading</code> as the first child
            </li>
            <li>
              <code>panel-tabs</code> for navigation
            </li>
            <li>
              <code>panel-block</code> which can contain other elements, like:
              <ul>
                <li><code>control</code></li>
                <li><code>input</code></li>
                <li><code>button</code></li>
                <li><code>panel-icon</code></li>
              </ul>
            </li>
          </ul>
          <p>
            The <code>panel-block</code> can be an anchor tag <code>&lt;a&gt;</code> or a label <code>&lt;label&gt;</code> with a checkbox inside.
          </p>
        </div>


        <div class="columns">
          <div class="column is-4">

    <nav class="panel">
      <p class="panel-heading">
        Repositories
      </p>
      <div class="panel-block">
        <p class="control has-icons-left">
          <input class="input is-small" type="text" placeholder="Search">
          <span class="icon is-small is-left">
            <i class="fa fa-search"></i>
          </span>
        </p>
      </div>
      <p class="panel-tabs">
        <a class="is-active">All</a>
        <a>Public</a>
        <a>Private</a>
        <a>Sources</a>
        <a>Forks</a>
      </p>
      <a class="panel-block is-active">
        <span class="panel-icon">
          <i class="fa fa-book"></i>
        </span>
        bulma
      </a>
      <a class="panel-block">
        <span class="panel-icon">
          <i class="fa fa-book"></i>
        </span>
        marksheet
      </a>
      <a class="panel-block">
        <span class="panel-icon">
          <i class="fa fa-book"></i>
        </span>
        minireset.css
      </a>
      <a class="panel-block">
        <span class="panel-icon">
          <i class="fa fa-book"></i>
        </span>
        jgthms.github.io
      </a>
      <a class="panel-block">
        <span class="panel-icon">
          <i class="fa fa-code-fork"></i>
        </span>
        daniellowtw/infBoard
      </a>
      <a class="panel-block">
        <span class="panel-icon">
          <i class="fa fa-code-fork"></i>
        </span>
        mojs
      </a>
      <label class="panel-block">
        <input type="checkbox">
        Remember me
      </label>
      <div class="panel-block">
        <button class="button is-primary is-outlined is-fullwidth">
          Reset all filters
        </button>
      </div>
    </nav>

          </div>
          <div class="column">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"panel"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"panel-heading"</span><span class="nt">&gt;</span>
        Repositories
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Search"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-search"</span><span class="nt">&gt;&lt;/i&gt;</span>
          <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"panel-tabs"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"is-active"</span><span class="nt">&gt;</span>All<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a&gt;</span>Public<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a&gt;</span>Private<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a&gt;</span>Sources<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a&gt;</span>Forks<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block is-active"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-book"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        bulma
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-book"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        marksheet
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-book"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        minireset.css
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-book"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        jgthms.github.io
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-code-fork"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        daniellowtw/infBoard
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"panel-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"panel-icon"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-code-fork"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        mojs
      <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"panel-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
        Remember me
      <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"panel-block"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button is-primary is-outlined is-fullwidth"</span><span class="nt">&gt;</span>
          Reset all filters
        <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/nav&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
          </div>
        </div>

      </div>
    </section>
</template>
