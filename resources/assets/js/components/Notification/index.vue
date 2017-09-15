<!-- <template>
    <div>
        <h1 class="title">Notifications</h1>
        <h2 class="subtitle">Bold <b>notification</b> blocks, to alert your users of something</h2>
        <hr>
    </div>
</template> -->
<template>
    <section>
      <div class="container">
        <h1 class="title">Notifications</h1>
        <h2 class="subtitle">
          Bold <strong>notification</strong> blocks, to alert your users of something
        </h2>

        <hr>

        <div class="columns">
          <div class="column">
            <div class="notification">
              <button class="delete"></button>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
            </div>
            <div class="notification is-primary">
              <button class="delete"></button>
              Info lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
            </div>
            <div class="notification is-info">
              <button class="delete"></button>
              Info lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
            </div>
            <div class="notification is-success">
              <button class="delete"></button>
              Success lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
            </div>
            <div class="notification is-warning">
              <button class="delete"></button>
              Warning lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
            </div>
            <div class="notification is-danger">
              <button class="delete"></button>
              Danger lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
            </div>
          </div>
          <div class="column">
    <figure class="highlight" style="box-shadow: none;"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      Lorem ipsum dolor sit amet, consectetur
      adipiscing elit lorem ipsum dolor sit amet,
      consectetur adipiscing elit
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-primary"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      Primar lorem ipsum dolor sit amet, consectetur
      adipiscing elit lorem ipsum dolor sit amet,
      consectetur adipiscing elit
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-info"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      Info lorem ipsum dolor sit amet, consectetur
      adipiscing elit lorem ipsum dolor sit amet,
      consectetur adipiscing elit
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-success"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      Success lorem ipsum dolor sit amet, consectetur
      adipiscing elit lorem ipsum dolor sit amet,
      consectetur adipiscing elit
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-warning"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      Warning lorem ipsum dolor sit amet, consectetur
      adipiscing elit lorem ipsum dolor sit amet,
      consectetur adipiscing elit
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"notification is-danger"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"delete"</span><span class="nt">&gt;&lt;/button&gt;</span>
      Danger lorem ipsum dolor sit amet, consectetur
      adipiscing elit lorem ipsum dolor sit amet,
      consectetur adipiscing elit
    <span class="nt">&lt;/div&gt;</span></code></pre><button class="copy">Copy</button><button class="expand">Expand</button></figure>
          </div>
        </div>
      </div>
    </section>
</template>

<script>
    export default {
        data () {
            return {
                isActive: true,
                props: [
                    {
                        name: '<code>type</code>',
                        description: 'Type (color) of the notification, optional',
                        type: 'String',
                        values: `<code>is-white</code>, <code>is-black</code>, <code>is-light</code>,
                            <code>is-dark</code>, <code>is-primary</code>, <code>is-info</code>, <code>is-success</code>,
                            <code>is-warning</code>, <code>is-danger</code>,
                            and any other colors you've set in the <code>$colors</code> list on Sass`,
                        default: '—'
                    },
                    {
                        name: '<code>active</code>',
                        description: 'Whether notification is active or not, use the <code>.sync</code> modifier to make it two-way binding',
                        type: 'Boolean',
                        values: '—',
                        default: '<code>true</code>'
                    },
                    {
                        name: '<code>closable</code>',
                        description: `Adds an 'X' button that closes the notification`,
                        type: 'Boolean',
                        values: '—',
                        default: '<code>true</code>'
                    },
                    {
                        name: '<code>has-icon</code>',
                        description: 'Adds an icon on the left side depending on the <code>type</code>',
                        type: 'Boolean',
                        values: '—',
                        default: '<code>false</code>'
                    }
                ],
                events: [
                    {
                        name: '<code>close</code>',
                        description: 'Triggers when user closes the notification',
                        parameters: '—'
                    }
                ],
                template: `
                <button class="button block" @click="isActive = true">Show first</button>
                <b-notification :active.sync="isActive">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
                </b-notification>
                <b-notification type="is-success">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
                </b-notification>
                <b-notification type="is-danger">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
                </b-notification>
                <b-notification type="is-info" has-icon>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
                </b-notification>
                <b-notification type="is-success" has-icon>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
                </b-notification>
                <b-notification type="is-warning" has-icon>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
                </b-notification>
                <b-notification type="is-danger" has-icon>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
                </b-notification>`
            }
        }
    }
</script>
