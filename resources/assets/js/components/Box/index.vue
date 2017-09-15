<template>
    <section>
      <div class="container">
        <h1 class="title">Box</h1>
        <h2 class="subtitle">
          A white <strong>box</strong> to contain other elements
        </h2>

        <hr>

        <div class="columns">
          <div class="column is-4">
            <div class="content">
              <p>
                The <code>.box</code> element is simply a container with a shadow, a border, a radius, and some padding.
                <br>
                For example, you can include a media object:
              </p>
            </div>
          </div>



          <div class="column is-8">

    <div class="box">
      <article class="media">
        <div class="media-left">
          <figure class="image is-64x64">
            <img src="/static/placeholder-128x128.png" alt="Image">
          </figure>
        </div>
        <div class="media-content">
          <div class="content">
            <p>
              <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
              <br>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
            </p>
          </div>
          <nav class="level is-mobile">
            <div class="level-left">
              <a class="level-item">
                <span class="icon is-small"><i class="fa fa-reply"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fa fa-retweet"></i></span>
              </a>
              <a class="level-item">
                <span class="icon is-small"><i class="fa fa-heart"></i></span>
              </a>
            </div>
          </nav>
        </div>
      </article>
    </div>

          </div>
        </div>

    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"box"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"media"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;figure</span> <span class="na">class=</span><span class="s">"image is-64x64"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"/static/placeholder-128x128.png"</span> <span class="na">alt=</span><span class="s">"Image"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/figure&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"media-content"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>
              <span class="nt">&lt;strong&gt;</span>John Smith<span class="nt">&lt;/strong&gt;</span> <span class="nt">&lt;small&gt;</span>@johnsmith<span class="nt">&lt;/small&gt;</span> <span class="nt">&lt;small&gt;</span>31m<span class="nt">&lt;/small&gt;</span>
              <span class="nt">&lt;br&gt;</span>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
            <span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"level is-mobile"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"level-left"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-reply"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
              <span class="nt">&lt;/a&gt;</span>
              <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-retweet"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
              <span class="nt">&lt;/a&gt;</span>
              <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"level-item"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-heart"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
              <span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/nav&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>

      </div>
    </section>
</template>
