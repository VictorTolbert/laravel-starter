<template>
    <section>
      <div class="container">
        <h1 class="title">Nav</h1>
        <h2 class="subtitle">
          A responsive horizontal <strong>nav bar</strong> that can contain links, tabs, buttons, icons, and a logo
        </h2>

        <hr>

        <div class="content">
          <p>
            The <code>nav</code> container can have <strong>3 parts</strong>:
          </p>
          <ul>
            <li><code>nav-left</code></li>
            <li><code>nav-center</code></li>
            <li><code>nav-right</code></li>
          </ul>
          <p>
            Each nav item needs to be wrapped in a <code>nav-item</code> element.
          </p>
          <p>
            For responsiveness, <strong>2 additional</strong> classes are available:
          </p>
          <ul>
            <li><code>nav-toggle</code> for the hamburger menu on mobile</li>
            <li><code>nav-menu</code> for menu that is collapsable on mobile (you can combine it with <code>nav-right</code>)</li>
            <li>toggle <code>is-active</code> on <code>nav-toggle</code> and <code>nav-menu</code> when <code>nav-toggle</code> was clicked</li>
          </ul>
        </div>



    <div class="example is-paddingless">

    <nav class="nav">
      <div class="nav-left">
        <a class="nav-item">
          <img src="/static/videa.png" alt="Videa logo">
        </a>
      </div>

      <div class="nav-center">
        <a class="nav-item">
          <span class="icon">
            <i class="fa fa-github"></i>
          </span>
        </a>
        <a class="nav-item">
          <span class="icon">
            <i class="fa fa-twitter"></i>
          </span>
        </a>
      </div>

      <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
      <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
      <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </span>

      <!-- This "nav-menu" is hidden on mobile -->
      <!-- Add the modifier "is-active" to display it on mobile -->
      <div class="nav-right nav-menu">
        <a class="nav-item">
          Home
        </a>
        <a class="nav-item">
          Documentation
        </a>
        <a class="nav-item">
          Blog
        </a>

        <div class="nav-item">
          <div class="field is-grouped">
            <p class="control">
              <a class="button">
                <span class="icon">
                  <i class="fa fa-twitter"></i>
                </span>
                <span>Tweet</span>
              </a>
            </p>
            <p class="control">
              <a class="button is-primary">
                <span class="icon">
                  <i class="fa fa-download"></i>
                </span>
                <span>Download</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </nav>

    </div>

    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"nav"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-left"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://bulma.io/images/bulma-logo.png"</span> <span class="na">alt=</span><span class="s">"Bulma logo"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-center"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-github"</span><span class="nt">&gt;&lt;/i&gt;</span>
          <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span>
          <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>

      <span class="c">&lt;!-- This "nav-toggle" hamburger menu is only visible on mobile --&gt;</span>
      <span class="c">&lt;!-- You need JavaScript to toggle the "is-active" class on "nav-menu" --&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"nav-toggle"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;span&gt;&lt;/span&gt;</span>
      <span class="nt">&lt;/span&gt;</span>

      <span class="c">&lt;!-- This "nav-menu" is hidden on mobile --&gt;</span>
      <span class="c">&lt;!-- Add the modifier "is-active" to display it on mobile --&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-right nav-menu"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          Home
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          Documentation
        <span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          Blog
        <span class="nt">&lt;/a&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-grouped"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span> <span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;span&gt;</span>Tweet<span class="nt">&lt;/span&gt;</span>
              <span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
                  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-download"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;span&gt;</span>Download<span class="nt">&lt;/span&gt;</span>
              <span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/nav&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>

        <hr>

        <h3 class="title">Modifiers</h3>

        <div class="content">
          <ul>
            <li>the <code>nav</code> container can have a <strong>shadow</strong> by adding the <code>has-shadow</code> modifier</li>
            <li>the <code>nav-item</code> can become <strong>active</strong> by adding the <code>is-active</code> modifier</li>
            <li>the <code>nav-item</code> can become a <strong>tab</strong> by adding the <code>is-tab</code> modifier</li>
          </ul>
          <p>
            To optimise the space on desktop, but also allow the mobile view to be usable, you can <strong>duplicate</strong> nav items in both <code>nav-left</code> and <code>nav-right</code>, and show/hide them with <a href="http://bulma.io/documentation/modifiers/responsive-helpers/">responsive helpers</a>.
          </p>
        </div>
      </div>



    <div class="example is-paddingless">

    <nav class="nav has-shadow">
      <div class="container">
        <div class="nav-left">
          <a class="nav-item">
            <img src="/static/videa.png" alt="Videa logo">
          </a>
          <a class="nav-item is-tab is-hidden-mobile is-active">Home</a>
          <a class="nav-item is-tab is-hidden-mobile">Features</a>
          <a class="nav-item is-tab is-hidden-mobile">Pricing</a>
          <a class="nav-item is-tab is-hidden-mobile">About</a>
        </div>
        <span class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <div class="nav-right nav-menu">
          <a class="nav-item is-tab is-hidden-tablet is-active">Home</a>
          <a class="nav-item is-tab is-hidden-tablet">Features</a>
          <a class="nav-item is-tab is-hidden-tablet">Pricing</a>
          <a class="nav-item is-tab is-hidden-tablet">About</a>
          <a class="nav-item is-tab">
            <figure class="image is-16x16" style="margin-right: 8px;">
              <img src="/static/placeholder-128x128.png">
            </figure>
            Profile
          </a>
          <a class="nav-item is-tab">Log out</a>
        </div>
      </div>
    </nav>

    </div>

    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"nav has-shadow"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://bulma.io/images/bulma-logo.png"</span> <span class="na">alt=</span><span class="s">"Bulma logo"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab is-hidden-mobile is-active"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab is-hidden-mobile"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab is-hidden-mobile"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab is-hidden-mobile"</span><span class="nt">&gt;</span>About<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"nav-toggle"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;span&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;span&gt;&lt;/span&gt;</span>
          <span class="nt">&lt;span&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-right nav-menu"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab is-hidden-tablet is-active"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab is-hidden-tablet"</span><span class="nt">&gt;</span>Features<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab is-hidden-tablet"</span><span class="nt">&gt;</span>Pricing<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab is-hidden-tablet"</span><span class="nt">&gt;</span>About<span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"image is-16x16"</span> <span class="na">style=</span><span class="s">"margin-right: 8px;"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"http://bulma.io/images/jgthms.png"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;/figure&gt;</span>
            Profile
          <span class="nt">&lt;/a&gt;</span>
          <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-item is-tab"</span><span class="nt">&gt;</span>Log out<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/nav&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>

    </section>
</template>
