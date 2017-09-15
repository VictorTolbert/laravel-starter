<template>
    <section>
      <div class="container">
        <h1 class="title">Delete</h1>
        <h2 class="subtitle">
          A versatile <strong>delete</strong> cross
        </h2>

        <hr>

        <div class="content">
          <p>
            The <code>.delete</code> element is a stand-alone element that can be used in different contexts.
          </p>
        </div>


    <div class="columns">
    <div class="column">
      <div class="content">
        <p>
          On its own, it's a simple circle with a cross:
        </p>
      </div>

    <a class="delete"></a>

    </div>
    <div class="column">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/a&gt;</span></code></pre><button class="copy">Copy</button></figure>
    </div>
    </div>


    <div class="columns">
    <div class="column">
      <div class="content">
        <p>
          It comes in <strong>4 sizes</strong>:
        </p>
      </div>

    <a class="delete is-small"></a>
    <a class="delete"></a>
    <a class="delete is-medium"></a>
    <a class="delete is-large"></a>

    </div>
    <div class="column">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"delete is-small"</span><span class="nt">&gt;&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"delete is-medium"</span><span class="nt">&gt;&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"delete is-large"</span><span class="nt">&gt;&lt;/a&gt;</span></code></pre><button class="copy">Copy</button></figure>
    </div>
    </div>


    <div class="columns">
    <div class="column">
      <div class="content">
        <p>
          Bulma uses it for the <a href="/documentation/elements/tag/">tags</a>, the <a href="/documentation/elements/notification/">notifications</a>, and the <a href="/documentation/components/message/">messages</a>:
        </p>
      </div>

    <div class="block">
      <span class="tag is-success">
        Hello World
        <button class="delete is-small"></button>
      </span>
    </div>

    <div class="notification is-danger">
      <button class="delete"></button>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
    </div>

    <article class="message is-info">
      <div class="message-header">
        Info
        <button class="delete"></button>
      </div>
      <div class="message-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>

    </div>
    <div class="column">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"block"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag is-success"</span><span class="nt">&gt;</span>
        Hello World
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete is-small"</span><span class="nt">&gt;&lt;/button&gt;</span>
      <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-danger"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-info"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
        Info
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span></code></pre><button class="copy">Copy</button></figure>
    </div>
    </div>

      </div>
    </section>
</template>
