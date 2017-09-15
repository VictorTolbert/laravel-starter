<template>
    <section>
      <div class="container">
        <h1 class="title">Messages</h1>
        <h2 class="subtitle">
          Colored <strong>message</strong> blocks, to emphasize part of your page
        </h2>

        <hr>


    <div class="columns">
      <div class="column is-half">

    <article class="message">
      <div class="message-header">
        <p>Hello World</p>
        <button class="delete"></button>
      </div>
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-dark">
      <div class="message-header">
        <p>Dark</p>
        <button class="delete"></button>
      </div>
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-primary">
      <div class="message-header">
        <p>Primary</p>
        <button class="delete"></button>
      </div>
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-info">
      <div class="message-header">
        <p>Info</p>
        <button class="delete"></button>
      </div>
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-success">
      <div class="message-header">
        <p>Success</p>
        <button class="delete"></button>
      </div>
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-warning">
      <div class="message-header">
        <p>Warning</p>
        <button class="delete"></button>
      </div>
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-danger">
      <div class="message-header">
        <p><strong>Danger</strong>! <a>Learn more</a></p>
        <button class="delete"></button>
      </div>
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>

      </div>
      <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Hello World<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-dark"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Dark<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-primary"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Primary<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-info"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Info<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-success"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Success<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-warning"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;</span>Warning<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-danger"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-header"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;p&gt;&lt;strong&gt;</span>Danger<span class="nt">&lt;/strong&gt;</span>! <span class="nt">&lt;a&gt;</span>Learn more<span class="nt">&lt;/a&gt;&lt;/p&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
      </div>
    </div>

        <hr>

    <h3 class="subtitle">Message body only</h3>
    <div class="content">
      <p>You can <strong>omit</strong> the message header:</p>
    </div>

    <div class="columns">
      <div class="column is-half">

    <article class="message">
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-dark">
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-primary">
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-info">
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-success">
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-warning">
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>
    <article class="message is-danger">
      <div class="message-body" style="display: block">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      </div>
    </article>

      </div>
      <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-dark"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-primary"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-info"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-success"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-warning"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span>
    <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"message is-danger"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"message-body"</span><span class="nt">&gt;</span>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="nt">&lt;strong&gt;</span>Pellentesque risus mi<span class="nt">&lt;/strong&gt;</span>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <span class="nt">&lt;a&gt;</span>felis venenatis<span class="nt">&lt;/a&gt;</span> efficitur. Aenean ac <span class="nt">&lt;em&gt;</span>eleifend lacus<span class="nt">&lt;/em&gt;</span>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/article&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
      </div>
    </div>

      </div>
    </section>
</template>
