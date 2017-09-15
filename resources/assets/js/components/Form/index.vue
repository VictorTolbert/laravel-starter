<template>
    <section>
      <div class="container">
        <h1 class="title">Form controls</h1>
        <h2 class="subtitle">
          All generic <strong>form controls</strong>, designed for consistency
        </h2>

        <hr>

        <div class="content">
          <p>The following form controls <strong>classes</strong> are supported:</p>
          <ul>
            <li><code>.label</code></li>
            <li><code>.input</code></li>
            <li><code>.textarea</code></li>
            <li><code>.select</code></li>
            <li><code>.checkbox</code></li>
            <li><code>.radio</code></li>
            <li><code>.button</code></li>
            <li><code>.help</code></li>
          </ul>
          <p>Each of them should be wrapped in a <code>.control</code> container.<br>
          When combining several controls in a <strong>form</strong>, use the <code>.field</code> class as a <strong>container</strong>, to keep the spacing consistent.</p>
        </div>



        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <label class="label">Name</label>
      <p class="control">
        <input class="input" type="text" placeholder="Text input">
      </p>
    </div>

    <div class="field">
      <label class="label">Username</label>
      <p class="control has-icons-left has-icons-right">
        <input class="input is-success" type="text" placeholder="Text input" value="bulma">
        <span class="icon is-small is-left">
          <i class="fa fa-user"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
      <p class="help is-success">This username is available</p>
    </div>

    <div class="field">
      <label class="label">Email</label>
      <p class="control has-icons-left has-icons-right">
        <input class="input is-danger" type="text" placeholder="Email input" value="hello@">
        <span class="icon is-small is-left">
          <i class="fa fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fa fa-warning"></i>
        </span>
      </p>
      <p class="help is-danger">This email is invalid</p>
    </div>

    <div class="field">
      <label class="label">Subject</label>
      <p class="control">
        <span class="select">
          <select>
            <option>Select dropdown</option>
            <option>With options</option>
          </select>
        </span>
      </p>
    </div>

    <div class="field">
      <label class="label">Message</label>
      <p class="control">
        <textarea class="textarea" placeholder="Textarea"></textarea>
      </p>
    </div>

    <div class="field">
      <p class="control">
        <label class="checkbox">
          <input type="checkbox">
          I agree to the <a href="#">terms and conditions</a>
        </label>
      </p>
    </div>

    <div class="field">
      <p class="control">
        <label class="radio">
          <input type="radio" name="question">
          Yes
        </label>
        <label class="radio">
          <input type="radio" name="question">
          No
        </label>
      </p>
    </div>

    <div class="field is-grouped">
      <p class="control">
        <button class="button is-primary">Submit</button>
      </p>
      <p class="control">
        <button class="button is-link">Cancel</button>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Name<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Text input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Username<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-success"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Text input"</span> <span class="na">value=</span><span class="s">"bulma"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-user"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"help is-success"</span><span class="nt">&gt;</span>This username is available<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Email<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-danger"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Email input"</span> <span class="na">value=</span><span class="s">"hello@"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-warning"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"help is-danger"</span><span class="nt">&gt;</span>This email is invalid<span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Subject<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select&gt;</span>
            <span class="nt">&lt;option&gt;</span>Select dropdown<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>With options<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Message<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Textarea"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
          I agree to the <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>terms and conditions<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span><span class="nt">&gt;</span>
          Yes
        <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span><span class="nt">&gt;</span>
          No
        <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-grouped"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button is-link"</span><span class="nt">&gt;</span>Cancel<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
          </div>
        </div>

        <hr>

        <h3 class="title">Colors</h3>

        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <p class="control">
        <input class="input is-primary" type="text" placeholder="Primary input">
      </p>
    </div>
    <div class="field">
      <p class="control">
        <input class="input is-info" type="text" placeholder="Info input">
      </p>
    </div>
    <div class="field">
      <p class="control">
        <input class="input is-success" type="text" placeholder="Success input">
      </p>
    </div>
    <div class="field">
      <p class="control">
        <input class="input is-warning" type="text" placeholder="Warning input">
      </p>
    </div>
    <div class="field">
      <p class="control">
        <input class="input is-danger" type="text" placeholder="Danger input">
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-primary"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Primary input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-info"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Info input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-success"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Success input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-warning"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Warning input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-danger"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Danger input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
          </div>
        </div>

        <hr>


        <h3 class="title">Sizes</h3>
        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <p class="control">
        <input class="input is-small" type="text" placeholder="Small input">
      </p>
    </div>
    <div class="field">
      <p class="control">
        <input class="input" type="text" placeholder="Normal input">
      </p>
    </div>
    <div class="field">
      <p class="control">
        <input class="input is-medium" type="text" placeholder="Medium input">
      </p>
    </div>
    <div class="field">
      <p class="control">
        <input class="input is-large" type="text" placeholder="Large input">
      </p>
    </div>
    <div class="field">
      <p class="control">
        <span class="select is-small">
          <select>
            <option>Select dropdown</option>
            <option>With options</option>
          </select>
        </span>
      </p>
    </div>
    <div class="field">
      <p class="control">
        <span class="select">
          <select>
            <option>Select dropdown</option>
            <option>With options</option>
          </select>
        </span>
      </p>
    </div>
    <div class="field">
      <p class="control">
        <span class="select is-medium">
          <select>
            <option>Select dropdown</option>
            <option>With options</option>
          </select>
        </span>
      </p>
    </div>
    <div class="field">
      <p class="control">
        <span class="select is-large">
          <select>
            <option>Select dropdown</option>
            <option>With options</option>
          </select>
        </span>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Small input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Normal input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Medium input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Large input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select is-small"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select&gt;</span>
            <span class="nt">&lt;option&gt;</span>Select dropdown<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>With options<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select&gt;</span>
            <span class="nt">&lt;option&gt;</span>Select dropdown<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>With options<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select is-medium"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select&gt;</span>
            <span class="nt">&lt;option&gt;</span>Select dropdown<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>With options<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select is-large"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select&gt;</span>
            <span class="nt">&lt;option&gt;</span>Select dropdown<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>With options<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
          </div>
        </div>

        <hr>

        <h3 class="title">States</h3>
        <h4 class="subtitle">Normal</h4>

        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <p class="control">
        <input class="input" type="text" placeholder="Normal input">
      </p>
    </div>
    <div class="field">
      <p class="control">
        <textarea class="textarea" placeholder="Normal textarea"></textarea>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Normal input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Normal textarea"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
          </div>
        </div>

        <h4 class="subtitle">Hover</h4>

        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <p class="control">
        <input class="input is-hovered" type="text" placeholder="Hovered input">
      </p>
    </div>
    <div class="field">
      <p class="control">
        <textarea class="textarea is-hovered" placeholder="Hovered textarea"></textarea>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-hovered"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Hovered input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea is-hovered"</span> <span class="na">placeholder=</span><span class="s">"Hovered textarea"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
          </div>
        </div>

        <h4 class="subtitle">Focus</h4>

        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <p class="control">
        <input class="input is-focused" type="text" placeholder="Focused input">
      </p>
    </div>
    <div class="field">
      <p class="control">
        <textarea class="textarea is-focused" placeholder="Focused textarea"></textarea>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-focused"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Focused input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea is-focused"</span> <span class="na">placeholder=</span><span class="s">"Focused textarea"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
          </div>
        </div>

        <h4 class="subtitle">Loading</h4>

        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <p class="control is-loading">
        <input class="input" type="text" placeholder="Loading input">
      </p>
    </div>
    <div class="field">
      <div class="control">
        <div class="select is-loading">
          <select>
            <option>Loading dropdown</option>
          </select>
        </div>
      </div>
    </div>
    <div class="field">
      <p class="control is-loading">
        <textarea class="textarea" placeholder="Loading textarea"></textarea>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-loading"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Loading input"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"select is-loading"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select&gt;</span>
            <span class="nt">&lt;option&gt;</span>Loading dropdown<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-loading"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Loading textarea"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
          </div>
        </div>

        <h4 class="subtitle">Disabled</h4>

        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <p class="control">
        <input class="input" type="text" placeholder="Disabled input" disabled="">
      </p>
    </div>
    <div class="field">
      <div class="control">
        <div class="select is-disabled">
          <select disabled="">
            <option>Disabled dropdown</option>
          </select>
        </div>
      </div>
    </div>
    <div class="field">
      <p class="control">
        <textarea class="textarea" placeholder="Disabled textarea" disabled=""></textarea>
      </p>
    </div>
    <div class="field">
      <p class="control">
        <label class="checkbox" disabled="">
          <input type="checkbox" disabled="">
          Remember me
        </label>
      </p>
    </div>
    <div class="field">
      <p class="control">
        <label class="radio" disabled="">
          <input type="radio" name="question" disabled="">
          Yes
        </label>
        <label class="radio" disabled="">
          <input type="radio" name="question" disabled="">
          No
        </label>
      </p>
    </div>
    <div class="field is-grouped">
      <p class="control">
        <button class="button is-primary" disabled="">Submit</button>
      </p>
      <p class="control">
        <button class="button" disabled="">Cancel</button>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Disabled input"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"select is-disabled"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select</span> <span class="na">disabled</span><span class="nt">&gt;</span>
            <span class="nt">&lt;option&gt;</span>Disabled dropdown<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Disabled textarea"</span> <span class="na">disabled</span><span class="nt">&gt;&lt;/textarea&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
          Remember me
        <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
          Yes
        <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
          <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"question"</span> <span class="na">disabled</span><span class="nt">&gt;</span>
          No
        <span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-grouped"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button is-primary"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Submit<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button"</span> <span class="na">disabled</span><span class="nt">&gt;</span>Cancel<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
          </div>
        </div>

        <!-- Font Awesome Icons -->
        <hr>

        <h3 class="title">With icons</h3>
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
      <p class="control has-icons-left">
        <input class="input" type="email" placeholder="Email">
        <span class="icon is-small is-left">
          <i class="fa fa-envelope"></i>
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
    <div class="field">
      <p class="control">
        <button class="button is-success">
          Login
        </button>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
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
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button is-success"</span><span class="nt">&gt;</span>
          Login
        <span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
          </div>
        </div>


        <div class="columns">
          <div class="column is-half">

        <div class="content">
          <p>
            <span class="tag is-success">New!</span>
            <span class="tag is-info">0.4.2</span>
          </p>
          <p>
            You can now append icons to <strong>select dropdowns</strong> as well.
          </p>
        </div>

    <div class="field">
      <p class="control has-icons-left">
        <span class="select">
          <select>
            <option selected="">Country</option>
            <option>Select dropdown</option>
            <option>With options</option>
          </select>
        </span>
        <span class="icon is-small is-left">
          <i class="fa fa-globe"></i>
        </span>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">selected</span><span class="nt">&gt;</span>Country<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>Select dropdown<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>With options<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-globe"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
          </div>
        </div>

        <div class="content">
          <p>
            If the control contains an icon, Bulma will make sure the icon remains <strong>centered</strong>, no matter the size of the input <em>or</em> of the icon.
          </p>
        </div>








        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <label class="label is-small">Small input</label>
      <p class="control has-icons-left has-icons-right">
        <input class="input is-small" type="email" placeholder="Email">
        <span class="icon is-small is-left">
          <i class="fa fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label is-small"</span><span class="nt">&gt;</span>Small input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
          </div>
        </div>

        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <label class="label">Normal input</label>
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
      <p class="control has-icons-left has-icons-right">
        <input class="input" type="email" placeholder="Email">
        <span class="icon is-left">
          <i class="fa fa-envelope"></i>
        </span>
        <span class="icon is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Normal input<span class="nt">&lt;/label&gt;</span>
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
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
          </div>
        </div>

        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <label class="label is-medium">Medium input</label>
      <p class="control has-icons-left has-icons-right">
        <input class="input is-medium" type="email" placeholder="Email">
        <span class="icon is-small is-left">
          <i class="fa fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
    </div>

    <div class="field">
      <p class="control has-icons-left has-icons-right">
        <input class="input is-medium" type="email" placeholder="Email">
        <span class="icon is-left">
          <i class="fa fa-envelope"></i>
        </span>
        <span class="icon is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
    </div>

    <div class="field">
      <p class="control has-icons-left has-icons-right">
        <input class="input is-medium" type="email" placeholder="Email">
        <span class="icon is-medium is-left">
          <i class="fa fa-envelope"></i>
        </span>
        <span class="icon is-medium is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label is-medium"</span><span class="nt">&gt;</span>Medium input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-medium is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-medium is-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
          </div>
        </div>

        <div class="columns">
          <div class="column is-half">

    <div class="field">
      <label class="label is-large">Large input</label>
      <p class="control has-icons-left has-icons-right">
        <input class="input is-large" type="email" placeholder="Email">
        <span class="icon is-small is-left">
          <i class="fa fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
    </div>

    <div class="field">
      <p class="control has-icons-left has-icons-right">
        <input class="input is-large" type="email" placeholder="Email">
        <span class="icon is-left">
          <i class="fa fa-envelope"></i>
        </span>
        <span class="icon is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
    </div>

    <div class="field">
      <p class="control has-icons-left has-icons-right">
        <input class="input is-large" type="email" placeholder="Email">
        <span class="icon is-medium is-left">
          <i class="fa fa-envelope"></i>
        </span>
        <span class="icon is-medium is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
    </div>

    <div class="field">
      <p class="control has-icons-left has-icons-right">
        <input class="input is-large" type="email" placeholder="Email">
        <span class="icon is-large is-left">
          <i class="fa fa-envelope"></i>
        </span>
        <span class="icon is-large is-right">
          <i class="fa fa-check"></i>
        </span>
      </p>
    </div>

          </div>
          <div class="column is-half">
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label is-large"</span><span class="nt">&gt;</span>Large input<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-medium is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-medium is-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-large is-left"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-large is-right"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
          </div>
        </div>

        <hr>

        <h3 id="form-addons" class="title">Form addons</h3>
        <div class="content">
          <p>If you want to <strong>attach</strong> controls together, use the <code>has-addons</code> modifier on the <code>control</code> container:</p>
        </div>

        <div class="example">

    <div class="field has-addons">
      <p class="control">
        <input class="input" type="text" placeholder="Find a repository">
      </p>
      <p class="control">
        <a class="button is-info">
          Search
        </a>
      </p>
    </div>

        </div>
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field has-addons"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Find a repository"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info"</span><span class="nt">&gt;</span>
          Search
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>
        <div class="content">
          <p>You can attach inputs, buttons, and dropdowns <strong>only</strong>.</p>
        </div>

        <p style="margin-bottom: 0.5rem;">
          <span class="tag is-success">New!</span>
          <span class="tag is-info">0.4.2</span>
        </p>

        <div class="content">
          <p>It can be useful to append a <a href="http://bulma.io/documentation/elements/button#static-button">static button</a>.</p>
        </div>


        <div class="example">

    <div class="field has-addons">
      <p class="control">
        <input class="input" type="text" placeholder="Your email">
      </p>
      <p class="control">
        <a class="button is-static">
          @gmail.com
        </a>
      </p>
    </div>

        </div>
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field has-addons"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Your email"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-static"</span><span class="nt">&gt;</span>
          @gmail.com
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

        <div class="content">
          <p>Use the <code>is-expanded</code> modifier on the element you want to fill up the remaining space (in this case, the input):</p>
        </div>

        <div class="example">

    <div class="field has-addons">
      <p class="control">
        <span class="select">
          <select>
            <option>$</option>
            <option>£</option>
            <option>€</option>
          </select>
        </span>
      </p>
      <p class="control">
        <input class="input" type="text" placeholder="Amount of money">
      </p>
      <p class="control">
        <a class="button">
          Transfer
        </a>
      </p>
    </div>

    <div class="field has-addons">
      <p class="control">
        <span class="select">
          <select>
            <option>$</option>
            <option>£</option>
            <option>€</option>
          </select>
        </span>
      </p>
      <p class="control is-expanded">
        <input class="input" type="text" placeholder="Amount of money">
      </p>
      <p class="control">
        <a class="button">
          Transfer
        </a>
      </p>
    </div>

        </div>
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field has-addons"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select&gt;</span>
            <span class="nt">&lt;option&gt;</span>$<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>£<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>€<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Amount of money"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
          Transfer
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field has-addons"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select&gt;</span>
            <span class="nt">&lt;option&gt;</span>$<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>£<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>€<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-expanded"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Amount of money"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button"</span><span class="nt">&gt;</span>
          Transfer
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>

        <div class="content">
          <p>If you want a full width select dropdown, pair <code>control is-expanded</code> with <code>select is-fullwidth</code>.</p>
        </div>

    <div class="example">

    <div class="field has-addons">
      <p class="control is-expanded">
        <span class="select is-fullwidth">
          <select name="country">
            <option value="Argentina">Argentina</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Brazil">Brazil</option>
            <option value="Chile">Chile</option>
            <option value="Colombia">Colombia</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Guyana">Guyana</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Suriname">Suriname</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Venezuela">Venezuela</option>
          </select>
        </span>
      </p>
      <p class="control">
        <button type="submit" class="button is-primary">Choose</button>
      </p>
    </div>

    </div>
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field has-addons"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-expanded"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select is-fullwidth"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select</span> <span class="na">name=</span><span class="s">"country"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Argentina"</span><span class="nt">&gt;</span>Argentina<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Bolivia"</span><span class="nt">&gt;</span>Bolivia<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Brazil"</span><span class="nt">&gt;</span>Brazil<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Chile"</span><span class="nt">&gt;</span>Chile<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Colombia"</span><span class="nt">&gt;</span>Colombia<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Ecuador"</span><span class="nt">&gt;</span>Ecuador<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Guyana"</span><span class="nt">&gt;</span>Guyana<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Paraguay"</span><span class="nt">&gt;</span>Paraguay<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Peru"</span><span class="nt">&gt;</span>Peru<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Suriname"</span><span class="nt">&gt;</span>Suriname<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Uruguay"</span><span class="nt">&gt;</span>Uruguay<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"Venezuela"</span><span class="nt">&gt;</span>Venezuela<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>Choose<span class="nt">&lt;/button&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

        <div class="content">
          <p>Use the <code>has-addons-centered</code> or the <code>has-addons-right</code> modifers to alter the <strong>alignment</strong>.</p>
        </div>

    <div class="example">

    <div class="field has-addons has-addons-centered">
      <p class="control">
        <span class="select">
          <select>
            <option>$</option>
            <option>£</option>
            <option>€</option>
          </select>
        </span>
      </p>
      <p class="control">
        <input class="input" type="text" placeholder="Amount of money">
      </p>
      <p class="control">
        <a class="button is-primary">
          Transfer
        </a>
      </p>
    </div>

    </div>
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field has-addons has-addons-centered"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select&gt;</span>
            <span class="nt">&lt;option&gt;</span>$<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>£<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>€<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Amount of money"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>
          Transfer
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

    <div class="example">

    <div class="field has-addons has-addons-right">
      <p class="control">
        <span class="select">
          <select>
            <option>$</option>
            <option>£</option>
            <option>€</option>
          </select>
        </span>
      </p>
      <p class="control">
        <input class="input" type="text" placeholder="Amount of money">
      </p>
      <p class="control">
        <a class="button is-primary">
          Transfer
        </a>
      </p>
    </div>

    </div>
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field has-addons has-addons-right"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"select"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;select&gt;</span>
            <span class="nt">&lt;option&gt;</span>$<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>£<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;option&gt;</span>€<span class="nt">&lt;/option&gt;</span>
          <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Amount of money"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>
          Transfer
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

        <hr>

        <h3 class="title">Form group</h3>
        <div class="content">
          <p>
            If you want to <strong>group</strong> controls together, use the <code>is-grouped</code> modifier on the <code>control</code> container.
            <br>
            Use the <code>is-grouped-centered</code> or the <code>is-grouped-right</code> modifers to alter the <strong>alignment</strong>.
          </p>
          <p>
            Add the <code>is-expanded</code> modifier on the control element you want to <strong>fill up the remaining space</strong>.
          </p>
        </div>

        <div class="example">

    <div class="field is-grouped">
      <p class="control is-expanded">
        <input class="input" type="text" placeholder="Find a repository">
      </p>
      <p class="control">
        <a class="button is-info">
          Search
        </a>
      </p>
    </div>

        </div>
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-grouped"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-expanded"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Find a repository"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"button is-info"</span><span class="nt">&gt;</span>
          Search
        <span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button></figure>

        <hr>

        <h3 class="title">Horizontal form</h3>
        <div class="content">
          <p>If you want a <strong>horizontal</strong> form control, use the <code>is-horizontal</code> modifier on the <code>control</code> container, in which you include:</p>
          <ul>
            <li>
              <code>field-label</code> for the side label
            </li>
            <li>
              <code>field-body</code> for the input/select/textarea container
            </li>
          </ul>
          <p>You can of course use <code>is-grouped</code> or <code>has-addons</code> for the child elements.</p>
        </div>

    <div class="example">

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">From</label>
      </div>
      <div class="field-body">
        <div class="field is-grouped">
          <p class="control is-expanded has-icons-left">
            <input class="input" type="text" placeholder="Name">
            <span class="icon is-small is-left">
              <i class="fa fa-user"></i>
            </span>
          </p>
        </div>
        <div class="field">
          <p class="control is-expanded has-icons-left has-icons-right">
            <input class="input is-success" type="email" placeholder="Email" value="alex@smith.com">
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fa fa-check"></i>
            </span>
          </p>
          <p class="help is-success">This email is correct</p>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Department</label>
      </div>
      <div class="field-body">
        <div class="field is-narrow">
          <div class="control">
            <div class="select is-fullwidth">
              <select>
                <option>Business development</option>
                <option>Marketing</option>
                <option>Sales</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label">
        <label class="label">Already a member?</label>
      </div>
      <div class="field-body">
        <div class="field is-narrow">
          <div class="control">
            <label class="radio">
              <input type="radio" name="member">
              Yes
            </label>
            <label class="radio">
              <input type="radio" name="member">
              No
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Subject</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input class="input is-danger" type="text" placeholder="e.g. Partnership opportunity">
          </div>
          <p class="help is-danger">
            This field is required
          </p>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Question</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label">
        <!-- Left empty for spacing -->
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <button class="button is-primary">
              Send message
            </button>
          </div>
        </div>
      </div>
    </div>

    </div>
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label is-normal"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>From<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-grouped"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-expanded has-icons-left"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Name"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-user"</span><span class="nt">&gt;&lt;/i&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
          <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"control is-expanded has-icons-left has-icons-right"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-success"</span> <span class="na">type=</span><span class="s">"email"</span> <span class="na">placeholder=</span><span class="s">"Email"</span> <span class="na">value=</span><span class="s">"alex@smith.com"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-left"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon is-small is-right"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-check"</span><span class="nt">&gt;&lt;/i&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
          <span class="nt">&lt;/p&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"help is-success"</span><span class="nt">&gt;</span>This email is correct<span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label is-normal"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Department<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-narrow"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"select is-fullwidth"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;select&gt;</span>
                <span class="nt">&lt;option&gt;</span>Business development<span class="nt">&lt;/option&gt;</span>
                <span class="nt">&lt;option&gt;</span>Marketing<span class="nt">&lt;/option&gt;</span>
                <span class="nt">&lt;option&gt;</span>Sales<span class="nt">&lt;/option&gt;</span>
              <span class="nt">&lt;/select&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Already a member?<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-narrow"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"member"</span><span class="nt">&gt;</span>
              Yes
            <span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"member"</span><span class="nt">&gt;</span>
              No
            <span class="nt">&lt;/label&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label is-normal"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Subject<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-danger"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"e.g. Partnership opportunity"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
          <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"help is-danger"</span><span class="nt">&gt;</span>
            This field is required
          <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label is-normal"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Question<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"textarea"</span> <span class="na">placeholder=</span><span class="s">"Explain how we can help you"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- Left empty for spacing --&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"button is-primary"</span><span class="nt">&gt;</span>
              Send message
            <span class="nt">&lt;/button&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>

    <div class="content">
      <p>
        <span class="tag is-success">New!</span>
        <br>
        To preserve the <strong>vertical alignment</strong> of labels with each type and size of control, the <code>.field-label</code> comes with <strong>4 size modifiers</strong>:
      </p>
      <ul>
        <li>
          <code>.is-small</code>
        </li>
        <li>
          <code>.is-normal</code> for any <code>.input</code> or <code>.button</code>
        </li>
        <li>
          <code>.is-medium</code>
        </li>
        <li>
          <code>.is-large</code>
        </li>
      </ul>
    </div>


    <div class="example">

    <div class="field is-horizontal">
      <div class="field-label">
        <label class="label">No padding</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <label class="checkbox">
              <input type="checkbox">
              Checkbox
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-small">
        <label class="label">Small padding</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input class="input is-small" type="text" placeholder="Small sized input">
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Normal label</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input class="input" type="text" placeholder="Normal sized input">
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-medium">
        <label class="label">Medium label</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input class="input is-medium" type="text" placeholder="Medium sized input">
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-large">
        <label class="label">Large label</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input class="input is-large" type="text" placeholder="Large sized input">
          </div>
        </div>
      </div>
    </div>

    </div>
    <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>No padding<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
              <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
              Checkbox
            <span class="nt">&lt;/label&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label is-small"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Small padding<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-small"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Small sized input"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label is-normal"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Normal label<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Normal sized input"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label is-medium"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Medium label<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-medium"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Medium sized input"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field is-horizontal"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-label is-large"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Large label<span class="nt">&lt;/label&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"field"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"control"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"input is-large"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">placeholder=</span><span class="s">"Large sized input"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
      </div>
    </section>
</template>
